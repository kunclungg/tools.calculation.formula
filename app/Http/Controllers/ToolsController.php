<?php

namespace App\Http\Controllers;

use App\MsFormula;
use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'codeformula' => 'required|string'
        ]);

        //$headers = apache_request_headers();
        //$headers = $_SERVER;

        $dtFormula = MsFormula::where('code', $request->codeformula)->first();
        $resultFormula = $dtFormula['formula'];

        $allFormula = MsFormula::get()->toArray();
        foreach ($allFormula as $item=>$value) {
            $resultFormula = str_replace($value['code'], $value['value'], $resultFormula);
        }

        echo $hasil2 = eval("return $resultFormula;");

        //$hasil = $this->rumus($resultFormula);

        return response()->json([
            'message' => $request->codeformula,
            'time' => round(microtime(true) * 1000),
            'result' => $hasil2,
        ], 200);
    }

    function rumus($formula)
    {
        $cekKali = explode("*", $formula);
        $cekBagi = explode("/", $formula);
        $cekTambah = explode("+", $formula);
        $cekKurang = explode("-", $formula);
        $countKali = count($cekKali);
        $countBagi = count($cekBagi);
        $countTambah = count($cekTambah);
        $countKurang = count($cekKurang);

        if($countKurang > 1)
        {
            $hasil = $this->caseRumus($this->rumus($cekKurang[0]), $this->rumus($cekKurang[1]), "-") ;
        } elseif($countTambah > 1) {
            $hasil = $this->caseRumus($this->rumus($cekTambah[0]), $this->rumus($cekTambah[1]), "+") ;
        } elseif($countBagi > 1) {
            $hasil = $this->caseRumus($this->rumus($cekBagi[0]), $this->rumus($cekBagi[1]), "/") ;
        } elseif($countKali > 1) {
            $hasil = $this->caseRumus($this->rumus($cekKali[0]), $this->rumus($cekKali[1]), "*") ;
        }else{
            $hasil = MsFormula::where('code', $formula)->pluck('value')->first();
        }

        return $hasil;
    }

    function caseRumus($nilai1, $nilai2, $operasi)
    {
        switch ($operasi) {
            case '+':
                $hasil = $nilai1+$nilai2;
                break;
            case '-':
                $hasil = $nilai1-$nilai2;
                break;
            case '*':
                $hasil = $nilai1*$nilai2;
                break;
            case '/':
                $hasil = $nilai1/$nilai2;
                break;
        }

        return $hasil;
    }
}
