<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index(){
    	return view('index');
    }

    public function admin(){
    	return view('adminBlog');
    }

    public function guardarImg( Request $request ){

    	$ruta = Storage::disk('public')->putFileAs('imagenes', $request->imagen, 'photo.jpg');

    	return 'La ruta es: ' . $ruta;
    }
}
