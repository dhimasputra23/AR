<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Fasilitas
                </div>
                <div class="card-body">
                    <form action="<?= base_url('fasilitas/ubah'); ?>" method="post">
                        <input type="hidden" name="id_fas" value="<?= $fasilitas['id_fas']; ?>">

                        <div class="form-group">
                            <label for="nama_file">Fasilitas</label>
                            <input type="text" class="form-control" value="<?= $fasilitas['fasilitas']; ?>" id="fasilitas" name="fasilitas"  required="">
                            <small class="form-text text-danger"><?= form_error('fasilitas'); ?></small>
                        </div>

                     
                        <div class="form-group">
                        <label for="tipe_rumah">Tipe Rumah</label>
                        <select class="form-control" id="tipe_rumah" value="<?= $fasilitas['tipe_rumah']; ?>" name="tipe_rumah" required="">
                            <option value="#">Pilih Tipe</option>
                            <option value="36">30 M2</option>
                            <option value="40">40 M2</option>
                        </select>
                        </div>
                        
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>

                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
</div> 