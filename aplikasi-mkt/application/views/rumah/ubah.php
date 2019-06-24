<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Karyawan
                </div>
                <div class="card-body">
                    <form action="<?= base_url('rumah/ubah'); ?>" method="post">
                        <input type="hidden" name="id" value="<?= $rumah['id']; ?>">
                        <div class="form-group">
                            <label for="nama_file">Gambar</label>
                            <input type="text" class="form-control" value="<?= $rumah['nama_file']; ?>" id="nama_file" name="nama_file"  required="">
                            <small class="form-text text-danger"><?= form_error('nama_file'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" value="<?= $rumah['deskripsi']; ?>" id="deskripsi" name="deskripsi" required="">
                            <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                        </div>
                     
                        <div class="form-group">
                        <label for="tipe_rumah">Tipe Rumah</label>
                        <select class="form-control" id="tipe_rumah" value="<?= $rumah['tipe_rumah']; ?>" name="tipe_rumah" required="">
                            <option value="#">Pilih Tipe</option>
                            <option value="36">30 M2</option>
                            <option value="40">40 M2</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="luas_tanah">Luas Tanah</label>
                            <input type="text" class="form-control" value="<?= $rumah['luas_tanah']; ?>" id="luas_tanah" name="luas_tanah" required="">
                            <small class="form-text text-danger"><?= form_error('luas_tanah'); ?></small>
                        </div>

                         <div class="form-group">
                            <label for="luas_bangunan">Luas Bangunan</label>
                            <input type="text" class="form-control" value="<?= $rumah['luas_bangunan']; ?>" id="luas_bangunan" name="luas_bangunan" required="">
                            <small class="form-text text-danger"><?= form_error('luas_bangunan'); ?></small>
                        </div>

                         <div class="form-group">
                            <label for="lantai">Lantai</label>
                            <input type="text" class="form-control" value="<?= $rumah['lantai']; ?>" id="lantai" name="lantai" required="">
                            <small class="form-text text-danger"><?= form_error('lantai'); ?></small>
                        </div>

                         <div class="form-group">
                            <label for="listrik">Listrik</label>
                            <input type="text" class="form-control" value="<?= $rumah['listrik']; ?>" id="listrik" name="listrik" required="">
                            <small class="form-text text-danger"><?= form_error('listrik'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="date" class="form-control" value="<?= $rumah['tahun']; ?>" id="tahun" name="tahun" required="">
                        </div>

                         <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" value="<?= $rumah['harga']; ?>" id="harga" name="harga" required="">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>

                         <div class="form-group">
                            <label for="pengembang">Pengembang</label>
                            <input type="text" class="form-control" value="<?= $rumah['pengembang']; ?>" id="pengembang" name="pengembang" required="">
                            <small class="form-text text-danger"><?= form_error('pengembang'); ?></small>
                        </div>


                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>

                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
</div> 