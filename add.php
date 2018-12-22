<?php
$localhost = "localhost";
$user = "root";
$pass = "";
$db = "ajax";

$conn = mysqli_connect($localhost,$user,$pass,$db);
if(!$conn){
    die('Connection failed' .mysqli_error($conn));
}


$name2 = $_POST['name1'];
$comment2 = $_POST['comment1'];


if(isset($_POST['name1'])){
if($name2 == '' || $comment2 == ''){
    echo 'Error Blank';
}

    $sql = "INSERT INTO ajax(name,comments)VALUES('$name2','$comment2')";
    mysqli_query($conn, $sql);
    echo 'success';

}else{
    echo 'error';
}


?>