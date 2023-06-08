<style>
    .rental-form-title {
        background-color: #A2F647BB;
        font-size: 30px;
    }
</style>

<div class="container">
    <div class="card" style="margin-top: 50px; margin-bottom: 50px">
        <div class="card-header rental-form-title text-center">
            Form Rental Mobil
        </div>
        <div class="card-body">
            <?php foreach ($detail as $dt) : ?>
            <form id="rentalForm" action="<?php echo base_url('customer/rental/tambah_rental_aksi') ?>" method="POST">
                <div class="form-group">
                    <label for="">Harga Sewa Kendaraan</label>
                    <input type="hidden" name="id_mobil" value="<?php echo $dt->id_mobil ?>">
                    <input type="text" name="harga" class="form-control" value="Rp. <?php echo number_format ($dt->harga,0,',','.') ?> /Hari" readonly>
                </div>
                <div class="form-group">
                    <label for="">Harga Denda Kendaraan</label>
                    <input type="text" name="denda" class="form-control" value="Rp. <?php echo number_format ($dt->denda,0,',','.') ?> /Hari" readonly>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Rental</label>
                    <input type="date" name="tanggal_rental" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Kembali</label>
                    <input type="date" name="tanggal_kembali" class="form-control">
                </div>
                <div class="text-center">
                <button type="submit" class="btn btn-warning">Rental</button>
                </div>
            </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<script>
    document.getElementById('rentalForm').addEventListener('submit', function(event) {
        var tanggalRental = document.getElementsByName('tanggal_rental')[0].value;
        var tanggalKembali = document.getElementsByName('tanggal_kembali')[0].value;

        if (tanggalRental === '' || tanggalKembali === '') {
            event.preventDefault(); // Mencegah form dikirim jika ada field kosong
            alert('Harap isi semua field');
        }
    });
</script>
