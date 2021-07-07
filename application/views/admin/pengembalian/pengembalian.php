<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Pengembalian</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Data pengembalian</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List Data</h3>
            <div class="card-tools">

            </div>
        </div>
        <div class="card-body">
            <a href="<?php echo site_url('pengembalian/tambah') ?>" class='btn btn-success'><i class="fas fa-plus"></i> Input Data Pengembalian</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover datatable">
                <thead>
                    <tr>
                        <th>ID Transaksi</th>
                        <th>ID Peminjaman</th>
                        <th>Nomer Anggota</th>
                        <th>Id Buku</th>
                        <th>Jumlah</th>
                        <th>Tanggal Pinjam</th>
                        <th>Batas Tanggal Pinjam</th>
                        <th>Tanggal Pengembalian</th>
                        <th>ID Pegawai</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pengembalian as $pngmbl) : ?>
                        <tr>
                            <td><?php echo $pngmbl['id_transaksi'] ?></td>
                            <td><?php echo $pngmbl['nomer_anggota'] ?></td>
                            <td><?php echo $pngmbl['id_buku']?></td>
                            <td><?php echo $pngmbl['tanggal_pinjam'] ?></td>
                            <td><?php echo $pngmbl['id_pegawai'] ?></td>
                            <td>
                                <div class="input-group">
                                    <a href="<?php echo site_url('peminjaman/edit/'.$pngmbl['id_transaksi']) ?>" class='btn btn-info btn-xs'><i class="fas fa-edit"></i> Edit</a>
                                    <a href="#" class='btn btn-danger btn-xs' data-toggle="modal" data-target="#notifhapus<?php echo $pnjm['id_transaksi'] ?>"><i class="fas fa-trash"></i> Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="notifhapus<?php echo $pnjm['id_transaksi'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content bg-danger">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Hapus Data Pengembalian</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Hapus Data  <?php echo $agt['nomer_anggota'] ?> ?</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
                                        <a href="<?php echo site_url('anggota/prosesHapus/'.$agt['nomer_anggota']) ?>" class="btn btn-outline-light">Ya, Hapus</a>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                        <th>ID Transaksi</th>
                        <th>ID Peminjaman</th>
                        <th>Nomer Anggota</th>
                        <th>Id Buku</th>
                        <th>Jumlah</th>
                        <th>Tanggal Pinjam</th>
                        <th>Batas Tanggal Pinjam</th>
                        <th>Tanggal Pengembalian</th>
                        <th>ID Pegawai</th>
                        <th>Status</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->