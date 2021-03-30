
    <link rel="stylesheet" href="main.css">


<div class="main_area" style="margin-top:50px;">
    <h3 class="head_depo">WITHDRAWALS</h3>
    <p>Make group withdrawals here</p>
    <table>
        <tr>
          <th>Group member</th>
          <th>Group role</th>
          <th>Amount withdrawn</th>
          <th>Mode of Payment</th>
          <th>Status</th>
        </tr>
        <tr>
          <td>David</td>
          <td>Admin</td>
          <td>Ksh. 20,000</td>
          <td>Mpesa</td>
          <td>Active</td>
        </tr>
        <tr>
            <td>Kevin </td>
            <td>Admin</td>
            <td>Ksh. 20,000</td>
            <td>Mpesa</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>Alvin</td>
            <td>Admin</td>
            <td>Ksh. 20,000</td>
            <td>Mpesa</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>Stephan</td>
            <td>Admin</td>
            <td>Ksh. 20,000</td>
            <td>Mpesa</td>
            <td>Active</td>
        </tr>
        
      </table>
    <p class="uploader">upload withdrawal data</p>
    <button class="upload" id="myBtn">Upload</button>
    <img class="stripe_logo" src="/assets/images/stripe-logo.png" alt="Stripe logo">
</div>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Kindly Submit the group withdrawals this month in a CSV file</p>
    <form action="/action_page.php">
  <input type="file" id="myFile" name="filename">
  <input type="submit">
</form>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
