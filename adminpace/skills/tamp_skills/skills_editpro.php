<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box box-danger">
      <div class="box-header">
          <h3 class="box-title"><b>Skills</b> | Description Edit</h3>
      </div>

        <div class="box-body">
          <div class="callout callout-success">

<?php

    $des = addslashes($_POST['description']);

    // querry untuk melakukan simpan data
    $input  = mysqli_query($koneksi, "UPDATE tbl_descskills SET
              description         = '$des'
              WHERE id_descskills = $_POST[id]
              ") or die(mysqli_error($koneksi));

  if ($input){
    echo"Description skills success edited";
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
