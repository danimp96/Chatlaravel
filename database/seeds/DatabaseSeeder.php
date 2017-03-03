<?php

use Illuminate\Database\Seeder;
use App\Mensaje;
use App\Grupo;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    

    private $arrayMensajes = array (
    	array(
    			'idgrupo' => '0',
    			'texto' => 'hola',
    			'user' => 'dani'
    			
    		),
    	array(
    			'idgrupo' => '0',
    			'texto' => 'adios',
    			'user' => 'martin'
    			
    		)
    	);

    private $arrayGrupos = array(
    	array(
    			
    			'nombre' => 'dani'
    		)
    	);

    public function run()
    {
     	
        self::seedGrupos();
        $this->command->info('Tabla Grupos inicializada con exito');
        self::seedMensajes();
        $this->command->info('Tabla Mensajes inicializada con exito');
    }

   public function seedGrupos(){
    	DB::table('grupo')->delete();
    	foreach ($this->arrayGrupos as $grupo) {
    		$g = new grupo;
    		$g->nombre = $grupo['nombre'];
    		$g->save();
    	}
    }

    public function seedMensajes(){
    	DB::table('mensajes')->delete();
    	foreach ($this->arrayMensajes as $mensaje) {
    		$m = new mensajes;
    		
    		$m->texto = $mensaje['texto'];
    		$m->user = $mensaje['user'];
    		$m->idgrupo = $mensaje['idgrupo'];
    		$m->save();
    	}
    }
    
}
