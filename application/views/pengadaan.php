<div class="container my-3">
    <div class="row">
        <div class="col-md-12">
            <!-- Mengecek apakah sudah masuk data dari controller dan model -->
            <!-- <?php print_r($pengadaanbuku); ?> -->
            <div class="card">
                <div class="card-header">
                    <h5>Kebutuhan Buku</h5>
                </div>
                <div class="card-body">
                </div>
                <!-- Membuat tabel buku -->
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Nama Buku</th>
                            <th>Penerbit</th>
                        </tr>
                        <!-- Menampilkan array $listbuku -->
                        <?php
                        foreach ($pengadaanbuku as $b) { ?>
                            <tr>
                                <td><?php echo $b->nama_buku; ?></td>
                                <td><?php echo $b->penerbit; ?></td>
                            <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>