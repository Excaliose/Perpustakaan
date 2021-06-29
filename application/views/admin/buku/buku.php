<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Buku</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Data Buku</li>
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
            <h3 class="card-title">Daftar Buku</h3>
            <div class="card-tools">

            </div>
        </div>
        <div class="card-body">
            <a href="<?php echo site_url('buku/tambah') ?>" class='btn btn-success'><i class="fas fa-plus"></i> Tambah Buku</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover datatable">
                <thead>
                    <tr>
                        <th>id_buku</th>
                        <th>judul</th>
                        <th>cover</th>
                        <th>kategori</th>
                        <th>penerbit</th>
                        <th>pengarang</th>
                        <th>tahun_terbit</th>
                        <th>jumlah</th>
                        <th>opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($buku as $bk) : ?>
                        <tr>
                            <td><?php echo $bk['id_buku'] ?></td>
                            <td><?php echo $bk['judul'] ?></td>
                            <td><?php echo $bk['cover'] ?></td>
                            <td><?php echo $bk['kategori'] ?></td>
                            <td><?php echo $bk['penerbit'] ?></td>
                            <td><?php echo $bk['pengarang'] ?></td>
                            <td><?php echo $bk['tahun_terbit'] ?></td>
                            <td><?php echo $bk['jumlah'] ?></td>
                            <td>
                                <div class="input-group">
                                    <a href="#" class='btn btn-info btn-xs'><i class="fas fa-edit"></i> Edit</a>
                                    <a href="#" class='btn btn-danger btn-xs'><i class="fas fa-trash"></i> Hapus</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>id_buku</th>
                        <th>judul</th>
                        <th>cover</th>
                        <th>kategori</th>
                        <th>penerbit</th>
                        <th>pengarang</th>
                        <th>tahun_terbit</th>
                        <th>jumlah</th>
                        <th>opsi</th>
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