<?php

namespace App\Traits;

trait UtilityTrait
{

    public string $path = IMAGES_PATH . 'icons/';


    /**
     * @return array
     * Make a Menu with routes
     */

    public function getMenuListWithRoutes(): array
    {
        $titles = [
            'inicio',
            'sobre',
            'contato'
        ];
        $routes = [
            route('inicio'),
            '/about',
            ''
        ];

        $menu = array_map(function ($title, $route) {
            return [
                'title' => $title,
                'route' => $route
            ];
        }, $titles, $routes);

        return $menu;
    }

    public function getSocialMediaWithLink(): array
    {
        $titles = ['Instagram', 'Linkedin', 'Github'];
        $icons = [$this->path . 'instagram.png', $this->path . 'linkedin.png', $this->path . 'github.png'];
        $links = [''];

        $socialMedia = array_map(function () {
            return [];
        }, $titles, $icons, $links);

        return $socialMedia;
    }
}
