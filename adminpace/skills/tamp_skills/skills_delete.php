<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box box-danger">
      <div class="box-header">
          <h3 class="box-title"><b>Skills</b> | Description Delete</h3>
      </div>

        <div class="box-body">
          <div class="callout callout-success">

<?php


      // querry untuk melakukan Update
      $input  = mysqli_query($koneksi, "DELETE FROM tbl_descskills WHERE id_descskills='$_GET[id]'")
                              or die (mysqli_error($koneksi));

  if ($input){
    echo"Description skills success deleted";
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
