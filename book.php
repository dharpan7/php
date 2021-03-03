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
            <h1>Books</h1>
            <form action="store.php" method="POST">
            <?php
                require("mysqli_connect.php");
                $q1="SELECT * FROM books";
                $r1=mysqli_query($dbc,$q1);
                if (mysqli_num_rows($r1) > 0) {
                    while($row = mysqli_fetch_assoc($r1)){
                        ?>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title"> <?php echo $row['Name'] ?> </h2>
                                    <img src="images/<?php echo $row['Image']; ?>" class="card-img-top" width="150px" height="225">
                                    <p class="card-text">
                                    <?php echo "price:Rs {$row['Price']}" ?>     
                                    </p>        
                                    <?php echo '<a href="store.php?book='. $row["PId"].'" class="cart">Buy Now</a>';?> </p>
                                    <input type="hidden" name="pid" value="<?php $row['PId'] ?>">
                                    
                                </div>
                            </div>
                    </div>
                    <?php                    
                    }
                }
                else {
                    echo "0 results";
                }
            ?>
            </form>
        </main>
        

    </div>
        
    </main>
    
    
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