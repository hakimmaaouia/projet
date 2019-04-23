<?php





if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $conn= new mysqli("localhost", "root","", "projet")or die(mysql_error($conn));



//CK 1 
$user=$_POST['user'];
$pass=$_POST['pass'];
    session_start();

   // CK2

   $sql="select * from identi where nom='$user' and mdp='$pass';";

   $user=mysqli_query($conn,$sql);
   $counter=mysqli_num_rows($user);
   if ($counter==0) {
       header('REFRESH:.1;URL=ajouter.html');

       
   }
   else
    {
      //oui
    }










}
else
{
    die('sorry you are not admin');
}




?>



<!doctype html>
<html >
  <head>
   
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:700i" rel="stylesheet">
    
    
    
    
    <style>



@import url(https://fonts.googleapis.com/css?family=Open+Sans);


* { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }

html { width: 100%; height:100%; }

body { 
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: #092756;
	background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
                                          
}




        </style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


            
  </head>







    <body>

    
    


            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="projet.php">
                        <img src="logo.svg" width="50" height="50" class="d-inline-block align-top" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav">

                        <a class="nav-item nav-link"  style="font-family: 'Roboto Slab', serif;" href="projet.php">Accueil <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" style="font-family: 'Roboto Slab', serif;" href="ajouter.html">Ajouter </a>
                  
                      </div>
                  
                    </div>
                  </nav>

<br>
       

                <table  class="table table-striped table-dark">
                <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">file</th>
      <th scope="col">action</th>
      <th scope="col">supprimer</th>
    </tr>
                  </thead>


                  <tbody>

                  <?php
                  $user=$_POST['user'];
                  $pass=$_POST['pass'];


                 
                  include "config.php";

                  $stmt=$db->prepare("SELECT d.* FROM  demo d , identi i  where  nom='$user' and mdp='$pass' and i.id=d.id;");
                  $stmt->execute();
                  while($row=$stmt->fetch())
                  {
                  ?>
                  <tr>
                 
                  <td> <?PHP echo $row['fid']?> </td>
                  <td> <?PHP echo $row['fname']?></td>
                  <td><a href=download.php?id=<?php echo $row['fid']  ?>  class="btn btn-outline-primary"  >telecharge</a>  </td>          </td>
                  <td><a href=delete.php?id=<?php echo $row['fid']  ?> class="btn btn-outline-danger" >delete</a>  </td>  
                  </tr>






                  
                 <?php
                  }
                  ?>
                   </tbody>
                </table>
                                  
                                  
                                  
                                  
     
  


<div class="card text-white bg-dark mb-3">
  <div class="card-header">
    Featured
  </div>
  <!-- Link to open the modal -->
  <div class="card-body bg ">
  <div class="col text-center">
<p><a href="#ex1" class="btn btn-outline-danger" rel="modal:open">Insérer un document </a></p>
</div>
  </div>
</div>










<div id="ex1" class="modal" >
<form method="POST"  action="import.php" enctype="multipart/form-data" >




<h5>Filière</h5>
<select class="form-control" name="filiere">
<option>choisir la filiere</option>
  <option>LART</option>
  <option>LFT</option>
  <option>LFSI</option>
  <option>LAII</option>
</select>

<h5>Année</h5>
<select class="form-control" name="annee">
  <option>choisir l'annee</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
</select>

<h5>Semester</h5>
<select class="form-control" name="semester">
  <option>choisir une semester</option>
  <option>premier semester</option>
  <option>deuxième semester</option>
  
</select>

<h5>Type</h5>
<select class="form-control" name="type">
  <option>choisir un type</option>
  <option>DS</option>
  <option>Examen</option>
  <option>TD</option>
</select>

<br/>
   <div class="form-group">
    <h5>choisire le fichiers</h5>
    <input type="file" name="myfile" class="form-control-file" >
   </div>

   
<button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-top:50px">Envoyer</button>

</form>


</div>





                  </body>
    </html> 