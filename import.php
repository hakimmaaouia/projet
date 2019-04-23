<?php
$filiere=$_POST['filiere'];
$annee=$_POST['annee'];
$semester=$_POST['semester'];
$type=$_POST['type'];






//file
$doc_name=$_FILES['myfile']['name'];
$doc_type=$_FILES['myfile']['type'];
$doc_tmp=$_FILES['myfile']['tmp_name'];
$doc_size=$_FILES['myfile']['size'];


//setting 
$errors=array();

if ($doc_size>400000 )
{
$errors[]='<div>fichier ne peut pas être plus de 400000 bit</div>';
}



$extontion=array('jpg','odt','pdf','txt',);
$doc_extontion=strtolower(end (explode('.',$doc_name)));
echo $doc_extontion;
if(!(in_array($doc_extontion,$extontion)))
{
$errors[]='<div>fichier ne peut pas être '.$doc_extontion.'</div>';
}




//end setting











// upload and save

if(empty($errors))
{
move_uploaded_file($doc_tmp,$_SERVER['DOCUMENT_ROOT'].'\projet\files\\'.$doc_name);
$conn= new mysqli("localhost", "root","", "projet")or die(mysql_error($conn));
$sql="INSERT INTO `demo` VALUES ('1', NULL, '$doc_name', 'application/octet-stream', 'File Transfer', 'attachment', '0', 'must-revalidate', 'public','$filiere','$annee','$semester','$type');";
$user=mysqli_query($conn,$sql);


}
else
{
    foreach ($errors as $errors ) 
      {
echo($errors);
      }
}

header('REFRESH:.1;URL=ajouter.html');
// end upload and save



?>