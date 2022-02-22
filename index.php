
<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style-1.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
        body {
            background: #303234;
        }
        #content {
            font-family: Inter;
            font-style: normal;
            color: #4f4f4f;
            width: 628px;
            margin: 15px auto;
            height: auto;
            padding: 20px;
            background-color: #F6F6F6;
            box-shadow: 0 4px 8px 0;
            border-radius: 24px;
        }
       

    </style>
</head>
<body>
    
    
<div class="slideshow-container">
        <div class="mySlides">
            <div class="numbertext">
                
                <div class="navbar">
                     <a href="#" style="float:left;">SIKE</a>
                    <table align="right">
                        <tr>
                            <td><a href="#">Home</a></td>
                            <td><a href="#">eSport</a></td>
                            <td><a href="#">Tournament</a></td>
                            <td><a href="#">Find Friends</a></td>
                            <td><a href="#">News</a></td>
                            <td><a href="login.php">Sign Up</a></td>
                        </tr>
                    </table>
                </div>
            </div>
                <img src="assets/banner1.png" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">
                           <div class="navbar">
                     <a href="#" style="float:left;">SIKE</a>
                    <table align="right">
                        <tr>
                            <td><a href="#">Home</a></td>
                            <td><a href="#">eSport</a></td>
                            <td><a href="#">Tournament</a></td>
                            <td><a href="#">Find Friends</a></td>
                            <td><a href="#">News</a></td>
                            <td><a href="login.php">Sign Up</a></td>
                        </tr>
                    </table>
                    <h3 style="display: block; text-align: right;  padding-top:15px;  text-decoration: none; font-size:15px;" >
                        <?php echo $fetch_info['name'];    ?>
                    </h3>
                </div>
            </div>
                <img src="assets/bannerr.jpg" style="width:100%">
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        
        <div style="text-align:center; background-color: #202128;;">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
     </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
    </script>



    <div class="content">
    
        <h3 style="float: left;">Tournament </h3>
        <h4 style="float: right; padding-right: 30px;">See More</h4><br><br>
        <table>
            <tr>
            <td>
                <div class="card" style="float:left;">
                    <img src="assets/news2.jpg" alt="Avatar" style="width:100%">
                   <div class="container">
                    <?php 
                    $hasil = mysqli_query($con,"SELECT * FROM tournament WHERE id_tournament = '1'");
                    foreach($hasil as $row){
                    ?>
                    <h5><?php echo $row['title']; ?></h5><br>
                       <b><?php echo $row['game']; ?></b>
                        <br><?php echo $row['date']; ?><br> 
                        <h6 style="color: #F03939;"><?php echo $row['prize']; ?></h6>
                    <?php
                    }
                    ?>
            
                </div>
            </div>
               <div class="card" style="float:left;">
                    <img src="assets/news2.jpg" alt="Avatar" style="width:100%">
                   <div class="container">
                    <?php 
                    $hasil = mysqli_query($con,"SELECT * FROM tournament WHERE id_tournament = '2'");
                    foreach($hasil as $row){
                    ?>
                    <h5><?php echo $row['title']; ?></h5><br>
                       <b><?php echo $row['game']; ?></b>
                        <br><?php echo $row['date']; ?><br> 
                        <h6 style="color: #F03939;"><?php echo $row['prize']; ?></h6>
                    <?php
                    }
                    ?>
            
                </div>
            </div>
            <div class="card" style="float:left;">
                    <img src="assets/news2.jpg" alt="Avatar" style="width:100%">
                   <div class="container">
                    <?php 
                    $hasil = mysqli_query($con,"SELECT * FROM tournament WHERE id_tournament = '3'");
                    foreach($hasil as $row){
                    ?>
                    <h5><?php echo $row['title']; ?></h5><br>
                       <b><?php echo $row['game']; ?></b>
                        <br><?php echo $row['date']; ?><br> 
                        <h6 style="color: #F03939;"><?php echo $row['prize']; ?></h6>
                    <?php
                    }
                    ?>
            
                </div>
            </div>
        </td>
    </tr>
