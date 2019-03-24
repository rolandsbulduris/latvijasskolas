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
        <a style="color:black;" href="index.php" class="nav-link"><i class="fas fa-star-half-alt"></i> Skolu reitings</a>
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
		<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd2m7X0Kv1k1HOFvjmo2LuhxCSqQ9WppcQ3Fby77XfG6vAoeA/viewform?embedded=true" width="100%" height="800" frameborder="0" marginheight="0" marginwidth="0">Notiek ielāde...</iframe>
  <script src="smooth-scroll.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>
<!-- https://www.izm.gov.lv/lv/publikacijas-un-statistika/statistika-par-izglitibu/statistika-par-visparejo-izglitibu/2017-2018-mg -->