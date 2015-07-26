<!DOCTYPE html>
<html>
<head>
    <title>Kelime Arama Uygulaması</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
        .kutu{
            margin: auto;
            width: 500px;
            border: 1px;
        }
    </style>
</head>
<body>
<div class="kutu">
<form action="" method="post">
    <div class="form-group">
    <label for="metin">Buraya Metin Giriniz</label>
    <textarea class="form-control" name="metin"  cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
    <input type="text" class="form-control" name="aranan" placeholder="Aranacak Kelime."/>
    </div>
    <div class="form-group">
    <input type="submit" class="form-control" value="ARA"/>
    </div>
</form>
</div>
</body>
</html>

<?php
require_once 'kelimeAyikla.php';
$elma = new kelimeAyikla();
if(isset($_POST["metin"])&&isset($_POST["aranan"])&&!empty($_POST["metin"])&&!empty($_POST["aranan"])){
    $elma->kelime_bul($_POST["metin"], $_POST["aranan"]);
}
?>
