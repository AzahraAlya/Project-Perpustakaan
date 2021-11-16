<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Form Edit Anggota</h3>
    </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form name="form tambah" method="post" action="<?php echo base_url('index.php/c_anggota/update');?>" class="form-horizontal">
            <div class="card-body">
              <br>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Id Anggota</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_anggota" value="<?php echo $data->id_anggota;?>" class="form-control" readonly >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" value="<?php echo $data->nama;?>" class="form-control" placeholder="Nama" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                       <select name="jk" class="form-control" required>
                            <?php 
                            if($data->jk == "Laki-Laki"){ ?>
                                <option value="Laki-Laki" selected>Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            <?php }else{ ?>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan" selected>Perempuan</option>
                            <?php }
                           
                            ?>
                       </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat"  class="form-control" cols="30" rows="5" required><?= $data->alamat; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                        <input type="text" name="no_hp" value="<?php echo $data->no_hp;?>" class="form-control" placeholder="No HP" required>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="<?= base_url('index.php/c_anggota') ?>" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>
</div>