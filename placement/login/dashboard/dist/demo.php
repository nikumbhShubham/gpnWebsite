<?php

$filePath = 'offerletter/';

// Check if the file is readable
if (is_readable($filePath)) {
    echo "The file is readable.";
} else {
    echo "The file is not readable.";
}

// Check if the file is writable
if (is_writable($filePath)) {
    echo "The file is writable.";
} else {
    echo "The file is not writable.";
}
?>