<!-- connection to Database -->
<?php 
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "responsiveform1";

$conn = mysqli_connect($severname,$username,$password,$dbname);

if($conn){
    //  echo "Connection okay";
}else{
    echo "Connection failed";
}
?>

