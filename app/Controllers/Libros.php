<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Libro;
class Libros extends Controller{

    public function index(){
        $libro = new Libro();
        $datos['libros']= $libro->orderBy('id','ASC')->findAll();

        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');
        return view('libros/listar', $datos);

    }

    public function crear(){

        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');
        return view('libros/crear', $datos);
    }

    public function guardar(){
        $libro = new Libro();

        $nombre = $this->request->getVar('nombre');
        
        if($imagen = $this->request->getFile('imagen')){
            $nuevoNombre = $imagen->getRandomName();
            $imagen->move('../public/uploads/');
            $datos=[
                'nombre' => $this->request->getVar('nombre'),
                'imagen' => $nuevoNombre
            ];
            $libro->insert($datos);
        }
        
        // print_r($nombre);
        echo "Ingresado";
    }


}