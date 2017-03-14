<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Controllers\Controller;
use App\Grupo;
use App\Mensaje;

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
        echo "3";
        if ($request->has('group'))
        {
            //$grupo = $request->input('group');
            $grupo->group = $request->input('group');
            $grupo->save();
            echo "1";
            echo '<script>alert("Creado correctamente");</script>';
            return redirect()->action("HomeController@getHome");
        }else{
            echo "2";
            echo '<script>alert("Creado incorrectamente");</script>';
            return redirect()->action("HomeController@getHome");
        } 
    }

    public function messageShow(){
        $mensajes = Mensaje::all();

    }
}