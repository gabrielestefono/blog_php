<?php

namespace App\Classes\Base\Admin\Traits;

use stdClass;
use App\Mock\MockPosts;
use App\Mock\MockAuthors;
use App\Mock\MockNewsletter;
use App\Mock\MockCategories;
use App\Controllers\Controller;
use App\Classes\Base\Admin\Classes\AdminBase;
use App\Errors\DatabaseTableNotFoundException;

trait GeneralAdmin
{
    private function verifyIfDatabaseTableExists(string $name): bool
    {
        return true;
    }

    private function verifyIfTableDataExists()
    {
        $databaseTableName = $this->databaseTableName();
        if (!$this->verifyIfDatabaseTableExists($databaseTableName)) {
            throw new DatabaseTableNotFoundException("Tabela $databaseTableName não encontrada.");
        }
    }

    private function getDatas()
    {
        $data = null;
        switch ($this->getTitle()) {
            case 'Posts':
                $data = MockPosts::listPosts();
                break;
            case 'Autores':
                $data = MockAuthors::listAuthors();
                break;
            case 'Categorias':
                $data = MockCategories::listCategories();
                break;
            case 'Newsletter':
                $data = MockNewsletter::listNewsletter();
                break;
            default:
                $data = MockPosts::listPosts();
                break;
        }
        return $data;
    }

    private function getData()
    {
        $data = null;
        switch ($this->getTitle()) {
            case 'Posts':
                $data = MockPosts::editPost();
                break;
            case 'Autores':
                $data = MockAuthors::listAuthors();
                break;
            case 'Categorias':
                $data = MockCategories::listCategories();
                break;
            case 'Newsletter':
                $data = MockNewsletter::listNewsletter();
                break;
            default:
                $data = MockPosts::listPosts();
                break;
        }
        return $data;
    }

    public static function getSidebar()
    {
        $moduleDir = __DIR__ . '/../../../../Views/Pages/Admins/Classes';
        $moduleNamespace = 'App\\Views\\Pages\\Admins\\Classes';
        $files = scandir($moduleDir);
        $appRoutes = [];
        foreach ($files as $file) {
            if (substr($file, -4) === '.php') {
                $className = $moduleNamespace . '\\' . pathinfo($file, PATHINFO_FILENAME);
                if (class_exists($className) && is_subclass_of($className, AdminBase::class)) {
                    $routes = $className::registerSidebar();
                    $appRoutes = array_merge($appRoutes, $routes);
                }
            }
        }
        return $appRoutes;
    }

    public function listView(): void
    {
        $this->verifyIfTableDataExists();
        $sidebarList = self::getSidebar();
        $tableData = new stdClass();
        $tableData->title = $this->getTitle();
        $tableData->columns = $this->table();
        $tableData->data = $this->getDatas();
        Controller::view('pages.admins.list', ['tableData' => $tableData, 'sidebarList' => $sidebarList]);
    }

    public function create(): void
    {
        $this->verifyIfTableDataExists();
        $sidebarList = self::getSidebar();
        $form = $this->form();
        Controller::view('pages.admins.create', ['sidebarList' => $sidebarList, 'form' => $form]);
    }

    public function edit(): void
    {
        $this->verifyIfTableDataExists();
        $sidebarList = self::getSidebar();
        $form = $this->form();
        $database = $this->getData();
        Controller::view('pages.admins.create', ['sidebarList' => $sidebarList, 'form' => $form, 'database' => $database]);
    }
}
