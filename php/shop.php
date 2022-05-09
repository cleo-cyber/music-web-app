<?php
include 'head.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Shop with us</title>
    <style>
        
        #shops{
            display: flex;
            /* margin-top: 10vh; */
            background-color: #fff;
            flex-wrap: wrap;
            flex-direction: column;
            
        }
        
        .cards{
            height: 50vh;
            background-color: #fff;
            width: 30vw;
            box-shadow: 0 2px 5px #333;
            margin-top: 10vh;
            margin-bottom: 10vh;
            margin-left: 3vw;
            display: flex;
            
        }
        #shop_hero{
            background: url("../images/hand.jpg");
            background-size: cover;
            background-attachment: scroll;
            min-height: 90vh;
            color: #fff;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
        }
        #shop_hero .opa{
            background-color: #000;
            opacity: 0.8;
            min-height: 90vh;
        }
        .contai{
            position:relative;
            margin-left:18vw ;
            /* margin-right: 20vw; */
            line-height: 1.5em;
            /* letter-spacing: 5px; */
        }
        .contai h3{
            position: absolute;
            margin-top: 20vh;
            text-transform: uppercase;
            font-size: 50px;
            margin-left: 3vw;
        }
        .contai form{
            position: absolute;
            margin-top: 40vh;
        }
        .contai p{
            position: absolute;
            margin-top: 30vh;
            margin-left: 15vw;

        }
        .contai form input[type="text"]{
            width: 35vw;
            height: 7vh;
            background-color: transparent;
            color: #fff;
            outline: none;
           border-left: none;
           border-right: none;
           border-top: none;
        }
       .contai form select{
           transition: 0.25s;
            width: 15vw;
            height: 7vh;
            background-color: transparent;
            color: #fff;
            outline: none;
           border-left: none;
           border-right: none;
           border-top: none;
           transition: 0.7s ease-in-out;
           /* background-color: #fff; */
           color: #ddd;
           

       }
       .contai form select option{
           color: #333;
           /* height: 30vh; */
       }
       .contai form input[type='submit']{
           width: 14vw;
           height: 7vh;
           border-radius: 10px;
           margin-left: 2vw;
         
       }
       .contai form input[type='submit']:hover{
           transition: .25s;
           background-color: #ddd;
           background-color: transparent;
           color: #ddd;
           border: 1px solid #ddd;
       }
      
       #shipping_info{
           background-color: #f4f4f4;
           min-height: 50vh;
           
       }
       .shipping{
           display: flex;
           justify-content: space-around;
           /* margin-left: 20vw; */
           flex-wrap: wrap;
           
       }
       
        .info{
            margin-top: 20vh;
            margin-bottom: 20vh;
            display: flex;
            /* margin-left: ; */
        }
        .info span{
            margin-right: 2vw;
            
        }
        .info h1{
            color: #333;
            margin-bottom: 5px;
            margin-top: 10px;
            font-size: 25px;
            font-weight: 900;
        }
        .info p{
            color: #333;
        }
        .products{
            margin: 0 auto;

        }
        .products h2{
            font-size: 50px;
            margin-top: 10vh;
            /* text-decoration:underline; */
            margin-left: 14vw;
            color: #04342b;
        }
        .products h2 span{
            font-size: 50px;
            color: darkgoldenrod;
        }
        .products p{
            letter-spacing: 5px;
            margin-top: 3vh;
            color: #333;
            line-height: 5vh;
        }
       .products .para{
            margin-left: 26vh;
        }
    </style>
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
          <p class="para">Value for your money</p>
      </div>
      <div class="cards">
      <div class="card">

      </div>
      <div class="card">

      </div>
      <div class="card">

      </div>
      </div>
  </section>
</body>
</html>