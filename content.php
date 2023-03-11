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
    <link rel="icon" href="logo.png">

</head>

<body>
    <div class="version">
        <a href="https://dl-projects.ch/explorer">Version 1.5.3</a>
    </div>
    
<?php

$content = htmlspecialchars($_GET["directory"]);

if(isset($_GET['file'])) {
    $fileurl = htmlspecialchars($_GET["file"]);
};



include($content);

echo "<title>{$info[1]}</title>";


//Explorer

if($info[2] == "explorer") {

$repeat = sizeof($cards, 0);
$count = 0;

echo "<header>\n<a href=\"?directory={$info[4]}\" class=\"backlink\">{$info[3]}</a>\n</header>";
echo "<main>";

while ($repeat >= 1) {

    if($cards[$count][4] == "false"){
        echo "<div class=\"card\">\n<a href=\"?directory={$cards[$count][1]}\">\n<div class=\"link\">\n<img src=\"{$cards[$count][2]}\" alt=\"icon\">\n<p>{$cards[$count][3]}</p>\n</div>\n</a>\n</div>";

    } else {
        if($cards[$count][4] == "true"){
            echo "<div class=\"card\">\n<a href=\"{$cards[$count][1]}\" download>\n<div class=\"link\">\n<img src=\"{$cards[$count][2]}\" alt=\"icon\">\n<p>{$cards[$count][3]}</p>\n</div>\n</a>\n</div>";
    
        };
    };


    $count = $count+1;
    $repeat = $repeat-1;

};

echo "</main>";

};



//File 

if($info[2] == "file") {

    echo "<header class=\"back\">\n<a href=\"?directory={$info[4]}\" class=\"backlink\">\n<div class=\"back pg\">\n•••\n</div>\n</a>\n</header>";
    
    if($info[6] == "image"){
        echo "<div class=\"file-viewer\" style=\"position: absolute; left: 0; top: 3vh; display: flex; flex-direction: column; justify-content: center; align-items: center; width: 100vw; height: 97vh;\">";
        echo "<img style=\"max-width: 100vw; max-height: 97vh; top: 3vh\"  src=\"{$fileurl}\"></img>";
        echo "</div>";
    };

    if($info[6] == "pdf"){
        echo "<main class=\"file-viewer\">";
        echo "<iframe src=\"{$fileurl}\" frameborder=\"0\"></iframe>";
        echo "</main>";
    };
    
    };
    






?>
    
</body>
</html>