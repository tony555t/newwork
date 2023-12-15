<?php
if(isset($_post['submit'])){
    
   $username = $_POST["username"];
    $password = $_POST["password"];
 //echo "hello".$username;
 //echo "your password".$password;


 if (strlen($username)<5){
    echo "username has to be longer than 5";
 }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action ="form.php"method="post">
<input type ="text"name ="username"placehold="enter username">
<input type ="password"name ="pasword"placehold="enter pasword"><br>

<input type="submit" name="submit">

</form>

    
    
</body>
</html>