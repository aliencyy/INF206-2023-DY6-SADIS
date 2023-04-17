<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Sadis | Order</title>
</head>
<body>
    <div class="card-body">
    <table class="table table-sm table-bordered table-striped">
        <thead>
            <th>No</th>
            <th>tangal penjemputan</th>
            <th>jenis_sampah</th>
            <th>jenis_pengolahan</th>
            <th>berat</th>
            <th>keterangan</th>
            <th>Status</th>
        </thead>

        <tbody>
            
                <tr>
                    <td>{{ $orderan->id }}</td>
                    <td>{{ $orderan->tanggal_pengambilan }}</td>
                    <td>{{ $orderan->jenis_sampah }}</td>
                    <td>{{ $orderan->jenis_pengolahan }}</td>
                    <td>{{ $orderan->berat }}</td>
                    <td>{{ $orderan->ket }}</td>
                    <td>{{ $orderan->status_pengolahan }}</td>

                </tr>
            
        </tbody>
    </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
</body>
</html>