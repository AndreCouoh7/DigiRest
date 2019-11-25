<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre'=> 'Bebidas'
        
        ]) ;
        DB::table('categorias')->insert([
            'nombre'=> 'Tortas'
        ]) ;

        DB::table('zonas')->insert([
            'nombre'=> 'Norte'
        ]) ;


        DB::table('productos')->insert([
            'nombre' => 'Coca-Cola',
            'descripcion' => 'Bebida-Energetica',
            'precio' => '12',
            'idCategoria' => '1'


        ]);

        DB::table('productos')->insert([
            'nombre' => 'Torta',
            'descripcion' => 'Jamon',
            'precio'  => '20',
            'idCategoria' => '2'
        ]);
        
        DB::table('mesas')->insert([
            'idZona' => 1,
            'mesa' => 1
        ]);

        DB::table('ordenes')->insert([
            'numero' => '1',
            'idMesa' => '1'
        ]);
        

        DB::table('detalle_ordenes')->insert([
            'idOrden' => '1',
            'idProducto' => '1',
            'cantidad' => '4',
            'precio' => '15'
        ]);

        DB::table('usuarios')->insert([
            'nombre' => 'Joel',
            'apellido'=> 'Pech',
             'direccion'=>'C-17',
              'telefono' => '9971386229',
              'fechaNacimiento' => '1998-11-09',
              'correo' => 'joel@gmail.com'
        ]);
    }
}
