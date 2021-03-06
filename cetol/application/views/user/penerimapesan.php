<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>




    <div class="row">
        <div class="col-lg-6">
            <a href="<?php echo site_url('penerimapesan/input_pesanan') ?>">
                <button class="btn btn-primary btn-sm mb-3">INPUT PESANAN</button></a>
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID PESANAN</th>
                            <th>NAMA PEMESAN</th>
                            <th>JENIS PESANAN</th>
                            <th>NAMA FILE</th>
                            <th>JENIS KERTAS</th>
                            <th>PANJANG</th>
                            <th>LEBAR</th>
                            <th>JUMLAH</th>
                            <th>HARGA</th>
                            <th>TANGGAL PESAN</th>
                            <th>TOTAL HARGA</th>
                            <th>PEMBAYARAN</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($transaksi as $tr) : ?>
                            <tr>
                                <td width="80px"><?= $i; ?></td>
                                <td><?php echo $tr->id_pesan ?></td>
                                <td><?php echo $tr->nama_pemesan ?></td>
                                <td><?php echo $tr->jenis_pesanan ?></td>
                                <td><?php echo $tr->nama_file ?></td>
                                <td><?php echo $tr->jenis_kertas ?></td>
                                <td><?php echo $tr->panjang ?></td>
                                <td><?php echo $tr->lebar ?></td>
                                <td><?php echo $tr->jumlah ?></td>
                                <td><?php echo $tr->harga ?></td>
                                <td><?php echo $tr->tgl_pesan ?></td>
                                <td><?php echo $tr->total_harga ?></td>
                                <td><?php echo $tr->pembayaran ?></td>
                                <td>
                                    <a href="<?php echo site_url('penerimapesan/confirm_pesan/' . $tr->id_pesan) ?>">
                                        <button class="btn btn-primary btn-sm" onclick="javasciprt: return confirm('Are You Sure ?')">Design</button></a>
                                    <br><br>

                                    <a href="<?php echo site_url('penerimapesan/confirm_langsung_desainer/' . $tr->id_pesan) ?>">
                                        <button class="btn btn-danger btn-sm" onclick="javasciprt: return confirm('Are You Sure ?')">Cetak</button></a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var t = $("#dataTable").dataTable({
            "scrollX": true
        });
    });
</script>