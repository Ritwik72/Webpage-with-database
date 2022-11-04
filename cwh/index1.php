<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="container">
        This is my first php page
        <?php
        echo " <br> Hello this is priented using php ";
        $variable1=25;
        $variable2=36;
       
        //Operators in PHP
        // echo "<br>";
        // echo "The value of variable1+ variable2 is ";
        // echo  $variable1 + $variable2;
        // echo "<br>";
        // echo "The value of variable1- variable2 is ";
        // echo  $variable1 - $variable2;
        // echo "<br>";
        // echo "The value of variable1* variable2 is ";
        // echo  $variable1 * $variable2;
        //
        echo "<br>";
        // echo "The value of variable1/ variable2 is ";
        // echo  $variable1 / $variable2;


        $newVar =$variable1;
        $newVar += 1;
        echo $newVar;
        echo "the value of 1==4 is ";
        echo var_dump(1==4);
        echo "<br>";
        echo "the value of 1==4 is ";
        echo var_dump(1!=4);
        echo "<br>";
        echo "the value of 1==4 is ";
        echo var_dump(1<=4);
        echo "<br>";
        echo "the value of 1==4 is ";
        echo var_dump(1>=4);
        echo "<br>";

        echo $variable1++ ;
        echo "<br>";
        echo $variable1--;
        echo "<br>";
        echo ++$variable1;
        echo "<br>";
        echo --$variable1;
        echo "<br>";
        //$var = "This is String";
        //echo var_dump($var)
        echo "<br>";
        $var = 45.54;
        echo var_dump($var)
        // echo "<br>";
        // $var = 45;
        // echo var_dump($var)
         ?>
    </div>
</body>
</html>