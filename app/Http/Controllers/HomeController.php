<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $dishes = Dish::all();
        return view('home.index', ['dishes' => $dishes]);
    }
}
