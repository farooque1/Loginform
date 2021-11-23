
<?php
include 'navigation.php';
include('db.php');
?>

 <?php    
 error_reporting(0);
$id =$_GET['id'];
$query = " SELECT * FROM `products` WHERE id=$id;";
$data =mysqli_query($con,$query);
 $total = mysqli_num_rows($data); /*-----to display table rows------*/
?>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style type="text/css">
</style>
<body>
<div style="width:1200px; margin:50 auto;">

<h2 style="text-align: center;font-size:32px;">BUY YOUR FAVERITE PRODUCTS</h2>   

   <?php 
while ($row = mysqli_fetch_array($data)) {

?>
<div class="product_wrapper">
<form method="post"  enctype="multipart/form-data">
	<div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
			<div class='image'><img src="<?php echo $row['image'] ?>"/></div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
<div style="text-align: left;font-size:23px;font-weight:650;  "><?php echo $row['name1'] ?></div><br>

<ul style="text-align:left; ">
	<li><b>Available offers</b></li>

<li><i class="fa fa-tags " aria-hidden="true"></i><b>Bank Offer</b> Flat INR 1750 Instant Discount on HDFC Bank Credit Cards and Credit/Debit EMI Transactions T&C</li>

<li><i class="fa fa-tags " aria-hidden="true"></i><b>Bank Offer</b> 5% Unlimited Cashback on Flipkart Axis Bank Credit Card T&C</li>

<li><i class="fa fa-tags " aria-hidden="true"></i><b>Bank Offer</b> ₹100 Off on BOB Mastercard debit card first time transaction, Terms and Condition apply T&C</li>

<li><i class="fa fa-tags " aria-hidden="true"></i><b>Special Price</b> Extra ₹4000 off(price inclusive of discount) T&C</li>
</ul>
<br>
<div><ul style="text-align:left; ">
	<p><b>Highlights</b></p>
	<li ><?php echo $row['detail1'] ?></li>
	<li ><?php echo $row['detail2'] ?></li>
	<li ><?php echo $row['detail3'] ?></li>
	<li ><?php echo $row['detail4'] ?></li>
	<li ><?php echo $row['detail5'] ?></li>
	</ul>
</div>
<div class='price text-left'><b>Price</b> $<?php echo $row['price'] ?></div>
<br>
<button class="btn btn-danger">Buy Know</button>

</div>
</div>
</form>
</div>
<?php
}
?>


<div style="clear:both;"></div>



</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>