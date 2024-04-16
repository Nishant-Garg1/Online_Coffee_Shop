<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div>
        <h2>Nishnat Food</h2>
        </div>
        <div>
       <form action="logout.php" method="POST">
        <button type="submit" name="logout_btn" class="btn btn-primary" >Logout</button>
        </form>
       </div>
    </header>
    <nav>
        <h1  style="padding: 20px; padding-top:30px" >DASHBOARD</h1>
     <h3  style="padding: 20px; margin-top:50px">Pages</h3>
     <a href="dashboard.php">Home</a>
     <a href="about.php">About Us</a>
     <a href="menu.php">Menu</a>
     <a href="product.php">Our Product</a>
     <a href="costomer.php">Our Customer</a>
    </nav>

    <form action="code.php" method="POST" enctype="multipart/form-data">
    <h2 style="text-align: center; margin:10px;">About</h2>
        
        <div>
        <label for="">Image</label>
            <input type="file" name="img" autocomplete="off" class="form-control">
       </div>

    <div>
        <label for="">Title</label>
        <input type="text" name="title"  class="form-control">
    </div>

<div>
        <label for="">Description</label>
            <input type="texr" name="des" autocomplete="off" class="form-control">
</div>


       
      <div >
        <button type="submit" name="about_submit">Save</button>
        </div>
      </form>


      <table>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        include("./conection.php");
$select="select * from about";
$sq=mysqli_query($con,$select);
while($ans=mysqli_fetch_array($sq)){
        ?>
        <tr>
            <td><?php echo $ans['title'] ?></td>
            <td><?php echo $ans['des'] ?></td>
            <td><img src="./images/<?php echo $ans["img"] ?>" alt="" width="150px" height="150px"></td>
            <td> <a href="aupdate.php?id=<?php echo $ans['id'] ?>">Update</a></td>
        
            <td><a href="delete.php?id=<?php echo $ans['id'] ?>">Delete</a></td>
        </tr>
        <?php } ?>
      </table>
</body>
</html>