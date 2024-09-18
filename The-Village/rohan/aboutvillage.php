<?php 
include("dbconnection.php");
session_start();
include("checklogin.php");
check_login();
$year = date("Y");
//index.php
$connect = mysqli_connect("localhost", "root", "", "rohan");
$query = "SELECT * FROM data";
$result = mysqli_query($connect, $query);
$chart_data = '';

while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ year:'".$row["year"]."', profit:".$row["profit"].",pop:'".$row["pop"]."'}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>
<?php  


$query2 = "SELECT year,profit,pop FROM data WHERE year='2018'";
$result2 = mysqli_query($connect, $query2);
while($row = mysqli_fetch_array($result2))
{
 $pop = $row["pop"];
 $lit = $row["profit"];
 $ye = $row["year"];
} 


?>


<!DOCTYPE html>


<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <link rel="stylesheet" type="text/css" href="includes/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/css/et-lineicon.css" />
    <link rel="stylesheet" type="text/css" href="includes/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="includes/css/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,400italic,500italic,700' rel='stylesheet'
        type='text/css'>
    <script async src="dist/purecounter.js"></script>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>HOME</title>
        <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
        <link rel="stylesheet" type="text/css"
            href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
        <link rel="stylesheet" type="text/css" href="includes/assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css" />
        <link rel="stylesheet" type="text/css" href="includes/assets/lib/jqvmap/jqvmap.min.css" />
        <link rel="stylesheet" type="text/css"
            href="includes/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css" />
        <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="includes/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
        <link rel="stylesheet" type="text/css"
            href="includes/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
        <link rel="stylesheet" type="text/css" href="includes/assets/lib/jquery.magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="includes/assets/css/app.css" type="text/css" />
    </head>


</head>

<body class="bg-white">
    <?php include 'navslider.php';?>
    <div class="container">
        <div class="jumbotron jumbotron-fluid bg-light text-center">
            <div class="container">
                <h1 class="display-4">About Village</h1>
                <p class="lead">This is the about section of a village with detailed information.</p>
            </div>
        </div>
    </div>

    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 mx-5 ">

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <div class="col-lg-4 p-3 p-lg-5 pt-lg-3">
            <img class="rounded-lg-3" src="includes/images/town.jpg" alt="" width="520">
        </div>
        <div class="col-lg-5 offset-lg-1 p-0 overflow-hidden text-center">
            <h1 class="display-4 fw-bold lh-1">About Mahabaleshwar</h1>
            <p><br>
                Mahabaleshwar is one of the most popular hill stations of Maharashtra State. It is at a height of 1372
                meters and is the highest of Maharashtra's hill resorts.

                The history of Mahabaleshwar goes back to the 13th Century when the Yadav king Singhan built a temple
                dedicated to Lord Mahadev at the source of the five holy rivers (Panch Ganga) Koyna, Krishna, Gayatri,
                Savitri and Venna. It is from this Mahadev Temple that the place derives its name Mahabaleshwar. </p>
            There is so much that one can do in Mahabaleshwar today. You may while away the hours boating and fishing at
            the placid Venna lake or enjoy the sounds and colours of kingfishers, woodpeckers, cuckoos, thrushes and
            honey suckers. There are excursions to places like Makrandgad through paths steep and narrow, bordered by
            precipices or to Robber's Cave, hair raising stories about which are legion. When it's cold and the water
            comes in cascades of glory, a trip to Lingmala, Dhobi or Chinamen's falls - Mahabaleshwar's three major
            waterfalls - would be an enthralling experience. Pratapgad, the hill fort, where Shivaji Maharaj, the
            founder of the Maratha Empire dramatically outwitted General Afzalkhan of Bijapur. There are many
            breathtaking view points with their grandstand view.
            In Mahabaleshwar Bazaar spread over in the tiny lanes, everything is available from shoes to luscious
            strawberries, blackberries, jams and jellies.
            <br>
            There are three principal ghats on the way to this hill station, Karjat Ghat, Khandala Ghat and Wai Ghat,
            and the passing scene is very pleasing. Mahabaleshwar has a vast natural treasure spread all over thirty
            exotic view points.
            <br><br><br><br><br>
        </div>
    </div>
    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Detailed Information About The Village </h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#toggles2"></use>
                    </svg>
                </div>
                <div>
                    <h2>Location</h2>
                    <p>
                        At a distance of 54 km from Satara, 123 km from Pune, 177 km from Kolhapur, 243 km from Mumbai,
                        and 377 km from Panaji, Mahabaleshwar is a scenic hill town in Satara district of Maharashtra.
                        At an altitude of 1,353 m in the Western Ghats, it is one of the popular hill stations in India,

                    </p>
                    <a href="#" class="btn btn-primary">
                        more info
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#cpu-fill"></use>
                    </svg>
                </div>
                <div>
                    <h2>Climate</h2>
                    <p>
                        In Mahabaleshwar, India, is a moderately hot winter month, with temperature in the range of an
                        average high of 23.6°C (74.5°F) and an average low of 8.9°C (48°F). In January, the average
                        high-temperature is relatively the same as in December - a still moderately hot 23.6°C (74.5°F).

                    </p>
                    <a href="#" class="btn btn-primary">
                        more info
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#tools"></use>
                    </svg>
                </div>
                <div>
                    <h2>More details</h2>
                    <p>

                        State : Maharashtra <br>
                        District : Satara <br>
                        Altitude : 1,438 meters (4,718 feet) <br>
                        Area : 150 square kilometers <br>

                        Pin Code : 412806 <br>
                        Languages spoken : Marathi, Hindi, English
                    </p>
                    <a href="#" class="btn btn-primary">
                        more info
                    </a>
                </div>
            </div>
        </div>
    </div>


    <section id="home">
        <div class="content">

            </br></br>
            <div class="container" style="width:1200px;"></br></br></br></br>
                <h1 align="center">Literacy Rate Per Year</h1></br></br></br>
                <p>The literacy rate is defined by the percentage of the population of a given age group that can read
                    and write. The adult literacy rate corresponds to ages 15 and above, the youth literacy rate to ages
                    15 to 24, and the elderly to ages 65 and above. It is typically measured according to the ability to
                    comprehend a short simple statement on everyday life. Generally, literacy also encompasses numeracy,
                    and measurement may incorporate a simple assessment of arithmetic ability. The literacy rate and
                    number of literates should be distinguished from functional literacy, a more comprehensive measure
                    of literacy assessed on a continium in which multiple proficiency levels can be determined.</p>
                <div id="chart"></div></br></br></br></br></br></br></br></br>
                <div class="container" style="width: 1200px; height: 500px;">
                    <h1 align="center">Population Rate Per Year</h1></br></br>
                    <p>The annual average rate of change of population size, for a given country, territory, or
                        geographic area, during a specified period. It expresses the ratio between the annual increase
                        in the population size and the total population for that year, usually multiplied by 100.</p>
                    <center>
                        <div id="chart2"></div>
                    </center>

                    <!-- JAVASCRIPTS -->
                    <script src="js/jquery.min.js"></script>
                    <script src="js/jquery.lwtCountdown-1.0.js"></script>
                    <script src="js/jquery.stellar.min.js"></script>
                    <script src="js/jquery.nicescroll.min.js"></script>
                    <script src="js/animated.js"></script>
                    <script src="js/main.js"></script>
