<?php
if(isset($_post['submit'])){
    $name =array("edwine","student","peter","antony","kimani","mark","tim");
    $minimum = 5;
    $maximum =10;


   $username = $_POST["username"];
    $password = $_POST["password"];
 //echo "hello".$username;
 //echo "your password".$password;


 if (strlen($username)<5){
 if (strlen($username)< $minimum){
    echo "username has to be longer than 5";
 }
if(strlen($username)>$maximum){
    echo"username is too long";
}
if(in_array($username,$name)){
    echo "user name already exists";
}
if(!in_array($username,$name)){
    echo "sorry acess denied";
}else{
    "welcome";
}
}
}

?>