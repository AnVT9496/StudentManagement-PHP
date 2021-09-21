<?php 
class Student {
	public $id;
	public $name;
	public $birthday;
	public $gender;


	function __construct($id, $name, $birthday, $gender){
		$this->id = $id;
		$this->name = $name;
		$this->birthday = $birthday;
		$this->gender = $gender;
	}

	// function getAge(){
	// 	$currentYear = date("Y");
	// 	$bornYear = date("Y", strtotime($this->birthday));
	// 	$age = $currentYear - $bornYear;
	// 	return $age;
	// }

	function getGenderName(){
		$map = [0 => "nam", 1 => "nu", 2 => "khac"];
		$genderName = $map[$this->gender];
		return $genderName;
	}


}

?>