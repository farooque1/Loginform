<!-- <?php
//include 'connection.php';
?>

<?php  
  // session_start(); 

//if(!isset($_SESSION['password']))
{
 // header('location:login.php');
}
?>
 -->
<?php
session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
	}
	else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} 
	else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>

<?php
include 'navigation.php';
?>
<html>
<head>
<title>My E-Store</title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</head>
<body>
<div style="width:1200px; margin:10 auto;">

<h2 style="text-align:center;font-size:32px;">Buy Your Favirate Mobile</h2>   
<?php
$result = mysqli_query($con,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div class='image'><img src='".$row['image']."' /></div>
			  <div class='name'>".$row['name']."</div>
		   	  <div class='price'>$".$row['price']."</div>
			  <button type='submit' class='buy'>ADD TO CART</button>
			  <button type='submit' class='buy'><a href='buy.php?id=".$row['id']."'>BUY NOW</a></button>
			  </form>
		   	  </div>";
        }
mysqli_close($con);
?>

<?php
include('db.php');

$result = mysqli_query($con,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($result)){ 
	?>

<div class="product_wrapper">
			  <form method="post" action="">
			  <input type="hidden" name="code" <?php echo $row['code']; ?>/>
			  <div class="image"><img src="<?php echo $row['image'] ?>"></div>
			  <div class='name'><?php echo $row['name'] ?></div>
		   	  <div class='price'><?php echo $row['price'] ?></div>
			  <button type='submit' class='buy'>ADD TO CART</button>
			  <button class='buy'><a href="buy.php?id=<?php echo $row['id'] ?>">BUY NOW</a></button>
 			  </form>
		   	  </div>
		<?php
		}
mysqli_close($con);
?>
<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

<br /><br />

</div>
</body>
</html>

<!-- <div class="container-fluid mt-5">
<div class="row">
<div class="col-6 col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
<div class="card" style="width: 18rem;">
	<center>
  <img class="card-img-top" src="img/infinixzero8i.jpeg" alt="Card image cap"></center>
  <div class="card-body">
    <h5 class="card-title">Infinix Zero 8i (Black Diamond, 128 GB) </h5>
    <p class="card-text">₹14,999₹</p>
    <a href="#" class="btn btn-primary">ADD TO CART</a>
    <a href="#" class="btn btn-primary">BUY NOW</a>
  </div>
</div>	
	</div>
<div class="col-6 col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
<div class="card" style="width: 18rem;">
	<center>
  <img class="card-img-top" src="img/infinix-zero-8i.jpeg" alt="Card image cap"></center>
  <div class="card-body">
    <h5 class="card-title">Vivo V20 (Sunset Melody, 128 GB)  (8 GB RAM)</h5>
    <p class="card-text">₹24,990</p>
    <a href="#" class="btn btn-primary">ADD TO CART</a>
    <a href="#" class="btn btn-primary">BUY NOW</a>
  </div>
</div>	
	</div>
<div class="col-6 col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
<div class="card" style="width: 18rem;">
	<center>
  <img class="card-img-top" src="img/poco.jpeg" alt="Card image cap"></center>
  <div class="card-body">
    <h5 class="card-title">POCO C3 (Lime Green, 32 GB)  (3 GB RAM)</h5>
    <p class="card-text">₹6,999₹</p>
    <a href="#" class="btn btn-primary">ADD TO CART</a>
    <a href="#" class="btn btn-primary">BUY NOW</a>
  </div>
</div>	
	</div>
<div class="col-6 col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
<div class="card" style="width: 18rem;">
	<center>
  <img class="card-img-top" src="img/tecno.jpeg" alt="Card image cap"></center>
  <div class="card-body">
    <h5 class="card-title">Tecno Camon 16 (Cloud White, 64 GB)  (4 GB RAM)</h5>
    <p class="card-text">₹11,499</p>
    <a href="#" class="btn btn-primary">ADD TO CART</a>
    <a href="#" class="btn btn-primary">BUY NOW</a>
  </div>
</div>	
	</div>
</div>
</div> -->

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html> -->