<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Library\Services\CaesarCipher;
 


class TestController extends Controller
{
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        return view('index'); 
    }

     

    /**
     * Encode the string
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function encodeStr(Request $request)
    {
        $obj = new CaesarCipher();

        $shiftCnt = (int) $request->input('shift_count');
       
        $encodedStr =  $obj->encode( $request->input('str') , $shiftCnt); 

        $strToBeEncoded = $request->input('str');
        return view('index' , compact('encodedStr','shiftCnt'));
    }

    public function decodeStr(Request $request)
    {
 
        $obj = new CaesarCipher();
         $shiftCnt = (int) $request->input('shiftCnt');
         $decodedStr =  $obj->decode( $request->input('str') , $shiftCnt); 
        return view('index' , compact('decodedStr'));
    }

    
}
