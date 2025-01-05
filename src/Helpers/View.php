<?php

namespace App\Helpers;

use App\Errors\ViewNotFoundException;
use App\Routes\Routes;

trait View
{
    private static array $components = [];

    /**
     * Função para incluir um arquivo de view ou componente
     * @param string $path
     * @param string $type
     * @param mixed $data
     * @throws \App\Errors\ViewNotFoundException
     * @return void
     */
    private static function includeFile(string $path, string $type, ?array $data = [])
    {
        if ($data) {
            extract($data);
        }

        $filePath = __DIR__ . "/../{$type}/" . ltrim($path, '/');
        if (file_exists($filePath)) {
            include $filePath; // NOSONAR
        } else {
            throw new ViewNotFoundException("View not found: {$filePath}");
        }
    }

    /**
     * Função para incluir uma view de admin
     * A inclusão é direta, sem a necessidade de chamar a função renderComponents
     * ## IMPORTANTE ##
     * Essa função só deve ser utilizada no arquivo de rotas
     * @param string $path
     * @param mixed $data
     * @return void
     */
    public static function adminView(string $path, ?array $data = [])
    {
        self::includeFile($path, 'Views/Pages/Admins', $data);
    }

    /**
     * Função para incluir uma página de visitante
     * A inclusão é direta, sem a necessidade de chamar a função renderComponents
     * ## IMPORTANTE ##
     * Essa função só deve ser utilizada no arquivo de rotas
     * @param string $path
     * @param mixed $data
     * @return void
     */
    public static function pagesView(string $path, ?array $data = [])
    {
        self::includeFile($path, 'Views/Pages/Visitors', $data);
    }

    /**
     * Função para incluir uma view de erro
     * A inclusão é direta, sem a necessidade de chamar a função renderComponents
     * ## IMPORTANTE ##
     * Essa função só deve ser utilizada no arquivo de rotas
     * @param string $path
     * @param mixed $data
     * @return void
     */
    public static function errorView(string $path, ?array $data = [])
    {
        if(Routes::getTypeRoute() === 'admin'){
            self::includeFile($path, 'Views/Errors/Admin', $data);
        }
        self::includeFile($path, 'Views/Errors/Visitor', $data);
    }

    /**
     * Função para incluir uma view de layout
     * A inclusão é direta, sem a necessidade de chamar a função renderComponents
     * ## IMPORTANTE ##
     * Essa função só deve ser utilizada para incluir o layout principal
     * // TODO: Implementar a inclusão de componentes dentro do layout
     * // A ideia é que o layout possa incluir componentes de forma dinâmica
     * // Assim, não precisa incluir os componentes manualmente um a um
     * // Usar por exemplo um callback para incluir os componentes
     * // Exemplo: View::layoutView('Visitor.php', fn(): array => ['Category/Title/Title.php']);
     * @param string $path
     * @param mixed $data
     * @return void
     */
    public static function layoutView(string $path, ?array $data = [])
    {
        self::includeFile($path, 'Views/Layouts', $data);
    }

    /**
     * Função para incluir um componente de layout de admin
     * A inclusão é direta, sem a necessidade de chamar a função renderComponents
     * ## IMPORTANTE ##
     * Essa função só deve ser utilizada para incluir componentes no layout de admin
     * @param string $path
     * @param mixed $data
     * @return void
     */
    public static function componentLayoutAdmin(string $path, ?array $data = [])
    {
        self::includeFile($path, 'Components/Layout/Admin', $data);
    }

    /**
     * Função para incluir um componente de layout de visitante
     * A inclusão é direta, sem a necessidade de chamar a função renderComponents
     * ## IMPORTANTE ##
     * Essa função só deve ser utilizada para incluir componentes no layout de visitante
     * @param string $path
     * @param mixed $data
     * @return void
     */
    public static function componentLayoutVisitor(string $path, ?array $data = [])
    {
        self::includeFile($path, 'Components/Layout/Visitor', $data);
    }

