<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dompdf = new Dompdf();
    $dompdf->loadHtml("<h1>" . $_POST['content'] . "</h1>");
    $dompdf->render();
    $dompdf->stream("document.pdf");
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Генератор PDF</title>
</head>
<body>
    <form method="post">
        <textarea name="content" placeholder="Введіть текст для PDF"></textarea>
        <button type="submit">📄 Згенерувати PDF</button>
    </form>
</body>
</html>
