<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class ChatController extends Controller
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
    public function getChat($id){
        return view('chat.chat',array('chat'=>$this->chats[$id]));
    }
    public function getCrear(){
        return view('chat.crear');
    }

    public function groupCreate(Request $request){
        $grupo = new Grupo();
        if ($request-> has("group"))
        {
            $grupo->Group = $request->input("Group");
            $grupo->save();
            echo '<script>alert("Creado correctamente");</script>';
            return redirect()->action("ChatController@getIndex");
        }else
            echo '<script>alert("Creado incorrectamente");</script>';
            return redirect()->action("ChatController@getIndex");
    }

}