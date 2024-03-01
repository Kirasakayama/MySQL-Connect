<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    
</head>
<body>

<style>
    body{
    margin: 0;background-color: rgb(255, 247, 237);
}
::-webkit-scrollbar{
    width: 0;
}
header{
    height: 100vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color:antiquewhite;

}
h3{
    text-align: center;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color:  rgb(112, 191, 255);
}
form{
    display: flex;
    justify-content: center;
    align-items: center;
    display: flex;
}
.submit-btn{
    background-color: rgb(112, 191, 255);
    height: 14vmin;width:30vmin;
    border: none;border-radius: 2vmin;
    color:white;font-size:medium;
    transition: all 0.2s ease;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
.submit-btn:hover{
    height: 16vmin;width:32vmin; font-size:large;
}

</style>

    <header>
<h3>click on the button bellow to connect with database</h3>
<form action="MySQLConnect.php" method="post" name="login">
      <input type="submit" value="connect" name="submit" style="cursor:pointer" class="submit-btn">
</form>

<?php

$servername = 'localhost';
$username = 'root';
$password = "";

if(isset($_POST['submit'])){
     try{
      $connection = new PDO("mysql:host=$servername;dbname=users",$username,$password);
      $connection->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    
      echo "<h3>connected sucessfully</h3>";
     
    }catch(PDOException $e){
     echo "<h3>connection failed</h3> <br>" . $e->getMessage();
    }
}

?>   

</header>






</body>
</html>


