<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- pesan error -->

    <?= form_error('nama_karyawan', '<div class="alert alert-danger" role="alert">
                    ', '
                  </div>'); ?>
    <?= form_error('dep_karyawan', '<div class="alert alert-danger" role="alert">
                    ', '
                  </div>'); ?>
    <?= form_error('kota', '<div class="alert alert-danger" role="alert">
                    ', '
                  </div>'); ?>

    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Fasilitas <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        </div>
    </div>
    <?php endif; ?>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- MOdal button -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                <i class="fas fa-fw fa-plus"></i> Fasilitas
            </button>
            <!-- MOdal button -->

        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tipe Rumah</th>
                            <th>Fasilitas</th>
                           <th>Action</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                              <th>ID</th>
                            <th>Tipe Rumah</th>
                            <th>Fasilitas</th>             
                             <th>Action</th>

                        </tr>
                    </tfoot>

                    <tbody>

                        <?php foreach ($fasilitas  as $kar) : ?>
                            
                        <tr>
                            <td><?= $kar['id_fas'];?></td>
                            <td><?= $kar['tipe_rumah']; ?> M2</td>
                            <td><?= $kar['fasilitas']; ?></td>
                            <td>
                                <a href="<?= base_url() ?>fasilitas/ubah/<?= $kar['id_fas']; ?>" class="badge badge-success "><i class="fas fa-fw fa-edit"></i>ubah</a>
                                <a href="<?= base_url() ?>fasilitas/hapus/<?= $kar['id_fas']; ?>" class="badge badge-danger " onclick="return confirm('yakin?');"><i class="fas fa-fw fa-trash"></i>hapus</a>
                            </td>

                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulModal">Tambah Data Rumah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="<?= base_url('fasilitas'); ?>" method="post">
                        
                     
                        <div class="form-group">
                        <label for="tipe_rumah">Tipe Rumah</label>
                        <select class="form-control" id="tipe_rumah" name="tipe_rumah" required="">
                            <option value="#">Pilih Tipe</option>
                            <option value="36">30 M2</option>
                            <option value="40">40 M2</option>
                        </select>
                        </div>

                        <div class="form-group">
                            <label for="nama_file">Fasilitas</label>
                            <input type="text" class="form-control" id="fasilitas" name="fasilitas" required="">
                            <small class="form-text text-danger"><?= form_error('fasilitas'); ?></small>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Date picker --> 