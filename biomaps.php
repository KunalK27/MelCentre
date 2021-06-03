<?php
 $username = "root";
 $password = "";
 $host = "localhost";
 $connector = mysqli_connect($host, $username, $password)
    or die("Unable to connect");
 $selected = mysqli_select_db($connector, "melcentre")
    or die("Unable to connect2");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

  <title>Features and Advantages</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <h2>MelCentre</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="biomaps.php">MMMP Biomaps</a></li>
            <li class="nav-item"><a class="nav-link" href="geneset.php">MelanomaDB Gene Sets</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">Cluster Data</a>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="primary.php">Primary</a>
                <a class="dropdown-item" href="uveal.php">Uveal Samples</a>
                <a class="dropdown-item" href="nonclustered.php">Non Clustered</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">MMMP TTD</a>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="TTDSens.php">TTD: Sensitivity</a>
                <a class="dropdown-item" href="TTDSyn.php">TTD: Synergism</a>
                <a class="dropdown-item" href="TTDTox.php">TTD: Toxicity</a>
              </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="geo.html">Geographical Analysis</a></li>

            <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <div class="page-heading about-heading header-text"
    style="background-image: url(assets/images/heading-1-1920x500.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="best-features about-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading" style="text-align: center;">
            <h2>Biomaps</h2>
          </div>
        </div>
        <div class="col-md-6">
        </div>
        <div>
          <div style="text-align: center;">
            <div style="text-align: center;">
              <h5>Introduction</h5>

              <p> This page features a list of and liks to a collection of schematic figures depicting the
                molecular pathways involved in cancer development and progression, particularly melanoma. Biomaps
                can be described as close-to-hand visual guide to navigate in the ever-growing complexity of cancer
                molecular biology.</p>
              <form method="POST" action="biomaps1.php">
                <label for="mmmp_id">MMMP ID:</label>
                <input type="text" id="mmmp_id" name="mmmp_id">
                <input type="submit" name="Submit1" value="Submit">
              </form>
              <form method="POST" action="biomaps1.php">
                <label for="biomapn">Biomap Name:</label>
                <input type="text" id="biomapn" name="biomapn">
                <input type="submit" name="Submit2" value="Submit">
              </form>
              <form method="POST" action="biomaps1.php">
                <label for="biomapl">Biomap Link:</label>
                <input type="text" id="biomapl" name="biomapl">
                <input type="submit" name="Submit3" value="Submit">
              </form>
              <?php
    //execute the SQL query and return records
    $result = mysqli_query( $connector, "SELECT * FROM mmmp_biomap");
    ?>
              <table>
                <thead>
                  <tr>
                    <th>MMMP ID</th>
                    <th>Biomap Name</th>
                    <th>Biomap Link</th>
                  </tr>
                </thead>
                <tbody>  
                <?php
            while ($row = mysqli_fetch_array($result)) {
              echo
              "<tr>
            <td>{$row['mmmp_id']}</td>
            <td>{$row['biomapname']}</td>
            <td>{$row['biomaplink']}</td>
            </tr>";
            }
            
            ?>
                </tbody>
              </table>
              <br><br>
              <p>Refrence to Source:
                <br>
                Mocellin S, Rossi CR. The melanoma molecular map project. Melanoma Res. 2008 Jun;18(3):163-5.
                <br>
                doi: 10.1097/CMR.0b013e328300c50b. PMID: 18477889.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br><br><br>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
</body>

</html>
<?php mysqli_close($connector); ?>
