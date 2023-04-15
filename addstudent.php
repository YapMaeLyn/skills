<?php
	///addstudent.php
	include("util/dbhelper.php");
	if(isset($_POST['save'])){
		$idno=$_POST['idno'];
		$lastname=$_POST['lastname'];
		$firstname=$_POST['firstname'];
		$course=$_POST['course'];
		$level=$_POST['level'];
		//CHECK IF UPDATE
		$id=$_POST[id];
		
		if($id==null){_
		
			$ok=addrecord('student',['idno','lastname','firstname','course','level'],[$idno,$lastname,$firstname,$course,$level]);
		}
		else
			$ok=updaterecord('student',['idno','lastname','firstname','course','level'],[$idno,$lastname,$firstname,$course,$level]);
		
		if($ok)
			header("location:studentlist.php");
			
	}
?>