<?php namespace App\Controllers;

    use App\Models\CrudModel;

class Crud extends BaseController
{
    public function index()
    {
        $Crud = new CrudModel();
        $datos = $Crud->listarNombres();

        $mensaje = session('mensaje');

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ]; 

        return view('listado', $data);
    }

    public function crear(){
        $datos = [
            "name" => $_POST['name'],
            "author" => $_POST['author'],
            "genre_id" => $_POST['genre_id']
        ];


        $Crud = new CrudModel();
        $respuesta = $Crud->insertar($datos);
        if($respuesta > 0){
            return redirect()->to(base_url().'/')->with('mensaje', '1');
        }else{
            return redirect()->to(base_url().'/')->with('mensaje', '0');
        }

    }

    public function actualizar(){
        $datos = [
            "name" => $_POST['name'],
            "author" => $_POST['author'],
            "genre_id" => $_POST['genre_id']
        ];

        $id = $_POST['id'];

        $Crud = new CrudModel();

        $respuesta = $Crud->actualizar($datos, $id);

        if($respuesta > 0){
            return redirect()->to(base_url().'/')->with('mensaje', '2');
        }else{
            return redirect()->to(base_url().'/')->with('mensaje', '3');
        }

    }

    public function obtenerNombre($id){
        $data = ['id' => $id];
        $Crud = new CrudModel();
        $respuesta = $Crud->obtenerNombre($data);

        $datos = ["datos" => $respuesta];

        return view('actualizar', $datos);
    }

    public function eliminar($id){
        $Crud = new CrudModel();
        $data = ["id" => $id];
        $respuesta = $Crud->eliminar($data); 

        if($respuesta > 0){
            return redirect()->to(base_url().'/')->with('mensaje', '4');
        }else{
            return redirect()->to(base_url().'/')->with('mensaje', '5');
        }
    }

    public function indexgeneros(){
        
        $Crud = new CrudModel();
        $datos = $Crud->listarGeneros();

        $mensaje = session('mensaje');

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ]; 

        return view('listadogeneros', $data);
    }

    public function creargenero(){
        $datos = [
            "name" => $_POST['name'],
        ];


        $Crud = new CrudModel();
        $respuesta = $Crud->insertarGenero($datos);
        if($respuesta > 0){
            return redirect()->to(base_url().'/')->with('mensaje', '6');
        }else{
            return redirect()->to(base_url().'/')->with('mensaje', '7');
        }

    }

    public function actualizargenero(){
        $datos = [
            "name" => $_POST['name'],
        ];

        $id = $_POST['id'];

        $Crud = new CrudModel();

        $respuesta = $Crud->actualizarGenero($datos, $id);

        if($respuesta > 0){
            return redirect()->to(base_url().'/')->with('mensaje', '8');
        }else{
            return redirect()->to(base_url().'/')->with('mensaje', '9');
        }
    }

    public function obtenerGenero($id){
        $data = ['id' => $id];
        $Crud = new CrudModel();
        $respuesta = $Crud->obtenerGenero($data);

        $datos = ["datos" => $respuesta];

        return view('actualizargenero', $datos);
    }

    public function eliminargenero($id){
        $Crud = new CrudModel();
        $data = ["id" => $id];
        $respuesta = $Crud->eliminargenero($data); 

        if($respuesta > 0){
            return redirect()->to(base_url().'/')->with('mensaje', '10');
        }else{
            return redirect()->to(base_url().'/')->with('mensaje', '11');
        }
    }
}
