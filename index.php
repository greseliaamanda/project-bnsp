<?php
    include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <title>SI Perpustakaan</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
	  		<h1><a href="index.php?p=arsip" class="logo">Menu</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="index.php?p=arsip"><span class="fa fa-star mr-3"></span>Arsip</a>
          </li>
          <li class="active">
              <a href="index.php?p=about"><span class="fa fa-exclamation-circle mr-3"></span>About</a>
          </li>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <li>
            <p> 2021 &copy; greselia</p>
          </li>
        </ul>

    	</nav>
        <?php
            $pages_dir = 'pages';
            if(!empty($_GET['p'])){
                $pages = scandir($pages_dir,0);
                unset($pages[0], $pages[1]);

                $p = $_GET['p'];
                if(in_array($p.'.php',$pages)){
                    include($pages_dir.'/'.$p.'.php');
                }else{
                    echo'Halaman Tidak Ditemukan';
                }
            }else{
                include($pages_dir.'/arsip.php');
            }
        ?>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
