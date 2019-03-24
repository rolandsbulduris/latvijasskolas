<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>PHP2</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
  <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=745369ab-8ced-4ad2-bad3-17cec890df98" type="text/javascript"></script>
  <script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
  <script src="object_manager.js" type="text/javascript"></script>
  <style>
        html, body, #map {
            width: 100%; height: 100%; padding: 0; margin: 0;
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
        html {
          background-color: white;
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

</header>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
<canvas id="myChart" width="150" height="70"></canvas>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
Chart.helpers.merge(Chart.defaults.global.plugins.datalabels, {
    color: '#000000'
});

var myChart = new Chart(ctx, {
    type: 'bar',

    data: {
        labels: ["1990", "1991",  "1992",  "1993",  "1994",  "1995",  "1996",  "1997",  "1998",  "1999",  "2000",  "2001",  "2002",  "2003",  "2004",  "2005",  "2006 ", "2007",  "2008",  "2009",  "2010",  "2011",  "2012",  "2013",  "2014",  "2015",  "2016",  "2017"],
        datasets: [{
            label: 'Skolu',
            data: [962,  990, 1029, 1048, 1076, 1094, 1112, 1110, 1111, 1095, 1074, 1066, 1052, 1044, 1026, 1017, 1008, 992, 982, 877, 858, 839, 832, 832, 824, 811, 790, 775],
            backgroundColor: [
                
                'rgba(29,121,249, 0.9)',
                'rgba(21,205,0, 0.9)',
                'rgba(29,121,249, 0.9)',
                'rgba(21,205,0, 0.9)',
                'rgba(29,121,249, 0.9)',
                'rgba(21,205,0, 0.9)',
                'rgba(29,121,249, 0.9)',
                'rgba(21,205,0, 0.9)',
                'rgba(29,121,249, 0.9)',
                'rgba(21,205,0, 0.9)',
                'rgba(29,121,249, 0.9)',
                'rgba(21,205,0, 0.9)',
                'rgba(29,121,249, 0.9)',
                'rgba(21,205,0, 0.9)',
                'rgba(29,121,249, 0.9)',
                'rgba(21,205,0, 0.9)',
                'rgba(29,121,249, 0.9)',
                'rgba(21,205,0, 0.9)',
                'rgba(29,121,249, 0.9)',
                'rgba(21,205,0, 0.9)',
                'rgba(29,121,249, 0.9)',
                'rgba(21,205,0, 0.9)',
                'rgba(29,121,249, 0.9)',
                'rgba(21,205,0, 0.9)',
                'rgba(29,121,249, 0.9)',
                'rgba(21,205,0, 0.9)',
                'rgba(29,121,249, 0.9)',
                'rgba(21,205,0, 0.9)',



            ],
            borderColor: [
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',

                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                
            ],
            borderWidth: 1
        }]

    },
    options: {

      legend: {
        display: false
      },
      title: {
            display: true,
            text: 'Vispārizglītojošās skolas (mācību gada sākumā)',
            fontColor: 'rgb(0, 0, 0)',
            fontSize: 25
      },
      scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }

});
</script>

<canvas id="myChart33" ></canvas>
<script>
var ctx = document.getElementById("myChart33").getContext('2d');
var myChart = new Chart(ctx, {
    
    type: 'horizontalBar',
    data: {
        labels: ["Angļu","Krievu","Vācu","Franču","Spāņu","Zviedru","Citas"],
        datasets: [{
            label: 'Izglītojamo',
            data: [772,616,298,61,15,5,14],
            backgroundColor: [
                
                'rgba(248,167,26, 0.9)',
                'rgba(166,34,53, 0.9)',
                'rgba(248,167,26, 0.9)',
                'rgba(166,34,53, 0.9)',
                'rgba(248,167,26, 0.9)',
                'rgba(166,34,53, 0.9)',
                'rgba(248,167,26, 0.9)',
                'rgba(166,34,53, 0.9)',
                'rgba(248,167,26, 0.9)',
                'rgba(166,34,53, 0.9)',
                'rgba(248,167,26, 0.9)',
                'rgba(166,34,53, 0.9)',
                'rgba(248,167,26, 0.9)',
                'rgba(166,34,53, 0.9)',
                'rgba(248,167,26, 0.9)',
                'rgba(166,34,53, 0.9)',
                'rgba(248,167,26, 0.9)',
                'rgba(166,34,53, 0.9)',



            ],
            borderColor: [
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',


            ],
            borderWidth: 1
        }]

    },

    options: {
      legend: {
        display:false
      },
      cutoutPercentage: 50,
      title: {
            display: true,
            text: 'Svešvalodu apguve vispārizglītojošajās skolās (2017 mācību gada sākumā)',
            fontColor: 'rgb(0, 0, 0)',
            fontSize: 25
      },
      scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }

});
</script>
<canvas id="line-chart232" width="150" height="100"></canvas>
<script>
  
  new Chart(document.getElementById("line-chart232"), {
  type: 'bar',
  data: {
    labels: [ 1990,  1995  ,2000 , 2005 , 2010,  2015 , 2017],
    datasets: [{ 
        data: [147519 , 174079 ,203012, 181097, 139942, 131808, 133241],
        label: "Skolās ar latviešu mācību valodu",
        borderColor: "#00B409",
        backgroundColor: "#00B409",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      },{ 
        data: [129609 , 114021 ,93799 , 66859 , 46782 , 46163  ,45134],
        label: "Skolās ar krievu mācību valodu",
        borderColor: "#3e95cd",
        backgroundColor: "#3e95cd",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      }, { 
        data: [54729, 40886  ,36427,  25013,  19614 , 15340,  17149],
        label: "Skolās ar latviešu un krievu mācību valodu (jauktajās skolās)",
        borderColor: "#E5C52D",
        backgroundColor: "#E5C52D",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      },
      { 
        data: ["-",  854 ,1334 ,1287 ,1534 ,2145 ,2361],
        label: "Skolās ar citu mācību valodu",
        borderColor: "#8BCB61",
        backgroundColor: "#B40018",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      }
    ]
  },
  options: {
    title: {
      display: true,
      fontSize: 25,
      fontColor: 'rgb(0, 0, 0)',
      text: 'Vispārizglītojošo skolu skolēnu sadalījums pēc mācību valodas (mācību gada sākumā).'
    }
  }
});

</script>
<canvas id="myChart3" width="150" height="100"></canvas>
<script>
var ctx = document.getElementById("myChart3").getContext('2d');
var myChart = new Chart(ctx, {
    
    type: 'horizontalBar',
    data: {
        labels: ["1.klase", "2.klase" ,"3.klase" ,"4.klase" ,"5.klase" ,"6.klase" ,"7.klase" ,"8.klase" ,"9.klase" ,"10.klase" , "11.klase" , "12.klase"],
        datasets: [{
            label: 'Izglītojamo',
            data: [19185, 20311,  21707,  21083,  19896,  19234,  18225,  18315,  18088,  10052,  9829, 9188],
            backgroundColor: [
                
                'rgba(248,167,26, 0.9)',
                'rgba(166,34,53, 0.9)',
                'rgba(248,167,26, 0.9)',
                'rgba(166,34,53, 0.9)',
                'rgba(248,167,26, 0.9)',
                'rgba(166,34,53, 0.9)',
                'rgba(248,167,26, 0.9)',
                'rgba(166,34,53, 0.9)',
                'rgba(248,167,26, 0.9)',
                'rgba(166,34,53, 0.9)',
                'rgba(248,167,26, 0.9)',
                'rgba(166,34,53, 0.9)',
                'rgba(248,167,26, 0.9)',
                'rgba(166,34,53, 0.9)',
                'rgba(248,167,26, 0.9)',
                'rgba(166,34,53, 0.9)',
                'rgba(248,167,26, 0.9)',
                'rgba(166,34,53, 0.9)',



            ],
            borderColor: [
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',
                'rgba(0,0, 0, 1)',


            ],
            borderWidth: 1
        }]

    },

    options: {
      legend: {
        display:false
      },
      cutoutPercentage: 50,
      title: {
            display: true,
            text: 'Izglītojamo skaits vispārizglītojošajās dienas skolās pa klasēm (2017 mācību gada sākumā)',
            fontColor: 'rgb(0, 0, 0)',
            fontSize: 25
      },
      scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }

});
</script>
  <canvas id="line-chart" width="150" height="100"></canvas>
<script>

Chart.helpers.merge(Chart.defaults.global.plugins.datalabels, {
display: false
});
new Chart(document.getElementById("line-chart"), {

  type: 'line',
  data: {
    labels: ["1990", "1991",  "1992",  "1993",  "1994",  "1995",  "1996",  "1997",  "1998",  "1999",  "2000",  "2001",  "2002",  "2003",  "2004",  "2005",  "2006 ", "2007",  "2008",  "2009",  "2010",  "2011",  "2012",  "2013",  "2014",  "2015",  "2016",  "2017"],
    datasets: [{  
        data: [352450,  348728, 336909, 335882, 339692, 347541, 354474, 360014, 361722, 361432, 359818, 351989, 340308, 327358, 315633, 298516, 279872, 263944, 249446, 239845, 229039, 218442, 212433, 209130, 209686, 213357, 214965, 215053],
        label: "Skolēnu skaits",
        borderColor: "#272727",
        pointRadius: 7,
        pointHitRadius: 10,
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      }, { 
        data: [32201, 32009,  33364,  33408,  33344,  34672,  35873,  36175,  34943,  34761,  34042,  33739,  33920,  34232,  34515,  34420,  33937,  33605,  33321,  28162,  28801,  28843,  29028,  29197,  29384,  29595,  29330,  29540],
        label: "Pedagoģisko darbinieku skaits",
        borderColor: "#AF9800",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6,
        pointRadius: 7,
        pointHitRadius: 10
      }
    ]
  },
  options: {
    title: {
      display: true,
      fontSize: 25,
      fontColor: 'rgb(0, 0, 0)',
      text: 'Skolēnu un pedagoģisko darbinieku skaits vispārizglītojošās skolas (mācību gada sākumā)'
    }
  }
});

</script>

<canvas id="line-chart2" width="150" height="100"></canvas>
<script>
  new Chart(document.getElementById("line-chart2"), {
  type: 'line',
  data: {
    hidden: true,
    labels: [1990, 1991,  1992,  1993,  1994,  1995,  1996,  1997,  1998,  1999,  2000,  2001,  2002,  2003,  2004,  2005,  2006,  2007,  2008,  2009,  2010,  2011,  2012,  2013,  2014,  2015,  2016,  2017],
    datasets: [{ 
        data: [51673, 51824,  49643,  49120,  49374,  50355,  51110,  51657,  52190,  52356,  52349,  51460,  49905,  47766,  46479,  44123,  41555,  39632,  38035,  36960,  35727,  34443,  34118,  34064,  35014,  36602  ,37628,  38415],
        label: "Pierīgas reģions",
        borderColor: "#2B1B2E",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      }, 
      { 
        data: [39728, 39537,  38352,  38716,  39572,  40722,  42107,  43118,  43819 , 44097,  44089,  43676,  42336,  40563,  39055 , 37118,  34578,  32214,  29887,  28168 , 26273  ,24448  ,23106 , 22076,  21614,  21557,  21200,  20743],
        label: "Vidzemes reģions",
        borderColor: "#C31C06",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      }, 
      { 
        data: [52020, 51694,  49316,  48089 , 48125,  49283 , 50470,  51364  ,51834,  51804,  51798  ,50792,  49256 , 47449  ,46030  ,43615 , 41048 , 38789  ,36644  ,34910 , 33100,  31369,  29717  ,28909  ,28424 , 28386 , 28010,  27562],
        label: "Kurzemes reģions",
        borderColor: "#3F9433",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      }, 
      { 
        data: [46696, 45886,  43870 , 43697,  44282,  45757,  47125,  48224 , 48346,  48549,  48533,  47654 , 46135 , 43883 , 42474,  39941  ,37704 , 35484 , 33375 , 31694  ,30005 , 28323 , 27484,  27099 , 26878,  27364,  27855 , 27624],
        label: "Zemgales reģions",
        borderColor: "#523AA9",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      }, 
      { 
        data: [54291, 52777 , 51602,  51592,  53192,  54976  ,56335 , 57133 , 57312,  57329,  57085,  55661,  53565 , 51684 , 49203,  46317 , 42942 , 40327 , 37730 , 35930 , 34027  ,32184 , 30743 , 29678,  29359,  29306  ,28882 , 28074],
        label: "Latgales reģions",
        borderColor: "#35FAB7",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      }, 
      { 
        data: [108042,  107010, 104126, 104668 ,105147, 106448 ,107327, 108518, 108221, 107297 ,105964, 102746 ,99111,  96013 , 92392 , 87402,  82045  ,77498 , 73775 , 72183 , 69907,  67675, 67265 , 67304 , 68397,  70142 , 71390 , 72635],
        label: "Rīga",
        borderColor: "#EE733F",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      }, 
      { 
        data: [15735, 15330,  15375  ,15180  ,15450,  15906 , 16376  ,16555 , 16612,  16555 , 16627 , 16114 , 15555 , 15268 , 14203 , 13284,  12298 , 11566,  10724,  10129 , 9559, 9127, 8852, 8762, 8938, 9170, 9326 ,9255],
        label: "Daugavpils",
        borderColor: "#067858",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      }, 
      { 
        data: [10339, 9748, 9332, 9278, 9441, 9774, 10323,  10651 , 10619,  10720,  10818 , 10314 , 10004,  9668, 9506 ,8933 ,8578, 8130, 7720 ,7384, 7061 ,6817, 6627, 6591 ,6676, 6944, 7015, 7054],
        label: "Jelgava",
        borderColor: "#B45E7A",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      }, 
      { 
        data: [0,  0, 0, 0, 0 ,0, 0, 0 ,0, 0 ,0, 0 ,0, 0, 0, 0 ,0 ,0 ,0 ,3301, 2906, 2782, 2717, 2622 ,2600 ,2665, 2692, 2609],
        label: "Jēkabpils",
        borderColor: "#3B0E13",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      }, 
      { 
        data: [7273,  7269, 7010, 7049 ,7127, 7225, 7366 ,7444 ,7517, 7659, 7680 ,7421, 7189, 6874, 6553, 6103, 5600 ,5286, 5042, 4914, 4713 ,4588, 4744, 4724, 4717 ,4806 ,4812, 4742],
        label: "Jūrmala",
        borderColor: "#D6077B",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      }, 
      { 
        data: [14490, 14338,  13645,  12813,  12270 , 12494,  12837,  12932,  13054,  13109,  13325,  13013,  12657 , 12407 , 12125, 11432,  10780 , 10348 , 9868, 9528, 9185, 8901, 8691 ,8614, 8458, 8664, 8716 ,8694],
        label: "Liepāja",
        borderColor: "#E89FF6",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      }, 
      { 
        data: [6291,  6214, 6050, 6183, 6328, 6572, 6548, 6530, 6507, 6562 ,6438 ,6241, 6104 ,5930 ,5731, 5505, 5152, 4994, 4758, 4568, 4405, 4130, 4011 ,4056, 4154, 4222 ,4233, 4196],
        label: "Rēzekne",
        borderColor: "#F9FA7C",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      }, 
      { 
        data: [0 , 0 ,0 ,0 ,0 ,0 ,0, 0, 0, 0, 0, 0 ,0, 0 ,0, 0 ,0 ,0 ,0 ,4451, 4213, 3934, 3792, 3785, 3854, 4000 ,3990, 4102],
        label: "Valmiera",
        borderColor: "#B5DA95",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      }, 
      { 
        data: [6800,  6795, 6309, 5925, 5963, 6087 ,6201, 6401 ,6517, 6629 ,6625 ,6636, 6583 ,6418, 6198, 5921 ,5552 ,5235, 4986, 4876, 4634, 4409,4204 ,4199, 4134, 4189 ,4169 ,4087],
        label: "Ventspils",
        borderColor: "#E5C52D",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      } 
    ]
  },
  options: {
    title: {
      display: true,
      fontSize: 25,
      fontColor: 'rgb(0, 0, 0)',
      text: 'Vispārizglītojošo skolu skolēnu skaits statistiskajos reģionos un republikas pilsētās (mācību gada sākumā)'
    }
  }
});

</script>
<canvas id="line-chart23" width="150" height="100"></canvas>
<script>
  new Chart(document.getElementById("line-chart23"), {
  type: 'line',
  data: {
    labels: [2000,  2001,  2002,  2003,  2004,  2005,  2006,  2007,  2008,  2009,  2010,  2011,  2012,  2013,  2014,  2015,  2016,  2017],
    datasets: [{ 
        data: [686,678,645,790,1138,1066,1212,1218,1163,1626,2631,1840,2015,1679,1835,1708,1442,1289],
        label: "Otrgadnieku un trešgadnieku skaits pamatskolā",
        borderColor: "#00B409",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      },{ 
        data: [4401,4085,3808,6207,9167,7493,7622,6467,6227,5069,5502,3543,2622,2111,2081,2189,2036,1787],
        label: "Otrgadnieku un trešgadnieku skaits vidusskolā",
        borderColor: "#3e95cd",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      }, { 
        data: [27233,27112,  32087 , 34821 , 32907 , 33054 , 32089,  29882 , 28167 , 25106  ,22344,  20177 , 17775 , 17111  ,16409 , 16794 , 17787,  17236],
        label: "Beiguši pamatskolu",
        borderColor: "#E5C52D",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      },
      { 
        data: [17603,20060, 20474,  17812 , 16504,  19657 , 20915,  20740  ,20328  ,20030 , 18964  ,18238 , 16577 , 14380  ,13347 , 12307  ,12032 , 11513],
        label: "Beiguši vidusskolu",
        borderColor: "#8BCB61",
        fill: false,
        pointRadius: 6,
        pointHitRadius: 6
      }
    ]
  },
  options: {
    title: {
      display: true,
      fontSize: 25,
      fontColor: 'rgb(0, 0, 0)',
      text: 'Otrgadnieku, trešgadnieku un vispārizglītojošo skolu beigušo skolēnu skaits.'
    }
  }
});

</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
<!-- https://www.izm.gov.lv/lv/publikacijas-un-statistika/statistika-par-izglitibu/statistika-par-visparejo-izglitibu/2017-2018-mg -->