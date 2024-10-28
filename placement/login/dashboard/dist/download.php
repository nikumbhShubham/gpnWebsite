<?php
// $zip_file="placement/downloads/";
// touch($zip_file);
include 'formConn2.php';
$id=$_GET['Sno'];
$sql="SELECT offerletter FROM `offerletter` WHERE srn=$id";
$res=mysqli_query($con,$sql);

$count=mysqli_num_rows($res);

if ($count>0) {
    $row=mysqli_fetch_array($res);
     $file=$row['offerletter'];
     $file='offerletter'.$file;
     if (headers_sent()) {
          echo"http headers already sent";
     }else {
        ob_end_clean();
        header('Content-Type:application/file');
        header('Content-Disposition: attachment; filename="'.basename($file).'"');
        header('Content-Length: '.filesize($file));
        readfile($file); 
     }
}

// Create a new zip archive
$zip = new ZipArchive();
$zipName = "all_files.zip";
if ($zip->open($zipName, ZipArchive::CREATE) !== TRUE) {
    die ("Cannot create zip archive");
}

// Query the database for the list of uploaded files
$query = "SELECT * FROM offerletter";
$result = mysqli_query($con, $query);

// Check if the query succeeded
if (!$result) {
    die("Query failed: " . mysqli_error($con));
}

// Loop through each file and add it to the zip archive
$index=0;
while ($file = mysqli_fetch_assoc($result)) {
    // Add the file to the zip archive
    $zip->setCompressionIndex($index, ZipArchive::CM_STORE);
    $zip->addFile("offerletter/" . $filename, $filename );
    $index++;

}

// Close the zip archive
$zip->close();

// Send the zip file to the browser as a download
header('Content-Type: application/zip');
header('Content-Disposition: attachment; filename="'.$zipName.'"');
header('Content-Length: '.filesize($zipName));
readfile($zipName);
unlink($zipName);




?>















