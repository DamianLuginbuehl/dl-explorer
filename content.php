<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Color+Emoji&family=Raleway:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="icon.png">

</head>

<body>
    
<?php

$content = htmlspecialchars($_GET["file"]);

include($content);

echo "<title>{$info[1]}</title>";


//Explorer

if($info[3] == "explorer") {

$repeat = sizeof($cards, 0);
$count = 0;

echo "<header>\n<a href=\"{$info[5]}\" class=\"backlink\">{$info[4]}</a>\n</header>";
echo "<main>";

while ($repeat >= 1) {

    echo "<div class=\"card\">\n<a href=\"{$cards[$count][1]}\">\n<div class=\"link\">\n<img src=\"{$cards[$count][2]}\" alt=\"icon\">\n<p>{$cards[$count][3]}</p>\n</div>\n</a>\n</div>";

    $count = $count+1;
    $repeat = $repeat-1;

};

echo "</main>";

};



//File 

if($info[3] == "file") {

    echo "<header class=\"back\">\n<a href=\"{$info[5]}\" class=\"backlink\">\n<div class=\"back pg\">\n•••\n</div>\n</a>\n</header>";
    
    if($info[6] == "image"){
        echo "<div style=\"position: absolute; left: 0; top: 3vh; display: flex; flex-direction: column; justify-content: center; align-items: center; width: 100vw; height: 97vh;\">";
        echo "<img style=\"max-width: 100vw; max-height: 97vh; top: 3vh\"  src=\"{$file[1]}\"></img>";
        echo "</div>";
    };

    if($info[6] == "pdf"){
        echo "<main>";
        echo "<iframe src=\"{$file[1]}\" frameborder=\"0\"></iframe>";
        echo "</main>";
    };
    
    };
    






?>
    
</body>
</html>