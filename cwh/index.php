<?php
$insert = false;
if(isset($_POST['name'])){
$server ="localhost";
$username ="root";
$password = "";

$con = mysqli_connect($server, $username, $password);
if(!$con){
    die("connection to this database" . 
    mysqli_connect_error());
}
//echo "Success connecting to the database";
$Name = $_POST['Name'];
$Gender = $_POST['Gender'];
$Age = $_POST['Age'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$description = $_POST['description'];
$sql =" INSERT INTO `trip'.'trip` (  `Name`, `Age`, `Gender`, `Phone`, `Email`, `description`, `Date`) 
VALUES ('$Name', '$Age', '$Gender', '$Phone', '$Email', '$description', current_timestamp());";
//echo $sql;

if($con-> querry($sql)== true){
    $insert= true;
    //echo "Successfully inserted";
}
else{
     echo "ERROR: $sql <br> $con->error";
    
}
   $con->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to my page</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="img.jpg" alt="IIEST Shibpur">
    <div class="container">

        <h1> Welcome to IIEST Shibpur US trip</h1>
        <p> Enter your details to enrolled your self to the trip</p>
        <?php 
        if($insert == true){
        echo "<p class='submitMsg'>Thank you for submitting the form. We will happy to see you again</p>";}
        ?>

        <form action="index.php"method="post">
        <input type="text" name="Name" id=" Name" placeholder="Enter your name">
        <input type="text" name="Age" id="Age" placeholder="Enter your Age">
        <input type="text" name=" Gender" id="Gender" placeholder="Enter your gender">
        <input type="email" name="Email" id="Email" placeholder="Enter your Email">
        <input type="Phone" name="Phone" id="Phone" placeholder="Enter your phone number">
        <textarea name="description" id="description" cols="30" rows="10" 
        placeholder="Any other Detail"></textarea>
        
        <button class="btn">Submit</button> 

       </form>
        

    </div>
    <script src="index.js"></script>
    <!--INSERT INTO `trip` (`sno`, `Name`, `Age`, `Gender`, `Phone`, `Email`, `description`, `Date`) VALUES ('1', 'Anil', '23', 'Male', '4398765123', 'anil@gmail.com', 'Hello', current_timestamp());
    -->
    </body>
</html>