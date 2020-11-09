<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <div class="container">

  <h1>Hello, world!</h1>
    <!-- Exercise 1 -->
    <h2 class="text-center">
        <?php

            $name = "Mark";
            echo $name;        
        ?>
    </h2>

    <!-- Exercise 2 -->
    
    <?php
        $current_day = "Monday";
        if ($current_day == "Monday") {
            echo nl2br ("Happy Monday! $current_day \n");
            echo "2nd line <br>";
        } else
            echo "Have a nice day! <br>";
    ?>

    <!-- Exercise 3 -->

    <?php
        $current_day = "Monday";
        if ($current_day == "Monday") {
            echo "Today is $current_day <br>";
        } else if ($current_day == "Tuesday")
            echo "Today is $current_day! <br>";
        else
        echo "leave me alone <br>";  
    ?>

    <!-- Exercise 4 -->
    <?php
        for ($i=0; $i < 5; $i++) { 
            echo "Alejandro <br>";
        }

        $a = 0;
        while ($a < 10) {
            echo "Mark <br>";
            $a++;
        }

        $b = 0;
        do {
            echo "Alejandro <br>";
            $b ++;
        } while ($b < 10);
    ?>

    <!-- Exercise 5 -->
    <?php
        $numbers = array(0,1,2,3,4,5,6,7,8,9);
        foreach ($numbers as $value) {
            echo $value;
        }
    ?>

    <!-- Exercise 6 -->
    <?php

    $characters = array (
        "Mickey Mouse" => array (
            "Company" => "Disney",
            "Friend" => "Mini Mouse"
        ), 
        "Super Mario" => array (
            "Company" => "Nintendo",
            "Friend" => "Luigi"
        ),
        "Goku" => array (
            "Company" => "Dragonball",
            "Friend" => "Krillin"
        ),
        "Pokemon" => array (
            "Company" => "Nintendo",
            "Friend" => "Pikachu" 
        )
    );

    echo "{$characters["Goku"]["Friend"]} <br>";

    foreach ($characters as $key ) {
        echo "The company is called: {$key['Company']} <br>";
    }
    ?>

  </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>