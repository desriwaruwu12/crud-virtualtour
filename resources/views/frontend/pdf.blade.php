<!DOCTYPE html>
<html>

<head>
    <title>INVOICE PEMESANAN PAKET TOUR TRAVELXISM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5><a class=".text-info">INVOICE PEMESANAN PAKET TOUR TRAVELXISM</h5></a>
    </br>
    </center>
    
    <div class="card-body border-top pb-5 p-0 mt-3">
    <table class="table table-striped table-hover">
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">NAMA PAKER</th>
                <th scope="col">HARGA</th>
                <th scope="col">JUMLAH HARGA</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>1</td>
                <td> {{ $virtual_tour->nama_paket }} </td>
                <td>Rp. {{ number_format($virtual_tour->harga)}}</td>
                <td>Rp. {{ number_format($virtual_tour->harga)}}</td>
                
            </tr>
            
        </tbody>
        <tfoot>
            <td></td>
            <td></td>
            <td style="text-align:right; " scope="col">TOTAL HARGA</td>
            <td> Rp. {{ number_format($virtual_tour->harga)}}   
        </tfoot>
    </table>

</body>

</html>