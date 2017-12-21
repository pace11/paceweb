<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box box-success">
      <div class="box-header">
          <h3 class="box-title"><b>Kegiatan</b> | Edit</h3>
      </div>

        <div class="box-body">
          <div class="callout callout-success">

<?php


    // querry untuk melakukan simpan data
    $input  = mysqli_query($koneksi, "UPDATE tbl_about SET
              title             = '$_POST[title]',
              description       = '$_POST[description]'
              WHERE id_about    = $_POST[id]
              ")  or die (mysqli_error($koneksi));

  if ($input){
    echo"List about success edited";
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
