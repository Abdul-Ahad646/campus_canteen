<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Support\Facades\View;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function __construct(){
        $categories=Category::Where('status',1)->get();
        View::Share('categories',$categories);
    }
}
