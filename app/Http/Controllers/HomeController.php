<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Grupo;
use App\Mensaje;

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
        //$grupos = DB::table('grupo')->get();
        $grupos = Grupo::all();
        //return view('home',array('chats'=>$this->chats));
        return view('home',array('chats'=>$grupos));        
    }
}