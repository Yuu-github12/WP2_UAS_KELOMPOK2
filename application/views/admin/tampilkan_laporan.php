<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Laporan Transaksi</h1>
        </div>
    </section>

    <form method="POST" action="<?php echo base_url('admin/laporan') ?>">
        <div class="form-group">
            <label>Dari Tanggal</label>
            <input type="date" name="dari" class="form-control">
            <?php echo form_error('dari','<span class="text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>Sampai Tanggal</label>
            <input type="date" name="sampai" class="form-control">
            <?php echo form_error('sampai','<span class="text-small text-danger">','</span>') ?>
        </div>

        <button type="submit" class="btn btn-sm btn-primary">
            <i class="fas fa-eye"></i>
             Tampilkan Data
        </button>
    </form><hr>

    <div class="btn-group">
        <a class="btn btn-sm btn-success" target="_blank" href="<?php echo base_url().
            'admin/laporan/print_laporan/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>">
            <i class="fas fa-print"></i>Print
        </a>
    </div>

    <div class="table-responsive mt-3">
        <table class="table table-hover table-striped table-borderd">
            <thead>
                <tr>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Merk Mobil</th>
                <th>Tanggal Rental</th>
                <th>Tanggal Kembali</th>
                <th>Harga Sewa </th>
                <th>Harga Denda </th>
                <th>Tanggal dikembalikan</th>
                <th>Status Pengembalian</th>
                <th>Status Rental</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no=1;
                foreach($laporan as $tr) : ?> 
                <tr>
                    <td><?php echo $no++ ?></td>

                    <td><?php echo $tr->nama ?></td>

                    <td><?php echo $tr->merk ?></td>

                    <td><?php echo date('m/d/Y', strtotime($tr->tanggal_rental)); ?></td>

                    <td><?php echo date('m/d/Y', strtotime($tr->tanggal_kembali)); ?></td>

                    <td>Rp. <?php echo number_format($tr->harga,0,',','.'); ?> /Hari</td>

                    <td>Rp. <?php echo number_format($tr->denda,0,',','.'); ?> /Hari</td>
                    
                    <td>
                        <?php if ($tr->tanggal_pengembalian == "0000-00-00"){
                                    echo "-";
                              }else{
                                  echo date('m/d/Y', strtotime($tr->tanggal_pengembalian));
                              }
                        ?>
                    </td>
                    
                    <td><?php echo $tr->status_pengembalian ?></td>
                    
                    <td><?php echo $tr->status_rental ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>