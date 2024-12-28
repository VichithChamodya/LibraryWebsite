<style type="text/css">
  .overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
  }
      
  .popup {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #D8BFA4;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  }
      
  .close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
  }
</style>

<div class="overlay" id="overlay">
  <div class="popup">
    <span class="close-btn" onclick="closePopup()">&times;</span>

      <form action="includes/login.inc.php" method="post">

        <h5>D.S.Senanayake Memorial<br>public Library</h5><br>

        <a href="application.php">
          <button type="submit" id= "submit" class="btn btn-danger col-12 mt-2">Submit Application</button>
        </a>
                    
      </form>

  </div>
</div>

<script>
  function openSubmit() {
    document.getElementById("overlay").style.display = "block";
  }
  
  function closePopup() {
    document.getElementById("overlay").style.display = "none";
  }

</script>
</div>