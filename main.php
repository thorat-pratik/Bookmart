<!DOCTYPE html>
<html lang="en">
<head>
  <title> Bookmart  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="file:///C:/Users/Lenovo/Desktop/book/bootstrap-4.5.3-dist/css/bootstrap.min.css" />
<script src="file:///C:/Users/Lenovo/Desktop/book/bootstrap-4.5.3-dist/js/bootstrap.min.js"> </script>
<link rel="icon" href="./images/logo2.png">
<link rel="stylesheet" href="./css/style.css">
</head>
<body>

<nav class="navbar  navbar-expand-md ">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="toggler-name " > More  </span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <img class="img" src="img/Copy of Copy of BookMart.png">
    <ul class="navbar-nav">
    <li class="nav-item"<?php echo(basename($_SERVER['PHP_SELF'])=="main.php")? "active":""?>>
        <a class="nav-link " id="active" href="main.php" > HOME</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link " href="bookmenu.html" > PRODUCT </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html"> ABOUT </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact.html" > CONTACT </a>
      </li>     
      <li class="nav-item">
        <a class="nav-link " href="index.html" > LOG OUT</a>
      </li>     
    </ul>
  </div>  
</nav>
<br>
<br>


<!-- three image slider using bootstrap -->
      <div class=" carousel slide " id="demo" data-ride="carousel"  >
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active">  </li>
          <li data-target="#demo" data-slide-to="0" >  </li>
          <li data-target="#demo" data-slide-to="0" ></li>  </li>
        </ul>
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img src="./carousel/first.png" alt="first image" width="100%" height="">
                      <div class="carousel-caption">
                          <h1 class="text-dark"> Hurry up! </h1>
                              <p> Dont'forget to enter BOOK15 at checkout for extra 15% off   </p>
                        </div >
                </div>        
                             <div class="carousel-item  ">
                                <img src="./carousel/second.png" alt="second " width="100%" width="100%">
                                  <div class="carousel-caption">
                                
                                     <p > Now You can publish your book on <i> BOOKMART </i> </p>
                                 </div>
                               </div>
                                      <div class="carousel-item">
                                           <img src="./carousel/third.jpg" alt="third" width="100%" height="100%" >
                                                <div class="carousel-caption">
                                                     
                                                </div>
                                        </div>
             </div>
             <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-item-prev-icon"> &laquo; </span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-item-next-icon"> &raquo; </span>
            </a>
      </div>

<style>
   body {
    margin: 0;
    background-repeat: no-repeat;
    padding: 0;
  } 
  .carousel-inner img{
      width: 100%;
      height: 100%;
}
.carousel-item-prev-icon {
  font-size: 5rem;
  font-weight: 800;
  color: floralwhite;
}
.carousel-item-next-icon {
  font-size: 5rem;
  color: floralwhite;
  font-weight: 800;
}
.info {
  color:yellow;
}

li a:hover {
  display: block;
}
.img{
   width: 250px;
   height: 100px;
   
   
}

</style>


</body>
</html>


