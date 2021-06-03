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

  <title>SIGN IN</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>

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
                <a class="dropdown-item" href="nonclustered.php">Non Clustered</a>->
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
            <h2>Melanoma Cases by Non Clustered Designation</h2>
          </div>
        </div>
        <div class="col-md-6">
        </div>
        <div >
          <div style="text-align: center;" >

              <div style="text-align: center;">
                <br>
              <h5>Introduction</h5>
              
              <p>This page refers references to the data collected by Bittner et. al in their work regarding samples of
                Melanoma cases by cluster designation. Their work includes the molecular classification of cutaneous malignant
                melanoma by gene expression profiling. 
                <br>
                A refined version of the table with option for relevant queries for Non
                Clustered designations of Melanoma cases is given below
              </p>
            </div>
            <form method="POST" action="nonclustered1.php">
                <label for="cin_id">CIN ID</label>
                <input type="text" id="cin_id" name="cin_id">
                <input type="submit" name="Submit1" value="Submit">
              </form>
              <form method="POST" action="nonclustered1.php">
                <label for="case_no">Case No.</label>
                <input type="text" id="case_no" name="case_no">
                <input type="submit" name="Submit2" value="Submit">
              </form>
              <form method="POST" action="nonclustered1.php">
                <label for="sex">Sex:</label>
                <input type="text" id="sex" name="sex">
                <input type="submit" name="Submit3" value="Submit">
              </form>
              <form method="POST" action="nonclustered1.php">
                <label for="age">Age:</label>
                <input type="text" id="age" name="age">
                <input type="submit" name="Submit4" value="Submit">
              </form>
              <form method="POST" action="nonclustered1.php">
                <label for="biopsy">Biopsy Site:</label>
                <input type="text" id="biopsy" name="biopsy">
                <input type="submit" name="Submit5" value="Submit">
              </form>
              <form method="POST" action="nonclustered1.php">
                <label for="p16">p16 Mutation Status</label>
                <input type="text" id="p16" name="p16">
                <input type="submit" name="Submit6" value="Submit">
              </form>
              <form method="POST" action="nonclustered1.php">
                <label for="vas">Vasulogenic Mimicry:</label>
                <input type="text" id="vas" name="vas">
                <input type="submit" name="Submit7" value="Submit">
              </form>
              <form method="POST" action="nonclustered1.php">
                <label for="gel">Gel Contraction:</label>
                <input type="text" id="gel" name="gel">
                <input type="submit" name="Submit8" value="Submit">
              </form>
              <form method="POST" action="nonclustered1.php">
                <label for="cell">Cell Motility:</label>
                <input type="text" id="cell" name="cell">
                <input type="submit" name="Submit9" value="Submit">
              </form>
              <form method="POST" action="nonclustered1.php">
                <label for="scratch">Scratch Wound:</label>
                <input type="text" id="scratch" name="scratch">
                <input type="submit" name="Submit10" value="Submit">
              </form>
            <?php
    //execute the SQL query and return records
    $result = mysqli_query( $connector, "SELECT * FROM melanoma_noncluster");
    ?>
     <table>
        <thead>
            <tr>
                <th>CIN_ID</th>
                <th>Case No.</th>
                <th>Sex</th>
                <th>Age</th>
                <th>Biopsy Site</th>
                <th>p16 Mutation Status</th>
                <th>Vasulogenic Mimicry</th>
                <th>Gel Contraction</th>
                <th>Cell Motility</th>
                <th>Scratch Wound</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo
                "<tr>
                <td>{$row['cin_id']}</td>
                <td>{$row['case_no']}</td>
                <td>{$row['sex']}</td>
                <td>{$row['age']}</td>
                <td>{$row['biopsy']}</td>
                <td>{$row['p16']}</td>
                <td>{$row['vas']}</td>
                <td>{$row['gel']}</td>
                <td>{$row['cell']}</td>
                <td>{$row['scratch']}</td>
        </tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Refrence to Source: 
                <br>
                Bittner, M., Meltzer, P., Chen, Y., Jiang, Y., Seftor, E., Hendrix, M., Radmacher, M., Simon, R., Yakhini, Z., Ben-Dor, A., Sampas, N., Dougherty, E., Wang, E., Marincola, F., Gooden, C., Lueders, J., Glatfelter, A., Pollock, P., Carpten, J., Gillanders, E., … Sondak, V. (2000). Molecular classification of cutaneous malignant melanoma by gene expression profiling. Nature, 406(6795), 536–540.
              <br>
              https://doi.org/10.1038/35020115</p>
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
