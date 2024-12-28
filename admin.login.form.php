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
    width: 300px;
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

      <form action="includes\admin.login.inc.php" method="post">

        <h5>D.S.Senanayake Memorial<br>public Library</h5><br>


        <label for="uname">Username</label>
        <input type="text" class="form-control" name="admin_uname" id="admin_uname" placeholder="Username">
                  
        <label  class="mt-3" for="password">Password</label>
        <input type="password" class="form-control"  name="admin_pwd" id="admin_pwd" placeholder="Password">
                
        <button type="submit" name="submit" class="btn btn-primary col-12 mt-4">Login</button>
                    
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