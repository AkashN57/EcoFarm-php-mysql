<?php include("connection.php") ?>
<html>
    <head>

    <title>
        FIELD OFFICER
    </title>
    <style>
        body{
            background: rgb(143,240,125);
     background: radial-gradient(circle, rgba(143,240,125,1) 0%, rgba(148,233,228,1) 54%);
            }
        table{
                background-color:white;
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
        <h2 align="center"><bold>WELCOME TO FIELD OFFICER PANEL</bold></h2>
        <hr>
        <center>
        <table  cellspacing="7" border="1" width="85%">
            <tr>
            <th width="%10">Name</th>
            <th width="%15">Email</th>
            <th width="%10">Phone</th>
            <th width="%15">Address</th>
            <th width="%10">Subject</th>
            <th width="%25">Message</th>
            </tr>
        
    <?php

    while($result = mysqli_fetch_assoc($data)){
       
       echo "<tr>
            <td>".$result['name']."</td>
            <td>".$result['email']."</td> 
            <td>".$result['phone']."</td>
            <td>".$result['address']."</td>
            <td>".$result['subject']."</td>
            <td>".$result['message']."</td>
            </tr>";
        
    }
}else{

    echo "No records found";
}
?>
</table>
</center>
<!-- echo($result['name']." ".$result['email']." ".$result['phone']." ".$result['address']." ".$result['subject']." ".$result['message']); -->
