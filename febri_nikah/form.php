<?php
include 'koneksi.php';

?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Undangan Pernikahan</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="asset/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=My+Soul&display=swap"
    rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+Double+Pica&display=swap" rel="stylesheet">
</head>
<body>
    <div class="containet">
        <form action="crud.php" method="POST">
            
            <!-- input : Nama Users -->
            <label for="nama">
                <input type="text" name="nama" id="nama">
            </label>

            
        </form>
    </div>

</body>
</html>