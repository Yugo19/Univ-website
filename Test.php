<?php 
   $conn = mysqli_connect("localhost","root","","studentdata");
   if(isset($_POST['submit'])){
       $allows = array('pdf');
       $temporary = explode(".", $_FILES['file']['name']);
       $extension=end($temporary);
       $upload_file=$_FILES['file']['name'];
       move_uploaded_file($_FILES['file']['tmp_name'], "../" .$_FILES['file']['name']);
      /* $query = mysqli_query($conn,"INSERT INTO 'test'('student_name','file') VALUES('".$upload_file."')");
       if($query){
           echo "files uploaded successfuly";
       }*/
   }
?>