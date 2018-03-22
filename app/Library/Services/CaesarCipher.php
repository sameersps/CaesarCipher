<?php
namespace App\Library\Services;
  
class CaesarCipher
{
	private  $shiftCnt; 


    public   function encode($str="",$shiftCount=0)
    {

    	if(!empty($str)  ){

            $str = strtolower($str);
    		if(!empty($shiftCount) && is_int($shiftCount)){    			 
                $this->shiftCnt = $shiftCount;
				$shiftedString = "";

				for ($i = 0; $i < strlen($str); $i++)
				{ 
                    if ( preg_match("/^[a-zA-Z0-9]$/", $str[$i])) {
                         $ascii = ord($str[$i]);
                         $shiftedChar = chr($ascii + $shiftCount);
                    }else{
                        $shiftedChar = $str[$i];
                    }
				   

				    $shiftedString .= $shiftedChar;
				}
				$str = strtoupper($shiftedString);
    		}	

    	}
    	  
    	   
    	 return $str;


    }

    public   function decode($str="", $shiftCount)
    {

        
    	if(!empty($str)  ){ 
    			 
				$shiftedString = "";

				for ($i = 0; $i < strlen($str); $i++)
				{
                    if ( preg_match("/^[a-zA-Z0-9]$/", $str[$i])) {
                         $ascii = ord($str[$i]);
                         $shiftedChar = chr($ascii - $shiftCount);
                    }else{
                        $shiftedChar = $str[$i];
                    }
				    
				    $shiftedString .= $shiftedChar;
				}
				$str = strtoupper($shiftedString);
    		 	

    	}    	 
    	  
    	 return $str;
    }

}