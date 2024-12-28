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
      
  .close-btn {
    position: absolute;
    top: 10px;
    right: 12px;
    cursor: pointer;
  }
</style>

<div class="overlay" id="overlay">
  <div class="popup">
    <span class="close-btn" onclick="closePopupLogout()">&times;</span>

      <form action="includes/logout.inc.php" method="post">

        <h3>Logout</h3><br>
        <h5>Are you sure ?<br><br>
         
        <button type="submit" name="submit_logout" class="btn btn-outline-warning col-5">Yes</button>
        <button type="button" class="btn btn-outline-light col-5" id="cancel" onclick="closePopupLogoutCancel()">No</button>
                    
      </form>

  </div>

  <script>
    function openPopupLogout() {
      document.getElementById("overlay").style.display = "block";
    }
    
    function closePopupLogout() {
      document.getElementById("overlay").style.display = "none";
    }

    function closePopupLogoutCancel() {
      document.getElementById("overlay").style.display = "none";
    }

  </script>
</div>