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
                Data Rumah<strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
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
                <i class="fas fa-fw fa-plus"></i> Rumah Baru
            </button>
            <!-- MOdal button -->

        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Gambar</th>
                            <th>Deskripsi</th>
                            <th>Tipe Rumah</th>
                            <th>Luas Tanag</th>
                            <th>Luas Bangunan</th>
                            <th>Lantai</th>
                            <th>Listrik</th>
                            <th>Tahun</th>
                            <th>Harga</th>
                            <th>Pengembang</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Gambar</th>
                            <th>Deskripsi</th>
                            <th>Tipe Rumah</th>
                            <th>Luas Tanag</th>
                            <th>Luas Bangunan</th>
                            <th>Lantai</th>
                            <th>Listrik</th>
                            <th>Tahun</th>
                            <th>Harga</th>
                            <th>Pengembang</th>
                            <th>Action</th>

                        </tr>
                    </tfoot>

                    <tbody>

                        <?php foreach ($rumah  as $kar) : ?>
                            
                        <tr>
                            <td><?= $kar['id'];?></td>
                            <td><img src="<?php echo base_url('images/'.$kar['nama_file'].'');?>" height="50px" width="50px"></td>
                            <td><?= $kar['deskripsi']; ?></td>
                            <td><?= $kar['tipe_rumah']; ?> M2</td>
                            <td><?= $kar['luas_tanah']; ?> M2</td>
                            <td><?= $kar['luas_bangunan']; ?> M2</td>
                            <td><?= $kar['lantai']; ?></td>
                            <td><?= $kar['listrik']; ?> Watt</td>
                            <td><?= $kar['tahun']; ?></td>
                            <td><?= "Rp ".number_format($kar['harga'],2,',','.'); ?></td>
                            <td><?= $kar['pengembang']; ?></td>
                            <td>
                                <a href="<?= base_url() ?>rumah/ubah/<?= $kar['id']; ?>" class="badge badge-success "><i class="fas fa-fw fa-edit"></i>ubah</a>
                                <a href="<?= base_url() ?>rumah/hapus/<?= $kar['id']; ?>" class="badge badge-danger " onclick="return confirm('yakin?');"><i class="fas fa-fw fa-trash"></i>hapus</a>
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

                    <form action="<?= base_url('rumah'); ?>" method="post">
                        <div class="form-group">
                            <label for="nama_file">Gambar</label>
                           <input type="file" class="form-control" name="input_gambar" id="nama_file" required="">
                            <small class="form-text text-danger"><?= form_error('nama_file'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" required="">
                            <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                        </div>
                     
                        <div class="form-group">
                        <label for="tipe_rumah">Tipe Rumah</label>
                        <select class="form-control" id="tipe_rumah" name="tipe_rumah" required="">
                            <option value="#">Pilih Tipe</option>
                            <option value="36">30 M2</option>
                            <option value="40">40 M2</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="luas_tanah">Luas Tanah</label>
                            <input type="text" class="form-control" id="luas_tanah" name="luas_tanah" required="">
                            <small class="form-text text-danger"><?= form_error('luas_tanah'); ?></small>
                        </div>

                         <div class="form-group">
                            <label for="luas_bangunan">Luas Bangunan</label>
                            <input type="text" class="form-control" id="luas_bangunan" name="luas_bangunan" required="">
                            <small class="form-text text-danger"><?= form_error('luas_bangunan'); ?></small>
                        </div>

                         <div class="form-group">
                            <label for="lantai">Lantai</label>
                            <input type="text" class="form-control" id="lantai" name="lantai" required="">
                            <small class="form-text text-danger"><?= form_error('lantai'); ?></small>
                        </div>

                         <div class="form-group">
                            <label for="listrik">Listrik</label>
                            <input type="text" class="form-control" id="listrik" name="listrik" required="">
                            <small class="form-text text-danger"><?= form_error('listrik'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="date" class="form-control" id="tahun" name="tahun" required="">
                        </div>

                         <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" required="">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>

                         <div class="form-group">
                            <label for="pengembang">Pengembang</label>
                            <input type="text" class="form-control" id="pengembang" name="pengembang" required="">
                            <small class="form-text text-danger"><?= form_error('pengembang'); ?></small>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" name="tambah" class="btn btn-primary float-right" value="Tambah Data"></input>
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