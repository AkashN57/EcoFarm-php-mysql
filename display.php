
<html>
    <head>

    <title>
        Display
    </title>
    <style>
        body{
            background: rgb(238,174,202);
            background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 60%);
            }
        table{
                background-color:whitesmoke;
             }
    </style>
   </head>
   <body>
   
   </body>
</html>
<?php 
include("connection.php");

$query = "SELECT * FROM form";

$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);




if($total != 0){

    ?>
        <h2 align="center"><bold>Records of Forms</bold></h2>
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
