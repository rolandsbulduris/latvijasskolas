<?php 

function escaped_explode($string){
    $r=[];
    $stream = fopen('php://memory','r+');
    fwrite($stream, $string);
    rewind($stream);
    while (($data = fgetcsv($stream,0,chr(44),chr(34))) !== FALSE)
        $r=array_merge($r,$data);
    fclose($stream);
    return $r;
}


$myfile = fopen("data.csv","r");

$skola_examens = [];
$columns = [];
$rows = [];


while(!feof($myfile)) {
	$arr = escaped_explode(fgets($myfile), ',');
	
	$SKOLA = $arr[2];
	$EXAMENS = $arr[1];
	$PUNKTI = $arr[3];	
	
	array_push($columns, $EXAMENS);
	array_push($rows, $SKOLA);
		
	if(!isset($skola_examens[$SKOLA]) ) {
		$examens_punkti = [];
		$skola_examens[$SKOLA] = $examens_punkti;
	} else {
		$examens_punkti = $skola_examens[$SKOLA];
	}
	
	$examens_punkti[$EXAMENS] = $PUNKTI;
	
	$skola_examens[$SKOLA] = $examens_punkti;
}

fclose($myfile);

$rows = array_unique($rows);
$columns = array_unique($columns);

/*
foreach($skola_examens as $key => $value) {
	print("> " . $key . "<br/>");
	foreach($value as $k => $v) {
		print("  >>> " . $k . " >>> " . $v	 . "<br/>");
	}
}*/

print("<br/>");

print(",");
foreach($columns as $col) {
	print("\"" . $col . "\", ");
}

foreach($rows as $row) {
	print("<br/> \"". $row . "\", ");
	
	$examens_punkti = $skola_examens[$row];
	
	foreach($columns as $col) {
		if(isset($examens_punkti[$col]) ) {
			$punkti = $examens_punkti[$col];
			print($punkti );
		}
		print(", ");
	}
	
	
}



?>