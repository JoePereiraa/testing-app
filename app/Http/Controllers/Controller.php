<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Traits\UtilityTrait;

use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    use UtilityTrait;

    public function __construct()
    {
        $this->get();
    }

    public function get(): array
    {
        $menu = $this->getMenuListWithRoutes();
        
        return [
            View::share('menu', $menu)
        ];
    }
}
