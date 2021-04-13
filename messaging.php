<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <div class="messaging-header">
    <br>
      <h2> Messages</h2>
  </div>

<div class="w3-container">

  <div class="w3-row">
    <a href="javascript:void(0)" onclick="openTab(event, 'Emails');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">EMAILS</div>
    </a>
    <a href="javascript:void(0)" onclick="openTab(event, 'Notices');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">NOTICES</div>
    </a>
    <a href="javascript:void(0)" onclick="openTab(event, 'SMS');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">SMS</div>
    </a>
  </div>

  <div id="Emails" class="w3-container city" style="display:none">
    <h2>Emails</h2>

  </div>

  <div id="Notices" class="w3-container city" style="display:none">
    <h2>Notices</h2>
  </div>

  <div id="SMS" class="w3-container city" style="display:none">
    <h2>SMS</h2>
  </div>
</div>

<script>
function openTab(evt, tabName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
}
</script>
