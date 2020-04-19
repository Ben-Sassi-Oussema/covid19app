<!doctype html>
<html class="no-js" lang="">

<head>
 <meta http-equiv="refresh" content="15" />

 <script src="https://cdn.pubnub.com/sdk/javascript/pubnub.4.4.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SMART FARMING</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap-table.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//rawgithub.com/Caged/d3-tip/master/examples/example-styles.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

    <script src="https://d3js.org/d3.v3.min.js"></script>

</head>

<body 

>


<?PHP
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  

$response = file_get_contents("https://api.thingspeak.com/channels/286491/feeds.json?api_key=YR7GMFUTBD5Y1EKY&results=1", false, stream_context_create($arrContextOptions));
$data = json_decode($response, true);
$bio=$data['feeds']['0']['field2'];
$bio1=$data['feeds']['0']['field1'];

?>


<!-- bloc titre/date/heure    -->

    <div   class="container" style="margin-top:40px;width: 1700px;">
        <div class="col-md-12" >
            <div class="col-md-7" style="padding:0px;">
                <span class="title" style="font-size:2.7rem;">SMART FARMING</span>
            </div>
            <div class="col-md-5" style="font-size:1rem;padding: 0px;">
                <div style="margin-top:10px;">
                    <span class="title" style="float:">Date: &nbsp;</span>
                    <input id="datepicker" class="datepicker form-control" data-date-format="dd-M-yy" style="height: 45px; width: 20%; font-size: 1.5em;float:left;">
                    <span class="title" style="float:left"> &nbsp; &nbsp; &nbsp;Time: &nbsp;</span>
                    <span class="title" style="float:left" id="currentTime"></span>
                </div>
            </div>

        </div>
		
		<!-- fin de bloc   -->
		
		
		


<!-- bloc temperature -->


        <div height="170" width="450" > 


            <div  class="col-md-2 card" style="height: 300px; width:350px; text-align: center;padding-top: 70px; background-color:#ffb2aa" >


<center>
                <span  class="card-title" style="float:none;" > Temperature</span>
                <div class="card-contents" >
                    <span style="font-size: 4em;font-weight:bold;color:white" id="current-trolley"><?php echo $bio?> C°</span>
</center>
                </div>
            </div>
			<!--fin bloc temp -->
			
			
			<!-- bloc hum -->
            <div class="col-md-2 card" style="height: 300px;width:350px;text-align: center;padding-top: 70px; background-color:#64bbaa">
                <span class="card-title" style="float:none;">Humidity</span>
                <div class="card-contents">
                         <span style="font-size: 4em;font-weight:bold;color:white" id="missing-trolley"><?php echo $bio1?> %</span>
                </div>
				
            </div>
			<!--fin bloc hum-->
            
			
			
			
			
      
     <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-table.min.js"></script>
<script src="js/bootstrap-table-fr-FR.min.js"></script> 




</body>



<footer>
<div>
                <span class="card-title" style="float:none;" >We believe in the future of agriculture  with a faith born not of words but of deeds</span>

     </div>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="https://labratrevenge.com/d3-tip/javascripts/d3.tip.v0.6.3.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.7/bootstrap-notify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <script src="js/canvasjs.min.js"></script>
    <script src="js/main.js"></script>
</footer>


</html>
