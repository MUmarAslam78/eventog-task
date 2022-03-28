<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function getApiInfo(){
        $response=file_get_contents('https://demomedia.co.uk/files/contacts.json');
        $data=[];
        if(!empty($response)){
            $data=json_decode($response,true);
        }

        return view('home')->with(['data'=>$data]);
    }
}