<div class="container">
    <div class="card mx-auto" style="margin-top: 180px; width: 80%">
        <div class="card-header text-center">
            <h4>Data Transaksi Anda</h4>
        </div>
        <span class="mt-2 p-2"><?php echo $this->session->flashdata('pesan')?></span>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped mx-auto text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Customer</th>
                            <th scope="col">Merk Mobil</th>
                            <th scope="col">No Plat Mobil</th>
                            <th scope="col">Tanggal Rental</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th scope="col">Harga Sewa / Hari</th>
                            <th scope="col">Action</th>
                            <th scope="col">Batal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1;
                        foreach($transaksi as $tr) : ?> 
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $tr->nama ?></td>
                            <td><?php echo $tr->merk ?></td>
                            <td><?php echo $tr->no_plat ?></td>
                            <td><?php echo date('m/d/Y', strtotime($tr->tanggal_rental)); ?></td>
                            <td><?php echo date('m/d/Y', strtotime($tr->tanggal_kembali)); ?></td>
                            <td>Rp. <?php echo number_format($tr->harga,0,',','.'); ?></td>
                            <td>
                                <?php if($tr->status_rental == "Selesai") {?>
                                    <button class="btn btn-sm btn-danger disabled">Rental Selesai</button>
                                <?php }else{ ?>
                                    <a href="<?php echo base_url('customer/transaksi/pembayaran/'.$tr->id_rental) ?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
                                <?php } ?>
                            </td>
                            <td>
                                <?php
                                    if($tr->status_rental == 'Belum Selesai') { ?>
                                        <a onclick="return confirm('Anda Ingin Membatalkan Pesanan?')" class="btn btn-sm btn-danger" href="<?php echo base_url('customer/transaksi/batal_transaksi/'.$tr->id_rental) ?>">
                                        Batal</a>
                                <?php }else { ?>
                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    Batal
                                    </button>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php endforeach; ?> 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
