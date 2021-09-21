<?php 
class Helper{

		static function formatVNBirthday($date){
		$vnFormatDate = date("d/m/Y", strtotime($date));
		return $vnFormatDate;
	}

}
?>
