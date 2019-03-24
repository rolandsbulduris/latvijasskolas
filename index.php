<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Latvijas Skolas</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
  <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=745369ab-8ced-4ad2-bad3-17cec890df98" type="text/javascript"></script>
  <script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
  <script src="object_manager.js" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/rowreorder/1.2.5/js/dataTables.rowReorder.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js">
  </script>
  <script>
  $(document).ready(function() {
    $('#example3').DataTable( {
        "language": {
            "processing": "Uzgaidiet ...",
    "search": "Meklēt:",
    "lengthMenu": "Rādīt _MENU_ ierakstus",
    "info": "Parādīti _START_ līdz _END_ no _TOTAL_ ierakstiem",
    "infoEmpty": "Nav ierakstu",
    "infoFiltered": "(atlasīts no pavisam _MAX_ ierakstiem)",
    "infoPostFix": "",
    "loadingRecords": "Notiek ielāde ...",
    "zeroRecords": "Nav atrasti vaicājumam atbilstoši ieraksti",
    "emptyTable": "Tabulā nav datu",
    "paginate": {
        "first": "Pirmā",
        "previous": "Iepriekšējā",
        "next": "Nākošā",
        "last": "Pēdējā"
    },
    "aria": {
        "sortAscending": ": aktivizēt kolonnu, lai kārtotu augoši",
        "sortDescending": ": aktivizēt kolonnu, lai kārtotu dilstoši"
    }
        },
    rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    } );
} );
</script>
<script>
  $(document).ready(function() {
    $('#example').DataTable( {
        "language": {
            "processing": "Uzgaidiet ...",
    "search": "Meklēt:",
    "lengthMenu": "Rādīt _MENU_ ierakstus",
    "info": "Parādīti _START_ līdz _END_ no _TOTAL_ ierakstiem",
    "infoEmpty": "Nav ierakstu",
    "infoFiltered": "(atlasīts no pavisam _MAX_ ierakstiem)",
    "infoPostFix": "",
    "loadingRecords": "Notiek ielāde ...",
    "zeroRecords": "Nav atrasti vaicājumam atbilstoši ieraksti",
    "emptyTable": "Tabulā nav datu",
    "paginate": {
        "first": "Pirmā",
        "previous": "Iepriekšējā",
        "next": "Nākošā",
        "last": "Pēdējā"
    },
    "aria": {
        "sortAscending": ": aktivizēt kolonnu, lai kārtotu augoši",
        "sortDescending": ": aktivizēt kolonnu, lai kārtotu dilstoši"
    }
        },
    rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    } );
} );
</script>
<script>
  $(document).ready(function() {
    $('#example2').DataTable( {
        "language": {
            "processing": "Uzgaidiet ...",
    "search": "Meklēt:",
    "lengthMenu": "Rādīt _MENU_ ierakstus",
    "info": "Parādīti _START_ līdz _END_ no _TOTAL_ ierakstiem",
    "infoEmpty": "Nav ierakstu",
    "infoFiltered": "(atlasīts no pavisam _MAX_ ierakstiem)",
    "infoPostFix": "",
    "loadingRecords": "Notiek ielāde ...",
    "zeroRecords": "Nav atrasti vaicājumam atbilstoši ieraksti",
    "emptyTable": "Tabulā nav datu",
    "paginate": {
        "first": "Pirmā",
        "previous": "Iepriekšējā",
        "next": "Nākošā",
        "last": "Pēdējā"
    },
    "aria": {
        "sortAscending": ": aktivizēt kolonnu, lai kārtotu augoši",
        "sortDescending": ": aktivizēt kolonnu, lai kārtotu dilstoši"
    }
        },
    rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    } );
} );
</script>

  <style>
  .row {
  margin-right: 15px; margin-left: 15px;
  }
  html {
  
  }
  </style>
  <style>
        html, body, #map {

            width: 100%; height: 100%; padding: 0; margin: 0; margin-bottom: 2vw;
        }
        a {
            color: #04b; /* Цвет ссылки */
            text-decoration: none; /* Убираем подчеркивание у ссылок */
        }
        a:visited {
            color: #04b; /* Цвет посещённой ссылки */
        }
        a:hover {
            color: #f50000; /* Цвет ссылки при наведении на нее курсора мыши */
        }
        header {
	background-image: url("img/blackboard-board-chalk-625219.jpg");
	background-repeat: no-repeat;
	-moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */

}
@media screen and (max-width: 995px) {
header {
        background: url("img/blackboard-board-chalk-625219.jpg") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
}
    </style>	
</head>
<body style="background-color: white;font-family: 'Roboto', sans-serif;">
<header>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(255,255,255, 0.95);">
  <a class="navbar-brand" href="index.php"><img src="img/500px-flag-map_of_latvia-svg.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item">
        <a style="color:black;" href="index.php" class="nav-link"><i class="fas fa-map-marked-alt"></i> Skolu karte</a>
      </li>
      <li class="nav-item">
        <a style="color:black;" href="#example" class="nav-link"><i class="fas fa-star-half-alt"></i> Skolu reitings</a>
      </li>

      <li class="nav-item">
        <a style="color:black;" href="statistika.php" class="nav-link"><i class="fas fa-chart-bar"></i> Statistika</a>
      </li>
      <li class="nav-item">
        <a style="color:black;" href="pievienot.php" class="nav-link"><i class="fas fa-plus"></i> Pievienot skolu</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">
  Pilsētas un reģioni
</button>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pilsētas un reģioni</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
    <div class="col-xs-6 col-md-4">
      <a ></a>
    </div>
    <div class="col-xs-6 col-md-4">
      <a href="index.php" style="color: black;"><strong>LATVIJA (781)</strong></a>
    </div>
    <div class="col-xs-6 col-md-4">
      <a ></a>
    </div>
  </div>
<hr>
 <div class="row">
    <div class="col-xs-6 col-md-4">
      <a href="city/jekabpils.php">Jēkabpils (5)</a>
    </div>
    <div class="col-xs-6 col-md-4">
      <a href="city/valmiera.php">Valmiera (9)</a>
    </div>
    <div class="col-xs-6 col-md-4">
      <a href="city/daugavpils.php">Daugavpils (18)</a>
    </div>
  </div>
<hr>
  <div class="row">
    <div class="col-xs-6 col-md-4">
      <a href="city/jelgava.php">Jelgava (14)</a>
    </div>
    <div class="col-xs-6 col-md-4 ">
      <a href="city/jurmala.php">Jūrmala (17)</a>
          
    </div>
    <div class="col-xs-6 col-md-4 ">
      <a href="city/liepaja.php">Liepāja (18)</a>
          
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-xs-6 col-md-4 ">
      <a href="city/rezekne.php">Rēzekne (11)</a>
          
    </div>
    <div class="col-xs-6 col-md-4">
      <a href="city/ventspils.php">Ventspils (9)</a>
    </div>
    <div class="col-xs-6 col-md-4">
      <a href="city/riga.php">Rīga (150)</a>
    </div>
  </div>
  <hr>
    <div class="row">
    <div class="col-xs-6 col-md-4 ">
      <a style="color:gray;">Latgales reģions (114)</a>
          
    </div>
    <div class="col-xs-6 col-md-4">
      <a style="color:gray;">Rīgas reģions (106)</a>
    </div>
    <div class="col-xs-6 col-md-4">
      <a style="color:gray;">Vidzemes reģions (120)</a>
    </div>
  </div>
<hr>
    <div class="row">
    <div class="col-xs-6 col-md-4 ">
      <a style="color:gray;">Zemgales reģions (94)</a>
          
    </div>
    <div class="col-xs-6 col-md-4">
      <a style="color:gray;">Kurzemes reģions (96)</a>
    </div>
    <div class="col-xs-6 col-md-4">
      <a href="city/kurzeme.php"></a>
    </div>
  </div>

    
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Aizvēt</button>
      </div>
    </div>
  </div>
</div>
    </form>
  </div>
</nav>
		<div class="offer">
			<div class="offer-content-b">
				
			</div>
      <div class="row" style="">
			<div class=" col-12 text-center" style="">
				<h1 style="font-size: 6vh"class="">Palīdzam izvēlēties skolu!</h1>
				<p style="font-size: 3vh;">Balstoties uz atvērtajiem datiem un izmantojot oficiālalo informāciju esam izveidojuši tīmekļa lapu, kurā ir uzkrāta galvenā informācija par visām vispārizglītojošām Latvijas skolām.</p>	
			</div>
      
		</div>
    <div class="row">
      <div class=" col-12 text-center">
        <h1 style="text-decoration: underline;font-size: 5vh"><strong>LATVIJA</strong></h1>
        <div class="row" style="background-color: rgb(0,0,0, 0.5);">
        <div class="col-6">
          <h2 style="font-size: 5vh"><strong><i class="fas fa-university"></i></strong></h2>
          <h5 style="font-size: 3vh"><strong>SKOLU SKAITS</strong></h5>
          <h3 style="font-size: 5vh"> 781</h3>
        </div>
        <div class="col-6">
          
          <h2 style="font-size: 5vh"><strong><i class="fas fa-users"></i></strong></h2>
          <h5 style="font-size: 3vh"><strong>SKOLĒNU SKAITS</strong></h5>
          <h3 style="font-size: 5vh">215053</h3>
        </div>
        <div class="col-12">
          <p style="font-size: 3vh;border-top: 3px solid rgb(0,0,0,0.5); padding-top: 1vh">Kopējie eksāmenu rezultāti:</p>
          <div class="row" style="background-color: rgb(0,0,0,0.5);">
        <div class="col-12 col-sm-4">
          <h2 style="font-size: 5vh"><strong></strong></h2>
          <h5 style="font-size: 3vh"><strong>Matemātika</strong></h5>
          <h3 style="font-size: 5vh">34,6%</h3>
        </div>
        <div class="col-12 col-sm-4">
          
          <h2 style="font-size: 5vh"><strong></strong></h2>
          <h5 style="font-size: 3vh;"><strong>Latvijas un pasaules vēsture</strong></h5>
          <h3 style="font-size: 5vh">40%</h3>
        </div>
        <div class="col-12 col-sm-4">
          
          <h2 style="font-size: 5vh"><strong></strong></h2>
          <h5 style="font-size: 3vh"><strong>Latviešu valoda</strong></h5>
          <h3 style="font-size: 5vh">52,5%</h3>

        </div>
        <div class="container">
        <button class="btn btn-dark" style="background-color: rgb(0,0,0,0.5)" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Vairāk <i class="fas fa-sort-amount-down"></i></button>
        </div>
      </div>
      
      <div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body"style="background-color: rgb(0,0,0,0.5)">
        <h2 style="font-size: 5vh"><strong></strong></h2>
          <h5 style="font-size: 3vh"><strong>Ķīmija</strong></h5>
          <h3 style="font-size: 5vh">61,44%</h3>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body" style="background-color: rgb(0,0,0,0.5)">
        <h2 style="font-size: 5vh"><strong></strong></h2>
          <h5 style="font-size: 3vh"><strong>Bioloģija</strong></h5>
          <h3 style="font-size: 5vh">60,78%</h3>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body" style="background-color: rgb(0,0,0,0.5)">
        <h2 style="font-size: 5vh"><strong></strong></h2>
          <h5 style="font-size: 3vh"><strong>Fizika</strong></h5>
          <h3 style="font-size: 5vh">39,81%</h3>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body"style="background-color: rgb(0,0,0,0.5)">
        <h2 style="font-size: 5vh"><strong></strong></h2>
          <h5 style="font-size: 3vh"><strong>Franču valoda</strong></h5>
          <h3 style="font-size: 5vh">67,86%</h3>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body" style="background-color: rgb(0,0,0,0.5)">
        <h2 style="font-size: 5vh"><strong></strong></h2>
          <h5 style="font-size: 3vh"><strong>Krievu valoda</strong></h5>
          <h3 style="font-size: 5vh">70,32%</h3>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body" style="background-color: rgb(0,0,0,0.5)">
        <h2 style="font-size: 5vh"><strong></strong></h2>
          <h5 style="font-size: 3vh"><strong>Vācu valoda</strong></h5>
          <h3 style="font-size: 5vh">72%</h3>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card " style="background-color: rgb(0,0,0,0.5)">
        <h2 style="font-size: 5vh"><strong></strong></h2>
          <h5 style="font-size: 3vh"><strong>Angļu valoda</strong></h5>
          <h3 style="font-size: 5vh">61,86%</h3>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      
    </div>
  </div>
</div>
        </div>
      </div>
      </div>
      
    </div>
    <div class="row">
        <div class="col-6">
          
        </div>
        <div class="col-6">
          
        </div>
      </div>
  </header>
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














?>
<div id="map"></div>
<div class="row">
  <div class="col-12 text-center">
    <strong><h1 style="font-size: 5vh">Latvijas vispārizglītojošo skolu eksāmenu rezultāti (%)<h1></strong>
  </div>
</div>
<table id="example" class="display nowrap" style="width:100%; ">
        <thead>
            <tr>
            	<th>Izglītības iestāde</th>
            	<?php 

            	foreach($columns as $col) {

				print("<th>". $col . "</th>");

				}
            	 ?>
                
            </tr>
        </thead>
        <tbody>

        		<?php 
        		foreach($rows as $row) {
    print("<tr>");

	print("<td>" . $row . "</td>");

	

	$examens_punkti = $skola_examens[$row];

	

	foreach($columns as $col) {

		if(isset($examens_punkti[$col]) ) {

			$punkti = $examens_punkti[$col];

			print("<td>".$punkti ."</td>" );

		} else {
			print("<td>-</td>" );
		}


	}

	

	
print("</tr>");
}

        		 ?>
        </tbody>
        <tfoot>

            <tr>
            	<th>Izglītības iestāde</th>
            	<?php 

            	foreach($columns as $col) {

				print("<th>" . $col . "</th>");

				}
            	 ?>
                
            </tr>
        </tfoot>
    </table>
<div class="row">
  <div class="col-12 text-center">
    <strong><h1 style="font-size: 5vh">Olimpiāžu rezultāti 2017./2018.mācību gadā<h1></strong>
  </div>
</div>
<table id="example2" class="display nowrap" style="width:100%; ">
        <thead>
            <tr>
              <th>Izglītības iestāde</th>
              <th>Olimpiāde</th>
              <th>Diploms</th>
            </tr>
        </thead>
        <tbody>
<tr> 
    <td>Rīgas Valsts 1. ģimnāzija</td>
    <td>Vēstures valsts 24. olimpiādes 12. klašu rezultāti</td>
    <td>II pakāpe</td>
</tr>
<tr> 
    <td>Rudzātu vidusskola</td>
    <td>Vēstures valsts 24. olimpiādes 12. klašu rezultāti</td>
    <td>III pakāpe</td>
</tr>
<tr> 
    <td>Jūrmalas Valsts ģimnāzija</td>
    <td>Vēstures valsts 24. olimpiādes 12. klašu rezultāti</td>
    <td>III pakāpe</td>
</tr>
<tr> 
    <td>Daugavpils Valsts ģimnāzija</td>
    <td>Vēstures valsts 24. olimpiādes 12. klašu rezultāti</td>
    <td>I pakāpe</td>
</tr>
<tr> 
    <td>Dobeles Valsts ģimnāzija</td>
    <td>Vēstures valsts 24. olimpiādes 12. klašu rezultāti</td>
    <td>III pakāpe</td>
</tr>
<tr> 
    <td>Cēsu Valsts ģimnāzija</td>
    <td>Vēstures valsts 24. olimpiādes 12. klašu rezultāti</td>
    <td>I pakāpe</td>
</tr>
<tr> 
    <td>Zemgales vidusskola</td>
    <td>Vēstures valsts 24. olimpiādes 12. klašu rezultāti</td>
    <td>II pakāpe</td>
</tr>
<tr> 
    <td>Valmieras Viestura vidusskola</td>
    <td>Vēstures valsts 24. olimpiādes 12. klašu rezultāti</td>
    <td>II pakāpe</td>
</tr>
<tr> 
    <td>Jelgavas Spīdolas ģimnāzija</td>
    <td>Vēstures valsts 24. olimpiādes 12. klašu rezultāti</td>
    <td>II pakāpe</td>
</tr>
<tr> 
    <td>Rīgas 84. vidusskola</td>
    <td>Vēstures valsts 24. olimpiādes 12. klašu rezultāti</td>
    <td>III pakāpe</td>
</tr>
<tr> 
    <td>Siguldas Valsts ģimnāzija</td>
    <td>Vēstures valsts 24. olimpiādes 12. klašu rezultāti</td>
    <td>II pakāpe</td>
</tr>
<tr>
  <td>Kandavas novada Zantes pamatskola</td>
  <td>Vēstures valsts 24.olimpiādes 9. klašu rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Mārupes vidusskola</td>
  <td>Vēstures valsts 24.olimpiādes 9. klašu rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Kultūru vidusskola</td>
  <td>Vēstures valsts 24.olimpiādes 9. klašu rezultāti</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Jelgavas Valsts ģimnāzija</td>
  <td>Vēstures valsts 24.olimpiādes 9. klašu rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija</td>
  <td>Vēstures valsts 24.olimpiādes 9. klašu rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 3. ģimnāzija</td>
  <td>Vēstures valsts 24.olimpiādes 9. klašu rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Siguldas Valsts ģimnāzija</td>
  <td>Vēstures valsts 24.olimpiādes 9. klašu rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija</td>
  <td>Vēstures valsts 24.olimpiādes 9. klašu rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Jūrmalas Valsts ģimnāzija</td>
  <td>Vēstures valsts 24.olimpiādes 9. klašu rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 2. ģimnāzija</td>
  <td>Vēstures valsts 24.olimpiādes 9. klašu rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Franču licejs</td>
  <td>Vēstures valsts 24.olimpiādes 9. klašu rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Berģu Mūzikas un mākslas pamatskola</td>
  <td>Vēstures valsts 24.olimpiādes 9. klašu rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Līvānu 1.vidusskola</td>
  <td>Vēstures valsts 24.olimpiādes 9. klašu rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Jelgavas Spīdolas ģimnāzija</td>
  <td>Vēstures valsts 24.olimpiādes 9. klašu rezultāti</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Rūjienas vidusskola</td>
  <td>Vēstures valsts 24.olimpiādes 9. klašu rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Amatas pamatskola</td>
  <td>Vēstures valsts 24.olimpiādes 9. klašu rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Daugavpils Krievu vidusskola- licejs</td>
  <td>Vēstures valsts 24.olimpiādes 9. klašu rezultāti</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija</td>
  <td>Ekonomikas valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Olaines 1. vidusskola</td>
  <td>Ekonomikas valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Daugavpils Krievu vidusskola - licejs</td>
  <td>Ekonomikas valsts 19.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas 40. vidusskola</td>
  <td>Ekonomikas valsts 19.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Jēkabpils Valsts ģimnāzija</td>
  <td>Ekonomikas valsts 19.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Daugavpils Krievu vidusskola - licejs</td>
  <td>Ekonomikas valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Daugavpils Krievu vidusskola - licejs</td>
  <td>Ekonomikas valsts 19.olimpiādes rezultāti</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Daugavpils Valsts ģimnāzija</td>
  <td>Ekonomikas valsts 19.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija</td>
  <td>Ekonomikas valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Viesītes vidusskola</td>
  <td>Ekonomikas valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Jelgavas Spīdolas ģimnāzija</td>
  <td>Ekonomikas valsts 19.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>RTU inženierzinātņu vidusskola</td>
  <td>Ekonomikas valsts 19.olimpiādes rezultāti</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija</td>
  <td>Ekonomikas valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Viesītes vidusskola</td>
  <td>Ekonomikas valsts 19.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija</td>
  <td>Ekonomikas valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Olaines 1. vidusskola</td>
  <td>Ekonomikas valsts 19.olimpiādes rezultāti</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija</td>
  <td>Ekonomikas valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Daugavpils Krievu vidusskola - licejs</td>
  <td>Ekonomikas valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Cēsu Valsts ģimnāzija</td>
  <td>Ekonomikas valsts 19.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas 45. vidusskola</td>
  <td>Filozofijas valsts 4.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas 72. vidusskola</td>
  <td>Filozofijas valsts 4.olimpiādes rezultāti</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Rīgas Klasiskā ģimnāzija</td>
  <td>Filozofijas valsts 4.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija</td>
  <td>Filozofijas valsts 4.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Draudzīgā Aicinājuma Cēsu Valsts ģimnāzija</td>
  <td>Filozofijas valsts 4.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Jēkabpils 3.vidusskola</td>
  <td>Filozofijas valsts 4.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Valmieras Pārgaujas ģimnāzija</td>
  <td>Filozofijas valsts 4.olimpiādes rezultāti</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Tukuma Raiņa ģimnāzija</td>
  <td>Filozofijas valsts 4.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rēzeknes valsts poļu ģimnāzija</td>
  <td>Filozofijas valsts 4.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Daugavpils Valsts ģimnāzija</td>
  <td>Filozofijas valsts 4.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Tukuma Raiņa ģimnāzija</td>
  <td>Filozofijas valsts 4.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija</td>
  <td>Filozofijas valsts 4.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija     </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rēzeknes 5. vidusskola      </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Itas Kozakēvičas Poļu vidusskola      </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rēzeknes Valsts 1. ģimnāzija      </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>J. Pilsudska Daugavpils Valsts poļu ģimnāzija       </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Maltas vidusskola       </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>II pakāpe </td>
</tr>
<tr>
  <td>Ciblas vidusskola       </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Kuldīgas Mākslas un humanitāro zinību vidusskola        </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>II pakāpe </td>
</tr>
<tr>
  <td>Rīgas Ukraiņu vidusskola        </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Daugavpils Valsts ģimnāzija     </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 2. ģimnāzija     </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Rīgas Natālijas Draudziņas vidusskola     </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Jūrmalas Valsts ģimnāzija     </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Daugavpils Valsts ģimnāzija     </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Āgenskalna Valsts ģimnāzija       </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Daugavpils Valsts ģimnāzija       </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>II pakāpe </td>
</tr>
<tr>
  <td>Kalnciema pagasta vidusskola        </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>II pakāpe </td>
</tr>
<tr>
  <td>Rīgas Valsts 2. ģimnāzija       </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Ventspils Valsts 1. gimnāzija       </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Salaspils 2. vidusskola       </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>II pakāpe </td>
</tr>
<tr>
  <td>Daugavpils Valsts ģimnāzija       </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>II pakāpe </td>
</tr>
<tr>
  <td>Vangažu vidusskola        </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>RTU Inženierzinātņu vidusskola        </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>E. Glika Alūksnes Valsts ģimnāzija          </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>II pakāpe   </td>
</tr>
<tr>
  <td>Ludzas 2. vidusskola          </td>
  <td>Krievu valodas (svešvalodas) valsts 22.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Alfrēda Kalniņa Cēsu Mūzikas vidusskola</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Bauskas Valsts ģimnāzija</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Alojas Ausekļa vidusskola</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Valmieras Pārgaujas ģimnāzija</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Āgenskalna Valsts ģimnāzija</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Siguldas Valsts ģimnāzija</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Centra humanitārā vidusskola</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 2. ģimnāzija</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Mārupes vidusskola</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Jūrmalas Valsts ģimnāzija</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Daugavpils Valsts ģimnāzija</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Āgenskalna Valsts ģimnāzija</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Franču licejs</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas 64. vidusskola</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Ventspils Valsts 1. ģimnāzija</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Franču licejs</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Jelgavas Spīdolas ģimnāzija</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>RTU inženierzinātņu vidusskola</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Āgenskalna Valsts ģimnāzija</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Andreja Upīša Skrīveru vidusskola</td>
  <td>Latviešu valodas 11.-12.klašu valsts 44.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija</td>
  <td>Angļu valodas 10.-12.klašu valsts 47. olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Ziemeļvalstu ģimnāzija</td>
  <td>Angļu valodas 10.-12.klašu valsts 47. olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Valkas Jāņa Cimzes ģimnāzija</td>
  <td>Angļu valodas 10.-12.klašu valsts 47. olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Cēsu Valsts ģimnāzija</td>
  <td>Angļu valodas 10.-12.klašu valsts 47. olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 3. ģimnāzija</td>
  <td>Angļu valodas 10.-12.klašu valsts 47. olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Ķekavas vidusskola</td>
  <td>Angļu valodas 10.-12.klašu valsts 47. olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Draudzīgā Aicinājuma Cēsu Valsts ģimnāzija</td>
  <td>Angļu valodas 10.-12.klašu valsts 47. olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Oskara Kalpaka Liepājas 15. vidusskola</td>
  <td>Angļu valodas 10.-12.klašu valsts 47. olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Franču licejs</td>
  <td>Angļu valodas 10.-12.klašu valsts 47. olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>RTU inženierzinātņu vidusskola</td>
  <td>Angļu valodas 10.-12.klašu valsts 47. olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Siguldas Valsts ģimnāzija</td>
  <td>Angļu valodas 10.-12.klašu valsts 47. olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Valmieras Pārgaujas ģimnāzija</td>
  <td>Angļu valodas 10.-12.klašu valsts 47. olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Centra humanitārā vidusskola</td>
  <td>Angļu valodas 10.-12.klašu valsts 47. olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Rēzeknes Valsts 1. ģimnāzija</td>
  <td>Angļu valodas 10.-12.klašu valsts 47. olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Jelgavas Valsts ģimnāzija</td>
  <td>Angļu valodas 10.-12.klašu valsts 47. olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Rīgas Franču licejs</td>
  <td>Angļu valodas 10.-12.klašu valsts 47. olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>  Siguldas Valsts ģimnāzija</td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>  Inčukalna pamatskola</td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>  Jēkabpils Valsts ģimnāzija</td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>  Rīgas Hanzas vidusskola</td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>  Dobeles Valsts ģimnāzija</td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>  Ulbrokas vidusskola</td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>  Edgara Kauliņa Lielvārdes vidusskola</td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>  Daugavpils Saskaņas pamatskola</td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>  Rēzeknes Katoļu vidusskola</td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>  Rīgas Valsts 1. ģimnāzija</td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>  Siguldas Valsts ģimnāzija</td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>  Daugavpils Saskaņas pamatskola</td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>  Rēzeknes Valsts 1.ģimnāzija</td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Liepājas Valsts 1.ģimnāzija </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Āgenskalna Valsts ģimnāzija </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Cēsu Valsts ģimnāzija </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>RTU Inženierzinātņu vidusskola  </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Ventspils Valsts 1. ģimnāzija </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rēzeknes Valsts 1.ģimnāzija </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rudzātu vidusskola  </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Ventspils Valsts 1. ģimnāzija </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Āgenskalna Valsts ģimnāzija </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas 22.vidusskola </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>RTU Inženierzinātņu vidusskola  </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>RTU Inženierzinātņu vidusskola  </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas 92.vidusskola </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Jelgavas Tehnoloģiju vidusskola </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Daugavpils Valsts ģimnāzija </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas 10. vidusskola  </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rēzeknes 5.vidusskola </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Ventspils Valsts 1. ģimnāzija </td>
  <td>Bioloģijas valsts 40.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas 49.vidusskola</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Dobeles Valsts ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Daugavpils Krievu vidusskola - licejs</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Daugavpils Krievu vidusskola - licejs</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 3. ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Siguldas Valsts ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 3. ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Jūrmalas pilsētas Jaundubultu vidusskola</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Rīgas Doma kora skola</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Līvānu 1.vidusskola</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas 25.vidusskola</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>RTU Inženierzinātņu vidusskola</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>RTU Inženierzinātņu vidusskola</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Kuldīgas Centra vidusskola</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Smiltenes vidusskola</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Cēsu Valsts ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Liepājas A.Puškina 2.vidusskola</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Liepājas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Siguldas Valsts ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Āgenskalna Valsts ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Daugavpils Krievu vidusskola - licejs</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Rīgas 13.vidusskola</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Daugavpils Krievu vidusskola - licejs</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>RTU Inženierzinātņu vidusskola</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Klasiskā ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>RTU Inženierzinātņu vidusskola</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>RTU Inženierzinātņu vidusskola</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 2.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Valmieras Valsts ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Olaines 2.vidusskola</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Jelgavas Spīdolas ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Jūrmalas Valsts ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>RTU Inženierzinātņu vidusskola</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1.ģimnāzija</td>
  <td>Matemātikas valsts 68.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>  Dobeles Valsts ģimnāzija</td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>  Rīgas Valsts 1. ģimnāzija</td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>  Rīgas Valsts 1. ģimnāzija</td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>  Rīgas Valsts 1. ģimnāzija</td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>  Privātā vidusskola "Laisma"</td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>  Rīgas Klasiskā ģimnāzija</td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>  Daugavpils Saskaņas pamatskola</td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>  Rūjienas vidusskola</td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>  Jūrmalas Alternatīvā skola</td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>  Rīgas Valsts 1. ģimnāzija</td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Valmieras Pārgaujas ģimnāzija </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>RTU inženierzinātņu vidusskola  </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Ogres Valsts ģimnāzija  </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Daugavpils Krievu vidusskola - licejs </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Rīnūžu vidusskola </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Jāņa Eglīša Preiļu Valsts ģimnāzija </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>RTU inženierzinātņu vidusskola  </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Liepājas 7. vidusskola  </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Liepājas Valsts 1. ģimnāzija  </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas 72. vidusskola  </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Daugavpils Valsts ģimnāzija </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>RTU inženierzinātņu vidusskola  </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas 22. vidusskola  </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>RTU inženierzinātņu vidusskola  </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rēzeknes Valsts 1. ģimnāzija  </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>RTU inženierzinātņu vidusskola  </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>RTU inženierzinātņu vidusskola  </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Klasiskā ģimnāzija  </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Daugavpils 3. vidusskola  </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas 95. vidusskola  </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas 40. vidusskola  </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rēzeknes 5. vidusskola  </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Āgenskalna Valsts ģimnāzija </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija </td>
  <td>Ķīmijas valsts 59.olimpiāde</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>  Ernsta Glika Alūksnes Valsts ģimnāzija</td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe  </td>
</tr>
<tr>
  <td>  Ezernieku vidusskola</td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>I pakāpe  </td>
</tr>
<tr>
  <td>  Rīgas 64. vidusskola</td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>II pakāpe </td>
</tr>
<tr>
  <td>  Ventspils Valsts 1. ģimnāzija</td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>I pakāpe  </td>
</tr>
<tr>
  <td>  Valdemārpils vidusskola</td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>II pakāpe </td>
</tr>
<tr>
  <td>  Ventspils Valsts 1. ģimnāzija</td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe  </td>
</tr>
<tr>
  <td>  Riebiņu vidusskola</td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe  </td>
</tr>
<tr>
  <td>Auces  vidusskola </td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe  </td>
</tr>
<tr>
  <td>Ernsta Glika Alūksnes Valsts ģimnāzija  </td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe  </td>
</tr>
<tr>
  <td>Raunas  vidusskola  </td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe  </td>
</tr>
<tr>
  <td>Pļaviņu novada ģimnāzija  </td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>II pakāpe </td>
</tr>
<tr>
  <td>Lielvārdes  pamatskola  </td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>I pakāpe  </td>
</tr>
<tr>
  <td>Talsu 2. vidusskola . </td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>II pakāpe </td>
</tr>
<tr>
  <td>Dagdas  vidusskola  </td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>I pakāpe  </td>
</tr>
<tr>
  <td>Rīgas 94. vidusskola  </td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>II pakāpe </td>
</tr>
<tr>
  <td>Aizkraukles novada vidusskola </td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>II pakāpe </td>
</tr>
<tr>
  <td>Druvas  vidusskola  </td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe  </td>
</tr>
<tr>
  <td>Balvu Valsts ģimnāzija  </td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>I pakāpe  </td>
</tr>
<tr>
  <td>Augstkalnes  vidusskola </td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe  </td>
</tr>
<tr>
  <td>Kuldīgas  pamatskola  </td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>I pakāpe  </td>
</tr>
<tr>
  <td>Liepājas 7. vidusskola  </td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe  </td>
</tr>
<tr>
  <td>Rugāju novada Eglaines pamatskola </td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe  </td>
</tr>
<tr>
  <td>Mežciema pamatskola </td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>II pakāpe </td>
</tr>
<tr>
  <td>Mazsalacas  vidusskola  </td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe  </td>
</tr>
<tr>
  <td>Jēkabpils 2. vidusskola </td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe  </td>
</tr>
<tr>
  <td>O.Kalpaka Rīgas Tautas daiļamatniecības  pamatskola </td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>III pakāpe  </td>
</tr>
<tr>
  <td>Nītaures  vidusskola  </td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>II pakāpe </td>
</tr>
<tr>
  <td>  Ogres 1. vidusskola</td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>  III pakāpe</td>
</tr>
<tr>
  <td>  Ugāles vidusskola</td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>  III pakāpe</td>
</tr>
<tr>
  <td>  Baumaņa Kārļa Viļķenes pamatskola</td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>  II pakāpe</td>
</tr>
<tr>
  <td>  Rūjienas vidusskola</td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>  II pakāpe</td>
</tr>
<tr>
  <td>  Rīgas Juglas vidusskola</td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>  II pakāpe</td>
</tr>
<tr>
  <td>  Ventspils Valsts 1. ģimnāzija</td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>  II pakāpe</td>
</tr>
<tr>
  <td>  Maltas vidusskola</td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>  III pakāpe</td>
</tr>
<tr>
  <td>  Bauskas pilsētas pamatskola</td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>  I pakāpe</td>
</tr>
<tr>
  <td>  Rīgas Teikas vidusskola</td>
  <td>Mājturības un tehnoloģiju un mājsaimniecības valsts 19.olimpiādes rezultāti</td>
  <td>  I pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 3. ģimnāzija       </td>
  <td>Fizikas valsts 68.olimpiādes rezultāti</td>
  <td>II pakāpe   </td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija       </td>
  <td>Fizikas valsts 68.olimpiādes rezultāti</td>
  <td>I pakāpe    </td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija       </td>
  <td>Fizikas valsts 68.olimpiādes rezultāti</td>
  <td>II pakāpe   </td>
</tr>
<tr>
  <td>Nacionālā Mākslu vidusskola       </td>
  <td>Fizikas valsts 68.olimpiādes rezultāti</td>
  <td>I pakāpe    </td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija       </td>
  <td>Fizikas valsts 68.olimpiādes rezultāti</td>
  <td>III pakāpe    </td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija       </td>
  <td>Fizikas valsts 68.olimpiādes rezultāti</td>
  <td>III pakāpe    </td>
</tr>
<tr>
  <td>Āgenskalna Valsts ģimnāzija       </td>
  <td>Fizikas valsts 68.olimpiādes rezultāti</td>
  <td>I pakāpe  </td>
</tr>
<tr>
  <td>RTU inženierzinātņu vidusskola        </td>
  <td>Fizikas valsts 68.olimpiādes rezultāti</td>
  <td>II pakāpe </td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija       </td>
  <td>Fizikas valsts 68.olimpiādes rezultāti</td>
  <td>I pakāpe  </td>
</tr>
<tr>
  <td>Liepājas Valsts 1. ģimnāzija        </td>
  <td>Fizikas valsts 68.olimpiādes rezultāti</td>
  <td>II pakāpe </td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija       </td>
  <td>Fizikas valsts 68.olimpiādes rezultāti</td>
  <td>III pakāpe  </td>
</tr>
<tr>
  <td>RTU inženierzinātņu vidusskola    </td>
  <td>Fizikas valsts 68.olimpiādes rezultāti</td>
  <td>II pakāpe   </td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija   </td>
  <td>Fizikas valsts 68.olimpiādes rezultāti</td>
  <td>III pakāpe    </td>
</tr>
<tr>
  <td>RTU inženierzinātņu vidusskola    </td>
  <td>Fizikas valsts 68.olimpiādes rezultāti</td>
  <td>I pakāpe    </td>
</tr>
<tr>
  <td>Daugavpils Krievu vidusskola - licejs   </td>
  <td>Fizikas valsts 68.olimpiādes rezultāti</td>
  <td>III pakāpe    </td>
</tr>
<tr>
  <td>Aizkraukles novada vidusskola   </td>
  <td>Fizikas valsts 68.olimpiādes rezultāti</td>
  <td>II pakāpe   </td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija   </td>
  <td>Fizikas valsts 68.olimpiādes rezultāti</td>
  <td>III pakāpe    </td>
</tr>
<tr>
  <td>Rīgas 25. vidusskola    </td>
  <td>Informātikas valsts 31.olimpiādes rezultāti</td>
  <td>III pakāpe    </td>
</tr>
<tr>
  <td>Rīgas 10.vidusskola   </td>
  <td>Informātikas valsts 31.olimpiādes rezultāti</td>
  <td>I pakāpe    </td>
</tr>
<tr>
  <td>Saldus vidusskola   </td>
  <td>Informātikas valsts 31.olimpiādes rezultāti</td>
  <td>III pakāpe    </td>
</tr>
<tr>
  <td>Iļģuciema vidusskola, Tehniskās jaunrades nams "Annas 2"    </td>
  <td>Informātikas valsts 31.olimpiādes rezultāti</td>
  <td>III pakāpe    </td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija   </td>
  <td>Informātikas valsts 31.olimpiādes rezultāti</td>
  <td>III pakāpe    </td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija   </td>
  <td>Informātikas valsts 31.olimpiādes rezultāti</td>
  <td>III pakāpe    </td>
</tr>
<tr>
  <td>Cēsu Valsts ģimnāzija   </td>
  <td>Informātikas valsts 31.olimpiādes rezultāti</td>
  <td>II pakāpe   </td>
</tr>
<tr>
  <td>Rīgas Doma kora skola, Tehniskās jaunrades nams "Annas 2"   </td>
  <td>Informātikas valsts 31.olimpiādes rezultāti</td>
  <td>II pakāpe   </td>
</tr>
<tr>
  <td>RTU inženierzinātņu vidusskola    </td>
  <td>Informātikas valsts 31.olimpiādes rezultāti</td>
  <td>II pakāpe   </td>
</tr>
<tr>
  <td>Liepājas Valsts 1.ģimnāzija   </td>
  <td>Informātikas valsts 31.olimpiādes rezultāti</td>
  <td>I pakāpe    </td>
</tr>
<tr>
  <td>Informācijas sistēmu menedžmenta augstskolas vidusskola PREMJERS</td>
  <td>Informātikas valsts 31.olimpiādes rezultāti</td>
  <td>I pakāpe    </td>
</tr>
<tr>
  <td>Druvas vidusskola</td>
  <td>Informātikas valsts 31.olimpiādes rezultāti</td>
  <td>II pakāpe   </td>
</tr>
<tr>
  <td>Rīgas 88.vidusskola</td>
  <td>Informātikas valsts 31.olimpiādes rezultāti</td>
  <td>III pakāpe    </td>
</tr>
<tr>
  <td>Cēsu Valsts ģimnāzija</td>
  <td>Informātikas valsts 31.olimpiādes rezultāti</td>
  <td>II pakāpe   </td>
</tr>
<tr>
  <td>Rīgas 96. vidusskola</td>
  <td>Informātikas valsts 31.olimpiādes rezultāti</td>
  <td>III pakāpe    </td>
</tr>
<tr>
  <td>Rīgas 88.vidusskola</td>
  <td>Informātikas valsts 31.olimpiādes rezultāti</td>
  <td>III pakāpe    </td>
</tr>
<tr>
  <td>Jūrmalas Valsts ģimnāzija</td>
  <td>Informātikas valsts 31.olimpiādes rezultāti</td>
  <td>I pakāpe    </td>
</tr>
<tr>
  <td>Rīgas Klasiskā ģimnāzija</td>
  <td>Informātikas valsts 31.olimpiādes rezultāti</td>
  <td>II pakāpe   </td>
</tr>
<tr>
  <td>Rīgas 92. vidusskola</td>
  <td>Ģeogrāfijas valsts 35.olimpiādes rezultāti</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Iļģuciema vidusskola</td>
  <td>Ģeogrāfijas valsts 35.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Ropažu vidusskola</td>
  <td>Ģeogrāfijas valsts 35.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 3. ģimnāzija</td>
  <td>Ģeogrāfijas valsts 35.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Jēkabpils Valsts ģimnāzija</td>
  <td>Ģeogrāfijas valsts 35.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Ziemeļvalstu ģimnāzija</td>
  <td>Ģeogrāfijas valsts 35.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Daugavgrīvas vidusskola</td>
  <td>Ģeogrāfijas valsts 35.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rēzeknes 5. vidusskola</td>
  <td>Ģeogrāfijas valsts 35.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 2. ģimnāzija</td>
  <td>Ģeogrāfijas valsts 35.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Madonas Valsts ģimnāzija</td>
  <td>Ģeogrāfijas valsts 35.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija</td>
  <td>Ģeogrāfijas valsts 35.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Cēsu Valsts ģimnāzija</td>
  <td>Ģeogrāfijas valsts 35.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Privātā vidusskola "Laisma"</td>
  <td>Ģeogrāfijas valsts 35.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija</td>
  <td>Ģeogrāfijas valsts 35.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>RTU inženierzinātņu vidusskola</td>
  <td>Ģeogrāfijas valsts 35.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>
<tr>
  <td>Jelgavas Spīdolas ģimnāzija</td>
  <td>Ģeogrāfijas valsts 35.olimpiādes rezultāti</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Āgenskalna Valsts ģimnāzija</td>
  <td>Ģeogrāfijas valsts 35.olimpiādes rezultāti</td>
  <td>I pakāpe</td>
</tr>
<tr>
  <td>Olaines 1. vidusskola</td>
  <td>Ģeogrāfijas valsts 35.olimpiādes rezultāti</td>
  <td>III pakāpe</td>
</tr>
<tr>
  <td>Rīgas Valsts 1. ģimnāzija</td>
  <td>Ģeogrāfijas valsts 35.olimpiādes rezultāti</td>
  <td>II pakāpe</td>
</tr>

        </tbody>
        <tfoot>
            <tr>
              <th>Izglītības iestāde</th>
              <th>Olimpiāde</th>
              <th>Diploms</th>
            </tr>
        </tfoot>
    </table>
    <div class="row">
  <div class="col-12 text-center">
    <strong><h1 style="font-size: 5vh">Latvijas 42. skolēnu zinātniskās konferences rezultāti<h1></strong>
  </div>
</div>
<table id="example3" class="display nowrap" style="width:100%; ">
        <thead>
            
                
          <tr>
          <th>Izglītības iestāde</th>
          <th>Sekcija</th>
          <th>Iegūtā pakāpe</th>
        </tr>
        </thead>
        <tbody>
<tr>
<td width="114">
<p>Rīgas Klasiskā ģimnāzija</p>
</td>
<td width="106">
<p>Astronomijas sekcija</p>
</td>
<td width="106">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="114">
<p>Pumpuru vidusskola</p>
</td>
<td width="106">
<p>Astronomijas sekcija</p>
</td>
<td width="106">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="114">
<p>Rīgas</p>
<p>84.vidusskola</p>
</td>
<td width="106">
<p>Astronomijas sekcija</p>
</td>
<td width="106">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="116">
<p>Rīgas Valsts vācu ģimnāzija</p>
</td>
<td width="306">
<p>Bioloģijas sekcija</p>
</td>
<td width="106">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="116">
<p>Jelgavas Valsts</p>
<p>ģimnāzija</p>
</td>
<td width="306">
<p>Bioloģijas sekcija</p>
</td>
<td width="106">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="116">
<p>Rīgas Valsts 3.ģimnāzija</p>
</td>
<td width="306">
<p>Bioloģijas sekcija</p>
</td>
<td width="106">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="121">
<p>Jelgavas Valsts</p>
<p>ģimnāzija</p>
</td>
<td width="324">
<p>Bioloģijas sekcija</p>
</td>
<td width="89">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="121">
<p>Kārsavas</p>
<p>vidusskola</p>
</td>
<td width="324">
<p>Bioloģijas sekcija</p>
</td>
<td width="89">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="121">
<p>Zemgales vidusskola</p>
</td>
<td width="324">
<p>Bioloģijas sekcija</p>
</td>
<td width="89">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Liepājas Valsts 1.ģimnāzija</p>
</td>
<td width="307">
<p>Cittautu valodniecības un ārzemju literatūras zinātnes un vēstures
sekcija
</p>
</td>
<td width="104">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Daugavpils Krievu vidusskola - licejs</p>
</td>
<td width="307">
<p>Cittautu valodniecības un ārzemju literatūras zinātnes un vēstures
sekcija
</p>
</td>
<td width="104">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Rīgas</p>
<p>40.vidusskola</p>
</td>
<td width="307">
<p>Cittautu valodniecības un ārzemju literatūras zinātnes un vēstures
sekcija
</p>
</td>
<td width="104">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Oskara Kalpaka Liepājas 15.vidusskola</p>
</td>
<td width="307">
<p>Cittautu valodniecības un ārzemju literatūras zinātnes un vēstures
sekcija
</p>
</td>
<td width="104">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Daugavpils Krievu vidusskola - licejs</p>
</td>
<td width="307">
<p>Cittautu valodniecības un ārzemju literatūras zinātnes un vēstures
sekcija
</p>
</td>
<td width="104">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Rīgas</p>
<p>33.vidusskola</p>
</td>
<td width="307">
<p>Cittautu valodniecības un ārzemju literatūras zinātnes un vēstures
sekcija
</p>
</td>
<td width="104">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Rīgas Klasiskā ģimnāzija</p>
</td>
<td width="307">
<p>Ekonomikas sekcija</p>
</td>
<td width="104">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Rīgas Rīnūžu</p>
<p>vidusskola</p>
</td>
<td width="307">
<p>Ekonomikas sekcija</p>
</td>
<td width="104">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Oskara Kalpaka Liepājas 15.vidusskola</p>
</td>
<td width="307">
<p>Ekonomikas sekcija</p>
</td>
<td width="104">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Talsu Valsts</p>
<p>ģimnāzija</p>
</td>
<td width="307">
<p>Ekonomikas sekcija</p>
</td>
<td width="104">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Jelgavas Spīdolas ģimnāzija</p>
</td>
<td width="307">
<p>Ekonomikas sekcija</p>
</td>
<td width="104">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Jelgavas</p>
<p>Spīdolas ģimnāzija</p>
</td>
<td width="307">
<p>Ekonomikas sekcija</p>
</td>
<td width="104">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="110">
<p>Rīgas</p>
<p>84.vidusskola</p>
</td>
<td width="315">
<p>Filozofijas sekcija</p>
</td>
<td width="104">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="110">
<p>Talsu Valsts</p>
<p>ģimnāzija</p>
</td>
<td width="315">
<p>Filozofijas sekcija</p>
</td>
<td width="104">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="110">
<p>Daugavpils 12.vidusskola</p>
</td>
<td width="315">
<p>Filozofijas sekcija</p>
</td>
<td width="104">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="110">
<p>Daugavpils 13.vidusskola</p>
</td>
<td width="315">
<p>Fizikas sekcija</p>
</td>
<td width="104">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="114">
<p>Liepājas Raiņa</p>
<p>6.vidusskola</p>
</td>
<td width="313">
<p>Fizikas sekcija</p>
</td>
<td width="102">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="114">
<p>Daugavpils 13.vidusskola</p>
</td>
<td width="313">
<p>Fizikas sekcija</p>
</td>
<td width="102">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="114">
<p>Ventspils 6.vidusskola</p>
</td>
<td width="313">
<p>Fizikas sekcija</p>
</td>
<td width="102">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="114">
<p>Āgenskalna Valsts ģimnāzija</p>
</td>
<td width="313">
<p>Fizikas sekcija</p>
</td>
<td width="102">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="114">
<p>Rīgas Klasiskā ģimnāzija</p>
</td>
<td width="313">
<p>Fizikas sekcija</p>
</td>
<td width="102">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>Zemgales vidusskola</p>
</td>
<td width="312">
<p>Informātikas sekcija</p>
</td>
<td width="101">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>Rīgas</p>
<p>74.vidusskola</p>
</td>
<td width="312">
<p>Informātikas sekcija</p>
</td>
<td width="101">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>Liepājas Valsts 1.ģimnāzija</p>
</td>
<td width="312">
<p>Informātikas sekcija</p>
</td>
<td width="101">
<p>III pakāpe</p>
</td>
</tr>
<td width="114">
<p>Rīgas</p>
<p>34.vidusskola</p>
</td>
<td width="307">
<p>Inženierzinātņu sekcija</p>
</td>
<td width="108">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="114">
<p>Liepājas Raiņa</p>
<p>6.vidusskola</p>
</td>
<td width="307">
<p>Inženierzinātņu sekcija</p>
</td>
<td width="108">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>Jelgavas Tehnoloģiju vidusskola</p>
</td>
<td width="319">
<p>Inženierzinātņu sekcija</p>
</td>
<td width="95">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>Liepājas Raiņa</p>
<p>6.vidusskola</p>
</td>
<td width="319">
<p>Inženierzinātņu sekcija</p>
</td>
<td width="95">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>RTU</p>
<p>inženierzinātņu</p>
<p>vidusskola</p>
</td>
<td width="319">
<p>Inženierzinātņu sekcija</p>
</td>
<td width="95">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>Talsu Valsts</p>
<p>ģimnāzija</p>
</td>
<td width="319">
<p>Inženierzinātņu sekcija</p>
</td>
<td width="95">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="116">
<p>Jelgavas Valsts</p>
<p>ģimnāzija</p>
</td>
<td width="310">
<p>Kulturoloģijas sekcija</p>
</td>
<td width="102">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="116">
<p>Rīgas Valsts 2.ģimnāzija</p>
</td>
<td width="310">
<p>Kulturoloģijas sekcija</p>
</td>
<td width="102">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="116">
<p>Rīgas Valsts 1.ģimnāzija</p>
</td>
<td width="310">
<p>Kulturoloģijas sekcija</p>
</td>
<td width="102">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="116">
<p>Tukuma Raiņa ģimnāzija</p>
</td>
<td width="310">
<p>Kulturoloģijas sekcija</p>
</td>
<td width="102">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="116">
<p>Jāņa Eglī&scaron;a</p>
<p>Preiļu Valsts ģimnāzija</p>
</td>
<td width="310">
<p>Kulturoloģijas sekcija</p>
</td>
<td width="102">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="116">
<p>Gulbenes novada valsts ģimnāzija</p>
</td>
<td width="310">
<p>Kulturoloģijas sekcija</p>
</td>
<td width="102">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="116">
<p>Viļakas Valsts ģimnāzija</p>
</td>
<td width="310">
<p>Kulturoloģijas sekcija</p>
</td>
<td width="102">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="116">
<p>Jelgavas Spīdolas ģimnāzija</p>
</td>
<td width="310">
<p>Kulturoloģijas sekcija</p>
</td>
<td width="102">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="116">
<p>Jelgavas Spīdolas ģimnāzija</p>
</td>
<td width="310">
<p>Kulturoloģijas sekcija</p>
</td>
<td width="102">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Jēkabpils Valsts ģimnāzija</p>
</td>
<td width="304">
<p>Ķīmijas sekcija</p>
</td>
<td width="105">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Rīgas Valsts 1.ģimnāzija</p>
</td>
<td width="304">
<p>Ķīmijas sekcija</p>
</td>
<td width="105">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Siguldas Valsts</p>
<p>ģimnāzija</p>
</td>
<td width="304">
<p>Ķīmijas sekcija</p>
</td>
<td width="105">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Liepājas pilsētas</p>
<p>12.vidusskola</p>
</td>
<td width="304">
<p>Ķīmijas sekcija</p>
</td>
<td width="105">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Rīgas Valsts 1.ģimnāzija</p>
</td>
<td width="304">
<p>Ķīmijas sekcija</p>
</td>
<td width="105">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Cēsu Valsts ģimnāzija</p>
</td>
<td width="304">
<p>Ķīmijas sekcija</p>
</td>
<td width="105">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Talsu Kristīgā</p>
<p>vidusskola</p>
</td>
<td width="304">
<p>Ķīmijas sekcija</p>
</td>
<td width="105">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Rīgas Valsts 1.ģimnāzija</p>
</td>
<td width="304">
<p>Ķīmijas sekcija</p>
</td>
<td width="105">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Līvānu</p>
<p>1.vidusskola</p>
</td>
<td width="304">
<p>Ķīmijas sekcija</p>
</td>
<td width="105">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="118">
<p>Āgenskalna Valsts ģimnāzija</p>
</td>
<td width="296">
<p>Latviešu literatūras zinātnes un vēstures sekcija</p>
</td>
<td width="114">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="118">
<p>Rīgas Valsts 1.ģimnāzija</p>
</td>
<td width="296">
<p>Latviešu literatūras zinātnes un vēstures sekcija</p>
</td>
<td width="114">
<p>I pakāpe</p>
</td>
</tr>
<p>Latviešu literatūras zinātnes un vēstures sekcija</p>
<tr>
<td width="116">
<p>Siguldas Valsts</p>
<p>ģimnāzija</p>
</td>
<td width="299">
<p>Latviešu literatūras zinātnes un vēstures sekcija</p>
</td>
<td width="111">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="116">
<p>Daugavpils</p>
<p>Valsts ģimnāzija</p>
</td>
<td width="299">
<p>Latviešu literatūras zinātnes un vēstures sekcija</p>
</td>
<td width="111">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="116">
<p>Daugavpils</p>
<p>Valsts ģimnāzija</p>
</td>
<td width="299">
<p>Latviešu literatūras zinātnes un vēstures sekcija</p>
</td>
<td width="111">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="116">
<p>Āgenskalna Valsts ģimnāzija</p>
</td>
<td width="299">
<p>Latviešu literatūras zinātnes un vēstures sekcija</p>
</td>
<td width="111">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="116">
<p>Jelgavas Valsts</p>
<p>ģimnāzija</p>
</td>
<td width="299">
<p>Latviešu literatūras zinātnes un vēstures sekcija</p>
</td>
<td width="111">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="116">
<p>Daugavpils</p>
<p>Valsts ģimnāzija</p>
</td>
<td width="299">
<p>Latviešu literatūras zinātnes un vēstures sekcija</p>
</td>
<td width="111">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="120">
<p>Cēsu Valsts ģimnāzija</p>
</td>
<td width="303">
<p>Latviešu valodniecības sekcija</p>
</td>
<td width="106">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="120">
<p>Rēzeknes Valsts 1.ģimnāzija</p>
</td>
<td width="303">
<p>Latviešu valodniecības sekcija</p>
</td>
<td width="106">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="120">
<p>Babītes</p>
<p>vidusskola</p>
</td>
<td width="303">
<p>Latviešu valodniecības sekcija</p>
</td>
<td width="106">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="99">
<p>Ezernieku vidusskola</p>
</td>
<td width="310">
<p>Matemātikas sekcija</p>
</td>
<td width="119">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="112">
<p>Rīgas Valsts 1.ģimnāzija</p>
</td>
<td width="288">
<p>Matemātikas sekcija</p>
</td>
<td width="131">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="112">
<p>Rīgas</p>
<p>64.vidusskola</p>
</td>
<td width="288">
<p>Matemātikas sekcija</p>
</td>
<td width="131">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="113">
<p>Neretas Jāņa Jaunsudrabiņa</p>
<p>vidusskola</p>
</td>
<td width="300">
<p>Mākslas zinātnes sekcija</p>
</td>
<td width="116">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="113">
<p>Jelgavas Spīdolas ģimnāzija</p>
</td>
<td width="300">
<p>Mākslas zinātnes sekcija</p>
</td>
<td width="116">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="113">
<p>Rīgas Franču</p>
<p>licejs</p>
</td>
<td width="300">
<p>Mākslas zinātnes sekcija</p>
</td>
<td width="116">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>Edgara Kauliņa Lielvārdes vidusskola</p>
</td>
<td width="309">
<p>Pedagoģijas sekcija</p>
</td>
<td width="104">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>Jelgavas</p>
<p>Spīdolas ģimnāzija</p>
</td>
<td width="309">
<p>Pedagoģijas sekcija</p>
</td>
<td width="104">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>Talsu Kristīgās</p>
<p>vidusskola</p>
</td>
<td width="309">
<p>Pedagoģijas sekcija</p>
</td>
<td width="104">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>Saldus novada pašvaldības Druvas</p>
<p>vidusskola</p>
</td>
<td width="309">
<p>Pedagoģijas sekcija</p>
</td>
<td width="104">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>Siguldas Valsts</p>
<p>ģimnāzija</p>
</td>
<td width="309">
<p>Pedagoģijas sekcija</p>
</td>
<td width="104">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="111">
<p>Rēzeknes Valsts 1.ģimnāzija</p>
</td>
<td width="309">
<p>Pedagoģijas sekcija</p>
</td>
<td width="117">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>Āgenskalna Valsts ģimnāzija</p>
</td>
<td width="303">
<p>Politoloģijas sekcija</p>
</td>
<td width="107">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>Saldus nov. pašvaldības Druvas</p>
<p>vidusskola</p>
</td>
<td width="303">
<p>Politoloģijas sekcija</p>
</td>
<td width="107">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>Daugavpils Krievu vidusskola - licejs</p>
</td>
<td width="303">
<p>Politoloģijas sekcija</p>
</td>
<td width="107">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Babītes</p>
<p>vidusskola</p>
</td>
<td width="310">
<p>Psiholoģijas sekcija</p>
</td>
<td width="101">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Ventspils Valsts</p>
<p>1.ģimnāzija</p>
</td>
<td width="310">
<p>Psiholoģijas sekcija</p>
</td>
<td width="101">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Rīgas</p>
<p>64.vidusskola</p>
</td>
<td width="310">
<p>Psiholoģijas sekcija</p>
</td>
<td width="101">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Oskara Kalpaka</p>
<p>Liepājas</p>
<p>15.vidusskola</p>
</td>
<td width="310">
<p>Psiholoģijas sekcija</p>
</td>
<td width="101">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="117">
<p>Rīgas</p>
<p>64.vidusskola</p>
</td>
<td width="310">
<p>Psiholoģijas sekcija</p>
</td>
<td width="101">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="120">
<p>Saldus novada pa&scaron;valdības Druvas</p>
<p>vidusskola</p>
</td>
<td width="304">
<p>Socioloģijas sekcija</p>
</td>
<td width="104">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="120">
<p>Jelgavas Spīdolas ģimnāzija</p>
</td>
<td width="304">
<p>Socioloģijas sekcija</p>
</td>
<td width="104">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="120">
<p>Rēzeknes Valsts 1.ģimnāzija</p>
</td>
<td width="304">
<p>Socioloģijas sekcija</p>
</td>
<td width="104">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="116">
<p>Jūrmalas Valsts ģimnāzija</p>
</td>
<td width="300">
<p>Tieslietu sekcija</p>
</td>
<td width="111">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="116">
<p>Saldus novada pašvaldības Druvas vidusskola</p>
</td>
<td width="300">
<p>Tieslietu sekcija</p>
</td>
<td width="111">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="116">
<p>Draudzīgā Aicinājuma Cēsu Valsts</p>
<p>ģimnāzija</p>
</td>
<td width="300">
<p>Tieslietu sekcija</p>
</td>
<td width="111">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="110">
<p>Dagdas vidusskola</p>
</td>
<td width="310">
<p>Veselības zinātņu sekcija</p>
</td>
<td width="109">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="110">
<p>Rīgas</p>
<p>64.vidusskola</p>
</td>
<td width="310">
<p>Veselības zinātņu sekcija</p>
</td>
<td width="109">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="113">
<p>Siguldas Valsts</p>
<p>ģimnāzija</p>
</td>
<td width="319">
<p>Veselības zinātņu sekcija</p>
</td>
<td width="94">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="113">
<p>Rīgas</p>
<p>64.vidusskola</p>
</td>
<td width="319">
<p>Veselības zinātņu sekcija</p>
</td>
<td width="94">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="113">
<p>Krāslavas Varavīksnes</p>
<p>vidusskola</p>
</td>
<td width="319">
<p>Veselības zinātņu sekcija</p>
</td>
<td width="94">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="113">
<p>Daugavpils Krievu vidusskola -</p>
<p>licejs</p>
</td>
<td width="319">
<p>Veselības zinātņu sekcija</p>
</td>
<td width="94">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="113">
<p>Mazsalacas vidusskola</p>
</td>
<td width="319">
<p>Veselības zinātņu sekcija</p>
</td>
<td width="94">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="113">
<p>Talsu Valsts</p>
<p>ģimnāzija</p>
</td>
<td width="319">
<p>Veselības zinātņu sekcija</p>
</td>
<td width="94">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="113">
<p>Rīgas Kultūru</p>
<p>vidusskola</p>
</td>
<td width="319">
<p>Veselības zinātņu sekcija</p>
</td>
<td width="94">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="120">
<p>Rīgas Valsts 2.ģimnāzija</p>
</td>
<td width="306">
<p>Vēstures un kultūrvēsturiskā mantojuma sekcija</p>
</td>
<td width="102">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="120">
<p>Rīgas Valsts 2.ģimnāzija</p>
</td>
<td width="306">
<p>Vēstures un kultūrvēsturiskā mantojuma sekcija</p>
</td>
<td width="102">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="120">
<p>Jelgavas Spīdolas ģimnāzija</p>
</td>
<td width="306">
<p>Vēstures un kultūrvēsturiskā mantojuma sekcija</p>
</td>
<td width="102">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="120">
<p>Valmieras Valsts</p>
<p>ģimnāzija</p>
</td>
<td width="306">
<p>Vēstures un kultūrvēsturiskā mantojuma sekcija</p>
</td>
<td width="102">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="120">
<p>Rēzeknes Valsts 1.ģimnāzija</p>
</td>
<td width="306">
<p>Vēstures un kultūrvēsturiskā mantojuma sekcija</p>
</td>
<td width="102">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>Rīgas Valsts 2.ģimnāzija</p>
</td>
<td width="314">
<p>Vēstures un kultūrvēsturiskā mantojuma sekcija</p>
</td>
<td width="109">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>RTU</p>
<p>inženierzinātņu</p>
<p>vidusskola</p>
</td>
<td width="305">
<p>Vides zinātņu sekcija</p>
</td>
<td width="108">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>Siguldas Valsts</p>
<p>ģimnāzija</p>
</td>
<td width="305">
<p>Vides zinātņu sekcija</p>
</td>
<td width="108">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>Rīgas Valsts 1.ģimnāzija</p>
</td>
<td width="305">
<p>Vides zinātņu sekcija</p>
</td>
<td width="108">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>Cēsu Valsts ģimnāzija</p>
</td>
<td width="305">
<p>Vides zinātņu sekcija</p>
</td>
<td width="108">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>Lēdmanes</p>
<p>pamatskola</p>
</td>
<td width="305">
<p>Vides zinātņu sekcija</p>
</td>
<td width="108">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="115">
<p>Rugāju novada</p>
<p>vidusskola</p>
</td>
<td width="305">
<p>Vides zinātņu sekcija</p>
</td>
<td width="108">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="108">
<p>Rīgas Valsts 2.ģimnāzija</p>
</td>
<td width="307">
<p>Zemes zinātņu (arī ekonomiskā ģeogrāfija) sekcija</p>
</td>
<td width="112">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="108">
<p>Rīgas</p>
<p>6.vidusskola</p>
</td>
<td width="307">
<p>Zemes zinātņu (arī ekonomiskā ģeogrāfija) sekcija</p>
</td>
<td width="112">
<p>I pakāpe</p>
</td>
</tr>
<tr>
<td width="114">
<p>Jaunogres vidusskola</p>
</td>
<td width="316">
<p>Zemes zinātņu (arī ekonomiskā ģeogrāfija) sekcija</p>
</td>
<td width="99">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="114">
<p>Daugavpils 12.vidusskola</p>
</td>
<td width="316">
<p>Zemes zinātņu (arī ekonomiskā ģeogrāfija) sekcija</p>
</td>
<td width="99">
<p>II pakāpe</p>
</td>
</tr>
<tr>
<td width="114">
<p>Brocēnu</p>
<p>vidusskola</p>
</td>
<td width="316">
<p>Zemes zinātņu (arī ekonomiskā ģeogrāfija) sekcija</p>
</td>
<td width="99">
<p>III pakāpe</p>
</td>
</tr>
<tr>
<td width="114">
<p>Daugavpils 3.vidusskola</p>
</td>
<td width="316">
<p>Zemes zinātņu (arī ekonomiskā ģeogrāfija) sekcija</p>
</td>
<td width="99">
<p>III pakāpe</p>
</td>
</tr>
        </tbody>
        <tfoot>

        <tr>
          <th>Izglītības iestāde</th>
          <th>Sekcija</th>
          <th>Iegūtā pakāpe</th>
        </tr>
        </tfoot>
    </table>
  <script src="smooth-scroll.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>
<!-- https://www.izm.gov.lv/lv/publikacijas-un-statistika/statistika-par-izglitibu/statistika-par-visparejo-izglitibu/2017-2018-mg -->