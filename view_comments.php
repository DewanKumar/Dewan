<?php
$file = 'guestbook.txt';
if (file_exists($file)) {
    $comments = file($file);
    foreach ($comments as $comment) {
        echo "<p>$comment</p>";
    }
} else {
    echo "No comments yet.";
}
?>
