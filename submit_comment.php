<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    $file = 'guestbook.txt';
    $data = "$name: $comment\n";

    // Append data to the file
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
}
header("Location: index.html"); // Redirect back to the guestbook page
?>
