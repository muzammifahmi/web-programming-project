<!-- Pengaturan warna pada teks/color -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan waran pada CSS</title>
    <style type="text/css">
        body{
            /* selector css Tag */
            color: red;
            /* pengaturan warna menggunakan nama warna */
        }
        h1{
            /* selector css Tag */
            color: #00ff00;
            /* pengaturan warna menggunakan nilai HEX */
        }
        p.ex{
            /* selector css Class */
            color: rgb(0,0,255);
            /* pengaturan warna menggunakan nilai RGB */
        }
    </style>
</head>
<body>
    <h1>INI ADALAH HEADING 1</h1>
    <P>Ini adalah paragraf, ditulis dengan warna merah.
        Default text-color didefinisikan pada body selector.
    </P>
    <p class="ex">Ini adalah paragraf with class="ex"
        dan warna teks biru.
    </p>
</body>
</html>
