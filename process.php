 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    echo "<body style='background:#030712; color:white; text-align:center; padding-top:100px; font-family:sans-serif;'>";
    echo "<div style='display:inline-block; background:rgba(255,255,255,0.05); padding:50px; border-radius:30px; border:1px solid rgba(255,255,255,0.1);'>";
    echo "<h2 style='color:#6366f1;'>Success, $name!</h2><p>Your message is on its way to Ruddro.</p>";
    echo "<br><a href='index.php' style='color:#6366f1; text-decoration:none; font-weight:bold;'>← Back to Portfolio</a>";
    echo "</div></body>";
}
?>