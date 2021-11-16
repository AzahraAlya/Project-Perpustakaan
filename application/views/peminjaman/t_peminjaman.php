<?php
    $tgl_pinjam = date('Y-m-d');
    $tujuan_hari = mktime(0,0,0,date("n"),date("j") + 7, date("Y"));
    $tgl_kembali = date('Y-m-d',$tujuan_hari);
?>

<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Form Tambah Peminjaman</h3>
    </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form name="form tambah" method="post" action="<?php echo base_url('index.php/c_peminjaman/simpan')?>" class="form-horizontal">
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Id Peminjaman</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_pm" value="<?= $id_peminjaman; ?>"class="form-control" readonly>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Peminjam</label>
                    <div class="col-sm-10">
                       <select name="id_anggota" class="form-control" required>
                           <option value="">-Pilih Peminjam-</option>
                           <?php
                           foreach($peminjam as $row){?>
                            <option value="<?= $row->id_anggota;?>"><?= $row->nama;?></option>   
                        <?php }
                        ?>
                       </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Buku</label>
                    <div class="col-sm-10">
                       <select name="id_buku" class="form-control" required>
                           <option value="">-Pilih Buku-</option>
                           <?php
                           foreach($buku as $row){?>
                            <option value="<?= $row->id_buku;?>"><?= $row->judul_buku;?></option>   
                        <?php }
                        ?>
                       </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Peminjamam</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_pinjam" value="<?= $tgl_pinjam;?>" class="form-control" readonly></input>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Pengembalian</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_kembali" value="<?= $tgl_kembali;?>" class="form-control" readonly></input>
                    </div>
                </div>
                
                <div class="box-footer">
                    <a href="<?= base_url('index.php/c_anggota') ?>" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </form>
</div>

<script>
    $('#id_buku').change(function(){
        var id = $(this).val();
        $.ajax({
            url : '<?= base_url("index.php/C_peminjaman/jumlah_buku")?>',
            data : {id:id},
            method : 'post',
            dataType : 'json',
            success:function(hasil){
                var jumlah = JSON.stringify(hasil.jumlah);
                var jumlah1 = jumlah.split('"').join('');
                if(jumlah1 <= 0) {
                    alert('Maaf, Stok untuk buku ini sedang kosong');
                    location.reload();
                }
            }
        });
    });
</script>