    /**
     * Função para incluir um componente admin
     * A inclusão é direta, sem a necessidade de chamar a função renderComponents
     * ## IMPORTANTE ##
     * A inclusão de componentes, neste caso, é feita para incluir componentes dentro de outros componentes
     * Caso queira incluir um componente diretamente na página, utilize a função componentChildAdmin
     * @param string $path
     * @param mixed $data
     * @return void
     */
    public static function componentPagesAdmin(string $path, ?array $data = [])
    {
        self::includeFile($path, 'Components/Pages/Admin', $data);
    }

    /**
     * Função para incluir um componente de visitante
     * A inclusão é direta, sem a necessidade de chamar a função renderComponents
     * ## IMPORTANTE ##
     * A inclusão de componentes, neste caso, é feita para incluir componentes dentro de outros componentes
     * Caso queira incluir um componente diretamente na página, utilize a função componentChildVisitor
     * @param string $path
     * @param mixed $data
     * @return void
     */
    public static function componentPagesVisitor(string $path, ?array $data = [])
    {
        self::includeFile($path, 'Components/Pages/Visitor', $data);
    }

    /**
     * Função para incluir um componente compartilhado
     * A inclusão é direta, sem a necessidade de chamar a função renderComponents
     * ## IMPORTANTE ##
     * A inclusão de componentes, neste caso, é feita para incluir componentes dentro de outros componentes
     * Caso queira incluir um componente diretamente na página, utilize a função componentChildShared
     * @param string $path
     * @param mixed $data
     * @return void
     */
    public static function componentShared(string $path, ?array $data = [])
    {
        self::includeFile($path, 'Components/Shared', $data);
    }

    /**
     * Função para incluir um componente filho de admin
     * A inclusão é feita de forma dinâmica, e deve ser chamada no arquivo de view
     * ## IMPORTANTE ##
     * A inclusão de componentes, neste caso, é feita para incluir componentes diretamente na página
     * Caso queira incluir um componente dentro de outro componente, utilize a função componentPagesAdmin
     * @param string $path
     * @param mixed $data
     * @return void
     */
    public static function componentChildAdmin(string $path, ?array $data = [])
    {
        self::$components[] = [
            'path' => "Pages/Admin/$path",
            'data' => $data,
        ];
    }

    /**
     * Função para incluir um componente filho de visitante
     * A inclusão é feita de forma dinâmica, e deve ser chamada no arquivo de view
     * ## IMPORTANTE ##
     * A inclusão de componentes, neste caso, é feita para incluir componentes diretamente na página
     * Caso queira incluir um componente dentro de outro componente, utilize a função componentPagesVisitor
     * @param string $path
     * @param mixed $data
     * @return void
     */
    public static function componentChildVisitor(string $path, ?array $data = [])
    {
        self::$components[] = [
            'path' => "Pages/Visitor/$path",
            'data' => $data,
        ];
    }

    /**
     * Função para incluir um componente filho compartilhado
     * A inclusão é feita de forma dinâmica, e deve ser chamada no arquivo de view
     * ## IMPORTANTE ##
     * A inclusão de componentes, neste caso, é feita para incluir componentes diretamente na página
     * Caso queira incluir um componente dentro de outro componente, utilize a função componentShared
     * @param string $path
     * @param mixed $data
     * @return void
     */
    public static function componentChildShared(string $path, ?array $data = [])
    {
        self::$components[] = [
            'path' => "Shared/$path",
            'data' => $data,
        ];
    }

    /**
     * Função para renderizar os componentes
     * A função deve ser chamada somente no layout principal
     * ## IMPORTANTE ##
     * A função renderiza os componentes que foram incluídos dinamicamente
     * @return void
     */
    public static function renderComponents()
    {
        foreach (self::$components as $component) {
            self::includeFile($component['path'], 'Components', $component['data']);
        }
        self::$components = [];
    }
}
