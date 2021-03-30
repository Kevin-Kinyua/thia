
<div class="tab responsive">
    <button class="tablinks" onclick="openTab(event, 'deposit')" style="width: 200px; height: 50px;">Deposit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="tablinks" onclick="openTab(event, 'withdraw')" style="width: 200px; height: 50px;">Withdraw</button>

</div>

<div id="deposit" class="tabcontent">
    <?php
    include_once "./deposit.php"
    ?>
</div>

<div id="withdraw" class="tabcontent">
    <?php
    include_once "./withdraw.php"
    ?>
</div>
<script>
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
