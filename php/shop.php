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
            margin-top: 10vh;
            /* flex-wrap: wrap; */
        }
        
        .card{
            background-color: #fff;
            height: 50vh;
            width: 30vw;
            margin-left: 2vw;
            margin-right: 2vw;
            box-shadow:0 2px 5px black;
            margin-bottom: 3vh;
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
            letter-spacing: 5px;
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
  <section id="shops">
      <div class="card">

      </div>
      <div class="card">

      </div>
      <div class="card">

      </div>
  </section>
</body>
</html>