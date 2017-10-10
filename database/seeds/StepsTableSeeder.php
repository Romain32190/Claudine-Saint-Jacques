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
        $i = 1;
        $etapes = [
            [
                'name' => 'Conques',
                'steporder' => $i++,
                'latitude' =>  44.5994020,
                'longitude' => 2.3960370
            ],

            [
                'name' => 'Decazeville',
                'steporder' => $i++,                
                'latitude' =>  44.5603170,
                'longitude' => 2.2518300                   
            ],

            [
                'name' => 'Livinhac',
                'steporder' => $i++,                
                'latitude' =>  44.5912099,
                'longitude' => 2.2310789                   
            ],

            [
                'name' => 'Montredon',
                'steporder' => $i++,                
                'latitude' =>  44.6175620,
                'longitude' => 2.1928380                   
            ],

            [
                'name' => 'Bord Saint Félix',
                'steporder' => $i++,                
                'latitude' =>  44.6167,
                'longitude' => 2.1167                   
            ], 

            [
                'name' => 'Figeac',
                'steporder' => $i++,                
                'latitude' =>  44.6082880,
                'longitude' => 2.0328710                   
            ], 

            [
                'name' => 'Béduer Gréalou',
                'steporder' => $i++,                
                'latitude' =>  44.5810869,
                'longitude' => 1.9463680                   
            ], 


            [
                'name' => 'Brengues Marcilhac',
                'steporder' => $i++,                
                'latitude' =>  44.5779349,
                'longitude' => 1.8305620                   
            ],

            [
                'name' => 'Cajarc Gaillac',
                'steporder' => $i++,                
                'latitude' =>  44.4848300,
                'longitude' => 1.8432710                   
            ],

            [
                'name' => 'Limogne en Quercy',
                'steporder' => $i++,                
                'latitude' =>  44.4007080,
                'longitude' => 1.7635290                
            ],

            [
                'name' => 'Lalbenque',
                'steporder' => $i++,                
                'latitude' =>  44.3379450,
                'longitude' => 1.5462620                
            ],

            [
                'name' => 'Laburgade',
                'steporder' => $i++,                
                'latitude' =>  44.3898020,
                'longitude' =>  1.5407180               
            ],

            [
                'name' => 'St Cirq Lapopie',
                'steporder' => $i++,                
                'latitude' => 44.4646720,
                'longitude' =>  1.6690320               
            ],

            [
                'name' => 'Cabrerets',
                'steporder' => $i++,                
                'latitude' => 44.5059210,
                'longitude' =>  1.6538640               
            ],

            // [
            //     'name' => 'Pasturat',
                // 'steporder' => $i++,            
            //     'latitude' => 44.3982030,
            //     'longitude' =>  1.6456490               
            // ],

            [
                'name' => 'Vers',
                'steporder' => $i++,                
                'latitude' => 44.4860670,
                'longitude' =>  1.5533760               
            ],

            [
                'name' => 'Cahors',
                'steporder' => $i++,                
                'latitude' => 44.4475229,
                'longitude' =>  1.4419890               
            ],

            [
                'name' => 'Labastide Marnhac',
                'steporder' => $i++,                
                'latitude' => 44.3868330,
                'longitude' =>  1.3986209
            ],

            // [
            //     'name' => 'Hospitalet',
                // 'steporder' => $i++,            
            //     'latitude' => 44.3868330,
            //     'longitude' =>  1.3986209               
            // ],

            [
                'name' => 'Lascabannes',
                'steporder' => $i++,                
                'latitude' => 44.3395050,
                'longitude' =>  1.3076460               
            ],

            [
                'name' => 'Montcuq',
                'steporder' => $i++,                
                'latitude' => 44.3386200,
                'longitude' =>  1.2096460               
            ], 

        ];//$etapes






        	DB::table('steps')->insert($etapes);	
      

        

    }
}
