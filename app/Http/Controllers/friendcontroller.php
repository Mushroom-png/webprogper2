<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class friendcontroller extends Controller
{
    public function index(){
        $dt = [
            [
                "idbuku"=>1,
                "namateman"=>'Snake',
                "alamat"=>'Jl. Lurus Lurus Belok Blok A.009',
                "kota"=>'Jimbaran',
                "telp"=>'012011924545',
                'wa'=>'00000000'
            ],
            [
                "idbuku"=>2,
                "namateman"=>'Jane Doe',
                "alamat"=>'Jl. Jalan Blok Z.110',
                "kota"=>'Jimbaran',
                "telp"=>'0812555666',
                'wa'=>'11111111'
            ], 
        ];
    return view ('friend',compact('dt') );
    }
}
