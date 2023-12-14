<?php
if(isset($_post['submit'])){
    echo "it works";

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
<input type ="text"placehold="enter username">
<input type ="password"placehold="enter pasword"><br>

<input type="submit" name="submit">

</form>

    
    
</body>
</html>