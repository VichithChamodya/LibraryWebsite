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
    </style>

  </head>

  <body>
    <div style="background-image: url('Image/new10.png'); background-size: cover; background-repeat :no-repeat;">
    <br><br>
    <form class="needs-validation border p-4 row" action="includes/signup.inc.php" method="post"

    style="background-image: url('Image/application.img.png');
          background-repeat :no-repeat; background-position: 100%;
          background-color: rgba(255, 138, 0, 0.30); backdrop-filter: blur(0px); border-radius: 12px; margin-left: 50px; margin-right: 50px;">

    <h3>D.S.Senanayake Memorial Public Library<br>Application Form</h3>
      
      <!--.........................First Name.............................-->
      <div class="col-4 mt-5">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
      </div>

      <!--.........................Last Name..............................-->
      <div class="col-4 mt-5">
        <label for="last_name" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
      </div>
      <div class="col-4"> <!--for space--> </div>

      <!--.........................Username...............................-->
      <div class="col-4 mt-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
      </div>

      <!--..........................Member ID.............................-->
      <div class="col-4 mt-3">
        <label for="memberid" class="form-label">Member ID <i> (Only if you are a member)</i></label>
        <input type="text" class="form-control" id="memberid" name="memberid" placeholder="Member ID">
      </div>
      <div class="col-4"> <!--for space--> </div>


      <!--.........................Password...............................-->
      <div class="col-4 mt-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
      </div>

      <!--.....................Confirm Password...........................-->
      <div class="col-4 mt-3">
        <label for="con_password" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="con_password" name="con_password" placeholder="Confirm Password" required>
      </div>
      <div class="col-4"> <!--for space--> </div>

      <!--.......................NIC Number...............................-->
        <div class="col-4 mt-3">
          <label for="nic" class="form-label">NIC Number</label>
          <input type="text" class="form-control" id="nic" name="nic" placeholder="NIC Number" required>
      </div>
    
      <!--........................Birthday................................-->
      <div class="col-4 mt-3">
        <label for="birthday" class="form-label">Birthday</label>
        <input type="date" class="form-control" id="birthday" name="birthday" placeholder="birthday" required>
      </div>

      <!--.........................Address................................-->
      <div class="col-8 mt-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
      </div>
      
      <!--..........................Email.................................-->
      <div class="col-5 mt-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control"id="email" name="email" placeholder="name@example.com" required>
      </div>

      <!--......................Mobile Number.............................-->
      <div class="col-3 mt-3">
        <label for="mobile" class="form-label">Mobile Number</label>
        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
      </div>
      <div class="col-4"> <!--for space--> </div>

      <!--.........................City...................................-->
      <div class="col-5 mt-3">
        <label for="city" class="form-label">City</label>
        <select class="form-select" id="city" name="city" required>
          <option value="none">Select city</option>
          <option value="Ampara">Ampara</option>
          <option value="Anuradhapura">Anuradhapura</option>
          <option value="Badulla">Badulla</option>
          <option value="Batticaloa">Batticaloa</option>
          <option value="Colombo">Colombo</option>
          <option value="Galle">Galle</option>
          <option value="Gampaha">Gampaha</option>
          <option value="Hambantota">Hambantota</option>
          <option value="Jaffna">Jaffna</option>
          <option value="Kalutara">Kalutara</option>
          <option value="Kandy">Kandy</option>
          <option value="Kegalle">Kegalle</option>
          <option value="Kilinochchi">Kilinochchi</option>
          <option value="Kurunegala">Kurunegala</option>
          <option value="Monaragala">Monaragala</option>
          <option value="Mannar">Mannar</option>
          <option value="Matale">Matale</option>
          <option value="Matara">Matara</option>
          <option value="Mullaitivu">Mullaitivu</option>
          <option value="Nuwara_Eliya">Nuwara Eliya</option>
          <option value="Polonnaruwa">Polonnaruwa</option>
          <option value="Puttalam">Puttalam</option>
          <option value="Ratnapura">Ratnapura</option>
          <option value="Trincomalee">Trincomalee</option>
          <option value="Vavuniya">Vavuniya</option>
        </select>
      </div>

      <!--.........................Zip....................................-->
      <div class="col-3 mt-3">
        <label for="zip" class="form-label">Zip</label>
        <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" required>
      </div>
      <div class="col-4"> <!--for space--> </div>

      <!--........................Gender..................................-->
      <div class="col-1 mt-5">
        <label for="gender" class="col-3">Gender</label>
      </div>
      <div class="col-1 mt-5">
        <input class="form-check-input" type="radio" name="gen" value="Male" required> Male
      </div>
      <div class="col-1 mt-5">
        <input class="form-check-input" type="radio" name="gen" value="Female" required> Female
      </div>
      <p id="genError" class="error-message"></p>

      <!--...........................Agreement............................-->
      <div class="col-12 mt-5">
        <div class="form-check">
        
          <input class="form-check-input" type="checkbox" id="check" name="agree" value="1" required>
          <label class="form-check-label" for="check">Agree to </label>
            <text style="color: darkorange; text-decoration: underline; cursor: pointer; font-weight: bold;" onclick="openUserTermsAndConditions()">terms and conditions</text>
            <p id="agreeError" class="error-message"></p>
        </div>
      </div>

      <!--.........................Submit Button..........................-->
      <div class=" mt-5">
        <button class="btn btn-primary" type="submit" id="submit" name="submit">Submit Application</button>

      <!--..........................Reset Button..........................-->
        <button class="btn btn-secondary" type="reset">Clear Application</button>
      
      <!--.........................Retern to Login........................-->
        <button class="btn btn-outline-success" type="button" onclick="openPopup()">Already Have an Account ?</button>
      
      <br><br>
      </div>
    </form>
    </div>

    <?php
      include_once 'user.terms&conditions.php';
    ?>

    <?php    
      include_once 'login.form.php';
    ?>

    <script>
      $(function(){
        //----------------------------Fist Name---------------------------------//
        $('#submit').on('click', function () {
          let $firstNameInput = $('#first_name');
          let first_name = $firstNameInput.val();
          
          
          if (first_name == "" || first_name.length == 0) {
            $firstNameInput.attr('placeholder', 'First name cannot be empty').addClass('error').removeClass('good');
            <?php $fname_null = true; ?>
            return;
          }
          else {
            $firstNameInput.removeClass('error').addClass('good');
          }
        });


        //----------------------------Last Name---------------------------------//
        $('#submit').on('click', function() {
          let $lastNameInput = $('#last_name');
          let last_name = $lastNameInput.val();
          
          if (last_name == "" || last_name.length == 0) {
            $lastNameInput.attr('placeholder', 'Last name cannot be empty').addClass('error').removeClass('good');
            return;
          }
          else {
            $lastNameInput.removeClass('error').addClass('good');
          }
        });


        //----------------------------User Name---------------------------------//
        $('#submit').on('click', function() {
          let $userNameInput = $('#username');
          let username = $userNameInput.val();
          let usernameRegex = /^[A-Za-z0-9_\-]{5,16}$/;
          
          if (username == "") {
            $userNameInput.attr('placeholder', 'Username can not be empty').addClass('error').removeClass('good');
            return;
          }
          else if (username.length < 5){
            $userNameInput.attr('placeholder', 'Username must contain atleast 5 characters').val('').addClass('error').removeClass('good');
            return;
          }
          else if (username.length > 16){
            $userNameInput.attr('placeholder', 'Username too longer').val('').addClass('error').removeClass('good');
            return;
          }
          else if (!usernameRegex.test(username)) {
            $userNameInput.attr('placeholder', 'Invalid username. You can only use A-Z, a-z, 0-9').val('').addClass('error').removeClass('good');
            return;
          }
          else {
            $userNameInput.removeClass('error').addClass('good');
          }
        });


        //----------------------------Password----------------------------------//
        $('#submit').on('click', function() {
          let $passInput = $('#password');
          let pass = $passInput.val();
          
          if (pass == "" || pass.length == 0) {
            $passInput.attr('placeholder', 'Password cannot be empty').addClass('error').removeClass('good');
            return;
          }
          else if (pass.length < 6){
            $passInput.attr('placeholder', 'Password must contain atleast 6 characters').val('').addClass('error').removeClass('good');
            return;
          }
          else if (pass.includes(' ')){
            $passInput.attr('placeholder', 'Password cannot contain spaces').val('').addClass('error').removeClass('good');
            return;
          }
          else {
            $passInput.removeClass('error').addClass('good');
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
          let emailRegex = /^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/;

          
          if (email == "") {
            $emailInput.attr('placeholder', 'Email can not be empty').addClass('error').removeClass('good');
            return;
          }
          else if (!emailRegex.test(email)) {
          $emailInput.attr('placeholder', 'Invalid email').val('').addClass('error').removeClass('good');
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
            <?php $zip_null=true; ?>
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