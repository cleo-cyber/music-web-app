<?php
include 'head.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/shop.css">
    <title>Shop with us</title>
</head>
<body>

<section id="shop_hero">
    <div class="opa">
        <div class="contai">
    <h3>Find Your next Product </h3>
    <p>It has never been easier</p>
    <form action="#">
        <input type="text" name="search" placeholder="Search for something you love">
        <select name="choose" id="choose">
            <option value="Music">Music</option>
            <option value="Clothes">Clothes</option>
            <option value="">Album</option>
        </select>
        <input type="submit" name="searchbutton" value="Search" >
    </form>
    </div>
    </div>
</section>
<section id="shipping_info">
    <div class="shipping">
    <div class="info">    
    <span><i class='bx bxs-ship bx-lg bx-border-circle' style='color:orange;border: 1px dotted orange; '  ></i></span>
    <div class="details">
    <h1>Free shipping</h1>
        <p>When order over $75</p>
        </div>
    </div>
    <div class="info">
        <span><i class='bx bxs-phone-call bx-lg bx-border-circle' style='color:orange;border:1px dotted orange' ></i></span>
        <div class="details">
        <h1>24/7 Support</h1>
        <p>Get support all day</p>
        </div>
    </div>
   
    <div class="info">
        <span><i class='bx bx-refresh bx-lg bx-border-circle' style="color: orange; border: 1px dotted orange;"></i></span>
        <div class="details">
        <h1>Refund</h1>
        <p>Get refunded within 3 days</p>
        </div>
        </div>
    </div>
    </div>
</section>
  <section id="shops">
      <div class="products">
          <h2><span>Our</span> Products</h2>
          <p>Below is  a collection of our available products check the out<br></p>
          <!-- <p class="para">Value for your money</p> -->
      </div>
      <div class="shopcontent">
      <div class="cards">
      <div class="card">
        <img src="../images/sketch.jpg" alt="" class="product_img">
        <h3 class="product_title">Sketch</h3>
        <article class="price">$30 <i class='bx bx-shopping-bag add-cart' ></i></article>
       
      </div>
      <div class="card">
      <img src="../images/sketch.jpg" alt="" class="product_img">
        <h3 class="product_title">Sketch</h3>
        <article class="price">$30<i class='bx bx-shopping-bag add-cart' ></i></article>
        
      </div>
      
      <div class="card">
      <img src="../images/sketch.jpg" alt="" class="product_img">
        <h3 class="product_title">Sketch</h3>
        <article class="price">$30<i class='bx bx-shopping-bag add-cart' ></i></article>
        
      </div>
      </div>
      </div>
      
  </section>
</body>
</html>