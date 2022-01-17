<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpaceController extends Controller
{
    public function create_remove_spc_form(){
    	return view('removespace');
    }
    public function creat_count_form(){
    	return view('wordcount');
    }

    public function removeSpace(Request $request){
		$str = $request->input('remove_spacing');
       	$new_str = str_replace(' ','',$str);
       	$trim_space_str = trim($str);
       	$count_char = strlen($str);
       	echo "<h3>Remove all spacing in string</h3><br>". $new_str;
       	echo "<h3>Remove extra spacing in string</h3><br>". $trim_space_str;
       	echo "<h3>Count words in the string</h3><br>". $count_char;
       	dd();

    }

    public function wordCount(Request $request){
    	$str = $request->input('count_word');
       	$count_spec_word = substr_count($str,'Pakistan');
       	echo "<h3>Count(Pakistan) in string</h3><br>". $count_spec_word;
       	dd();
    }

}
