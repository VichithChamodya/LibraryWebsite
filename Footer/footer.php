<!--...................................................................
..................................Footer...............................
....................................................................-->

<style>
  .link-style {
    color: white;
    text-decoration: none;
    font-size: 16px;
  }
 
  .link-style:hover {
    color: orange;
    text-decoration: none;
  }

  .link-style:active {
    color: yellow;
    text-decoration: none;
  }
  
  .table-cell {
    width: 350px;
    padding-left: 130px;
  }
</style>

<div class="mb-2 bg-black text-white row" style="background-image: url('Footer/footer.img.a.png'); 
background-repeat :no-repeat; background-size: contain; background-position: left;">

<div class="" style="background-image: url('Footer/footer.img.b.png'); 
background-repeat :no-repeat; background-size: contain; background-position: right;">

  <h5 style="font-family: Comic Sans MS, Comic Sans, cursive; padding-left: 35%; margin-top: 0.5cm;">
    D.S.Senanayake Memorial<br>Public Library<br>Kandy
  </h5>

  <table class="text-white mt-5" cellspacing="0" cellpadding="6" align="center">
    <tr>
      <td class="table-cell">
        <a class="link-style" href="accessibility.php">Accessibility</a>
      </td>
      <td class="table-cell">
        <a class="link-style" href="copyright.information.php">Copyright Information</a>
      </td>
      <td class="table-cell">
        <a class="link-style" href="get.help.php">Get Help</a>
      </td>
    </tr>
    <tr>
      <td class="table-cell">
        <a class="link-style" href="terms&conditions.php">Terms & Conditions</a>
      </td>
      <td class="table-cell">
        <a class="link-style" href="privacy.policy.php">Privacy Policy</a>
      </td>
      <td class="table-cell">
        <a class="link-style" href="about.us.php">About Us</a>
      </td>
    </tr>
    <tr>
      <td class="table-cell">
        <a class="link-style" href="rules.&.regulations.php">Rules & Regulations</a>
      </td>>
      <td class="table-cell">
        <a class="link-style" href="staff.php">Staff</a>
      </td>
    </tr>

<!--...................................................................
...............................Icon Link...............................
....................................................................-->

    <tr>
      <td class="table-cell">
        <div class="container mt-3">
          <a href="https://web.facebook.com/kandypubliclibrary/?_rdc=1&_rdr">
            <img src="Footer/fb.icon.png" height="50" alt="fb">
          </a>
          <a href="https://lk.linkedin.com/in/chamila-yapa-74a04568">
            <img src="Footer/in.icon.png" height="63" alt="in">
          </a>
        </div>
      </td>
    </tr>
  </table>

<!--...................................................................
............................Footer Address.............................
....................................................................-->
        
  <h6 style="font-family: Times New Roman; text-align: right; padding-right: 25%;">© D.S.Senanayake Memorial Public Library</h6>
  <h6 style="text-align: right; padding-right: 25%; margin-bottom: 0.5cm;">7JRP+P6J, Ahalepola Kumarihami Mawatha, Kandy 20000</h6>
</div>
</div>

<script src="JQuery/jquery.min.js"></script>
  <script>
    $('.link-style').on('mouseover', function(){
      $(this).css('font-weight', 'bold');
    });
    $('.link-style').on('mouseleave', function(){
      $(this).css('font-weight', 'normal');
    });
  </script>