<?php
    $filename = "./userdata.csv";

    // Open the file for writing
    $handle = fopen($filename, "a");

    // This variable would be used to append each value in the $_POST array
    $data = "\n";

    foreach ($_POST as $key => $value) {
        // Append each $value to the $data variable
        $data .= $value;

        // Dynamically insert the "," depending on the key name
        if ($key !== "country") {
            $data .= ",";
        }
    }

    fwrite($handle, $data);

    // Close the opened file
    fclose($handle);

    // Open the file for reading
    $read_handle = fopen($filename, "r");

    // Read file content
    $content = fread($read_handle, filesize($filename));

    print_r(nl2br($content));

    // Close the opened file
    fclose($read_handle);