<style>
  .overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(4px);
  }
      
  .popup {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 320px;
    color: white;
    transform: translate(-50%, -50%);
    padding: 16px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    background: rgba(255, 255, 255, 0.2);
  }

  input {
    height: 32px;
  }
      
  .close-btn {
    position: absolute;
    top: 10px;
    right: 12px;
    cursor: pointer;
  }
</style>

<div class="overlay" id="overlay">
  <div class="popup">
    <span class="close-btn" onclick="closePopup()">&times;</span>

      <form action="includes/login.inc.php" method="post">

        <h5>D.S.Senanayake Memorial<br>public Library</h5><br>


        <label for="uname">Username</label>
        <input type="text" class="form-control" name="uname" id="uname" placeholder="Username">
                  
        <label class="mt-2" for="password">Password</label>
        <input type="password" class="form-control"  name="pwd" id="pwd" placeholder="Password"><br>
                
        <button type="submit" name="submit" class="btn btn-primary col-12 mb-2">Login</button>
        <br>

        <p align="center">___________ or ___________</p>

        <a href="application.php">
          <button type="button" class="btn btn-danger col-12 mt-1">Register Now</button>
        </a>

        <a href="guest.page.php">
          <button type="button" class="btn btn-secondary col-12 mt-3">Visit as a Guest</button>
        </a>
                    
      </form>

  </div>
</div>

<script>
  function openPopup() {
    document.getElementById("overlay").style.display = "block";
  }
  
  function closePopup() {
    document.getElementById("overlay").style.display = "none";
  }

</script>
</div>