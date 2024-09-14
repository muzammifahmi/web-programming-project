<!-- Pengaturan text alignment -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text-alignment</title>
    <style type="text/css">
        h1{
            text-align: center;
        }
        p.tanggal{
            text-align: right;
        }
        p.utama{
            text-align: justify;
        }
    </style>
</head>
<body>
    <h1>Contoh CSS text-align</h1>
    <p class="tanggal">07 Desember 2013</p>
    <p class="utama">Properti text-align digunakan untuk mengatur Text-alignment
        horizontal teks. Teks dapat ditulis rata kiri, rata kanan, rata kanan kiri
        ataupun ditulis center. Ketika text-align diset "justify", setiap baris
        memiliki lebar yang sama, dan margin kiri dan kanan lurus (seperti di majalah
        dan surat kabar). Format penulisan CSS untuk text alignment. selector
        {text-alignment text-align;} Berikut adalah contoh dari penulisan style 
        text-align yang disisipkan di selector h1 dan paragraf. h1{text-align:center;}
        p.tanggal{text-allign:right;}p.utama{text-align:justify;} pada selector
        p.tanggal dan p.utama artinya CSS akan diberikan ke paragraf dengan pemanggilan 
        kelas "tanggal" dan "utama". Untuk lebih lengkapnya dapat dilihat pada contoh berikut:
    </p>
    <p><b>Catatan:</b>Baris ini adalah contoh penulisan tanpa CSS</p>
</body>
</html>