</body>

</html>

<script>
Morris.Line({
    element: 'chart',
    data: [<?php echo $chart_data; ?>],
    xkey: 'year',
    ykeys: ['profit', ],
    labels: ['Literacy', ],
    hideHover: 'auto',
    stacked: true
});
</script>


<script>
Morris.Bar({
    element: 'chart2',
    data: [<?php echo $chart_data; ?>],
    xkey: 'year',
    ykeys: ['pop', ],
    labels: ['Population', ],
    hideHover: 'auto',
    stacked: true
});
</script>
<hr>

<br><br><br>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <?php 
$year = date("Y");

$connect = mysqli_connect("localhost", "root", "", "rohan");
$query = "SELECT * FROM villagers";
$result = mysqli_query($connect, $query);
$chart_data = '';

?>
        <?php  
$querymain = "SELECT * FROM villagers";
$resultmain=mysqli_query($connect,$querymain);
$rowsmain = mysqli_num_rows($resultmain);

$query2 = "SELECT * FROM villagers WHERE VillagePopulationCategory='Infants'";
$result2=mysqli_query($connect,$query2);
$rowsinfants = mysqli_num_rows($result2);

$query3 = "SELECT * FROM villagers WHERE VillagePopulationCategory='Children'";
$result3=mysqli_query($connect,$query3);
$rowschildren = mysqli_num_rows($result3);

$query4 = "SELECT * FROM villagers WHERE VillagePopulationCategory='Teenagers'";
$result4=mysqli_query($connect,$query4);
$rowsteen = mysqli_num_rows($result4);

$query5 = "SELECT * FROM villagers WHERE VillagePopulationCategory='Adults'";
$result5=mysqli_query($connect,$query5);
$rowsadult = mysqli_num_rows($result5);

