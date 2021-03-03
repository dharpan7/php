<?php
if( $_SERVER['REQUEST_METHOD']=='POST'){
    require("mysqli_connect.php");
    $errors = false;
    $amount = $_POST['amount'];
    if(empty($_REQUEST['firstname'])){
        echo "First name cannot be Empty.";
        $errors = true;
    }
    else{
        $firstname = $_POST['firstname'];
        $first_name=mysqli_real_escape_string($dbc,$firstname);
    }
    if(empty($_REQUEST['lastname'])){
      echo "last name cannot be Empty.";
      $errors = true;
  }
  else{
      $lastname = $_POST['lastname'];
      $last_name=mysqli_real_escape_string($dbc,$lastname);
  }
    if(empty($_REQUEST['email'])){
        echo "Email_id cannot be Empty.";
        $errors = true;
    }
    else{
        $email = $_POST['email'];
        $emailid=mysqli_real_escape_string($dbc,$email);
    }
    if(empty($_REQUEST['creditcard'])){
        echo "creditcard Number cannot be Empty.";
        $errors = true;
    }
    else{
        $creditcard = $_POST['creditcard'];
        $credit_card=mysqli_real_escape_string($dbc,$creditcard);
    }
    if($errors == false){
        $q = "INSERT INTO customers(firstname,lastname, email, creditcard,amount) VALUES ('$first_name','$last_name','$emailid','$credit_card','$amount')";
        mysqli_query($dbc,$q);
        echo mysqli_error($dbc);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
     .for{
       margin-bottom: 15%;
       margin-top: 5%;
       margin-left: 15%;
       font-size: 100%;
     }
     input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-left: 17%;
  margin-top: 20px;
}
input[type=text], input[type=email], input[type=number], input[type=date], select {
  width: 40%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  resize: vertical;
}
label {
  padding: 10px 10px 10px 0;
  display: inline-block;
}

    </style>
</head>
<body>
<header>
        <div class="container">
            <a class="logo" href="index.html"><img src="images/liblogo.jpg" alt="The Cerntral Library Logo"></a>
            <div id="title">
                <h1>The Cerntral Library </h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="book.php">Find Books</a></li>
                   
                </ul>
            </nav>
        </div>
    </header>
    <form class="for" action="ctest.php" method = "post">
  <div class="formInp">
    <div class="labDiv">
      <label for="fname">First Name:</label>
    </div>
    <div class="inpDiv">
      <input type="text" id="fname" name="firstname" placeholder="Enter your first name" >
    </div>
  </div>
  <div class="formInp">
    <div class="labDiv">
      <label for="lname">Last Name:</label>
    </div>
    <div class="inpDiv">
      <input type="text" id="lname" name="lastname" placeholder="Enter your last name" >
    </div>
  </div>
  <div class="formInp">
    <div class="labDiv">
      <label for="email">Email id:</label>
    </div>
    <div class="inpDiv">
      <input type="email" id="email" name="email" placeholder="Enter your email id" >
    </div>
  </div>
  
  <div class="formInp">
    <div class="labDiv">
      <label for="creditcard">Credit Card</label>
    </div>
    <div class="inpDiv">
      <input type="number" id="creditcard" name="creditcard" placeholder="Enter Creditcard number" >
    </div>
  </div>
  <div class="formInp">
    <input type="submit" value="Submit">
  </div>
</form>
    <footer>
        <div class=footer>
            <div class="footer-content">
                <h2>Follow us on</h2>
                <a href="https://www.facebook.com/">Facebook</a>
                <a href="https://twitter.com/explore">Twitter</a>
                <a href="https://www.instagram.com/">Instagram</a>
            </div>
            <div class="fbottom">
                &copy;2100 !! Designed at Bell Laboratories
            </div>
        </div>
    </footer>
</body>
</html>