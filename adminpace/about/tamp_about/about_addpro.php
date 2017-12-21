<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box box-warning">
      <div class="box-header">
          <h3 class="box-title"><b>Kegiatan</b> | Tambah</h3>
      </div>

        <div class="box-body">
          <div class="callout callout-success">

<?php

    $des = addslashes($_POST['description']);

    // querry untuk melakukan simpan data
    $input  = mysqli_query($koneksi, "INSERT INTO tbl_descabout SET
              description       = '$des'
              ")  or die (mysqli_error($koneksi));

  if ($input){
    echo"Description about success added";
    echo"<meta http-equiv='refresh' content='1;
    url=?tampil=about'>";
  }
 ?>
 <span class="glyphicon glyphicon-ok"></span>
    </div>
    </div>
  </div>
</div>
</div>
</section>
