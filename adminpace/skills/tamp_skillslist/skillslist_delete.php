<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box box-primary">
      <div class="box-header">
          <h3 class="box-title"><b>Kegiatan</b> | Tambah</h3>
      </div>

        <div class="box-body">
          <div class="callout callout-success">

<?php


      // querry untuk melakukan Update
      $input  = mysqli_query($koneksi, "DELETE FROM tbl_skills WHERE id_skills='$_GET[id]'")
                              or die (mysqli_error($koneksi));

  if ($input){
    echo"List skills success deleted";
    echo"<meta http-equiv='refresh' content='1;
    url=?tampil=skills'>";
  }
 ?>
 <span class="glyphicon glyphicon-ok"></span>
    </div>
    </div>
  </div>
</div>
</div>
</section>
