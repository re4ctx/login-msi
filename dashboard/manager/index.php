<?php
include '../template/header.php';
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard Tokos</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <!-- <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button> -->
    </div>
</div>
<h2>Top 5 Penjualan</h2>
<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
<div class="rank">
    <div class="row">
        <div class="col-lg-4">
            <h2>Top 5 Margins</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Toko</th>
                        <th>Margin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../../koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT produk, toko, (harga_jual - harga_beli) as margin from produk ORDER BY margin DESC LIMIT 5");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $d['produk']; ?></td>
                            <td><?php echo $d['toko']; ?></td>
                            <td><?php echo $d['margin']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <h2>Top 5 Stok</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Toko</th>
                        <th>Margin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../../koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT produk, toko, jumlah from produk ORDER BY jumlah DESC LIMIT 5");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $d['produk']; ?></td>
                            <td><?php echo $d['toko']; ?></td>
                            <td><?php echo $d['jumlah']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include '../template/footer.php';
?>

<?php
$koneksi     = mysqli_connect("localhost", "root", "", "login-msi");
$bulan       = mysqli_query($koneksi, "SELECT produk FROM produk ORDER BY terjual desc LIMIT 5");
$penghasilan = mysqli_query($koneksi, "SELECT terjual FROM `produk` ORDER BY terjual desc LIMIT 5");
?>
<script>
    /* globals Chart:false, feather:false */

    (() => {
        'use strict'

        feather.replace({
            'aria-hidden': 'true'
        })

        // Graphs
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [<?php while ($b = mysqli_fetch_array($bulan)) {
                            echo '"' . $b['produk'] . '",';
                        } ?>],
                datasets: [{
                    label: '# of Votes',
                    data: [<?php while ($p = mysqli_fetch_array($penghasilan)) {
                            echo '"' . $p['terjual'] . '",';
                        } ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    })()
</script>