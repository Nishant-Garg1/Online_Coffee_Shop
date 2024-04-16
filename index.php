<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coffee Shop website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header class="header">
    <h2>Coffee shop</h2>


    <nav class="navbar">
      <a href="#home">home</a>
      <a href="#about">about</a>
      <a href="#menu">menu</a>
      <a href="#product">products</a>
      <a href="#review">review</a>
      <a href="#contact">contact</a>
      <a href="#blogs">blogs</a>
    </nav>

  </header>

  <div class="slide">
    <div class="contant" style="background-image:url('img/cof.jpg');background-size:100% 100%">
      <h1>FRESH COFFEE IN THE MORNING</h1>
      <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et temporibus nemo sint laboriosam esse rem quas ipsa consectetur iste illum.</P>
      <BUtton>Get Now</BUtton>
    </div>
  </div>

  <!-- about -->
  <div class="about" id="about">
    <h2 style="color: white; text-align:center; margin:10px; text-transform: uppercase; ">
      <span style="color: burlywood; margin-right:5px">about</span>Us
    </h2>
    <div class="left">
    <?php
        include("./admin/conection.php");
$select="select * from about";
$sq=mysqli_query($con,$select);
while($ans=mysqli_fetch_array($sq)){
        ?>
      <img src="./admin/images/<?php echo $ans["img"] ?>" alt="">
    </div>
    <div class="right">
      <h1><?php echo $ans["title"] ?></h1>
      <p><?php echo $ans["des"] ?></p>
      <p><?php echo $ans["des"] ?></p>
      <button>Learn More</button>
      <?php } ?>
    </div>
  </div>

  <!-- menu -->

  <div class="menu" id="menu">
    <h2 style="color: white;  margin:10px; text-transform: uppercase; ">
      <span style="color: burlywood; margin-right:5px">OUR </span>MENU
    </h2>
  </div>


  <div class="container-fluid  ">
    <div class="row">

    <?php
        include("./admin/conection.php");
$select="select * from menu";
$sq=mysqli_query($con,$select);
while($ans=mysqli_fetch_array($sq)){
        ?>
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" style="margin-bottom:10px; ">
          <img style="object-fit: fill;height:250px" class="card-img-top" src="./admin//images/<?php echo $ans["img"] ?>" alt="Card image">
          <div class="card-body">
            <h4 class="card-title"><?php echo $ans["title"] ?></h4>
            <p class="card-text"><?php echo $ans["des"] ?></p>
            <a href="#" class="btn btn-primary"><?php echo $ans["price"] ?></a>
          </div>
        </div>
      </div>

<?php } ?>
     
    </div>
  </div>

  <!-- product -->
  <div class="product" id="product">
    <h2 style="color: white; text-align:center; margin:10px; text-transform: uppercase; ">
      <span style="color: burlywood; margin-right:5px">OUR</span>PRODUCT
    </h2>
  </div>

  <div class="container-fluid  ">
    <div class="row">

    <?php
        include("./admin/conection.php");
$select="select * from product";
$sq=mysqli_query($con,$select);
while($ans=mysqli_fetch_array($sq)){
        ?>
      <div class="col-lg-4 col-md-4 col-12">
        <div class="cards" style="margin-bottom:10px; ">
          <img style="object-fit: fill;height:250px" class="card-img-top" src="./admin/images/<?php echo $ans["img"]  ?>" alt="Card image">
          <div class="card-body" style="margin-top:30px; margin-left:40px; color:white">
            <h4 class="card-title"><?php echo $ans["title"]  ?></h4>
            <p class="card-text">⭐⭐⭐⭐⭐</p>
            <a href="#" class="btn btn-primary"><?php echo $ans["price"]  ?></a>
          </div>
        </div>
      </div>

<?php } ?>
     


    </div>
  </div>


  <!-- costomer review -->
  <div class="product" id="review">
    <h2 style="color: white; text-align:center; margin:10px; text-transform: uppercase; ">
      <span style="color: burlywood; margin-right:5px">COSTOMER</span>REVIEW
    </h2>
  </div>

  <div class="container-fluid  ">
    <div class="row">

    <?php
        include("./admin/conection.php");
$select="select * from costomer";
$sq=mysqli_query($con,$select);
while($ans=mysqli_fetch_array($sq)){
        ?>
      <div class="col-lg-4 col-md-4 col-12">
        <div class="cards" style="margin-bottom:10px; color:white; ">
          <p><?php echo $ans["des"] ?></p>
          <div class="card-body" style="margin-top:30px; margin-left:40px; color:white">
            <img src="./admin/images/<?php echo $ans["img"] ?>" width="200px " height="150px" alt="">
            <h4 class="card-title"><?php echo $ans["title"] ?></h4>
            <p class="card-text">⭐⭐⭐⭐⭐</p>

          </div>
        </div>
      </div>
 
      <?php  } ?>
      
    </div>
  </div>

  <!-- contact -->

  <section class="my-5 contact" id="contact">
    <div class="py-5">
      <h2 style="color: white; text-align:center; margin:10px; text-transform: uppercase; ">
        <span style="color: burlywood; margin-right:5px">CONTACT</span>US
      </h2>
    </div>
    <div class="w-50 m-auto ">
      <form action="new.php" method="POST">
        <div class="form-group">
          <label for="" style="color: white;">username</label>
          <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
          <label for="" style="color: white;">Email</label>
          <input type="email" name="email" class="form-control">
        </div>


        <div class="form-group">
          <label for="" style="color: white;">Mobile No</label>
          <input type="number" name="phone" class="form-control">
        </div>

        <div class="form-group">
          <label for="" style="color: white;">comment</label>
          <textarea class="form-control" name="coment"></textarea>
        </div>

        <button class="btn btn-success" type="submit" name="submit">Submit</button>
      </form>
    </div>
  </section>


  <!--  footer Section -->
  <footer class="big-foot" id="blogs">
    <div class="quick-link">
      <h4>Quick Link</h4>
      <ul>
        <li><a href="#home">home</a></li>
        <li> <a href="#about">about</a></li>
        <li> <a href="#menu">menu</a></li>
        <li> <a href="#product">product</a></li>
        <li> <a href="#review">review</a></li>
        <li><a href="#contact">contact</a></li>
      </ul>
    </div>

    <div class="contact-us">
      <h4>Contact Us</h4>
      <ul>
        <li><a href="#">+932-782-4537</a></li>
        <li> <a href="#">+932-782-4537</a></li>
        <li> <a href="#">nishnatgarg@gmail.com</a></li>
        <li> <a href="#">nishnatgarg@gmail.com</a></li>
        <li> <a href="#">Loni India-201102</a></li>
      </ul>
    </div>
    <div class="follow-us">
      <h4>Follow Us</h4>
      <ul>
        <li><a href="#">instagram</a></li>
        <li> <a href="#">facebook</a></li>
        <li> <a href="#">linkedin</a></li>
        <li> <a href="#">twitter</a></li>
      </ul>
    </div>
  </footer>
  <div class="line"></div>
  <footer class="small-foot">
    <p>&copy; Copyright @ 2023-2024 | All right reserved</p>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>