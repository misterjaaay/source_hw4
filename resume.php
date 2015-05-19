<?php
require_once 'function.php';
$cv = array (
		'Name' => 'Evgeniy Zarechenskiy',
		$personal_data = array (
				'Job title' => spellCheck (),
				'birthday' => array (
						'09',
						'03',
						'1985' 
				),
				'City' => 'Kharkiv',
				'Phone' => '+38(096)46-86-205',
				'email' => 'misterjaaay@gmail.com' 
		),
		$positions = array (
				array (
						'title' => 'System Administrator/ServiceDesk Engineer',
						'period' => 'August 2013 – current time',
						'company name' => 'Oracle Corporation (formerly TOA technologies)',
						'duties' => array (
								'1 supporting the corporate product ETAdirect',
								'2 manualshchina' 
						) 
				),
				array (
						'title' => 'Paraglider instructor, the head of the flying school',
						'period' => 'September 2012 – August 2013',
						'company name' => 'Speed riding school Pro Speed Riding (extreme sports)',
						'duties' => array (
								'1 supporting the corporate product ETAdirect',
								'2 Creating and optimizing of the corporate web page (speedriding.pro)' 
						) 
				),
				array (
						'title' => 'Paraglider instructor, the head of the flying school',
						'period' => 'September 2012 – August 2013',
						'company name' => 'Speed riding school Pro Speed Riding (extreme sports)',
						'duties' => array (
								'1 supporting the corporate product ETAdirect',
								'2 Creating and optimizing of the corporate web page (speedriding.pro)' 
						) 
				) 
		) 
);
$name = $cv ['Name'] [0];
$page_title = $cv ['Name'];
echo "<h1>";
echo $page_title;
echo "</h1>";
$letterArray = array (
		'A',
		'E',
		'I',
		'О',
		'U',
		'Y' 
);
$count = $personal_data ['birthday'];
foreach ( $personal_data as $a => $b ) {
	if (is_array ( $b )) {
		$b = implode ( '-', $personal_data ['birthday'] );
	}
	echo "<ul>";
	echo "<li>$a: $b</li>";
	echo "</ul>";
}
;

foreach ( $positions as $position ) {
	echo "<br /> *************";
	foreach ( $position as $key => $value ) {
		if (is_array ( $value )) {
			echo "<br /><b>$key:</b> ";
		} else
			echo "<br /><b>$key:</b> $value";
		foreach ( $value as $key1 => $val1 ) {
			echo "<br />&nbsp;&nbsp;&nbsp;&nbsp;$val1";
		}
	}
}
;




