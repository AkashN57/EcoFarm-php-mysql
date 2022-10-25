<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conatct Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
         rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
         crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container " >
        <div class="row">
            <div class="col-lg-6-m-auto">
                <div class="card">

                <div class="card-title">
                <h2 class="bg-success text-white text-center py-3">Contact Us</h2>
                <hr>
            </div>
                <div class="card-body" >
    
                <form action="#" method="POST">
                <input type="text" name="name" placeholder="Name" class="form-control mb-2" required>
                <input type="email"name="email" placeholder="Email" class="form-control mb-2" required>
                <input type="text" name="phone" placeholder="Phone Number" class="form-control mb-2" required>
                <input type="text" name="address" placeholder="Address" class="form-control mb-2" required>
                <input type="text" name="subject" placeholder="Subject" class="form-control mb-2" required>
                <textarea name="message" class="form-control mb-2" placeholder="Message" required></textarea>
                <input name='register' type="submit" class="btn btn-success" value="Submit" >
                <button class="btn btn-primary"><a href="home1.php" style="text-decoration:none; color:white;">Home</a></button>
                </form>

                </div>
             </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php 
    
    if($_POST["register"]){
       $name = $_POST['name'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $address = $_POST['address'];
       $subject = $_POST['subject'];
       $message = $_POST['message'];

       if($name !="" && $email !="" && $phone != "" && $address != "" && $subject != "" && $message !=""){

       $query =  "INSERT INTO FORM VALUES('$name','$email','$phone','$address','$subject','$message')";
       $data = mysqli_query($conn,$query);

       if($data){
        echo ("<script>alert('Data insert into Database');</script>");
       }else{
        echo("<script>alert('Failed to insert into Database');</script>");
       }

    }else{

        echo("<script>alert('Fill all the details');</script>");

    }
    }
?>

