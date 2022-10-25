<!-- Connection for login page -->
<?php 
  $host="localhost";
  $user="root";
  $password="";
  $db = "user";
  
  $data=mysqli_connect($host,$user,$password,$db);
  
 

// error handling
  if($data===false){
  
      die("connection error");
  }
  
  if($_SERVER["REQUEST_METHOD"]=="POST"){
      $username = $_POST["username"];
      $password = $_POST["password"];
      // $role = $_POST["role"];
  
      $sql="select * from login where username = '".$username."'AND password = '".$password."'";
  
      $result=mysqli_query($data,$sql);
  
      $row = mysqli_fetch_array($result);
  
      if($row["usertype"]=="user"){
          
          header("location:contactus.php");

      }else  if($row["usertype"]=="admin"){
          
         header("location:adminpage.php");

      }else  if($row["usertype"]=="field officer"){
          
        header("location:field.php");

     }else{
      echo("<script>alert('Please Type Correct Username and Password');</script>");
          header("location:index.php");
          
      }

      

  }

?>