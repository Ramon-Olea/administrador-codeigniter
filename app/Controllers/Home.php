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

    /* obtiene los datos del formulario de login  */
    public function login()
    {
        /* $_POST['usuario']  otra forma de usar el post*/

        /* forma mas usada */
        $usuario = $this->request->getPost('usuario');
        $contra = $this->request->getPost('contra');

        var_dump($usuario);
        $Usuario = new Usuarios();
        $datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario ]);
        if (count($datosUsuario) > 0 && password_verify($contra, $datosUsuario[0]['contra'])) {



            $data = [
                'id_usuario' =>  $datosUsuario[0]['id_usuario'],
                'usuario' =>  $datosUsuario[0]['usuario'],
                'rol'    => $datosUsuario[0]['rol'] 
            ];


            $session = session();
            $session->set($data); //agregamos los datos obtenidos  del usuario


            return redirect()->to(base_url('/inicio'))->with('mensaje','1');



        } else {

          return redirect()->to(base_url('/'))->with('mensaje','0');
        }
    }
    public function salir()
    {
        $session = session();
        $session->destroy();

        return redirect()->to(base_url('/'));
    }


}
