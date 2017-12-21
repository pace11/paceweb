<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
          <h3 class="box-title"><b>Skills</b> | Edit</h3>
      </div>

        <div class="box-body">
          <div class="callout callout-success">

<?php


    // querry untuk melakukan simpan data
    $input  = mysqli_query($koneksi, "UPDATE tbl_skills SET
              description       = '$_POST[description]',
              percent           = '$_POST[percent]'
              WHERE id_skills   = $_POST[id]
              ")  or die (mysqli_error($koneksi));

  if ($input){
    echo"List skills success edited";
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
