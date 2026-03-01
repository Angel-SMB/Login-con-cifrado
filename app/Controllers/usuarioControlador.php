<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelUsuarios;

class UsuarioControlador extends Controller
{
    public function registro()
    {
        return view('registro');
    }

    public function alta_usuario()
    {
        $usuario = new ModelUsuarios();
        $respuestaUsuario = $this->request->getPost('respuesta');
        $preguntaUsuario = $this->request->getPost('pregunta');
        $clave = 'clavesecreta123456';
        $iy = '1234567891011121';

        $cifradoRespuesta = openssl_encrypt($respuestaUsuario, 'AES-128-CTR', $clave, 0, $iy);
        $cifradoPregunta = openssl_encrypt($preguntaUsuario, 'AES-128-CTR', $clave, 0, $iy);

        $datos = [
            'nombre' => $this->request->getPost('Rnombre'),
            'telefono' => $this->request->getPost('Rtelefono'),
            'contrasena' => password_hash($this->request->getPost('RPassword'), PASSWORD_BCRYPT),
            'pregunta' => $cifradoPregunta,
            'respuesta_pregunta' => $cifradoRespuesta
        ];
        $respuesta = $usuario->insert($datos);

        $session = session();
        $session->setFlashdata('success', 'El usuario ha sido creado con éxito.');
        return redirect()->to(base_url('login'));
    }

    public function verificacion()
    {
        return view('verificacion');
    }

    public function verificarcodigo()
    {

        $usuario = new ModelUsuarios();
        $session = session();

        $idusuario = $session->get('id_usuario');

        $datos_usuario = $usuario
            ->select('respuesta_pregunta, pregunta')
            ->where('id_usuario', $idusuario)
            ->first();


        $cifradoPregunta = $datos_usuario['pregunta'];
        $cifradoRespuesta = $datos_usuario['respuesta_pregunta'];

        $clave = 'clavesecreta123456';
        $iy = '1234567891011121';
        $descifrarRespuesta = openssl_decrypt($cifradoRespuesta, 'AES-128-CTR', $clave, 0, $iy);
        $descifrarPregunta = openssl_decrypt($cifradoPregunta, 'AES-128-CTR', $clave, 0, $iy);


        $respuestaUsuario = $this->request->getPost('respuesta');
        $preguntaUsuario = $this->request->getPost('pregunta');

        if ($respuestaUsuario == $descifrarRespuesta && $preguntaUsuario == $descifrarPregunta) {
            $ses_data = [
                'pregunta' => $descifrarPregunta,
                'respuesta_pregunta' => $descifrarRespuesta,
                'isLoggedIn' => TRUE
            ];
            $session->set($ses_data);
            $session->setFlashdata('msg', 'Bienvenido.');
            return redirect()->to(base_url('bienvenida'));
        } else {
            $session->remove('id_usuario', 'telefono', 'nombre', 'pregunta', 'respuesta_pregunta');
            $session->setFlashdata('msg', 'Error, la pregunta y la respuesta ingresada no coiniciden.');
            return redirect()->to(base_url('login'));
        }
    }


    public function bienvenida()
    {
        return view('bienvenida');
    }
}
