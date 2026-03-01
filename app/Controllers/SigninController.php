<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelUsuarios;

class SigninController extends Controller
{
    // public function index()
    // {
    //     helper(['form']);
    //     echo view('login');
    // }

    public function index()
    {
        echo view('login');
    }


    public function loginAuth()
    {
        $session = session();
        $ModelUsuarios = new ModelUsuarios();
        $telefono = $this->request->getVar('telefono');
        $password = $this->request->getVar('uPassword');
        $pregunta = $this->request->getVar('pregunta');
        $respuesta_pregunta = $this->request->getVar('respuesta');

        $data = $ModelUsuarios->where('telefono', $telefono)->first();

        if ($data) {
            $pass = $data['contrasena'];
            if (password_verify($password, $pass)) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'telefono' => $data['telefono'],
                    'pregunta' => $data['pregunta'],
                    'nombre' => $data['nombre'],
                    'respuesta_pregunta' => $data['respuesta_pregunta'],
                ];
                $session->set($ses_data);
                return redirect()->to(base_url('verificacion'));
            } else {
                $session->setFlashdata('msg', 'La contraseña no es valida.');
                echo 'asdas';
                return redirect()->to(base_url('login'));
            }
        } else {
            $session->setFlashdata('msg', 'El número introducido no es valido.');
            echo 'ddd';
            return redirect()->to(base_url('login'));
        }
    }

    public function logout()
    {
        $session = session();
        $session->remove('id_usuario', 'nombre', 'telefono');
        session_destroy();

        return redirect()->to(base_url('login'));
    }
}
