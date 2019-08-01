<?php
	
	class Bond25{
		public static $agentName ="Charlie Hunnam";
		public static $agentAge = 35;

		/*This declaration is valueless(you can delete this var),passing value to static method will not reach/assign here,bcoz we can't use 'this' in static method/variable.'this' needed to access global property*/
		public $agentState; 
		public $agentKey;



		public static function showInside(){

			echo "<br><br>";
			echo self::$agentName ."<br>";
			echo self::$agentAge;
			echo "<br><br>";

		} 


		public static function showOutside($state,$key){
			//just put sent value to another var($agentState)
			$agentState = $state;
			$agentKey = $key;

			return array($agentState,$agentKey);
		}





	}//class Bond25

?>