<?php
session_start();
if (isset($_POST['book']))
  {
    $book = $_POST['pid'];

    session_start();
    $_SESSION['selectedBook'] = $book;
    header("Location: checkout.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book store</title>
    <link rel="stylesheet" href="css/style.css">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
       .booktop{
    margin-right: 90%;
}
.bookprice{
    margin-right: 70%;
}
.tit{
    text-align: center;
    font-style: italic;
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
    <main>
    <div id="wrapper">
       


        <main class="overflow">
            <h1 class="tit">Books</h1>
            <form action="book.php" method="POST">
            <?php
                require("mysqli_connect.php");
                $q1="SELECT * FROM books";
                $r1=mysqli_query($dbc,$q1);
                if (mysqli_num_rows($r1) > 0) {
                    while($row = mysqli_fetch_assoc($r1)){
                        ?>
                       
                                    <h3 class="booktop"> <?php echo $row['Name'] ?> </h3>
                                    <img src="images/<?php echo $row['Image']; ?>" class="bookimg" width="125px" height="200">
                                    <p class="bookprice">
                                    <?php echo "price:CAD {$row['Price']}" ?>     
                                    </p>        
                                    <?php echo '<a href="checkout.php?book='. $row["PId"].'" class="cart">Buy Now</a>';?> </p>
                                    <input type="hidden" name="pid" value="<?php $row['PId'] ?>">
                                    
                        
                    <?php                       
                    }
                }
                else {
                    echo "0 ";
                }
            ?>
            </form>
        </main>
        

    </div>
        
    </main>
    
    
    

</body>

</html>