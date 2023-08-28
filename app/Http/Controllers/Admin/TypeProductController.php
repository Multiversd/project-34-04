<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeProductController extends Controller
{
    public function index(){
        return view('admin.typeproduct.index');
    }

    public function create(){
        return view('admin.typeproduct.create');
    }
}
