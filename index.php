<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body style="background-color:black; align:center;">
<?php
    $link = mysqli_connect("localhost","root","","netflix");
    if($link == false) {
        die("Error: Could not connect".$mysqli_connect_error());
    }
    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM login WHERE name='$name' AND password='$password'";
    $res=mysqli_query($link,$sql);
    if(mysqli_num_rows($res)>0){
        if($row=mysqli_fetch_array($res)){
            echo '<div style="text-align:center; margin-top:20%;">';
            echo '<h1 style="color: red;">Welcome Back '.$name.'</h1>';
            echo '<a href= "Home\index.html" style="color: red; margin-left:40px;">
            <button style="width:170px; height:30px; font-size:20px; color:red;">
            Go To Home</button></a>';
            echo '<a href= "index.html" style="color: red; margin-left:40px;">
            <button style="width:100px; height:30px; font-size:20px; color:red;">
            GoBack</button></a>';
            echo '</div>';
        }
    }
    else {
        $query = "INSERT INTO login VALUES('$name','$passsword')";
        musqli_query($link,$query);
        if($row=mysqli_fetch_array($res)){
            echo '<div style="text-align:center; margin-top:20%;">';
            echo '<h1 style="color: red;">Welcome Back '.$name.'</h1>';
            echo '<a href= "Home\index.html" style="color: red; margin-left:40px;">
            <button style="width:170px; height:30px; font-size:20px; color:red;">
            Go To Home</button></a>';
            echo '<a href= "index.html" style="color: red; margin-left:40px;">
            <button style="width:100px; height:30px; font-size:20px; color:red;">
            GoBack</button></a>';
            echo '</div>';
        }
    }
    mysqli_close($link);
?>
</body>
</html>