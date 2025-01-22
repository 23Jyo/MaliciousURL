<?php
// save_link.php

// Get the link from the query string
if (isset($_GET['link'])) {
    $link = $_GET['link'];

    // Save the link 
	$myfile = fopen("input_url.txt","w") or die("Unable to open file!");
    fwrite($myfile,$link); // Write information to the file
    fclose($myfile); // close the file
	
	
	
   // file_put_contents("input_url.txt", $link . PHP_EOL, FILE_APPEND);

    // Redirect to data1.php
    header("Location: data1.php");
    exit();
}
?>
