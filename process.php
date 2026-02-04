<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    echo "<body style='background:#0f172a; color:white; text-align:center; padding-top:100px; font-family:sans-serif;'>";
    echo "<h2>Thank you, $name!</h2><p>Your message has been received.</p>";
    echo "<a href='index.php' style='color:#3b82f6;'>Return to Portfolio</a></body>";
}
?>