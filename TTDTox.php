<?php
 $username = "root";
 $password = "";
 $host = "localhost";
 $connector = mysqli_connect($host, $username, $password)
    or die("Unable to connect");
// $cn=mysqli_connect("localhost","root","","covid-19updates");
// 	if(!$cn)
// 	{
// 		echo "unable to conenct";
// 		die();
	  	
// 	}
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

  <title></title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">
 <style>
   #ttable{
    overflow-x: auto;
   }
  </style>
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
                <a class="dropdown-item" href="nonclustered.php">Non Clustered</a>        
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">MMMP TTD</a>

              <div class="dropdown-menu">
              <a class="dropdown-item" href="TTDSens.php">TTD: Sensitivity</a>
                  <a class="dropdown-item" href="TTDSyn.php">TTD: Synergism</a>
                  <a class="dropdown-item" href="TTDTox1.php">TTD: Toxicity</a>
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
            <br><br>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="best-features about-features">
    <div class="container" id="ttable">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading" style="text-align: center;">
            <h2>TTD Toxicity</h2>
          </div>
          <p style="text-align:center;">
          The TTD can be searched for the following three main objectives:<br>
1) To provide both basic researchers and clinical investigators with an unprecedented
synopsis of the available scientific literature on the development of targeted therapy for
melanoma;<br>
2) To obtain summaries of the current evidence on the relationship between each single
molecule (or set of molecules) and the efficacy of a given therapeutic agent (or set of
therapeutic agents);<br>
3) To match the patient/cancer molecular profile with the available scientific evidence on the
targeted therapy of melanoma, thus developing a drug ranking model for the personalized
treatment of melanoma. <br>
            The sources of the information input in the TTD are the PubMed, Medline, Embase, Cancerlit
and Cochrane databases<br><br>
Any molecule that - after modulation of its particular functional state by a "modifier" - can
synergistically increase the efficacy a therapeutic agent being used or being investigated for
the treatment of melanoma (synergism relationship)
  </p>
        </div>
        <div class="col-md-6">
          </div>
        </div>
        <div>
          <div style="text-align: center;" >
              <div style="text-align: center;">
                <br>
                <form method="POST" action="TTDTox1.php">
                <label for="ttdtox_id">TTDTox_id:</label>
                <input type="text" id="ttdtox_id" name="ttdtox_id">
                <input type="submit" name="Submit1" value="Submit">
              </form>
              <form method="POST" action="TTDTox1.php">
                <label for="source">Source:</label>
                <input type="text" id="source" name="source">
                <input type="submit" name="Submit2" value="Submit">
              </form>
              <form method="POST" action="TTDTox1.php">
                <label for="mol">Molecule:</label>
                <input type="text" id="mol" name="mol">
                <input type="submit" name="Submit3" value="Submit">
              </form>
              <form method="POST" action="TTDTox1.php">
                <label for="dmp">DNA/mRNA/Protein:</label>
                <input type="text" id="dmp" name="dmp">
                <input type="submit" name="Submit4" value="Submit">
              </form>
              <form method="POST" action="TTDTox1.php">
                <label for="state">State(Molecule):</label>
                <input type="text" id="state" name="state">
                <input type="submit" name="Submit5" value="Submit">
              </form>
              <form method="POST" action="TTDTox1.php">
                <label for="modifier">Modifier</label>
                <input type="text" id="modifier" name="modifier">
                <input type="submit" name="Submit6" value="Submit">
              </form>
              <form method="POST" action="TTDTox1.php">
                <label for="rel">Relationship Drug:</label>
                <input type="text" id="rel" name="rel">
                <input type="submit" name="Submit7" value="Submit">
              </form>
              <form method="POST" action="TTDTox1.php">
                <label for="model">Model:</label>
                <input type="text" id="model" name="model">
                <input type="submit" name="Submit8" value="Submit">
              </form>
              <form method="POST" action="TTDTox1.php">
                <label for="h">H:</label>
                <input type="text" id="h" name="h">
                <input type="submit" name="Submit9" value="Submit">
              </form>
              <form method="POST" action="TTDTox1.php">
                <label for="ref">Reference:</label>
                <input type="text" id="ref" name="ref">
                <input type="submit" name="Submit10" value="Submit">
              </form>
            </div>
          </div>
        </div>
        <?php
    //execute the SQL query and return records
    $result = mysqli_query( $connector, "SELECT * FROM ttdtox");
    ?>
     <table> 
        <thead>
            <tr>
                <th>TTDTox_ID</th>
                <th>Source</th>
                <th>Molecule</th>
                <th>Alias (Molecule)</th>
                <th>DNA/MRNA/Protein</th>
                <th>State (Molecule)</th>
                <th>Modifier</th>
                <th>Alias (Modifier)</th>
                <th>Relationship</th>
                <th>Drug (Therapy)</th>
                <th>Alias (Drug)</th>
                <th>Model</th>
                <th>H</th>
                <th>Cases</th>
                <th>References</th>
                <th>Notes</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo
                "<tr>
          <td>{$row['ttdtox_id']}</td>
          <td>{$row['source']}</td>
          <td>{$row['mol']}</td>
          <td>{$row['alias1']}</td>
          <td>{$row['dmp']}</td>
          <td>{$row['state']}</td>
          <td>{$row['modifier']}</td>
          <td>{$row['alias2']}</td>
          <td>{$row['rel']}</td>
          <td>{$row['drug']}</td>
          <td>{$row['alias3']}</td>
          <td>{$row['model']}</td>
          <td>{$row['h']}</td>
          <td>{$row['cases']}</td>
          <td>{$row['ref']}</td>
          <td>{$row['notes']}</td>
        </tr>";
            }
            ?>
        </tbody>
    </table>
      </div>
    </div>
  </div>


  <br><br><br>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
</body>

</html>
<?php mysqli_close($connector); ?>
