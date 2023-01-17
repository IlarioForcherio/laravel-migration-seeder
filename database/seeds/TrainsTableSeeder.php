<?php


use App\Models\Train;

use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $trains = [
        [
            'compagnia' => 'Trenitalia',
            'partenza' => 'Roma',
            'destinazione' => 'Bolzano',
            'orario_partenza' => 14.30,
            'orario_arrivo' => 15.00,
            'binario' => 3,
            'prezzo' => 99.99,
        ],
        [
            'compagnia' => 'italo',
            'partenza' => 'Bari',
            'destinazione' => "Sauze D'Oulx",
            'orario_partenza' => 12.30,
            'orario_arrivo' => 13.00,
            'binario' => 5,
            'prezzo' => 89.99,
        ]
        ];

        foreach($trains as $elem){

            $newTrain = new Train();
            $newTrain->compagnia = $elem['compagnia'];
            $newTrain->partenza = $elem['partenza'];
            $newTrain->destinazione = $elem['destinazione'];
            $newTrain->orario_partenza = $elem['orario_partenza'];
            $newTrain->orario_arrivo = $elem['orario_arrivo'];
            $newTrain->binario = $elem['binario'];
            $newTrain->prezzo = $elem['prezzo'];
            $newTrain->save();


        }



    }
}