$query6 = "SELECT * FROM villagers WHERE VillagePopulationCategory='Older Adults'";
$result6=mysqli_query($connect,$query6);
$rowsold = mysqli_num_rows($result6);


?>




        <center>
            <div id="container" style="width: 500px; height: 400px;"></div>
        </center>


        <?php 
 $infants = ($rowsinfants/$rowsmain)*100;
 $child = ($rowschildren/$rowsmain)*100;
 $teen = ($rowsteen/$rowsmain)*100;
 $adult = ($rowsadult/$rowsmain)*100;
 $old = ($rowsold/$rowsmain)*100;
?>





        <script src="anychart-base.min.js" type="text/javascript"></script>
        <script>
        anychart.onDocumentLoad(function() {
            // create an instance of a pie chart
            var chart = anychart.pie();
            // set the data
            chart.data([
                ['Infants', <?php echo $infants ?>],
                ['childrean', <?php echo $child ?>],
                ['Teenagers', <?php echo $teen ?>],
                ['Adult', <?php echo $adult ?>],
                ['Old', <?php echo $old ?>],

            ]);

            // set chart title
            chart.title("Total");
            // set the container element 
            chart.container("container");
            // initiate chart display
            chart.draw();
        });
        </script>
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">How are the Different Populations Defined?</h1>
        <p>
            The populations are defined by the following:

        </p>
        <p>
            Infants: <1 Children: 1-11 years or <7th grade <br>
                Teens: 12-17 or 7th-12th grade<br>
                Adults: 18-64<br>
                Older Adults: 65+<br>
                LGBTQ: Lesbian, gay, bisexual, and transgender people<br>
                Men: Men's health<br>
                Women: Women's health<br>

        </p>
    </div>
</div>
<br><br><br>
<hr> <br>
<div class="jumbotron jumbotron-fluid bg-light">
    <div class="container">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-12 col-sm-8 col-lg-6 text-center">

                <h1 class="display-5 fw-bold lh-1 mb-3 text-center ">History of Mahabaleshwar</h1>
                <p class="">
                    <br>
                    The oldest registered account of the name ‘Mahabaleshwar’ dates back to 13th century when Maharaja
                    Singhan; the Yadava King of Deogiri region paid a visit to this hamlet in 1215 AD. At the
                    originating point (Ugam or Udgam) of Krishna River, he set up a small temple devoted to Lord
                    Mahabaleshwar and also constructed a water tank beside the shrine. A Brahmin Clan of rulers invaded
                    Mahabaleshwar and its surrounding terrains in 1350 AD, who were later conquered by Maratha family of
                    Chandarao More in 16th century. Chandarao More and his heirs reined Mahabaleshwar and Jaoli when
                    they restored the Lord Mahabaleshwar temple of 13th century.
                    Chhatrapati Shivaji Maharaj, the great Maratha king and the founder of Maratha Empire overturned
                    Chandarao More’s rule and vanquished both Jaoli and Mahabaleshwar in 17th century. The magnanimous
                    fort of Pratapgad was built by him in 1656. Peshwas took over Mahabaleshwar after the demise of
                    Shivaji Maharaj and retained the governance till 1819 AD when Mahabaleshwar and the hilly region
                    around were integrated in the province of Satara King by British order.
                    A military brigade commanded by Col. Lodwick arrived and stayed at Satara in April 1824. The sierra
                    of Mahabaleshwar was ascended by them and they approached the point which is today known by the name
                    Lodwick Point. Sir John Malcolm, the father of this ballpark alighted at this rejuvenating and
                    pleasant niche and laid down the practice of visiting this hill station every summer, so as to be
                    able to escape the burning heat of Mumbai. Sir Mount Stuart Elphinstone, Arthur Malet, Carnac, Frere
                    and many others followed this trend established by Sir John Malcolm and became regular guests to
                    this blissful cloud cuckoo land. Sir John Malcolm built here a sanatorium for ailing and sick and
                    also a resort for the vacationists. Initially known as Malcolm Peth, the present day Mahabaleshwar
                    was instituted in the year 1829 – 30 and by the end of 19th century it flourished as a celebrated
                    hill station in every corner of the globe.

                </p>

            </div>
            <div class="col-lg-6">
                <img src="includes/images/history.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="400"
                    height="500" loading="lazy">



            </div>
        </div>


        <script src="includes/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="includes/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
        <script src="includes/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="includes/assets/js/app.js" type="text/javascript"></script>
        <script src="includes/assets/lib/jquery.magnific-popup/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script src="includes/assets/lib/masonry-layout/masonry.pkgd.min.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            //-initialize the javascript
            App.init();

        });

        $(window).on('load', function() {
            App.pageGallery();
        });
        </script>
        </body>