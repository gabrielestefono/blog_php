<?php

namespace App\Classes;

use App\Controllers\Controller;
use App\Errors\DatabaseTableNotFoundException;
use App\Mock\MockAuthors;
use App\Mock\MockCategories;
use App\Mock\MockNewsletter;
use App\Mock\MockPosts;
use stdClass;

abstract class AdminBase
{
    abstract public static function routes(): array;

    abstract public function databaseTableName(): string;

    abstract public function table(): array;

    abstract public function getTitle(): string;

    abstract public static function registerSidebar(): array;
    
    private function verifyIfDatabaseTableExists(string $name): bool
    {
        return true;
    }

    private function verifyIfTableDataExists(){
        $databaseTableName = $this->databaseTableName();
        if(!$this->verifyIfDatabaseTableExists($databaseTableName)){
            throw new DatabaseTableNotFoundException("Tabela $databaseTableName não encontrada.");
        }
    }

    public function getData(){
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

    /**
     * Register the sidebar.
     * @return RouteClass[] Array de instâncias de RouteClass.
     */

    public static function getSidebar()
    {
        $moduleDir = __DIR__ . '/../Views/Pages/Admins/Classes';
        $moduleNamespace = 'App\\Views\\Pages\\Admins\\Classes';
        $files = scandir($moduleDir);
        $appRoutes = [];
        foreach ($files as $file) {
            if (substr($file, -4) === '.php') {
                $className = $moduleNamespace . '\\' . pathinfo($file, PATHINFO_FILENAME);
                if(class_exists($className) && is_subclass_of($className, AdminBase::class)){
                    $routes = $className::registerSidebar();
                    $appRoutes = array_merge($appRoutes, $routes);
                }
            }
        }
        return $appRoutes;
    }

    public function listView(): void{
        $this->verifyIfTableDataExists();
        $sidebarList = self::getSidebar();
        $tableData = new stdClass();
        $tableData->title = $this->getTitle();
        $tableData->columns = $this->table();
        $tableData->data = $this->getData();
        Controller::view('pages.admins.list', ['tableData' => $tableData, 'sidebarList' => $sidebarList]);
    }

    public function create(): void{
        $this->verifyIfTableDataExists();
        $sidebarList = self::getSidebar();
        Controller::view('pages.admins.create', ['sidebarList' => $sidebarList]);
    }
}
