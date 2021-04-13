<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="wallet-header">
<br>
    <h2> Wallet</h2>
</div>
<br><br>
<section id="wallet" class="wallet">
 

    <div class="w3-bar w3-grey" style="align-content: right;">
    <button class="w3-bar-item w3-button" onclick="openCity('London')">DEPOSITS</button>
    <button class="w3-bar-item w3-button" onclick="openCity('Tokyo')">WITHDRAWALS</button>
    </div>

    <div id="London" class="w3-container city">
    <?php
    include_once "./deposit.php"
    ?>
    </div>

    <div id="Paris" class="w3-container city" style="display:none">
    <h2>Paris</h2>
    <p>Paris is the capital of France.</p> 
    </div>

    <div id="Tokyo" class="w3-container city" style="display:none">
    <?php
    include_once "./withdraw.php"
    ?>
    </div>



    <script>
    function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    document.getElementById(cityName).style.display = "block";  
    }
    </script>

</section>
