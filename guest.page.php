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

    <title>page 2</title>
  </head>

  <body>

            <!--...................................................................
            ..........................Navigation Bar...........................
            ....................................................................-->

    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark" style="top: 0px; position: sticky;">
      <div class="container-fluid">

        <div class="collapse navbar-collapse" id="nav">
          <div class="navbar-nav ms-auto">
            <a class="navbar-brand" href="index.php">Home</a>

            <!--...................................................................
            ...........................Drop Down Category..........................
            ....................................................................-->

            <div class="nav-item dropdown">
              <div class="navbar-brand dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</div>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="#">E-books & E-media</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Another action</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </div>

            <!--...................................................................
            ..........................Drop Down Services...........................
            ....................................................................-->

            <div class="nav-item dropdown">
              <div class="navbar-brand dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</div>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="#">Action</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Another action</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </div>

            <!--...................................................................
            .............................My Account................................
            ....................................................................-->

            <a class="navbar-brand" href="#">My Account</a>

          </div>
        </div>
      </div>
    </nav>
    <br>

    <!--...................................................................
    .....................Search Bar (Using grid system)....................
    ....................................................................-->

    <div class="container-fluid row">
      <div class="col-9"><!--type anything--></div>
      <form class="d-flex col-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Search Books" aria-label="Search">
        <button class="btn btn btn-dark" type="submit">Search</button>
      </form>
    </div>
    </div>



      <!--...................................................................
      ..................................Footer...............................
      ....................................................................-->

    <?php
      include_once 'Footer/footer.php';
    ?>

  </body>
</html>