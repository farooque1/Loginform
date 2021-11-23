 <?php
include 'connection.php';
?>

<?php  
   session_start(); 

if(!isset($_SESSION['password']))
{
 header('location:login.php');
}
?>

<?php
include 'navigation.php';
?>
<div class="container-fluid mt-5">
<div class="row">
<div class="col-6 col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center">
<div class="card" style="width: 12rem;">
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
<div class="card" style="width: 12rem;">
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
<div class="card" style="width: 12rem;">
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
<div class="card" style="width: 12rem;">
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
</div>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html> -->
</div>
</body>
</html>

