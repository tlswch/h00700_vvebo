<!DOCTYPE html>
<html>
<body>

<?php 
$myLinks = array("https://gitea.com/00700/tomato/raw/branch/main/wallpaper/01.png", 
    "https://gitea.com/00700/tomato/raw/branch/main/wallpaper/02.png",
    "https://gitea.com/00700/tomato/raw/branch/main/wallpaper/03.png");

$randomRedirection = $myLinks[array_rand($myLinks)];
header("Location: $randomRedirection");
?>

</body>
</html>