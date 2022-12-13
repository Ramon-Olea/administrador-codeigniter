<?php

namespace App\Controllers;

use App\Models\Usuarios;

class Home extends BaseController
{
    public function index()
    {
        $mensaje = session('mensaje');
        return view('login', ["mensaje" => $mensaje]);
    }

    public function inicio()
    {
        return view('inicio');
    }
    public function datos()
    {
        return view('datos');
    }

   
    /* obtiene los datos del formulario de login  */
    public function login()
    {
        /* $_POST['usuario']  otra forma de usar el post*/

        /* forma mas usada */
        $usuario = $this->request->getPost('usuario');
        $contra = $this->request->getPost('contra');


        $Usuario = new Usuarios();
        $datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);
        if (count($datosUsuario) > 0 && $contra == $datosUsuario[0]['contra']) {



            $data = [
                'id_usuario' =>  $datosUsuario[0]['id_usuario'],
                'usuario' =>  $datosUsuario[0]['usuario'],
                'rol'    => $datosUsuario[0]['rol']
            ];


            $session = session();
            $session->set($data); //agregamos los datos obtenidos  del usuario


            return redirect()->to(base_url('/inicio'))->with('mensaje', '1');
        } else {

            return redirect()->to(base_url('/'))->with('mensaje', '0');
        }
    }
    public function salir()
    {
        $session = session();
        $session->destroy();

        return redirect()->to(base_url('/'));
    }

    /* USUARIOS */

    public function usuarios()
    {
        $mensaje = session('mensaje');

        $Usuarios = new Usuarios();
        $datosUsuario = $Usuarios->listarUsuarios();
        $data = [
            'datos' =>  $datosUsuario,
            'mensaje' =>  $mensaje,


        ];
        return view('usuarios/listado', $data);
    }

    public function usercrear()
    {
        return view('usuarios/crear');
    }
    public function registrar()
    {
        /*  $contra = password_hash($_POST['contra'], PASSWORD_DEFAULT); //para encriptrar */

        $data = [
            'usuario' =>  $_POST['usuario'],
            'contra'    =>  $_POST['contra'],
            'rol'    =>  $_POST['rol'],

        ];
        $Usuario = new Usuarios();
        $respuesta = $Usuario->insertar($data);
        if ($respuesta > 0) {

            return redirect()->to(base_url() . '/usuarios')->with('mensaje', '1');
        } else {

            return redirect()->to(base_url() . '/usuarios')->with('mensaje', '0');
        }
    }
    public function useractualizar()
    {
        return view('usuarios/actualizar');
    }
    public function usereliminar($id)
    {

        $Usuario = new Usuarios();

        $data = ['id_usuario' => $id];
        $respuesta = $Usuario->eliminar($data);
        if ($respuesta) {

            return redirect()->to(base_url() . '/usuarios')->with('mensaje', '4');
        } else {

            return redirect()->to(base_url() . '/usuarios')->with('mensaje', '5');
        }
    }
    public function obteneruser($id)
    {
        $Usuario = new Usuarios();

        $data = ['id_usuario' => $id];
        $respuesta = $Usuario->obteneruser($data);

        $datos = ['id_usuario' => $respuesta];

        return $datos;
    }
    public function actualizar()
    {
        $id =$_POST['id_usuario'];

        $data = [
            'usuario' =>  $_POST['usuario'],
            'contra'    =>  $_POST['contra'],
            'rol'    =>  $_POST['rol'],

        ];
        $Usuario = new Usuarios();
        $respuesta = $Usuario->actualizar($data,$id);
        if ($respuesta > 0) {

            return redirect()->to(base_url() . '/usuarios')->with('mensaje', '2');
        } else {

            return redirect()->to(base_url() . '/usuarios')->with('mensaje', '3');
        }
    }
    /* FIN USUARIOS */

    
}
