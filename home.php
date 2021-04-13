 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THIA inc.</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<div id="page-container">
<?php
    include_once "./header.php"
    ?>
    <!------------------------------------------------------------------------------>

<div class="carousel-container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators --
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="assets/images/carousel/monitor growth.jpg" alt="Los Angeles" style="width:100%; height: 500px;">
      </div>

      <div class="item">
        <img src="assets/images/carousel/calculate.jpg" alt="Chicago" style="width:100%; height: 500px;">
      </div>
    
      <div class="item">
        <img src="assets/images/carousel/reports.jpg" alt="New york" style="width:100%; height: 500px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!----------------------------------------------------------------->

        <!-- ABOUT-US -->
        <section class="about-us" id="about-us">
            <div class="what_we_do">
              <br><br>
                <h2>What we do</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                      Quos eos vitae dolor! Possimus dolorem sapiente perspiciatis
                       ex aliquid, molestiae inventore repellat aut voluptate ipsum ad 
                       odio explicabo architecto incidunt natus ut voluptatum ea pariatur  
                       ducimus rem, quod distinctio. Voluptatum illo totam, eum praesentium 
                       as a doloremque aperiam quo tenetur i minus aliquam illum placeat facilis incidunt! Assumenda ea aspernatur ipsam, animi autem et alias nobis esse dicta veritatis atque quibusdam, dignissimos est earum delectus quo reiciendis optio aut accusantium nam deserunt voluptatem architecto? Eius voluptate tenetur adipisci numquam accusantium dolorum, quae maiores, alias atque eaque ullam. Cupiditate, ducimus non!</p>
            </div>
            <br>
            <br>
        </section>

<!----------------------------------------------------------------------------------->
<section id="features" class="features">
  <br> 
<h2 style="text-align:center; margin-top:30px; color:#7f6ced ; text-decoration:underline;">Our Features</h2>
 
<div class="feature-row">
  <div class="feature-column">
    <div class="feature-card">
      <h3>FEATURE 1</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>

  <div class="feature-column">
    <div class="feature-card">
      <h3>FEATURE 2</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>
  
  <div class="feature-column">
    <div class="feature-card">
      <h3>FEATURE 3</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>
  
  <div class="feature-column">
    <div class="feature-card">
      <h3>FEATURE 4</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>
</div>
</section>

<!----------------------------------------------------------------------------------->

        <!-- CLIENTS -->

        

        <section class="partners" id="partners">
            <div class="partner">
              <br>
                <h2> Partners</h2><!--
                <div class="clients-container">
                  <section class="customer-logos slider">
                    <div class="slide"><img src="images/image1.png"></div>
                    <div class="slide"><img src="images/image2.png"></div>
                    <div class="slide"><img src="images/image3.png"></div>
                    <div class="slide"><img src="images/image4.png"></div>
                    <div class="slide"><img src="images/image5.png"></div>
                    <div class="slide"><img src="images/image6.png"></div>
                    <div class="slide"><img src="images/image7.png"></div>
                    <div class="slide"><img src="images/image8.png"></div>
                  </section>
                </div>-->
            </div>
        </section>
        
<!-----------------------------------------------------------------------------------
        

<div class="contact-container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="contact-row">
    <div class="contact-column">
      <img src="/w3images/map.jpg" style="width:100%">
    </div>
    <div class="contact-column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
<!----------------------------------------------------------------------------------->
        

    </div>
</div>
<?php
include_once "./footer.php"
?>
</body>
</html>