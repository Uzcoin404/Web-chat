<?
if ($_GET['lang']) {   
    setcookie("lang",$_GET['lang'], 2147483647, '/');
    $lang = $_GET['lang'];
} else {
    if ($_COOKIE['lang']) {   
        setcookie("lang",$_COOKIE['lang'], 2147483647, '/');
        $lang = $_COOKIE['lang'];
    } else {
        setcookie("lang",'en', 2147483647, '/');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-chat | Mitti Telegram</title>
    <link rel="stylesheet" href="../css/all.min.css?v=<?= time();?>">
    <link rel="stylesheet" href="../css/style.css?v=<?= time();?>">
    <link rel="stylesheet" href="../css/media.css?v=<?= time();?>">
    <link rel="shortcut icon" href="../img/chat-icon.jpg" type="image/x-icon">
</head>
<body>