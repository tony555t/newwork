<?php include "function. php"?>
<?php include "include/header.php"?>
<section class ="content">
    <aside class ="col-xs-4">
        <?php Navigation();?>
</aside><!--SIDEBAR-->
<article class = "main-content col-xs-8">

<?php
if (isset($_POST['submit'])){
    echo $_POST['submit'];
}



?>
<form action="6.php"method="post">


<input type="submit"name="submit"value="SUBMIT">


</form>