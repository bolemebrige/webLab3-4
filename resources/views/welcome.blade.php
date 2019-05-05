<!doctype html>
<?php use Illuminate\Support\Facades\Auth;?>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>



<script type="text/javascript">
    




function myfunction(clicked_id){
        if (window.XMLHttpRequest){
    xmlhttp=new XMLHttpRequest();
}
else{
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
var PageToSendTo = "http://localhost:8000/editProject?";
var MyVariable = clicked_id;
var VariablePlaceholder = "id=";
var UrlToSend = PageToSendTo + VariablePlaceholder + MyVariable;
    window.open(UrlToSend);
    
    
}




</script>



    </head>
    <body>
        
<div><?php


$user = Auth::user();





?> 



<div >
 
  <h1><?php



echo $user->email;




?> </h1>
 
  <p>Vođenje Projekata</p>
 <div style="overflow-x:auto;">
  <table>
    <?php  
$Projects = \App\Project::all();
$RadiNas = \App\RadiNa::all();

foreach($Projects as $project){

    if($project->id_voditelja==$user->id){

echo "<tr>";
echo '<td onClick="myfunction(this.id)" id="'.$project->id.'">'. $project->Naziv ."</td>";
//echo "<td>" . $project-> . "</td>";
echo "</tr>";

}
}

    ?>
  </table>



</div>

<a href="/insertProject">Dodaj projekt</a>
</div>

 <p>Projekti na kojima radim</p>
 <div style="overflow-x:auto;">
  <table>
    <?php  



foreach($RadiNas as $RadiNa){

    if($RadiNa->id_radnika==$user->id){

$thisProject=\App\Project::where('id',$RadiNa->id_projekta)->first();

echo "<tr>";
echo '<td onClick="myfunction(this.id)" id="'.$RadiNa->id_projekta.'">'. $thisProject->Naziv ."</td>";

//echo "<td>" . $project-> . "</td>";
echo "</tr>";

}
}

    ?>
  </table>



</div>



    </body>
</html>
