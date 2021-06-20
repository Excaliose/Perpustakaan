<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Anggota</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Data Anggota</li>
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
            <h3 class="card-title">Daftar Anggota</h3>
            <div class="card-tools">

            </div>
        </div>
        <div class="card-body">
            <a href="#" class='btn btn-success'><i class="fas fa-plus"></i> Pendaftaran Anggota</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover datatable">
                <thead>
                    <tr>
                        <th>Nomer Anggota</th>
                        <th>Nomer Induk</th>
                        <th>Status</th>
                        <th>Pinjam</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($anggota as $agt) : ?>
                        <tr>
                            <td><?php echo $agt['nomer_anggota'] ?></td>
                            <td><?php echo $agt['nomer_induk'] ?></td>
                            <td><?php echo $agt['status'] ?></td>
                            <td><?php echo $agt['pinjam'] ?></td>
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
                        <th>Nomer Anggota</th>
                        <th>Nomer Induk</th>
                        <th>Status</th>
                        <th>Pinjam</th>
                        <th>Opsi</th>
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