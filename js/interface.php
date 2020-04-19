<?php

$link=mysql_connect('localhost','root','');
   if(!$link) die("Impossible de se connecter : " . mysql_error());
$db_selected = mysql_select_db('eduinfot_psia', $link);
if (!$db_selected) {
   die ('Impossible de sélectionner la base de données : ' . mysql_error());
}
$sql="SELECT *  FROM resultat ORDER BY id_res desc limit 1";

$query = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_assoc($query) or die(mysql_error());

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>SIA</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/bootstrap-table.min.css">
    <link rel="stylesheet" href="css/style.css">

  
    <style>
      @import url(http://fonts.googleapis.com/css?family=Bree+Serif);
      body, h1, h2, h3, h4, h5, h6{
      font-family: 'Bree Serif', serif;
      }
    </style>
  </head>
  
  <body onload=display_ct();>
    <div class="container">
      <div class="row">
        <div class="col-xs-3">
          <h1>
            
            <img src="img/logo_isitcom.gif" width="200" height="100">
          
            
          </h1>
        </div>
        <div class="col-xs-6 text-center">
          <h1>SIA</h1>
          <h1><small>Système d Irrigation Automatique</small></h1>
        </div>
        <div class="col-xs-3 text-right">
          <h1>
            <a href="https://twitter.com/tahirtaous">
            <img src="img/emka.jpg" width="200" height="100">
          
            </a>
          </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 >Date et heure: <a href="#" ><span id='ct' ></span></a></h4>
            </div>
            <!--div class="panel-body">
              <p>
                Address <br>
                details <br>
                more <br>
              </p>
            </div-->
          </div>
        </div>
        
      </div>
      
      <!-- / end client details section -->
      <div class="row">
        <div class="col-xs-6">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h4>Niveau d'eau du résrvoir</h4>
            </div>
            
          </div>
        </div>
        <div class="col-xs-6">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h4>Historique du systéme</h4>
            </div>
            
          </div>
        </div>
      </div>
      <div class="row">

      <div  class="col-xs-6">
      	<div id="cont" data-pct="0">
<svg id="svg" width="200" height="200" viewPort="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
  <circle r="90" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0"></circle>
  <circle id="bar" r="90" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0"></circle>
</svg>
</div>
<label for="percent"></label>

<input id="percent" name="percent" class="form-control" type="hidden" value="<?php echo $row['pourcentage_res']; ?>">
 
      </div>
      <br><br><br><br>
      <div class="col-xs-6">

      <div class="table-responsive">
<table class="table-cell" id="table" data-toggle="table" data-show-refresh="true" data-show-toggle="true"
       data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true"
       data-page-list="[5, 10, 20, 50, 100, 200]" data-page-size="10" data-sort-name="stargazers_count"
       data-sort-order="asc" data-url="table.php">
    <thead>
    <tr>

        <th data-field="date_in_res" data-sortable="true">Début d'irrigation</th>
        <th data-field="date_out_res" data-sortable="true">fin d'irrigation</th>


                
        
    </tr>
    </thead>
</table>
</div>
<br>
<br><br>
      </div>
      </div>

      <br><br><br>
      <div class="row text-left">
        
        <div class="col-xs-6">
          <div class="span6">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h4 class="text-center">Humidite</h4>
              </div>
              <div class="panel-body">
                <input id="humidite" name="humidite" class="form-control" value="<?php echo $row['humidite_res']; ?>">
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="span6">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <h4 class="text-center">Erreur</h4>
              </div>
              <div class="panel-body">

<?php
if($row['reponse_res']=="1")
                echo "<p class='bg-success h2 text-center'>Success</p>";
else
 echo "<p class='bg-danger h2 text-center'>Erreur</p>";
?>


                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
       <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-table.min.js"></script>
<script src="js/bootstrap-table-fr-FR.min.js"></script> 



<script>

$(document).ready(function(){
    
  var val = $('#percent').val();
  var $circle = $('#svg #bar');
  
  if (isNaN(val)) {
   val = 100; 
  }
  else{
    var r = $circle.attr('r');
    var c = Math.PI*(r*2);
   
    if (val < 0) { val = 0;}
    if (val > 100) { val = 100;}
    
    var pct = ((100-val)/100)*c;
    
    $circle.css({ strokeDashoffset: pct});
    
    $('#cont').attr('data-pct',val);
  }
});
function fait_Array(n) {
  this.length = n;
  return this;
}

aMois = new fait_Array(12);
aMois[1] = "janvier";
aMois[2] = "février";
aMois[3] = "mars";
aMois[4] = "avril";
aMois[5] = "mai";
aMois[6] = "juin";
aMois[7] = "juillet";
aMois[8] = "août";
aMois[9] = "septembre";
aMois[10] = "octobre";
aMois[11] = "novembre";
aMois[12] = "décembre";

aJours = new fait_Array(7);
aJours[1] = "Dimanche";
aJours[2] = "Lundi";
aJours[3] = "Mardi";
aJours[4] = "Mercredi";
aJours[5] = "Jeudi";
aJours[6] = "Vendredi";
aJours[7] = "Samedi";
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var strcount;
var x = new Date();
var nEr = x.getDate();
  if (nEr == 1) nEr += "er";
var nJour = aJours[x.getDay() + 1];
  var nMois = aMois[x.getMonth() + 1];
  var nAnnee = x.getYear();
if (nAnnee < 100) nAnnee += 2000;
  if (nAnnee > 100&&nAnnee < 2000) nAnnee += 1900;
  var h = x.getHours();
                var m = x.getMinutes();
                var s = x.getSeconds();
                if(s<10)
                	s="0"+s
                if(m<10)
                	m="0"+m
                if(h<10)
                	h="0"+h

                 var time = h + ' : ' + m + ' : ' + s;
           var date= nJour + ", " + nEr + " " + nMois + " " + nAnnee+ " "+time;
               
document.getElementById('ct').innerHTML = date;
tt=display_c();
}



</script>
  </body>
</html>
