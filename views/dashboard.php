<?php

session_start();

if (empty($_SESSION["username"])) {
    header("Location: ../index.php");
}

if ($_SESSION["username"] == "admin") {
    header("Location: ../admin_page.php");
}

?>

 <!doctype html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Pos-sustav::Dashboard</title>

     <!-- Bootstrap core CSS -->
     <link href="./bootstrap.min.css" rel="stylesheet">

     <!-- Custom style -->
     <link rel="stylesheet" href="./dashboard_style.css">

    <script src="./ajaxRequest.js"></script>

    <script>

        function kupovina(){
            /*
            <li class="nav-item foodItem">
                <span class="text-danger deleteItem">x | </span>
                Foccacia
                <span class="float-right cijena">9 KM</span>
            </li>
             */

            var boughtMenu = document.getElementById("korpa");

            if(boughtMenu.childNodes.length < 2){
              return;
            }

            var konobar = document.getElementById("konobar").innerHTML;
            var ukupno = 0;

            var items = [];



            for(var i = 1; i < boughtMenu.childNodes.length; i++){

                var item = boughtMenu.childNodes[i];

                ukupno += parseInt(item.childNodes[2].textContent);
                item.removeChild(item.childNodes[2]);
                item.removeChild(item.childNodes[0]);


                items.push(item.textContent);

            }


            window.location = './final_buying.php?items='+items+
              '&konobar='+konobar+'&ukupno='+ukupno;
        }


    </script>


</head>
<body>

    <!-- Navigacijska traka -->
    <?php include './dashboard_nav.php';?>

    <div class="container-fluid">
      <div class="row">


        <!-- Izbornik sa strane (side menu) -->
        <?php include './dashboard_sidemenu.php';?>

        <?php include './dashboard_main.php';?>
      </div>
    </div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- Bootstrap scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>


</body>
</html>
