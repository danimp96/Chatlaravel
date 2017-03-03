<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    

    Private $chats = array(
        array(
            'nombre' => 'Grupo1',
            'apellido' => 'Martin',
            'id' => '0'
        ),
        array(
            'nombre' => 'Grupo2',
            'apellido' => 'Ferrer',
            'id' => '1'
        )

    );

    /**
     * Mostrar información de un usuario.
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        $user = User::findOrFail($id);
        return view('user.profile', ['user' => $user]);
    }
    public function getHome(){
        return view('home',array('chats'=>$this->chats));
    }
}