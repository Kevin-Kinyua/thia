<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THIA inc.</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

</head>
<body>
<div id="page-container">
    <?php
    include_once "./header.php"
    ?>
    <div id="content-wrap">
        <!-- CAROUSEL--
        <section class="carousel">
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="assets\images\carousel\peak.jpg" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                    <img src="assets\images\carousel\workspace.jpg" style="width:100%">
                    <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                    <img src="assets\images\carousel\calculate.jpg" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
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
        </section>-->
<!----------------------------------------------------------------->

        <!-- ABOUT-US -->
        <section class="about-us" id="about-us">
            <div class="what_we_do">
                <h2>What we do</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos eos vitae dolor! Possimus dolorem sapiente perspiciatis ex aliquid, molestiae inventore repellat aut voluptate ipsum ad odio explicabo architecto incidunt natus ut voluptatum ea pariatur ducimus rem, quod distinctio. Voluptatum illo totam, eum praesentium quas a doloremque aperiam quo tenetur minima facilis, culpa vero assumenda explicabo soluta dolores id aliquam dolor voluptas nemo est accusantium aliquid iste rem. Atque aut voluptatibus voluptate nobis quasi ipsum quos, saepe autem soluta omnis voluptas et iste iure in accusantium voluptates molestiae distinctio deleniti nostrum ipsa eos dolores perspiciatis? Harum est atque dignissimos error sapiente facilis ducimus qui vero, ea iste architecto quo, obcaecati libero ipsum at beatae minima autem maiores ab, ipsam sequi eligendi? Exercitationem libero vitae debitis dolorum sed earum corrupti saepe molestias quod facilis laborum ipsum quos pariatur excepturi vel aliquam magnam fugit numquam officiis similique, aperiam illum accusantium dolores aut? Cupiditate placeat nam atque. Quae dolorum laborum provident aliquid quam magni? Recusandae, necessitatibus voluptates eligendi labore suscipit molestiae dolore sint fugit possimus, ducimus quam consequuntur corrupti aperiam. Consequatur cum reprehenderit et ad hic aliquid a, autem reiciendis quia. Doloribus, autem suscipit, repudiandae ratione soluta aspernatur ab quia necessitatibus, molestias odit magni animi minus aliquam illum placeat facilis incidunt! Assumenda ea aspernatur ipsam, animi autem et alias nobis esse dicta veritatis atque quibusdam, dignissimos est earum delectus quo reiciendis optio aut accusantium nam deserunt voluptatem architecto? Eius voluptate tenetur adipisci numquam accusantium dolorum, quae maiores, alias atque eaque ullam. Cupiditate, ducimus non!</p>
            </div>
            <br>
            <br>
        </section>


        <!-- FEATURES-->
        <section id="features">
            <div  id="overlay" class="features" >
                <div><h2>Features</h2></div>
                <br>
                <br>

                <div class="row">
                    <div class="column">
                        <div class="card">
                            <h3>Ease of Transactions</h3>
                            <p>Some text</p>
                            <p>Some text</p>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <h3>Pooled Fund Distribution</h3>
                            <p>Some text</p>
                            <p>Some text</p>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <h3>Easy Wallet</h3>
                            <p>Some text</p>
                            <p>Some text</p>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <h3> Financial reporting</h3>
                            <p>Some text</p>
                            <p>Some text</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!---------------------------------------------------------------

        <div class="features-container">
            <div class="card">
                <h3 class="title">Feature 1</h3>
                <div class="bar">
                    <div class="emptybar"></div>
                    <div class="filledbar"></div>
                </div>
                <div class="circle">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <circle class="stroke" cx="60" cy="60" r="50"/>
                    </svg>
                </div>
            </div>
            <div class="card">
                <h3 class="title">Feature 2</h3>
                <div class="bar">
                    <div class="emptybar"></div>
                    <div class="filledbar"></div>
                </div>
                <div class="circle">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <circle class="stroke" cx="60" cy="60" r="50"/>
                    </svg>
                </div>
            </div>
            <div class="card">
                <h3 class="title">Feature 3</h3>
                <div class="bar">
                    <div class="emptybar"></div>
                    <div class="filledbar"></div>
                </div>
                <div class="circle">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <circle class="stroke" cx="60" cy="60" r="50"/>
                    </svg>
                </div>
            </div>
            <div class="card">
                <h3 class="title">Feature 4</h3>
                <div class="bar">
                    <div class="emptybar"></div>
                    <div class="filledbar"></div>
                </div>
                <div class="circle">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <circle class="stroke" cx="60" cy="60" r="50"/>
                    </svg>
                </div>
            </div>
            <div class="card">
                <h3 class="title"> Feature 5</h3>
                <div class="bar">
                    <div class="emptybar"></div>
                    <div class="filledbar"></div>
                </div>
                <div class="circle">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <circle class="stroke" cx="60" cy="60" r="50"/>
                    </svg>
                </div>
            </div>
            <div class="card">
                <h3 class="title">Feature 6</h3>
                <div class="bar">
                    <div class="emptybar"></div>
                    <div class="filledbar"></div>
                </div>
                <div class="circle">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <circle class="stroke" cx="60" cy="60" r="50"/>
                    </svg>
                </div>
            </div>
        </div>
        ------------------------------------------------------------------------------------------->

    </div>
    <?php
    include_once "./footer.php"
    ?>
</div>

</body>
</html>