<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <style>
      <body>
      {
          margin:0;
          padding:0;
          box-sizing:border-box;
      }
    .center-div
    {
        width:100%;
        overflow-y:hidden;
        overflow-x:scroll;
       display:flex;
    }
#search-bar
{
    border-radius:10px;
   
    border:2px solid gray;
}
#imp
{
    width:100%;
        overflow-y:hidden;
        overflow-x:scroll;
       display:flex;
}
#imp::-webkit-scrollbar
    {
        overflow:hidden;
        display:none;

    }
    footer{
     background: #000;
     margin-bottom:0px;width:100vw;
    }
    .jumbotron
    {
        margin-bottom:0;
        width:100vw;
    }
    .card {
        box-shadow: 1px 1px 4px rgba(252, 244, 244, 0.4);
        transition:all 0.6s linear; 
        /* background-color:rgba(252,244,244,0.4); */
    }
    .card:hover{
        transform:scale(1.1);
    }
  </style>
  <body>
  <script src="https://kit.fontawesome.com/45d01987fe.js" crossorigin="anonymous"></script>
  <?php
include("dbconnection.php");
$pid = $_GET['pid'];
$s = "select pname,	pcategory	,pcost	,pdesc1	,pdesc2	,pdesc3	,purl from product where pid ='$pid'";

$rs= $con->query($s);

$rww = $rs->fetch_array();

$qwery = "select cost	 from deals where pid ='$pid'";
$rsss=$con->query($qwery);


?>
  <?php
   include("navbar.php");
   ?>

  <div class="container-fluid">
<div class="row" style="margin-top:50px;margin-left:10px;">
<div class="col-md-6">

<img src="<?php echo $rww[6];?>" class="img-fluid img-thumbnail ml-5" height="450px" width="400px" alt="..." >


</div>
<div class="col-md-6">

<h1 class="text-center mb-5 mt-3"><?php  echo $rww[0]; ?></h1>  
<p> <b><?php  echo $rww[1]; ?> Product </b> </p> 
<?php
  if($c>=1)
  {
    ?>
   <p>  MRP  :  <del style="opacity:0.7;"><i class="fas fa-rupee-sign"></i> <span style="color:#B12704!important;"> <?php 
   
   if($rwww=$rsss->fetch_array())
{
  echo $rwww[0]; 
}
else
{
  echo $rww[2];
}
?>
  .00 </span> </del></p> 
<?php
  }
?>  

<p> Price  :  <i class="fas fa-rupee-sign "></i> <span style="color:#B12704!important;"> <?php  echo $rww[2]; ?>.00 </span></p>   
<ul> 
<li><p>  <?php  echo $rww[3]; ?> </p></li>   
<li><p>  <?php  echo $rww[4]; ?> </p></li>   
<li><p>   <?php  echo $rww[5]; ?></p></li>  
</ul>
<?php if($rww[2]>=100)
   {
     ?>
     <p><i class="fas fa-rupee-sign"></i>  </b> <span style="color:#B12704!important;"> <?php  echo $rww[2]; ?>.00 </span> FREE Delivery. No Minimum order value for first order in this category</p>
     <?php
   }
?>
<div style="display:flex; justify-content:center; align-items:center; flex-direction:row;">
<a href="./showcart.php?pid=<?php echo $rw[3];?>" class="card-link btn btn-success mt-5" style="display:flex; justify-content:center; align-items:center;  width:20%;"><i class="fas fa-shopping-cart mr-2"></i>  Add to Cart</a>
<a href="./particualproduct.php?pid=<?php echo $rw[3];?>" class="card-link btn btn-primary mb-2 mt-5" style="display:flex; justify-content:center; align-items:center; " ><i class="fas fa-store-alt mr-2"></i>Buy now</a>
</div>
</div>
  </div>
  <h3 class="mt-5 ml-5">Have a question?</h3>
  <p class="text-muted mt-2 ml-5">Find answers in product info, Q&As, reviews</p>
  <form action="#" method="POST" onsubmit="">
  <div class="form-group" width="40vw">
   
    <input type="number" class="form-control ml-5" id="input" name="" style="width:40vw;" aria-describedby="emailHelp" >
   
  <button type="submit" class="btn btn-primary mt-2 ml-5" id="send" onclick="fun();">Send</button>
</form>
  </div>
  <script>
    function fun()
    {
         document.getElementById("send").innerHTML="Sent";
    }
  </script>
<?php
    include("footer.php");
    ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
   

  </body>
</html>