<?php

use Illuminate\Database\Seeder;
use App\Step;

class StepsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run(){
        Step::truncate();
        
        $etapes = [
            [
                'name' => 'Conques',
                'latitude' =>  44.5994020,
                'longitude' => 2.3960370
            ],

            [
                'name' => 'Decazeville',
                'latitude' =>  44.5603170,
                'longitude' => 2.2518300                   
            ],

            [
                'name' => 'Livinhac',
                'latitude' =>  44.5912099,
                'longitude' => 2.2310789                   
            ],

            [
                'name' => 'Montredon',
                'latitude' =>  44.6175620,
                'longitude' => 2.1928380                   
            ],

            [
                'name' => 'Bord Saint Félix',
                'latitude' =>  44.6167,
                'longitude' => 2.1167                   
            ], 

            [
                'name' => 'Figeac',
                'latitude' =>  44.6082880,
                'longitude' => 2.0328710                   
            ], 

            [
                'name' => 'Béduer Gréalou',
                'latitude' =>  44.5810869,
                'longitude' => 1.9463680                   
            ], 


            [
                'name' => 'Brengues Marcilhac',
                'latitude' =>  44.5779349,
                'longitude' => 1.8305620                   
            ],

            [
                'name' => 'Cajarc Gaillac',
                'latitude' =>  44.4848300,
                'longitude' => 1.8432710                   
            ],

            [
                'name' => 'Limogne en Quercy',
                'latitude' =>  44.4007080,
                'longitude' => 1.7635290                
            ],

            [
                'name' => 'Lalbenque',
                'latitude' =>  44.3379450,
                'longitude' => 1.5462620                
            ],

            [
                'name' => 'Laburgade',
                'latitude' =>  44.3898020,
                'longitude' =>  1.5407180               
            ],

            [
                'name' => 'St Cirq Lapopie',
                'latitude' => 44.4646720,
                'longitude' =>  1.6690320               
            ],

            [
                'name' => 'Cabrerets',
                'latitude' => 44.5059210,
                'longitude' =>  1.6538640               
            ],

            // [
            //     'name' => 'Pasturat',
            //     'latitude' => 44.3982030,
            //     'longitude' =>  1.6456490               
            // ],

            [
                'name' => 'Vers',
                'latitude' => 44.4860670,
                'longitude' =>  1.5533760               
            ],

            [
                'name' => 'Cahors',
                'latitude' => 44.4475229,
                'longitude' =>  1.4419890               
            ],

            [
                'name' => 'Labastide Marnhac',
                'latitude' => 44.3868330,
                'longitude' =>  1.3986209
            ],

            // [
            //     'name' => 'Hospitalet',
            //     'latitude' => 44.3868330,
            //     'longitude' =>  1.3986209               
            // ],

            [
                'name' => 'Lascabannes',
                'latitude' => 44.3395050,
                'longitude' =>  1.3076460               
            ],

            [
                'name' => 'Montcuq',
                'latitude' => 44.3386200,
                'longitude' =>  1.2096460               
            ], 

        ];//$etapes






        	DB::table('steps')->insert($etapes);	
      

        

    }
}
