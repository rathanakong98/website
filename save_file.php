<?php
$file = "list.txt";
$data = $_POST['data'];

// Write the data to the file
file_put_contents($file, $data);

echo "Changes saved successfully!";
?>
