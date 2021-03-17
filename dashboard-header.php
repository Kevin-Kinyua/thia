

<div class="topnav" id="myTopnav">
    <a href="#profile" >My Profile</a>
    <a href="#contact">Contact</a>
    <div class="dropdown">
        <button class="dropbtn" onclick="openNav()">
            <span style="font-size:30px;cursor:pointer; color:white;" onclick="openNav()">&#9776;</span>
        </button>

    </div>
    <a href="home.php">Home</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>


</div>


<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>


<!--<-->