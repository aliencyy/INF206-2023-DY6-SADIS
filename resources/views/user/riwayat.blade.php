<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SADIS</title>
    <link rel="stylesheet" href="resources/css/app.css"/>
    <link rel="stylesheet" href="resources/js/bootstrap.js">
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/js/bootstrap.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <title>Riwayat</title>
    <style>
        *{
            margin: 10px;
            padding: 5px;
        }
        body{
            background-color: #D9F9EE;
        }
        .riwayat{
            background-color: #EBEBEB;
        }
        
    </style>
</head>
<body>
    <div class="mx-auto">
        <h2 style="text-align:center">
            Riwayat
        </h2>
    </div>
    <div class="riwayat">
        <form>
            <table border="0" cellspacing="20">
                <tr>
                    <td>Tanggal</td>
                    <td>Jenis Sampah</td>
                    <td rowspan="2" bgcolor="D9D9D9">Dalam Perjalanan</td>
                </tr>
                <tr>
                    <td bgcolor="D9D9D9">21/12/2020</td>
                    <td bgcolor="D9D9D9">Farmasi</td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>