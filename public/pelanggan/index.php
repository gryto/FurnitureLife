<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../template/css/style.css">
<style type="text/css">
img {
  width: 100%;
  height: auto;
}

#header{
    width: 100%;
    height: 100vh;
    background-color: rgba(0,0,0,0.6) ;
    background: 
    linear-gradient(
        rgba(255, 255, 255, 0.45), 
        rgba(255, 255, 255, 0.45)
      ),
      url(../template/img/draw_brush.jpg)no-repeat 50% 50% ; 
    background-size: cover;
    background-attachment: fixed;
    
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: black;
    font-family: IbarraRealNova;
    font-size: 50px;
    text-align: center;
  }
.centered2 {
    position: absolute;
    top: 67%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: black;
    font-family: work sans;
    font-weight: 400;
    font-size: 17px;
    text-align: center;
  }
</style>

<body>
<?php include('../template/header_produk.php')?>

<div class="header">
  <div class="row">
  <div class="col s5 push-s5"><span class="flow-text">
          <img src="../template/img/draw_brush.jpg" class="col S6" alt="image"></span>
      </div>
      <div class="col s5 pull-s4"><span class="flow-text">
          <img src="../template/img/draw_brush.jpg" class="col S6" alt="image"></span>
      </div>
      <div class="container">
        <div class="centered">You’re Life Matters. FurnitureLife</div>
        <div class="centered2">We’ve got recommendations from the Harvard community, titles from Harvard authors, and a glimpse inside some new releases.</div>
    </div>
  </div>
</div>

<div class="row">
      <div class="col s6">
      <div class="card blue-grey darken-1">
        <div class="card-image">
          <img src="../template/img/new.jpg" alt="">
          <span class="card-title">New Arrival</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
      </div>
      <div class="col s6">
      <div class="card white">
        <div class="card-content white-text">
          <span class="card-title">Best Seller</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
      </div>
    </div>

<?php include('../template/footer.php')?>

</body>
</html>