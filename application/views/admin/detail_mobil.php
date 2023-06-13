<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Mobil</h1>
        </div>
    </section>

    <?php foreach ($detail as $dt) : ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <?php
                            $image_url = base_url().'assets/upload/'.$dt->gambar;
                            list($width, $height) = getimagesize($image_url);
                            $aspect_ratio = $width / $height;
                            $new_width = 400;
                            $new_height = 300;
                            if ($aspect_ratio > ($new_width / $new_height)) {
                                $new_width = $new_height * $aspect_ratio;
                            } else {
                                $new_height = $new_width / $aspect_ratio;
                            }
                        ?>
                        <img src="<?php echo $image_url ?>" alt="" width="<?php echo $new_width ?>" height="<?php echo $new_height ?>">
                    </div>
                    <div class="col-md-7">
                        <table class="table">
                            <tr>
                                <td>Type Mobil</td>
                                <td>
                                    <?php 
                                        if ($dt->kode_type == "SDN")
                                        {
                                            echo "Sedan";
                                        }elseif ($dt->kode_type == "HTB")
                                        {
                                            echo "Hatchback";
                                        }elseif ($dt->kode_type == "SUV")
                                        {
                                            echo "Sport Utility Vehicle";
                                        }else
                                        {
                                            echo "<span class='text-danger'>Type Mobil Belum Terdaftar</span>";
                                        }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>Merk</td>
                                <td><?php echo $dt->merk ?></td>
                            </tr>

                            <tr>
                                <td>No. Plat</td>
                                <td><?php echo $dt->no_plat ?></td>
                            </tr>

                            <tr>
                                <td>Warna</td>
                                <td><?php echo $dt->warna ?></td>
                            </tr>

                            <tr>
                                    <td>Harga Sewa Kendaraan</td>
                                    <td>Rp. <?php echo number_format($dt->harga,0,',','.') ?>/Hari</td>
                                </tr>

                                <tr>
                                    <td>Harga Denda Kendaraan</td>
                                    <td>Rp. <?php echo number_format($dt->denda,0,',','.') ?>/Hari</td>
                                </tr>

                            <tr>
                                <td>Tahun</td>
                                <td><?php echo $dt->tahun ?></td>
                            </tr>

                            <tr>
                                <td>Status</td>
                                <td>
                                    <?php
                                        if ($dt->status == "0")
                                        {
                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                        }else{
                                            echo "<span class='badge badge-primary'>Tersedia</span>";
                                        }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                    <td>Fasilitas AC</td>
                                    <td>
                                        <?php
                                        if($dt->ac == "0"){
                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                        }else{
                                            echo "<span class='badge badge-primary'>Tersedia</span>";
                                        }
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Fasilitas Supir</td>
                                    <td>
                                        <?php
                                        if($dt->supir == "0"){
                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                        }else{
                                            echo "<span class='badge badge-primary'>Tersedia</span>";
                                        }
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Fasilitas MP3 Player</td>
                                    <td>
                                        <?php
                                        if($dt->mp3_player == "0"){
                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                        }else{
                                            echo "<span class='badge badge-primary'>Tersedia</span>";
                                        }
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Fasilitas Central Lock</td>
                                    <td>
                                        <?php
                                        if($dt->central_lock == "0"){
                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                        }else{
                                            echo "<span class='badge badge-primary'>Tersedia</span>";
                                        }
                                        ?>
                                    </td>
                                </tr>
                        </table>

                        <a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('admin/data_mobil/') ?>">Kembali</a>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_mobil/update_mobil/'.$dt->id_mobil) ?>">Update</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>