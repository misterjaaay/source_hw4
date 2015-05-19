<?php
function myDump($a) {
	echo "<pre>";
	$dump = print_r ( $a );
	echo "</pre>";
	
	return $dump;
}
function spellCheck() {
	$$count;
	$sum = array_sum ( $count );
	$$letterArray;
	$$name;
	if (in_array ( $name [0], $letterArray ) && ($sum % 2) == 0) {
		$title = $personal_data ['Job title'] = "Noob PHP";
	} elseif (in_array ( $name [0], $letterArray ) && ($sum % 2) == 1) {
		$title = $personal_data ['Job title'] = 'Intern PHP';
	} elseif (! in_array ( $name [0], $letterArray ) && ($sum % 2) == 1) {
		$title = $personal_data ['Job title'] = "Intern PHP developer";
	} elseif (! in_array ( $name [0], $letterArray ) && ($sum % 2) == 0) {
		$title = $personal_data ['Job title'] = "Junior PHP developer";
	}
	;
	
	return $title;
}

// require ''returns fatal error if false;
// include ''returns warning if false;
function areaCircle($r) {
	$pi = pi ();
	$area = $pi * pow ( $r, 2 );
	
	return $area;
}
function areaRectangle($a, $b) {
	$area = $a * $b;
	
	return $area;
}
function areaTriangle($l, $r, $angle) {
	$area = ($l * $r * sin ( deg2rad ( $angle ) )) / 2;
	
	return $area;
}
function now($a) {
	$result = false;
	$a = date ( 'H:m' );
	$b = explode ( ":", $a );
	switch ($b) {
		case (($b [0] >= 5 && $b [0] <= 10) && ($b [1] >= 0 && $b [1] <= 59)) :
			$result = 'morning';
			break;
		case (($b [0] >= 11 && $b [0] <= 16) && ($b [1] >= 0 && $b [1] <= 59)) :
			$result = 'afternoon';
			break;
		case (($b [0] >= 17 && $b [0] <= 21) && ($b [1] >= 0 && $b [1] <= 59)) :
			$result = 'everning';
			break;
		case (($b [0] >= 1 && $b [0] <= 4) && ($b [1] >= 0 && $b [1] <= 59)) :
			$result = 'night';
	}
	
	return $result;
}
function factorial($fact) {
	$d = 1;
	for($i = 1; $i <= $fact; $i ++) {
		$d = $d * $i;
	}
	
	return $d;
}
function showArea() {
	$areais;
	$name = trim ( file_get_contents ( 'name.txt' ) );
	$lastname = trim ( file_get_contents ( 'lastname.txt' ) );
	
	$count = strlen ( $name ) + strlen ( $lastname );
	
	switch ($count) {
		case ($count > 10 && $count <= 12) :
			echo "площадь круга = ";
			$areais = areaCircle ( $count );
			break;
		case ($count >= 12 && $count <= 15) :
			echo "площадь прямоугольника = ";
			$areais = areaRectangle ( rand ( 1, 30 ), $count );
			break;
		case ($count >= 15) :
			echo "площадь круга = ";
			$areais = areaTriangle ( 10, strlen ( $name ), 60 );
			break;
		case ($count <= 10) :
			echo "factorial 10 = ";
			$areais = factorial ( 10 );
			break;
	}
	
	return $areais;
}

class Count {
	public function countWordsInArray() {
		$get_site_content = file_get_contents ( 'http://source-it.com.ua/teachers/' );
		$new_string = strip_tags ( $get_site_content );
		$pattern = "|Преподаватели Source IT(.+?)Полный перечень наших курсов:|is";
		preg_match ( $pattern, $new_string, $subject );
		$outcount = implode ( ' ', $subject );
		$result1 = str_word_count ( $outcount );

		return $result1;
	}
	public function printWordsIntoTable() {
		$get_site_content = file_get_contents ( 'http://source-it.com.ua/teachers/' );
		$new_string = strip_tags ( $get_site_content );
		$pattern = "|Преподаватели Source IT(.+?)Полный перечень наших курсов:|is";
		preg_match ( $pattern, $new_string, $subject );
		$out1 = preg_replace ( '/\s|\.|\“|\w\:|\:[^\w]|\ \-\ |\d(?!\-)|\«|\»|\,|\)|\(|\'|\}|\&#160;|\”|\&#8220;|\+|\ \&mdash;\ |&#|\;/', '*', $subject );
		$output = explode ( "*", $out1 [1] );

		echo "<table style='border:1px solid black;'>";
		echo '<tr><th>Слово</th><th>Вхождений</th></tr>';

		foreach ( (array_count_values ( $output )) as $key => $num ) {
			echo '<tr>';
			echo '<td>' . $key . '</td><td>' . $num . '</td>';
			echo "</tr>";
		}
		echo "</table>";
	}
}

