<?php 

?>
<html>
    <head>

    <title>
        ADMIN
    </title>
    <style>
        body{
            background: rgb(143,240,125);
             background: radial-gradient(circle, rgba(143,240,125,1) 0%, rgba(148,233,228,1) 54%);
          
            }
        table{
                background-color:white;
             }
             .btn{
                align-items: center;
                background-color: transparent;
                color: red;
                border: 0;
                outline: none;
                border-radius: 5px;
                height: 23px;
                width: 100px;
                font-weight: bold;
                cursor: pointer;
                
             }
    </style>
   </head>
   <body>
   
   </body>
</html>
<?php 

include("connection.php");

$query = "SELECT * FROM FORM";

$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);




if($total != 0){

    ?>
        <h2 align="center" class="text-white"><bold>WELCOME TO ADMIN PANEL</bold></h2>
        <hr>
        <center>
        <table  cellspacing="7" border="1" width="85%">
            <tr>
            <th width="%5">ID</th>
            <th width="%10">Name</th>
            <th width="%10">Email</th>
            <th width="%10">Phone</th>
            <th width="%10">Address</th>
            <th width="%10">Subject</th>
            <th width="%25">Message</th>
            <th width="%5">Operations</th>
            </tr>
        
    <?php

    while($result = mysqli_fetch_assoc($data)){
       
       echo"<tr>
            <td>".$result['id']."</td>
            <td>".$result['name']."</td>
            <td>".$result['email']."</td> 
            <td>".$result['phone']."</td>
            <td>".$result['address']."</td>
            <td>".$result['subject']."</td>
            <td>".$result['message']."</td>
            
            <td><a href='contactus2.php'><input type='submit' value='Add Forms' class='btn'></a></td>
            </tr>";
        
    }
}else{

    echo "No records found";
}
include("connection.php");
 
  $name = $_GET['name'];
  $query = 'DELETE FROM FORM WHERE name = "$name" ';
  $data = mysqli_query($conn,$query);

  if($data){
    echo "Deleted";
  }else{
    echo "Failed";
  }

?>
</table>
</center>
<!-- echo($result['name']." ".$result['email']." ".$result['phone']." ".$result['address']." ".$result['subject']." ".$result['message']); -->
