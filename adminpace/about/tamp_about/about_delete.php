<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box box-warning">
      <div class="box-header">
          <h3 class="box-title"><b>About</b> | Description Delete</h3>
      </div>

        <div class="box-body">
          <div class="callout callout-success">

<?php


      // querry untuk melakukan Update
      $input  = mysqli_query($koneksi, "DELETE FROM tbl_descabout WHERE id_descabout='$_GET[id]'")
                              or die (mysqli_error($koneksi));

  if ($input){
    echo"Description about success deleted";
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
