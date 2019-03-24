<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Latvijas Skolas</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
  <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=745369ab-8ced-4ad2-bad3-17cec890df98" type="text/javascript"></script>
  <script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
  <script src="jekabpils.js" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/rowreorder/1.2.5/js/dataTables.rowReorder.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js">
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
  <a class="navbar-brand" href="../index.php"><img src="img/500px-flag-map_of_latvia-svg.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item">
        <a style="color:black;" href="../index.php" class="nav-link"><i class="fas fa-map-marked-alt"></i> Skolu karte</a>
      </li>
      <li class="nav-item">
        <a style="color:black;" href="../index.php" class="nav-link"><i class="fas fa-star-half-alt"></i> Skolu reitings</a>
      </li>

      <li class="nav-item">
        <a style="color:black;" href="../statistika.php" class="nav-link"><i class="fas fa-chart-bar"></i> Statistika</a>
      </li>
      <li class="nav-item">
        <a style="color:black;" href="../pievienot.php" class="nav-link"><i class="fas fa-plus"></i> Pievienot skolu</a>
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
      <a href="../index.php" style="color: black;"><strong>LATVIJA (781)</strong></a>
    </div>
    <div class="col-xs-6 col-md-4">
      <a ></a>
    </div>
  </div>
<hr>
 <div class="row">
    <div class="col-xs-6 col-md-4">
      <a href="jekabpils.php">Jēkabpils (5)</a>
    </div>
    <div class="col-xs-6 col-md-4">
      <a href="valmiera.php">Valmiera (9)</a>
    </div>
    <div class="col-xs-6 col-md-4">
      <a href="daugavpils.php">Daugavpils (18)</a>
    </div>
  </div>
<hr>
  <div class="row">
    <div class="col-xs-6 col-md-4">
      <a href="jelgava.php">Jelgava (14)</a>
    </div>
    <div class="col-xs-6 col-md-4 ">
      <a href="jurmala.php">Jūrmala (17)</a>
          
    </div>
    <div class="col-xs-6 col-md-4 ">
      <a href="liepaja.php">Liepāja (18)</a>
          
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-xs-6 col-md-4 ">
      <a href="rezekne.php">Rēzekne (11)</a>
          
    </div>
    <div class="col-xs-6 col-md-4">
      <a href="ventspils.php">Ventspils (9)</a>
    </div>
    <div class="col-xs-6 col-md-4">
      <a href="riga.php">Rīga (150)</a>
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
      <a href="kurzeme.php"></a>
    </div>
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
				<h1 style="font-size: 6vh">Palīdzam izvēlēties skolu!</h1>
				<p style="font-size: 3vh;">Balstoties uz atvērtajiem datiem un izmantojot oficiālalo informāciju esam izveidojuši tīmekļa lapu, kurā ir uzkrāta galvenā informācija par visām vispārizglītojošām Latvijas skolām.</p>	
			</div>
      
		</div>
    <div class="row">
      <div class=" col-12 text-center">
        <h1 style="text-decoration: underline;font-size: 5vh"><strong>Jēkabpils</strong></h1>
        <div class="row" style="background-color: rgb(0,0,0, 0.5);">
        <div class="col-6">
          <h2 style="font-size: 5vh"><strong><i class="fas fa-university"></i></strong></h2>
          <h5 style="font-size: 3vh"><strong>SKOLU SKAITS</strong></h5>
          <h3 style="font-size: 5vh"> 5</h3>
        </div>
        <div class="col-6">
          
          <h2 style="font-size: 5vh"><strong><i class="fas fa-users"></i></strong></h2>
          <h5 style="font-size: 3vh"><strong>SKOLĒNU SKAITS</strong></h5>
          <h3 style="font-size: 5vh">2609</h3>
        </div>
        <div class="col-12">
          <p style="font-size: 3vh;border-top: 3px solid rgb(0,0,0,0.5); padding-top: 1vh">Kopējie eksāmenu rezultāti:</p>
          <div class="row" style="background-color: rgb(0,0,0,0.5);">
        <div class="col-12 col-sm-4">
          <h2 style="font-size: 5vh"><strong></strong></h2>
          <h5 style="font-size: 3vh"><strong>Matemātika</strong></h5>
          <h3 style="font-size: 5vh;">32,79% </h3>
        </div>
        <div class="col-12 col-sm-4">
          
          <h2 style="font-size: 5vh"><strong></strong></h2>
          <h5 style="font-size: 3vh;"><strong>Latvijas un pasaules vēsture</strong></h5>
          <h3 style="font-size: 5vh;">38,66% </h3>
        </div>
        <div class="col-12 col-sm-4">
          
          <h2 style="font-size: 5vh"><strong></strong></h2>
          <h5 style="font-size: 3vh"><strong>Latviešu valoda</strong></h5>
          <h3 style="font-size: 5vh">52%</h3>

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
          <h3 style="font-size: 5vh;color: #52B140;">65,83% <i class="fas fa-long-arrow-alt-up"></i></h3>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body" style="background-color: rgb(0,0,0,0.5)">
        <h2 style="font-size: 5vh"><strong></strong></h2>
          <h5 style="font-size: 3vh"><strong>Bioloģija</strong></h5>
          <h3 style="font-size: 5vh; color: #52B140;">63,75% <i class="fas fa-long-arrow-alt-up"></i></h3>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body" style="background-color: rgb(0,0,0,0.5)">
        <h2 style="font-size: 5vh"><strong></strong></h2>
          <h5 style="font-size: 3vh"><strong>Fizika</strong></h5>
          <h3 style="font-size: 5vh">33,42%</h3>
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
          <h3 style="font-size: 5vh">-</h3>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body" style="background-color: rgb(0,0,0,0.5)">
        <h2 style="font-size: 5vh"><strong></strong></h2>
          <h5 style="font-size: 3vh"><strong>Krievu valoda</strong></h5>
          <h3 style="font-size: 5vh;">65% </h3>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body" style="background-color: rgb(0,0,0,0.5)">
        <h2 style="font-size: 5vh"><strong></strong></h2>
          <h5 style="font-size: 3vh"><strong>Vācu valoda</strong></h5>
          <h3 style="font-size: 5vh">-</h3>
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
          <h3 style="font-size: 5vh; ">61,23%</h3>
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





$myfile = fopen("jekabpils.csv","r");



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
    <strong><h1 style="font-size: 5vh">Jēkabpils vispārizglītojošo skolu eksāmenu rezultāti (%)<h1></strong>
  </div>
</div>
<table id="example" class="display nowrap" style="width:100%; ">
        <thead>
            <tr>
            	<th>Skola</th>
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

	print("<td>" .  $row . "</td>");

	

	$examens_punkti = $skola_examens[$row];

	

	foreach($columns as $col) {

		if(isset($examens_punkti[$col]) ) {

			$punkti = $examens_punkti[$col];

			print("<td>".$punkti."</td>" );

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
            	<th>Skola</th>
            	<?php 

            	foreach($columns as $col) {

				print("<th>" . $col . "</th>");

				}
            	 ?>
                
            </tr>
        </tfoot>
    </table>


  <script src="smooth-scroll.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>
<!-- https://www.izm.gov.lv/lv/publikacijas-un-statistika/statistika-par-izglitibu/statistika-par-visparejo-izglitibu/2017-2018-mg -->