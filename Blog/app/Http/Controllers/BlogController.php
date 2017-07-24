<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class BlogController extends Controller
{
    public function index(){

        $contenido = Content::find(1);
    	
        return view('index')->with('contenido', $contenido->contenido);
    }

    public function admin(){
    	return view('adminBlog');
    }

    public function guardarImg( Request $request ){

    	$ruta = Storage::disk('public')->putFileAs('imagenes', $request->imagen, 'photo.jpg');

        //image de 500px x 200 px
        $imagen = Image::make( $request->imagen );
        $imagen->resize(500, 200);
        $imagen->save('storage/imagenes/img_500_200.png');

        //image de 800px x 320 px
        $imagen = Image::make( $request->imagen );
        $imagen->resize(800, 320);
        $imagen->save('storage/imagenes/img_800_320.png');


        //image de 1000px x 400 px
        $imagen = Image::make( $request->imagen );
        $imagen->resize(1000, 400);
        $imagen->save('storage/imagenes/img_1000_400.png');

        //creando un nuevo contenido
        $contenido = Content::find(1);
        $contenido->contenido = $request->texto;
        $contenido->save();


    	return view('index')->with('contenido', $contenido->contenido);
    }

    public function imagen( $ancho, $alto ){
        $imagen = Image::make( public_path('storage/imagen_grande/imagen_prueba.jpg') );
        
        $imagen->fit($ancho, $alto);

        return $imagen->response('jpg');
    }
}
