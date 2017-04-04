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
        $mensajes = Mensaje::where("idgrupo","=",$id)->get();
        return view('chat.chat', ['mensajes' => $mensajes]);
    }
    public function getCrear(){
        return view('chat.crear');
    }

    public function groupCreate(Request $request){
        $grupo = new Grupo();
        //echo "<script>console.log('3');</script>";
        if ($request->has('group'))
        {
            //$grupo = $request->input('group');
            $grupo->nombre = $request->input('group');
            $grupo->save();
            //echo "<script>console.log('1');</script>";
            //echo '<script>alert("Creado correctamente");</script>';
            return redirect()->action("HomeController@getHome");
        }else{
           // echo "<script>console.log('2');</script>";
            echo '<script>alert("Creado incorrectamente");</script>';
            return redirect()->action("ChatController@getCrear");
        } 
    }

    public function mensajeCreate(Request $request){
        $mensaje = new Mensaje();
        
        return "0";
    }

    public function messageShow($id){
        $mensajes = Mensaje::where("idgrupo","=",$id);
        return view('chat.chat',['chat' => $mensajes]);
    }
}