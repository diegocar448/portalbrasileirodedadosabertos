<?php

namespace App\Http\Controllers;

use App\Models\Ubs;
use Illuminate\Http\Request;

class NoAuthController extends Controller
{
    public function index(Request $request)
    {

        //header('Content-type: application/json');

        // Set your CSV feed
        $feed = public_path('ubs.csv');

        // Arrays we'll use later
        $keys = array();
        $newArray = array();

        // Function to convert CSV into associative array
        function csvToArray($file, $delimiter) {
          if (($handle = fopen($file, 'r')) !== FALSE) {
            $i = 0;
            while (($lineArray = fgetcsv($handle, 4000, $delimiter, '"')) !== FALSE) {
              for ($j = 0; $j < count($lineArray); $j++) {
                $arr[$i][$j] = $lineArray[$j];
              }
              $i++;
            }
            fclose($handle);
          }
          return $arr;
        }

        // Do it
        $data = csvToArray($feed, ',');

        // Set number of elements (minus 1 because we shift off the first row)
        $count = count($data) - 1;

        //Use first row for names
        $labels = array_shift($data);

        foreach ($labels as $label) {
          $keys[] = $label;
        }

        // Add Ids, just in case we want them later
        $keys[] = 'id';

        for ($i = 0; $i < $count; $i++) {
          $data[$i][] = $i;
        }

        // Bring it all together
        for ($j = 0; $j < $count; $j++) {
          $d = array_combine($keys, $data[$j]);
          $newArray[$j] = $d;
        }

        Ubs::truncate();

        $ubs_lista = $newArray;
        foreach ($ubs_lista as $key => $ubs) {
            Ubs::create([
                'bairro' => $ubs['bairro'],
                'cep' => $ubs['cep'],
                'cidade' => $ubs['cidade'],
                'complemento' => $ubs['complemento'],
                'data_atualizacao' => $ubs['data_atualizacao'],
                'endereco' => $ubs['endereco'],
                'georef_location' => $ubs['georef_location'],
                'ibge' => $ubs['ibge'],
                'id_equipamento' => $ubs['id_equipamento'],
                'nome' => $ubs['nome'],
                'referencia' => $ubs['referencia'],
                'responsavel' => $ubs['responsavel'],
                'telefone' => $ubs['telefone'],
                'uf' => $ubs['uf']
            ]);
        }
        $ubs = Ubs::
            where("nome", 'like', "%".$request->search."%")
            ->paginate(30);
        // Print it out as JSON

        return $ubs_lista = json_encode($ubs);
        //return $ubs_lista = json_encode($newArray);
        //$ubs_lista = json_decode(json_encode($newArray), true);

    }

}
