<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THIA inc.</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.cs
    <?php
    include_once "./header.php"
    ?>
    <style>
* {
  box-sizing: border-box;
}
/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
    display: table;
    clear: both;
    }

    /* Responsive columns */
    @media screen and (max-width: 600px) {
    .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
    }
    }

    /* Style the counter cards */
    .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 16px;
    text-align: center;
    background-color: #f1f1f1;
    }
    </style>
</head>
<body>

<div id="page-container">

    <div id="content-wrap">
        <!-- CAROUSEL-->
        <div class="slideshow-container">

    <div class="mySlides fade">
      <img src="assets/images/carousel/monitor%20growth.jpg" style="width:100%; max-height: 400px;">
      <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
      <img src="assets/images/carousel/workspace.jpg" style="width:100%;max-height: 400px;">
      <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
      <img src="assets/images/carousel/reports.jpg" style="width:100%;max-height: 400px;">
      <div class="text">Caption Three</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>
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
<!----------------------------------------------------------------->

        <!-- ABOUT-US -->
        <section class="about-us" id="about-us">
            <div class="what_we_do">
                <h2>What we do</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos eos vitae dolor! Possimus dolorem sapiente perspiciatis ex aliquid, molestiae inventore repellat aut voluptate ipsum ad odio explicabo architecto incidunt natus ut voluptatum ea pariatur ducimus rem, quod distinctio. Voluptatum illo totam, eum praesentium quas a doloremque aperiam quo tenetur minima facilis, culpa vero assumenda explicabo soluta dolores id aliquam dolor voluptas nemo est accusantium aliquid iste rem. Atque aut voluptatibus v Exercitationem liberom officiis similique,  quia. Doloribus, autem suscipit, repudiandae ratione soluta aspernatur ab quia necessitatibus, molestias odit magni animi minus aliquam illum placeat facilis incidunt! Assumenda ea aspernatur ipsam, animi autem et alias nobis esse dicta veritatis atque quibusdam, dignissimos est earum delectus quo reiciendis optio aut accusantium nam deserunt voluptatem architecto? Eius voluptate tenetur adipisci numquam accusantium dolorum, quae maiores, alias atque eaque ullam. Cupiditate, ducimus non!</p>
            </div>
            <br>
            <br>
        </section>


        <!-- FEATURES-->
        <section class="features" id="features">
            <h2 style="text-decoration: underline; text-align: center; color: #7f6ced; margin: 20px;">FEATURES</h2>
            <div class="row">
                <div class="column">
                    <div class="card">
                        <h3>Feature 1</h3>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <h3>Feature 2</h3>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <h3>Feature 3</h3>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <h3>Feature 4</h3>
                        <p>Some text</p>
                        <p>Some text</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CLIENTS -->
        <!-- ABOUT-US -->
        <section class="features" id="partners">
            <div class="partners">
                <h2> Partners</h2>
            </div>
        </section>

    </div>
</div>
<?php
include_once "./footer.php"
?>
</body>
</html>