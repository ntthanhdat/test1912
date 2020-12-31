<?php
// Load the database configuration file
include'config.php';

if(isset($_POST['submit'])){
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                $fname   = $line[0];
                $lname   = $line[1];
                $email  = $line[3];
                $phone  = $line[2];
                
                // Check whether member already exists in the database with the same email
                $prevQuery = "SELECT PatientID FROM patient WHERE Email = '".$line[1]."'";
                mysqli_set_charset($conn, 'UTF8');
                $prevResult = mysqli_query($conn, $prevQuery);
                
                if(mysqli_num_rows($prevResult) > 0){
                    // Update member data in the database
                    $sql="UPDATE patient SET fname = '".$fname."', lname = '".$lname."', phone = '".$phone."', email = '".$email."', ModifiedOn = NOW() WHERE email = '".$email."'";
                    if (mysqli_query($conn, $sql)) {
                        header("Location:index.php");
                    } else {
                        $e = mysqli_error($conn);
                        header("Location:error.php?error=$e");
                    }
                }else{
                    // Insert member data in the database
                    $sql="insert into patient(FirstName, LastName,  PhoneNumber, Email, CreateOn, ModifiedOn)
                    VALUES ('$fname','$lname', '$phone', '$email',  CURRENT_DATE, CURRENT_DATE)";
                    if (mysqli_query($conn, $sql)) {
                        header("Location:index.php");
                    } else {
                        $e = mysqli_error($conn);
                        header("Location:error.php?error=$e");
                    }
                }
            }
            
            // Close opened CSV file
            fclose($csvFile);
            
           // header("Location: index.php".$qstring);
        }else{
            $qstring = '?error=err';
            header("Location: error.php".$qstring);
        }
    }else{
        $qstring = '?error=invalid_file';
        header("Location: error.php".$qstring);
    }
}
else echo "khong co file";