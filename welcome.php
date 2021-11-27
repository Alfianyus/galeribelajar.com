<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body background="media/1.jpg">


<header>
  <p></p>
  <p>&nbsp;</p>
</header>
	
	
</body>

<table align="center">
  <tr>
      <br>
    <th><img src="media/Picture2.png" width="300"></th>
    <th><img src="media/Picture7.png" width="300"></th>
    <th><img src="media/Picture8.png" width="300"></th>
  </tr>
  </table>

<table align="center">
  <tr>
      <br>
    <th><img src="media/Picture2.png" width="300"></th>
    <th><img src="media/Picture7.png" width="300"></th>
    <br>
    <th><img src="media/Picture8.png" width="100" heigt="200"></th><tr></tr><th><img src="media/Picture8.png" width="100"></th></tr>
  </tr>
  </table>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<img src="media/tooplate_logo.jpg" align="right">
<body>

	
    <?php echo "<h1> " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php"> <img src="media/images.png" width="50">Keluar</a>
    
    <a href="logout.php"> <img src="media/images.png" width="50" align="right">Keluar</a>
     

     

    
</body>
</html>



    <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Materi</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="card">

            	<video width="300" height="300" controls="">
		
		<source src="media/Sequence Fix-1.m4v" type=" video/mp4">
	</video>
              
              <div class="card-body">
                <p class="card-text" align="center"> Matematika </p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <video width="300" height="300" controls="" >
    
    <source src="media/IPA SD Kls 3 Bab 1 Benda dan Sifatnya_shb.mp4" type=" video/mp4">
  </video>
              
              <div class="card-body">
                <p class="card-text" align="center">IPA SD Kls 3 (Benda)</p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <video width="300" height="300" controls="" >
    
    <source src="media/Bab 2 Energi_s-Rev1.mp4" type=" video/mp4">
  </video>
              
              
              <div class="card-body">
                <p class="card-text" align="center">IPA SD Kls 3  (Energi)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>


       <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Soal</h2>
          </div>
        </div>
        <div class="row" align="center">
          <div class="col-4">
            <div class="card">

            	<a href ="https://erlassdigital.000webhostapp.com/test.html">
  <img src="media/leptop.jpg"></a>
              
              <div class="card-body">
                <p class="card-text"> Matematika Berhitung 1 sampai 10</p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              
              <div class="card-body">
                <p class="card-text">2</p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              
              <div class="card-body">
                <p class="card-text">3.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
          </section>


   



