<div class="row">
    <div class="col-md-12">
        <a href="<?= base_url('index.php/c_anggota/tambah_anggota');?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Anggota</a>
    </div>
</div>

<br>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Anggota</h3>
    </div>
        <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id Anggota</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
               
                foreach($data as $row): ?>
                <tr>
                    <td><?php echo $row->id_anggota; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->jk; ?></td>
                    <td><?php echo $row->alamat; ?></td>
                    <td><?php echo $row->no_hp; ?></td>
                    <td><a href="<?php echo base_url('index.php/c_anggota/hapus/'.$row->id_anggota);?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                        <a href="<?php echo base_url('index.php/c_anggota/edit/'.$row->id_anggota);?>" class="btn btn-success btn-xs">Edit</a>
                    </td>
                </tr>
                <?php endforeach;?> 
            </tbody>
        </table>
    </div>
</div>