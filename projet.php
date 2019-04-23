<!doctype html>
<html >
  <head>
   
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    
    
    
    
    
    <style>



@import url(https://fonts.googleapis.com/css?family=Open+Sans);


* { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }

html { width: 100%; height:100%; overflow:hidden; }

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


  .tab {
  width:100%; 
  background-color:  rgba(62,69,81);
  margin-top: 1%;
  
      }
        </style>




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

                  

                  <form  method="POST"  action="projet.php" >

<table class="tab">
 
    <tr>
        <th style="font-family: 'Roboto Slab', serif; color:#FFFFFF;">Filière</th>
        <th style="font-family: 'Roboto Slab', serif;color:#FFFFFF;">Année</th>
        <th style="font-family: 'Roboto Slab', serif;color:#FFFFFF;">Semester</th>
        <th rowspan="2"><button type="submit" class="btn btn-warning " style="margin-top: 25px;margin-left:auto;">Envoyer</button></th>
      </tr>
      <tr>

<td>
<select class="form-control" name="filiere"  required 
oninvalid="this.setCustomValidity('faut-t-il choisir la filiere une filiere);"  >

<option value = "" id = "default">choisir la filiere</option>
<option>LART</option>
<option>LFT</option>
<option>LFSI</option>
<option>LAII</option>
</select>
</td>
          <td>
              <select class="form-control" name="annee" required 
oninvalid="this.setCustomValidity('faut-t-il choisir une annee);">
                  <option value = "" id = "default">choisir l'annee</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
          </td>
          <td>
              <select class="form-control" name="semester" required 
oninvalid="this.setCustomValidity('faut-t-il choisir une semester);" >
                  <option value = "" id = "default">choisir une semester</option>
                  <option>premier semester</option>
                  <option>deuxième semester</option>

                </select>
          </td>
        </tr>

 


 </table>
</form>


<table  class="table table-striped table-dark">
                      <thead class="thead-dark">
                      <tr>
            <th scope="col">id</th>
            <th scope="col">file</th>
            <th scope="col">Filière</th>
            <th scope="col">Année</th>
            <th scope="col">Semester</th>
            <th scope="col">Type</th>
            <th scope="col"> Par</th>

            <th scope="col">Telecharger</th>
           

          </tr>
                        </thead>

      
      
                        <tbody>



                  
                  <?php


if ($_SERVER['REQUEST_METHOD']=='POST')
{
  $filiere=$_POST['filiere'];
  $annee=$_POST['annee'];
  $semester=$_POST['semester'];

  include "config.php";

  $stmt=$db->prepare("SELECT * FROM demo where Filiere='$filiere' and Semester='$semester' and annee='$annee'");
  $stmt->execute();
  while($row=$stmt->fetch())
  {
?>
<tr>
                       
                       <td> <?PHP echo $row['fid']?> </td>
                       <td> <?PHP echo $row['fname']?></td>
                       <td> <?PHP echo $row['Filiere']?></td>
                       <td> <?PHP echo $row['annee']?></td>
                       <td> <?PHP echo $row['Semester']?></td>
                       <td> <?PHP echo $row['Typed']?></td>
                       <td>



                       <?php 
                         $stm=$db->prepare("SELECT * FROM identi i  where $row[id]=id ");
                         $stm->execute();
                         $ro=$stm->fetch();
                         echo $ro['nom'].$ro['prenom'];
                            ?>

                        <td><a href=download.php?id=<?php echo $row['fid']  ?>  class="btn btn-outline-primary"  ><i class="fas fa-download"></i> </a>  </td>       
                        </tr>
                       <?php
                        }
                        ?>
</tbody>

</table>




  <?php
die;
}  ?>










 
                  

                  <table  class="table table-striped table-dark">
                   
                        <tbody>
      
                        <?php
                       
                        include "config.php";
      
                        $stmt=$db->prepare("SELECT * FROM demo ");
                        $stmt->execute();
                        while($row=$stmt->fetch())
                        {
                        ?>
                        <tr>
                       
                        <td> <?PHP echo $row['fid']?> </td>
                        <td> <?PHP echo $row['fname']?></td>
                        <td> <?PHP echo $row['Filiere']?></td>
                        <td> <?PHP echo $row['annee']?></td>
                        <td> <?PHP echo $row['Semester']?></td>
                        <td> <?PHP echo $row['Typed']?></td>
                        <td>
                            <?php 
                         $stm=$db->prepare("SELECT * FROM identi i  where $row[id]=id ");
                         $stm->execute();
                         $ro=$stm->fetch();
                         echo $ro['nom'].$ro['prenom'];
                            ?>

                        <td><a href=download.php?id=<?php echo $row['fid']  ?>  class="btn btn-outline-primary"  ><i class="fas fa-download"></i></a>  </td>       
                        </tr>
                       <?php
                        }
                        ?>

                         </tbody>

                      </table>










            
        
    </body>
    </html>