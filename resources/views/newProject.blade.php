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

?>



<div >
 
  <h1>

</div>

<form action="/insertProjectDB" >
  Naziv projekta:<br>
  <input type="text" name="naziv"><br>

  Opis projekta:<br>
  <input type="text" name="opis"><br>

 Obavljeni poslovi:<br>
  <input type="text" name="poslovi"><br>


 Početak:<br>
  <input type="date" name="start"><br>

 Kraj:<br>
  <input type="date" name="end"><br>

 <button type='submit' >Dodaj projekt</button>


</form>



</div>



    </body>
</html>
