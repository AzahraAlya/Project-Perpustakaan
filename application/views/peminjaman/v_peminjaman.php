<div class="row">
    <div class="col-md-12">
        <a href="<?= base_url('index.php/C_peminjaman/tambah_peminjaman');?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Peminjaman</a>
    </div>
</div>

<br>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Peminjaman</h3>
    </div>
        <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id Peminjaman</th>
                    <th>Peminjam</th>
                    <th>Buku</th>
                    <th>Tanggal pinjaman</th>
                    <th>Tanggal kembali</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($data as $row) {
                        $tgl_kembali = new DateTime($row->tgl_kembali);
                        $tgl_sekarang = new DateTime();
                        $selisih = $tgl_sekarang->diff($tgl_kembali)->format("%a");
                        ?>
                        <tr>
                            <td><?= $row->id_pm;?></td>
                            <td><?= $row->nama;?></td>
                            <td><?= $row->judul_buku;?></td>
                            <td><?= $row->tgl_pinjam;?></td>
                            <td><?= $row->tgl_kembali;?></td>
                            <td>
                                <?php 
                                if($tgl_kembali >= $tgl_sekarang OR $selisih == 0){
                                    echo "<span class='badge bg-warning'>Belom di Kembalikan </span>";
                                }else{
                                    echo "Telat <b style = 'color:red;'>".$selisih."</b> Hari <br> <span class='badge bg-danger'> Denda Perhari = 1.000";
                                }
                             
                             ?>
                             </td>
                             <td>
                                 <a href="" class="btn btn-primary btn-xs"> Kembalikan</a>
                             </td>
                        </tr>    
                
                <?php }
                ?>
                
            </tbody>
        </table>
    </div>
</div>