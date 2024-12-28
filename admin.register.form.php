<?php
  session_start();
?>

<html>
  <head>

    <!--boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

    <title>Registering</title>

    <script src="JQuery/jquery.min.js"></script>

    <style>
      .error::placeholder {
        color: red;
      }
      .error {
        border: 1px solid red;
      }
      .good {
        border: 2px solid LimeGreen;
      }
      .error-message {
        color: red;
      }
      label {
        color: white;
      }
      input, select {
        height: 35px;
      }
    </style>

  </head>

  <body>

    <?php
      include_once 'admin.navigation.bar.php';
    ?>

    <div style="background-image: url('Image/admin2.jpg'); background-size: cover; background-repeat :no-repeat;">
    <br>

    <form class="needs-validation border p-4 row" action="includes/admin.signup.inc.php" method="post" style="border-radius: 12px; margin-left: 30px; margin-right: 30px;">

    <h3 style="color: white;">Admin Registration</h3>
      
      <!--...........................Name.................................-->
      <div class="col-3 mt-5">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="admin_name" name="admin_name" placeholder="Name" required>
      </div>

      <!--.........................Username...............................-->
      <div class="col-3 mt-5">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="admin_username" name="admin_username" placeholder="Username" required>
      </div>
      <div class="col-6 mt-5"></div>

      <!--.........................Password...............................-->
      <div class="col-3 mt-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="admin_password" name="admin_password" placeholder="Password" required>
      </div>

      <!--.....................Confirm Password...........................-->
      <div class="col-3 mt-3">
        <label for="con_password" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="con_admin_password" name="con_admin_password" placeholder="Confirm Password" required>
      </div>
      <div class="col-4"> <!--for space--> </div>

      <!--.......................NIC Number...............................-->
        <div class="col-3 mt-3">
          <label for="nic" class="form-label">NIC Number</label>
          <input type="text" class="form-control" id="admin_nic" name="admin_nic" placeholder="NIC Number" required>
      </div>

      <!--......................Mobile Number.............................-->
      <div class="col-3 mt-3">
        <label for="mobile" class="form-label">Mobile Number</label>
        <input type="text" class="form-control" id="admin_mobile" name="admin_mobile" placeholder="Mobile Number" required>
      </div>
      <div class="col-6"> <!--for space--> </div>

      <!--..........................Email.................................-->
      <div class="col-6 mt-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control"id="admin_email" name="admin_email" placeholder="name@example.com" required>
      </div>
      <div class="col-6"> <!--for space--> </div>

      <!--.......................Position.................................-->
      <div class="col-3 mt-3">
        <label for="position" class="form-label">Position</label>
        <select class="form-select" id="admin_position" name="admin_position" required>
          <option value="none">Select Position</option>
          <option value="Librarian">Position 1</option>
          <option value="Assistant Librarian">Position 2</option>
          <option value="Chief Librarian">Position 3</option>
          <option value="Secretary">Position 4</option>
          <option value="Clerk">Position 5</option>
          <option value="Support">Position 6</option>
          <option value="Consultant">Position 7</option>
          <option value="abcdef">Position 8</option>
        </select>
      </div>

      <!--..........................Admin ID.............................-->
      <div class="col-3 mt-3">
        <label for="adminid" class="form-label">Staff ID</label>
        <input type="text" class="form-control" id="admin_id" name="admin_id" placeholder="Staff ID" required>
      </div>
      <div class="col-4"> <!--for space--> </div>

      
      <!--.........................About..................................-->
      <div class="col-6 mt-3">
        <label for="about" class="form-label">About</label>
        <input type="text" class="form-control" rows="5" id="admin_about" name="admin_about" placeholder="About">
      </div>

      <!--...........................Agreement............................-->
      <div class="col-12 mt-5">
          <input class="form-check-input" type="checkbox" id="check" name="admin_agree" value="1" required>
          <label class="form-check-label" for="check">Agree to
            <a href="#" class="link-primary" id="append"> terms and conditions</a>
          </label>
          <p id="agreeError" class="error-message"></p>
      </div>

      <!--.........................Submit Button..........................-->
      <button class="btn btn-outline-warning col-2 mt-4" type="submit" id="submit" name="submit" style="margin-left: 12px;">Register</button>

      <!--..........................Reset Button..........................-->
      <button class="btn btn-secondary col-2 mt-4" type="reset" style="margin-left: 20px;">Clear</button>

    </form>
    <br>
    </div>


    <script>
      $(function(){
        //---------------------------------Name---------------------------------//
        $('#submit').on('click', function() {
          let $adminNameInput = $('#admin_name');
          let admin_name = $adminNameInput.val();
          
          if (admin_name == "" || admin_name.length == 0) {
            $adminNameInput.attr('placeholder', 'Name cannot be empty').addClass('error').removeClass('good');
            return;
          }
          else {
            $adminNameInput.removeClass('error').addClass('good');
          }
        });


        //-------------------------------Username---------------------------------//
        $('#submit').on('click', function() {
          let $adminUsernameInput = $('#admin_username');
          let admin_username = $adminUsernameInput.val();
          let adminUsernameRegex = /^[A-Za-z0-9_\-]{5,16}$/;
          
          if (admin_username == "") {
            $adminUsernameInput.attr('placeholder', 'Username can not be empty').addClass('error').removeClass('good');
            return;
          }
          else if (admin_username.length < 5){
            $adminUsernameInput.attr('placeholder', 'Username must contain atleast 5 characters').val('').addClass('error').removeClass('good');
            return;
          }
          else if (admin_username.includes(' ')){
            $adminUsernameInput.attr('placeholder', 'Username can not contain spaces').val('').addClass('error').removeClass('good');
            return;
          }
          else if (!adminUsernameRegex.test(admin_username)) {
            $adminUsernameInput.attr('placeholder', 'Invalid username. You can only use A-Z, a-z, 0-9').val('').addClass('error').removeClass('good');
            return;
          }
          else {
            $adminUsernameInput.removeClass('error').addClass('good');
          }
        });


        //----------------------------Password----------------------------------//
        $('#submit').on('click', function() {
          let $adminPasswordInput = $('#admin_password');
          let admin_password = $adminPasswordInput.val();
          
          if (admin_password == "" || admin_password.length == 0) {
            $adminPasswordInput.attr('placeholder', 'Password cannot be empty').addClass('error').removeClass('good');
            return;
          }
          else if (admin_password.length < 6){
            $adminPasswordInput.attr('placeholder', 'Password must contain atleast 6 characters').val('').addClass('error').removeClass('good');
            return;
          }
          else if (admin_password.includes(' ')){
            $adminPasswordInput.attr('placeholder', 'Password cannot contain spaces').val('').addClass('error').removeClass('good');
            return;
          }
          else {
            $adminPasswordInput.removeClass('error').addClass('good');
          }
        });


        //------------------------Confirm Password------------------------------//
        $('#submit').on('click', function() {
          let $con_passInput = $('#con_password');
          let con_pass = $con_passInput.val();
          let pass = $('#password').val(); //Geting password value
          
          if (con_pass == "") {
            $con_passInput.attr('placeholder', 'Confirm your password').addClass('error').removeClass('good');
            return;
          }
          else if (con_pass != pass) {
            $con_passInput.attr('placeholder', 'Password does not match').val('').addClass('error').removeClass('good');
            return;
          }
          else {
            $con_passInput.removeClass('error').addClass('good');
          }
        });


        //-----------------------------NIC Number-------------------------------//
        $('#submit').on('click', function() {
          let $nic = $('#nic');
          let nic = $nic.val();
          
          if (nic == "") {
            $nic.attr('placeholder', 'Enter NIC number').addClass('error').removeClass('good');
            return;
          }
          else if (nic.length < 12) {
            $nic.attr('placeholder', 'NIC number not valid').val('').addClass('error').removeClass('good');
            return;
          }
          else {
            $nic.removeClass('error').addClass('good');
          }
        });


        //-----------------------------Birthday-------------------------------//
        $('#submit').on('click', function() {
          let $birthdayInput = $('#birthday');
          let birthday = $birthdayInput.val();
          
          if (birthday == "") {
            $birthdayInput.addClass('error');
            return;
          }
          else {
            $birthdayInput.removeClass('error').addClass('good');
          }
        });


        //-------------------------------Address--------------------------------//
        $('#submit').on('click', function() {
          let $addressInput = $('#address');
          let address = $addressInput.val();
          
          if (address == "") {
            $addressInput.attr('placeholder', 'Address cannot be empty').addClass('error').removeClass('good');
            return;
          }
          else {
            $addressInput.removeClass('error').addClass('good');
          }
        });


        //--------------------------------Email--------------------------------//
        $('#submit').on('click', function() {
          let $emailInput = $('#email');
          let email = $emailInput.val();
          
          if (email == "") {
            $emailInput.attr('placeholder', 'Email can not be empty').addClass('error').removeClass('good');
            return;
          }
          else if (email.includes(' ')){
            $emailInput.attr('placeholder', 'Email can not contain spaces').val('').addClass('error').removeClass('good');
            return;
          }
          else {
            $emailInput.removeClass('error').addClass('good');
          }
        });


        //----------------------------Mobile Number-----------------------------//
        $('#submit').on('click', function() {
          let $mobileInput = $('#mobile');
          let mobile = $mobileInput.val();
          
          if (mobile == "") {
            $mobileInput.attr('placeholder', 'Enter mobile number').addClass('error').removeClass('good');
            return;
          }
          else if (mobile.length < 10) {
            $mobileInput.attr('placeholder', 'Invalid mobile number').val('').addClass('error').removeClass('good');
            return;
          }
          else {
            $mobileInput.removeClass('error').addClass('good');
          }
        }); 


        //---------------------------------City---------------------------------//
        $('#submit').on('click', function() {
          let $cityInput = $('#city');
          let city = $cityInput.val();

          if (city == 'none') {
            $cityInput.addClass('error').removeClass('good');
            return;
          }
          else {
            $cityInput.removeClass('error').addClass('good');
          }
        });


        //----------------------------------ZIP---------------------------------//
        $('#submit').on('click', function() {
          let $zipInput = $('#zip');
          let zip = $zipInput.val();
          
          if (zip == "") {
            $zipInput.attr('placeholder', 'Enter zip').addClass('error').removeClass('good');
            return;
          }
          else if (zip.length < 5) {
            $zipInput.attr('placeholder', 'Invalid zip code').val('').addClass('error').removeClass('good');
            return;
          }
          else {
            $zipInput.removeClass('error').addClass('good');
          }
        });


        //----------------------------------Gender--------------------------------//
        $('#submit').on('click', function() {

          let $genError = $('#genError');
          if (!$('input[name="gen"]:checked').val()) {
            $('input[name="gen"]').addClass('error');
            $genError.text('Select your gender');
            return;
          }
          else {
            $('input[name="gen"]').removeClass('error');
            $genError.text('');
          }
        });


        //---------------------------------Agreement-------------------------------//
        $('#submit').on('click', function() {

        let $checkInput = $('#check');
        let $agreeError = $('#agreeError');

        if (!$checkInput.prop('checked')) {
          $agreeError.text('You must agree to the terms and conditions');
          return;
        }
        else {
          $agreeError.text('');
        }

        // If all validations pass, submit the form
        //alert('Application submitted successfully!');
        });

      });
    </script>
    
      <!--...................................................................
      ..................................Footer...............................
      ....................................................................-->

    <?php
      include_once 'Footer/footer.php';
    ?>

  </body>
</html>