<?php
$f = "myfile.txt";
    
$content = "The quick brown fox jumps over the lazy dog."; // String of data to be written
$file = fopen($f, "w") or die("ERROR: Cannot open the file."); // Open the file for writing
fwrite($file, $content) or die ("ERROR: Cannot write to file."); // Write data to the file
fclose($file); // Closing the file
echo "Data written successfully.";