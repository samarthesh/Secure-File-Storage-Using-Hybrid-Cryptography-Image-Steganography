<?php
  session_start();
  if(isset($_POST['submit'])){
    $imagefile = $_FILES['file'];
    $imagefilename = $_FILES['file']['name'];
    $imagefileer = $_FILES['file']['error'];

    $filename = $_SESSION["filename"];
    $filepath = $_SESSION["filepath"];

    $imagefileExt = explode('.', $imagefilename);
    $imagefileActualExt = strtolower(end($imagefileExt));
    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($imagefileActualExt, $allowed)) {
      if($imagefileer === 0){
        move_uploaded_file($_FILES['file']['tmp_name'], "./keyimage/" . $imagefilename);

        
        $newfilename = str_replace("Folder",".enc.enc",$filename);
        $newfilename = str_replace(' ','',$newfilename);  
        /* $newfilename = str_replace("Folder",".enc.enc",$filename);
        $newfilename = str_replace(' ','',$newfilename);
        $selfile = "C:/xampp/htdocs/secure/uploads/".$filename;
        $filerep = str_replace("Folder",".enc",$filename);
        $foldpath = "C:/xampp/htdocs/secure/join/".$filerep;
        //$my_command1 = escapeshellcmd("python C:/xampp/htdocs/secure/ms.py ".$selfile." ".$foldpath);
        $my_command1 = escapeshellcmd("python C:/xampp/htdocs/secure/ms.py ./uploads/secure.pngFolder ./join/secure.png.enc");
        $command_output1 = shell_exec($my_command1);
        echo $command_output1; */

        $halffilename = str_replace("Folder",".enc",$filepath);
        $halffilename = str_replace("uploads","join",$halffilename);
        $my_command1 = escapeshellcmd("python C:/xampp/htdocs/secure/ms.py C:/xampp/htdocs/secure/".$filepath." C:/xampp/htdocs/secure/".$halffilename);
        $command_output1 = shell_exec($my_command1);
        echo $command_output1;

        $enc = ".enc";
        $fullfilename = $halffilename.$enc;
        //move_uploaded_file($_FILES['file']['tmp_name'], "./keyimage" . $imagefilename);
        $my_command = escapeshellcmd("python C:/xampp/htdocs/secure/decrypt.py C:/xampp/htdocs/secure/".$fullfilename." C:/xampp/htdocs/secure/keyimage/".$imagefilename);
        //$my_command = escapeshellcmd("python C:/xampp/htdocs/secure/decrypt.py C:/xampp/htdocs/secure/join/secure.png.enc.enc C:/xampp/htdocs/secure/keyimage/".$imagefilename);
        $command_output = shell_exec($my_command);
        echo $command_output;
        
        $del =".";
        $filenameAfter = explode('.', $newfilename);
        $filenameDwnld = $filenameAfter[0].'.'.$filenameAfter[1];
        $filepathNew = 'join/'.$filenameDwnld;
        $filepathNew = str_replace(' ','',$filepathNew);

        header("Cache-Control: public");
        header("Content-Description: FIle Transfer");
        header("Content-Disposition: attachment; filename=".$filenameDwnld);
        header("Content-Transfer-Emcoding: binary");

        readfile($filepathNew);

        $imagefile_ptr = "keyimage/".$imagefilename;
        unlink($imagefile_ptr);
        unlink($filepathNew);

        exit;
      }
      else{
        echo "Error in uploading Key Image file!";
      }
    }
    else{
      echo "This is not an image file!";
    }

  }
?>
