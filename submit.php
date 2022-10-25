<!-- Omit this page (only for reference) -->

<?php 

    if($_POST['register']){

        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        if($name !="" && $email !="" && $phone != "" && $address != "" && $subject != "" && $message !=""){

        

       $query =  "INSERT INTO FORMS values('$name','$email','$phone','$address','$subject','$message')";

       $data = mysqli_query($conn,$query);

       if($data){

        echo "Data inserted into database";
       }else{
        echo("<script>alert('Failed to add to Database');</script>");
       }
       
    }else{

        echo("<script>alert('Fill all the details');</script>");

    }

    }
?>