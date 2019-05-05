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
    </head>
    <body>
        
<div><?php



$user = Auth::user();


echo $user->email;
$id=$_GET['id'];
$Projects = \App\Project::where('id',$id)->first();
$Users = \app\User::all();


?>



<div >
 
  <h1>

</div>

<form action="/editProjectAction" >



  <?php

echo "ID projekta:<br>";
echo  '<input type="text" name="id" value="'.$id.'""  readonly><br>';
echo "  Naziv projekta:<br>";
  if($user->id == $Projects->id_voditelja){

 echo  '<input type="text" name="naziv" value="'.$Projects->Naziv.'""><br>';}
 else echo '<input type="text" name="naziv" value="'.$Projects->Naziv.'"" readonly><br>';
?>


  Opis projekta:<br>
  <?php

  if($user->id == $Projects->id_voditelja){
 echo  '<input type="text" name="opis" value="'.$Projects->Opis.'""><br>';}
 else  echo  '<input type="text" name="opis" value="'.$Projects->Opis.'"" readonly><br>';
?>
 Obavljeni poslovi:<br>
 <?php
 echo  '<input type="text" name="poslovi" value="'.$Projects->Obavljeni_poslovi.'""><br>';
?>

 Početak:<br>
 <?php
 if($user->id == $Projects->id_voditelja){
   echo  '<input type="date" name="start" value="'.$Projects->Datum_početka.'""><br>';}
   else
     echo  '<input type="date" name="start" value="'.$Projects->Datum_početka.'"" readonly><br>';
?>
 Kraj:<br>

 <?php
 if($user->id == $Projects->id_voditelja){
  echo  '<input type="date" name="end" value="'.$Projects->Datum_završetka.'""></br>';}
  else{

  echo  '<input type="date" name="end" value="'.$Projects->Datum_završetka.'"" readonly></br>';}

    echo  '<input type="hidden" name="id_voditelja" value="'.$Projects->id_voditelja.'"" ></br>'
?>


</br>




<?php
 if($user->id == $Projects->id_voditelja){
echo "<h3> Dodaj ljude na projekt:</h3>";
foreach($Users as $User){

   if($User->id != $user->id){


echo "<tr>";
echo "<td>" .'<input type="checkbox" name="human" value="'.$User->id.'"">'.$User->email ."</td>";
//echo "<td>" . $project-> . "</td>";
echo "</tr></br>";

}
}}
?>

 <button type='submit' >Spremi projekt</button>


</form>


</div>



    </body>
</html>
