<?php
$servername="localhost";
$username="root";
$password="";
$database_name="customer";

$conn=mysqli_connect($servername,$username,$password,$database_name);
//check the connection

if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $username = $_POST['$username'];
    $email = $_POST['$email'];
    $password = $_POST['$password'];
    $sql_query = "INSERT INFO entry_details(username,email,password)
    VALUES ('username','email','password')";
    if(mysqli_query($conn,$sql_query))
    {
        echo "New Details Entry inserted successfully !";
    }
    else
    {
        echo "Error".$sql . "" .mysqli_error($conn);
    }
    mysqli_close($conn);

}

?>