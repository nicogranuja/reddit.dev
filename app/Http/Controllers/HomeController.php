<?php 
	namespace App\Http\Controllers;


	class HomeController extends Controller{

		public function roll($guess=0){
			$data['randomNum'] = [rand(1,6), rand(1,6),rand(1,6),rand(1,6),rand(1,6),rand(1,6)];
			$data ['guess'] = $guess;
			//more clear way	
			return view('codeup.roll-dice')->with($data);
		}

		public function increment($number=0) {
			if(is_numeric($number)){
				$data['number'] = ++$number;
				return view('codeup.increment')->with($data);
			    // return "number $number plus one is = ".++$number;
			}
			else{
				return "Value entered not a number";
			}
		}

		public function uppercase($word="empty") {
			if(is_string($word)){
				$data['upperCase'] = strtoupper($word);
				return view('codeup.uppercase')->with($data);
			    // return "Upper case word is: $upperCase";
			}
			else{
				return "Value not a string";
			}
		}

		public function lowercase($word="empty"){
			if(is_string($word)){
				$data['upperCase'] = strtolower($word);
				
				return view('codeup.uppercase')->with($data);
			    
			}
			else{
				return "Value not a string";
			}
		}


	}






 ?>