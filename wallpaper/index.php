<!DOCTYPE html>
<html>
<body>

<?php 
$myLinks = array("https://gitea.com/vvebo/vvebo/raw/branch/main/wallpaper/01.png", 
    "https://gitea.com/vvebo/vvebo/raw/branch/main/wallpaper/02.png",
    "https://gitea.com/vvebo/vvebo/raw/branch/main/wallpaper/03.png",
    "https://gitea.com/vvebo/vvebo/raw/branch/main/wallpaper/04.png",
    "https://gitea.com/vvebo/vvebo/raw/branch/main/wallpaper/05.png",
    "https://gitea.com/vvebo/vvebo/raw/branch/main/wallpaper/06.png");

$randomRedirection = $myLinks[array_rand($myLinks)];
header("Location: $randomRedirection");
?>

</body>
</html>