</table>



   
        <h3 style="float: left;">E-Sport News</h3>
        <h4 style="float: right; padding-right: 30px;">See More</h4><br><br>
        <table>
            <tr> 
                <td>
            <div class="card mb-3" style="width: 620px; margin-left:10px; background-color:#34353C; ">
         <?php 
            $hasil = mysqli_query($con,"SELECT * FROM news WHERE id_news = '2'");
            foreach($hasil as $row){
            ?>
                <div class="row g-0">
    <div class="col-md-4"  >
      <img src="assets/news.jpg" class="img-fluid rounded-start" alt="..." style="height:200px;" >
    </div>
    <div class="col-md-8" style="width: 60%; padding: 0px; height:200px; ">
      <div class="card-body">
        <h5 class="card-title"><a href="https://www.kompas.com/sports/read/2020/11/06/11000098/one-esports-dan-moonton-gelar-mobile-legends-professional-league"  style="color: white;"><b><?php echo $row['title']; ?></b></a></h5>
        <small class="card-text">
                    <h6 style="color: white;"><?php echo $row['date']; ?></h6>
                    <h7 style="font-weight: lighter; color: white;"><?php echo $row['textpost']; ?></h7>
                    <a href="https://www.kompas.com/sports/read/2020/11/06/11000098/one-esports-dan-moonton-gelar-mobile-legends-professional-league"><b style="color: #F03939 ;">Read More</b></a></small>
        
        <?php
            }
            ?>
      </div>
    </div>
  </div>
</div>


     <div class="card mb-3" style="width: 620px; float:left; margin-left:10px; background-color:#34353C;">
          <?php 
            $hasil = mysqli_query($con,"SELECT * FROM news WHERE id_news = '1'");
            foreach($hasil as $row){
            ?>
                <div class="row g-0">
    <div class="col-md-4"  >
      <img src="assets/news2.jpg" class="img-fluid rounded-start" alt="..." style="height:200px;">
    </div>
    <div class="col-md-8" style="width: 60%; padding: 0px; height:200px">
      <div class="card-body">
        <h5 class="card-title"><a href="https://www.kompas.com/sports/read/2020/11/06/11000098/one-esports-dan-moonton-gelar-mobile-legends-professional-league" style="color: white;"><b><?php echo $row['title']; ?></b></a></h5>
        <small class="card-text">
                    <h6 style="color: white;"><?php echo $row['date']; ?></h6>
                    <h7 style="font-weight: lighter; color: white;"><?php echo $row['textpost']; ?></h7>
                    <a href="https://www.kompas.com/sports/read/2020/11/06/11000098/one-esports-dan-moonton-gelar-mobile-legends-professional-league"><b style="color: #F03939 ;">Read More</b></a></small>
        
        <?php
            }
            ?>
      </div>
    </div>
  </div>
</div>
      </td>
                      <td>
            <div class="card mb-3" style="width: 620px; float:left; margin-top:10px; background-color:#34353C; " >
         <?php 
            $hasil = mysqli_query($con,"SELECT * FROM news WHERE id_news = '2'");
            foreach($hasil as $row){
            ?>
                <div class="row g-0">
    <div class="col-md-4"  >
      <img src="assets/news.jpg" class="img-fluid rounded-start" alt="..." style="height:200px;" >
    </div>
    <div class="col-md-8" style="width: 60%; padding: 0px; height:200px;">
      <div class="card-body">
        <h5 class="card-title"><a href="https://www.kompas.com/sports/read/2020/11/06/11000098/one-esports-dan-moonton-gelar-mobile-legends-professional-league"  style="color: white;"><b><?php echo $row['title']; ?></b></a></h5>
        <small class="card-text">
                    <h6 style="color: white;"><?php echo $row['date']; ?></h6>
                    <h7 style="font-weight:  lighter; color: white;"><?php echo $row['textpost']; ?></h7>
                    <a href="https://www.kompas.com/sports/read/2020/11/06/11000098/one-esports-dan-moonton-gelar-mobile-legends-professional-league"><b style="color: #F03939  ;">Read More</b></a></small>
        
        <?php
            }
            ?>
      </div>
    </div>
  </div>
</div>


     <div class="card mb-3" style="width: 620px; float:left; margin-left:10px; background-color:#34353C;">
          <?php 
            $hasil = mysqli_query($con,"SELECT * FROM news WHERE id_news = '1'");
            foreach($hasil as $row){
            ?>
                <div class="row g-0">
    <div class="col-md-4"  >
      <img src="assets/news2.jpg" class="img-fluid rounded-start" alt="..." style="height:200px;">
    </div>
    <div class="col-md-8" style="width: 60%; padding: 0px; height:200px">
      <div class="card-body">
        <h5 class="card-title"><a href="https://www.kompas.com/sports/read/2020/11/06/11000098/one-esports-dan-moonton-gelar-mobile-legends-professional-league" style="color: white;"><b><?php echo $row['title']; ?></b></a></h5>
        <small class="card-text">
                    <h6 style="color: white;"><?php echo $row['date']; ?></h6>
                    <h7 style="font-weight: lighter; color: white;"><?php echo $row['textpost']; ?></h7>
                    <a href="https://www.kompas.com/sports/read/2020/11/06/11000098/one-esports-dan-moonton-gelar-mobile-legends-professional-league"><b style="color: #F03939  ;">Read More</b></a></small>
        
        <?php
            }
            ?>
      </div>
    </div>
  </div>
</div>
      </td>
  </tr>
</table>
  
</body>
</html>