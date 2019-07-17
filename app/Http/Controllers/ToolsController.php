<?php

namespace App\Http\Controllers;

use App\MsFormula;
use App\MsSource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ToolsController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'codeformula' => 'required|string',
            'nip' => 'required|string'
        ]);

        //$headers = apache_request_headers();
        //$headers = $_SERVER;

        $dtFormula = MsFormula::where('code', $request->codeformula)->first();
        $resultFormula = $dtFormula['formula'];
        //echo $resultFormula;

        if($resultFormula != "")
        {
            $hasil2 = $this->nilformula($resultFormula, $request->nip);
        }else if($dtFormula['value']){
            $hasil2 = $dtFormula['value'];
        }else if($dtFormula['source']){
            echo $resultFormula;
            $dtSource = MsSource::where('code', $dtFormula['source'])->first();
            $hasil2 = $this->cekSource($dtSource['table'], $dtSource['key'], $dtSource['fields'], $dtSource['source'], $request->nip);
        }

        return response()->json([
            'message' => $request->codeformula,
            'time' => round(microtime(true) * 1000),
            'result' => $hasil2,
        ], 200);
    }

    function nilformula($resultFormula, $nip)
    {
        $cekAr = preg_split("(\(|-\d+|\d+|-|\+|\/|\*|\))", $resultFormula);
        //print_r($cekAr);
        foreach ($cekAr as $item=>$value)
        {
            $value = str_replace("@","",$value);
            $cekValue = MsFormula::where('code', $value)->first();
            $codeValue = "@".$cekValue['code']."@";
            if($cekValue['source'] != "")
            {
                $dtSource = MsSource::where('code', $cekValue['source'])->first();
                $valueSource = $this->cekSource($dtSource['table'], $dtSource['key'], $dtSource['fields'], $dtSource['source'], $nip);
                //echo "///".$cekValue['code']."____";
                $resultFormula = str_replace($codeValue, $valueSource, $resultFormula);
                //echo $resultFormula."<br>";
            }else if($cekValue['value'] != ""){
                if($cekValue['value'] == "")
                {
                    $cekValue['value'] = 0;
                }
                $resultFormula = str_replace($codeValue, $cekValue['value'], $resultFormula);
            }else if($cekValue['formula'] != "")
            {
                //echo "///".$resultFormula."____";
                $nilaiValue = $this->nilformula($cekValue['formula'], $nip);
                $resultFormula = str_replace($codeValue, $nilaiValue, $resultFormula);
            }
        }
        echo $resultFormula."<br>";

        $hasil2 = eval("return $resultFormula;");

        return $hasil2;
    }

    function cekSource($table, $key, $fields, $source, $value)
    {
        $dtSource =  DB::table($table)->where($key, $value)->first();

        $hasil = $dtSource->$fields;

        if($source != "")
        {
            $rowSource = MsSource::where('code', $source)->first();
            $hasil = $this->cekSource($rowSource['table'], $rowSource['key'], $rowSource['fields'], $rowSource['source'], $hasil);
        }

        return $hasil;
    }

    function cekAritmatic($formula, $value)
    {
        $cekTambah = strpos($formula, "+");
        $cekKurang = strpos($formula, "-");
        $cekBagi = strpos($formula, "*");
        $cekKali = strpos($formula, "/");

        switch ($formula)
        {
            case 'tambah':
                $hasil = $bil1+$bil2;
                break;
            case 'kurang':
                $hasil = $bil1-$bil2;
                break;
            case 'kali':
                $hasil = $bil1*$bil2;
                break;
            case 'bagi':
                $hasil = $bil1/$bil2;
                break;
        }
    }
}
