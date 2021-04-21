<?php include "header.php" ?>

<style type="text/css">
	#dogImg{
    margin-top: -40%;
    background: url("https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/112867954/original/3f2dbcad7e0a1ff9c11a0dff298b6d01eec03836/200-dog-training-article-ebook-hd-pics-and-video.jpg") fixed ;
    background-position: center;
    background-size: cover;
    height: 1050px;
    padding: 0%;
    width: 100%;
}
#main{
    padding-top: 75%;
}
img{
     height: 270px;
     /*width:350px;*/
}
.train{
    margin: 6%;
}
h3{
    color: orange;
    font-weight: bold;
}
.icons i{
    padding: 5px;
    font-size: 20px;
}

@media (max-width: 1000px){
  #dogImg{
    height: 700px;
  }
}
@media(max-width: 500px){
  #main{
    padding-top: 150%;
}
} 
</style>

<div class="container-fluid" id="dogImg">
  <div class="container">
    <div class="fh5co-banner-text-box">
      <div class="quote-box pl-5 pr-5 wow bounceInRight" id="main">
        <h2 style="font-weight: bold; "><span style="color: orange;">DOGS</span><span style="color: white"> TRAINERS </span></h2>
        <p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. </p>
      </div>
      <!-- <a href="#" class="btn text-uppercase btn-outline-light btn-lg mr-3 mb-3 wow bounceInUp"> What's new</a> -->
      <!-- <a href="#" class="btn text-uppercase btn-outline-light btn-lg mb-3 wow bounceInDown"> Courses</a> -->
    </div>
  </div>
</div>

<br>
      <h3 style="text-align: center;">Trainers List</h3>

<!-- search -->
  <div class="container">
      <div style="margin: auto;">
      <form action="" method="get">
        <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" name="train" placeholder="Trainer Name">
            </div>
            <div class="col">
              <input type="text" class="form-control" name="location" placeholder="Location">
            </div>
            <div class="col">
              <button class="btn btn-primary form-control" name="search"><i class="fa fa-search"></i> Search</button>
            </div>
          </div>
      </form>
    </div>
  </div>
    <br>




<div class="train">
  <div class="container">

<?php 
          $conn=mysqli_connect('localhost','root','','dog');

          if(isset($_GET['search'])) {
              $train=$_GET['train'];
              $location=$_GET['location'];

              $search_result = "SELECT * FROM train WHERE `t_name` = '$train' OR `t_location` = '$location' ";
              $result = $conn->query($search_result);

              
              if(mysqli_num_rows($result)){
              while($fetch = $result->fetch_assoc()){
          ?>
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-3" style="padding: 10px">
                    <?php echo "<img src = 'trainimg/".$fetch['t_image']."' height='150px'>"; ?>
                  </div>
                  <div class="col-md-9">
                    <div class="card-body" >
                      <h3 class="card-title">Name: <?php echo $fetch['t_name'];?></h3>
                      <p class="card-text"><?php echo $fetch['t_desc'];?></p>
                      <div>
                       
                        <p><b>Expreance :</b> <?php echo $fetch['t_exp'];?> </p>
                        <p><b>Contact :</b> <?php echo $fetch['t_phone'];?> </p>
                        <!-- <p><b>Email :</b> <?php echo $fetch['t_email'];?></p> -->
                        <p><b>Location :</b> <?php echo $fetch['t_location'];?></p>
                        <div class="icons" style="float: right; margin-top: -35px;">
                          <a href=""></a><i class="fab fa-twitter"></i>
                          <a href=""></a> <i class="fab fa-facebook-f"></i>
                          <a href=""></a><i class="fab fa-instagram"></i>
                        </div>          
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      <?php 
              }
            } else {
              echo "Not Found";
            }
         } else {
      ?>
<!-- php -->
<?php
$conn=mysqli_connect('localhost','root','','dog') ;

 $select=mysqli_query($conn,"select * from train");
 while($fetch=mysqli_fetch_assoc($select)) {
?>
    <div class="card mb-3">
      <div class="row no-gutters">
        <div class="col-md-3" style="padding: 10px">
          <?php echo "<img src = 'trainimg/".$fetch['t_image']."' height='150px'>"; ?>
        </div>
        <div class="col-md-9">
          <div class="card-body" >
            <h3 class="card-title">Name: <?php echo $fetch['t_name'];?></h3>
            <p class="card-text"><?php echo $fetch['t_desc'];?></p>
            <div>
             
              <p><b>Expreance :</b> <?php echo $fetch['t_exp'];?> </p>
              <p><b>Contact :</b> <?php echo $fetch['t_phone'];?> </p>
              <!-- <p><b>Email :</b> <?php echo $fetch['t_email'];?></p> -->
              <p><b>Location :</b> <?php echo $fetch['t_location'];?></p>
              <div class="icons" style="float: right; margin-top: -35px;">
                <a href=""></a><i class="fab fa-twitter"></i>
                <a href=""></a> <i class="fab fa-facebook-f"></i>
                <a href=""></a><i class="fab fa-instagram"></i>
              </div>          
            </div>
          </div>
        </div>
      </div>
    </div>
<?php 
}
}
?>     
  </div>
</div>

<?php include "footer.php" ?>
