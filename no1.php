<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/


class list_school
{
	public $name;
	public $year_in;
	public $year_out;
	public $major;
}

class skills
{
	public $skill_name;
	public $level;
}



function no1($name,$age)
{


	$data['name'] = $name;
	$data['age'] = $age;
	$data['address'] = "Ds. Wangandalem Rt.06 Rw.03, Kec. Brebes, Kab. Brebes, Jawa Tengah";
	$data['hobbies'] =['football','vollley'];
	$data['is_married'] = false;


	$smk = new list_school();
	$smk->name = "SMK N 1 Brebes";
	$smk->year_in = "2012";
	$smk->year_out = "2015";
	$smk->major = "Teknik Komputer Jaringan";

	$kampus = new list_school();
	$kampus->name = "Politeknik Harapan Bersama";
	$kampus->year_in = "2015";
	$kampus->year_out = "2019";
	$kampus->major = "Teknik Informatika";

	$data['list_school'] = array ($smk, $kampus);
	
	$laravel = new skills();
	$laravel->skill_name = "Laravel";
	$laravel->level = "Beginner";
	
	$php = new skills();
	$php->skill_name = "PHP";
	$php->level = "Beginner";
	
	$html = new skills();
	$html->skill_name = "HTML";
	$html->level = "Beginner";
	
	$mysql = new skills();
	$mysql->skill_name = "MySQL";
	$mysql->level = "Beginner";

	$data['list_school'] = array ($laravel, $php, $html, $mysql);
	$data['interest_in_coding'] = true;

	return json_encode ($data);
}

$result = no1($_POST['name'],$_POST['age']);
echo $result;
