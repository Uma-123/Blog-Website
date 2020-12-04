<?php
include 'inc/config.php';
include 'inc/header.php';

if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['message']))
{
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $insert = $link->query("INSERT INTO `contact_us`( `first_name`, `last_name`, `email`, `message`) VALUES ('$fname','$lname','$email','$message')");
    if($insert == TRUE)
    {
        
        echo '<br><h1 style="text-align: center;">Thanks for submitting</13>';
        echo '<br><br><h3 style="text-align: center;">We will reach you as soon as possible</h3>';
        echo '<br><br><h4 style="text-align: center;">Have a nice day</h4>';
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="icon" type="image/" href="icon.jpg">
            <script src="https://kit.fontawesome.com/b5e76a3b95.js" crossorigin="anonymous"></script>
            <!-- fa-measure gives the icon the specific size -->
        
        </head>
        <body>
           <div style=" text-align:center;">
           <br>
           <i class="fas fa-smile fa-6x"></i>
           </div>
            
        </body>
        </html>';
        
        exit();

    }
    
}


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <br> <h1 style="font: larger;text-align: center;font-family: Trebuchet MS;">Contact us</h1>
    <br>
    <p style="text-align: center;font-family: Trebuchet MS;font-size:large;">Got a question? We &rsquo;d love to hear from you . Send us a message and we&rsquo;ll respond as soon as possible</p>
    <form method="post" action="" style="padding-left: 11%;padding-right: 11%; id="form">
      <label for="Yourname">Name</label>
      <div class="row">
      <div class="col">
      <input type="text" class="form-control" placeholder="First name" name="first_name" required>
      </div>
      <div class="col">
      <input type="text" class="form-control" placeholder="Last name" name="last_name" required>
      </div>
      </div>
      <br>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="message" required></textarea>
      </div>
      <button type="submit"  class="btn btn-primary" name="submit">Submit</button>
      
    </form>';
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
