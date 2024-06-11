    <?php
    include "db.php";
    global $connection;

    
           // file upload 1  
            $filename = $_FILES["stdFrontCNIC"] ["name"];
            $tempname = $_FILES["stdFrontCNIC"] ["tmp_name"];
            $folder1 = "fileupload/".$filename;
            move_uploaded_file($tempname, $folder1);

            // file upload 2 
        $filename1 = $_FILES["stdBackCNIC"] ["name"];
        $tempname = $_FILES["stdBackCNIC"] ["tmp_name"];
        $folder2 = "fileupload/".$filename1;
        move_uploaded_file($tempname, $folder2);

         // file upload 3 
         $filename2 = $_FILES["FFrontCNIC"] ["name"];
         $tempname = $_FILES["FFrontCNIC"] ["tmp_name"];
         $folder3 = "fileupload/".$filename2;
         move_uploaded_file($tempname, $folder3);

         //file upload 4 
         $filename3 = $_FILES["FBackCNIC"] ["name"];
         $tempname = $_FILES["FBackCNIC"] ["tmp_name"];
         $folder4 = "fileupload/".$filename3;
         move_uploaded_file($tempname, $folder4);

          // file upload 5 
        $filename4 = $_FILES["marksheetFront"] ["name"];
        $tempname = $_FILES["marksheetFront"] ["tmp_name"];
        $folder5 = "fileupload/".$filename4;
        move_uploaded_file($tempname, $folder5);

        // file upload 6 
        $filename5 = $_FILES["marksheetBack"] ["name"];
        $tempname = $_FILES["marksheetBack"] ["tmp_name"];
        $folder6 = "fileupload/".$filename5;
        move_uploaded_file($tempname, $folder6);

            if($filename != ""){
                $query = "INSERT INTO student_documents (`stdCNICFront`, `stdCNICBack` , `stdMarksheetFront` , `stdMarksheetBack` , `stdFatherCNICFront` , `stdFatherCNICBack`) value ('".$foder1."' , '".$foder2."' , '".$foder3."' , '".$foder4."' , '".$foder5."' , '".$foder6."')";
                $count = mysqli_query($connection , $query);
        }
        else{
            echo "not submit your data";
        }

?>