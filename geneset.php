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

  <title>Find a Ride!</title>

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

  <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-1-1920x500.jpg);">
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
            <h2>Genesets</h2>
          </div>
        </div>
        <div class="col-md-6">
        </div>
        <div >
          <div style="text-align: center;" >
              <div style="text-align: center;">
              <h5>Introduction</h5>
              
              <p>This page refers references to the collection of Melanoma related genomic information present in Melanoma DB
                <br>
                Melanoma DB contains information regarding the following features:
                <ul style=" list-style-position: inside;">
                  
                  <li>genes for which expression in melanomas is associated with patient survival</li>
                  <li>genes that have various types of mutations or copy number changes in sequenced melanomas</li>
                  <li>genes that are mutated in other tumour types</li>
                  <li>genes that encode drug-able proteins</li>
                  <li>genes for which biomarker assays are available</li>
                  <li>genes that have a relationship to melanoma biology in the literature</li>
                  <li>genes associated with many other types of information</li>
                </ul>
                </p>
              <form method="POST" action="geneset1.php">
                <label for="mgs_id">MGS ID:</label>
                <input type="text" id="mgs_id" name="mgs_id">
                <input type="submit" name="Submit1" value="Submit">
              </form>
              <form method="POST" action="geneset1.php">
                <label for="gsn">Gene Set Name:</label>
                <input type="text" id="gsn" name="gsn">
                <input type="submit" name="Submit2" value="Submit">
              </form>
              <form method="POST" action="geneset1.php">
                <label for="refdb">Referred Database:</label>
                <input type="text" id="refdb" name="refdb">
                <input type="submit" name="Submit3" value="Submit">
              </form>
              <form method="POST" action="geneset1.php">
                <label for="subclass">Sub Class:</label>
                <input type="text" id="subclass" name="subclass">
                <input type="submit" name="Submit4" value="Submit">
              </form>
              <form method="POST" action="geneset1.php">
                <label for="link">Link to Publication:</label>
                <input type="text" id="link" name="link">
                <input type="submit" name="Submit5" value="Submit">
              </form>
              <?php
    //execute the SQL query and return records
    $result = mysqli_query( $connector, "SELECT * FROM melanoma_genesets");
    ?>
     <table>
        <thead>
            <tr>
                <th>MGS_ID</th>
                <th>Gene Set Name</th>
                <th>Referred Database</th>
                <th>Sub Class</th>
                <th>Link to Publication</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo
                "<tr>
          <td>{$row['mgs_id']}</td>
          <td>{$row['gsn']}</td>
          <td>{$row['refdb']}</td>
          <td>{$row['subclass']}</td>
          <td>{$row['link']}</td>
        </tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Refrence to Source: 
                <br>
                Trevarton, A. J., Mann, M. B., Knapp, C., Araki, H., Wren, J. D., Stones-Havas, S., Black, M. A., & Print, C. G. (2013). MelanomaDB: A Web Tool for Integrative Analysis of Melanoma Genomic Information to Identify Disease-Associated Molecular Pathways. Frontiers in oncology, 3, 184. 
              <br>
              https://doi.org/10.3389/fonc.2013.00184</p>
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
