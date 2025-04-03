<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clickjacking Test</title>
    <style>
        iframe {
            width: 800px;
            height: 600px;
            opacity: 0.1; /* Membuat iframe transparan */
            position: absolute;
            top: 0;
            left: 0;
        }
        .cover {
            position: absolute;
            width: 800px;
            height: 600px;
            background: white;
        }
    </style>
</head>
<body>
    <h1>Test Clickjacking</h1>
    <iframe src="https://apik.ti.ft.ulm.ac.id"></iframe>
    <div class="cover"></div> <!-- Elemen ini bisa dihapus untuk melihat efek clickjacking -->
</body>
</html>
