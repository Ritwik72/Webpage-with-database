<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP</title>
</head>
<style>
    *{
        margin:0;
        padding: 0;
        
    }
    .container{
        max-width: 80%;
        background-color: rgb(302,52,951);
       
        margin:auto;

    }
</style>
<body>
    <div class="container">
        
     <h1> Hello this is Container using php</h1>
     <p> Your party status is here</p>
        
     <?php
     echo "<br>";
     $age =34;
     if($age>18){
        echo "you can go to the party";
     }
     else{
        echo"you cannot go to the party";
     }

     for($a=0;$a<10 ;$a++){
       echo "<br>";
    echo $a;

     }
     

        ?>
    </div>
    
</body>
</html>