<style>
    .invoice-table {
        width: 60%;
        margin: 0 auto;
    }

    .invoice-table h2 {
        text-align: center;
    }

    .invoice-table table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    .invoice-table table td {
        padding: 5px;
        border: 1px solid #ddd;
    }

    .invoice-table table td:first-child {
        font-weight: bold;
        width: 30%;
    }

    .invoice-table .btn-back {
        display: block;
        width: 100px;
        margin: 20px auto;
        text-align: center;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    .invoice-table .btn-back:hover {
        background-color: #0056b3;
    }
</style>

<div class="invoice-table">
    <h2>Invoice Pembayaran Rental Mobil</h2>
    <?php foreach ($transaksi as $tr) : ?>
    <table>
        <tr>
            <td>Nama Customer</td>
             
            <td>: <?php echo $tr->nama ?></td>
        </tr>
        <tr>
            <td>Merk Kendaraan</td>
             
            <td>: <?php echo $tr->merk ?></td>
        </tr>
        <tr>
            <td>No Plat Kendaraan</td>
             
            <td>: <?php echo $tr->no_plat ?></td>
        </tr>
        <tr>
            <td>Tanggal Rental</td>
             
            <td>: <?php echo date('m/d/Y', strtotime($tr->tanggal_rental)); ?></td>
        </tr>
        <tr>
            <td>Tanggal Kembali</td>
             
            <td>: <?php echo date('m/d/Y', strtotime($tr->tanggal_kembali)); ?></td>
        </tr>
        <tr>
            <td>Harga Sewa</td>
             
            <td>: Rp. <?php echo number_format($tr->harga,0,',','.') ?> /Hari</td>
        </tr>
        <tr>
            <?php 
                $x= strtotime($tr->tanggal_kembali);
                $y= strtotime($tr->tanggal_rental);
                $jml = abs(($x - $y)/(60*60*24));
            ?>
            <td>Jumlah Hari Sewa</td>
             
            <td>: <?php echo $jml ?> Hari</td>
        </tr>
        <tr>
            <td>Status Pembayaran</td>
             
            <td>: 
                <?php if($tr->status_pembayaran == '0' ){
                    echo "Belum Lunas";
                }else{
                    echo"Lunas";
                } ?>
            </td>
        </tr>
        <tr style="font-weight: bold; color:red">
            <td>Total Pembayaran</td>
             
            <td>: Rp. <?php echo number_format($tr->harga * $jml,0,',','.') ?></td>
        </tr>
        <tr>
            <td>Rekening Pembayaran</td>
             
            <td>: 
                <ul>
                    <li>Bank CIMB NIAGA 9128491758215</li>
                    <li>Bank BCA 0581285812</li>
                    <li>Bank Mandiri 08501280582</li>
                </ul>
            </td>
        </tr>
    </table>

    <a href="<?php echo base_url('customer/transaksi')?>" class="btn-back">Back</a>
    <?php endforeach; ?>
</div>

<script type="text/javascript">
    window.print();
</script>
