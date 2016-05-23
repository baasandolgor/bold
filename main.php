<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/a.css" rel="stylesheet">

    <style type="text/css">
body {
  min-height: 2000px;
  padding-top: 70px;
}
    </style>

    </head>

    <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
       
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Гарах</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        

        <?php
        include('form.php');
        if(isset($_POST['btnsave']))
        {
          if(isset($_POST['txtid'])==0)
          {
            echo "add";
          }else{
               echo "update";
          }
        }
      ?>

<?php
        session_start();
        if(!isset($_SESSION['username']))
        {
          header("location: login.php");
        }


    include 'config.php';


$sqlquery = @mysql_query("select * from nom");

   

echo '<table class="table table-striped" style="background-color: #e5e5e5; background: transparent; ")>
      <tr>
       <td> No </td>
       <td> nom_ner </td>
       <td> nom_torol</td>
       <td> nomiin_dugaar</td>
       
      </tr>';



while ($row = @mysql_fetch_array($sqlquery)) {
	$id= $row['id'];
	$nom_ner= $row[' nom_ner'];
	$nom_torol = $row['nom_torol'];
	$nomiin_dugaar = $row['nomiin_dugaar'];
  



	echo "<tr>
        <td>".$id."</td>
        <td>".$nom_ner."</td>
        <td>".$nom_torol."</td>
        <td>".$nomiin_dugaar."</td>
        

        
      </tr>";
       	# code...
}
echo '</table>';





echo "<pre>";
print_r($_SESSION);
echo "</pre>";

@mysql_close($link);
?>
      </div>

    </div> <!-- /container -->
    	


</body>
</html>