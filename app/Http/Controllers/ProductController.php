<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin.products.inidex'); //listado
    }
    public function create(){
        return view('admin.products.create'); //formulario
    }
    public function store(){
        //registrar producto
    }
}
