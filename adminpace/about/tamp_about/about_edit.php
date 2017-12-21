<?php

  $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_descabout WHERE id_descabout='$_GET[id]'")
            or die (mysqli_error($koneksi));
  $data   = mysqli_fetch_array($tampil);
 ?>

<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box box-warning">
      <div class="box-header with-border">
          <h3 class="box-title"><b>About</b> | Description Edit</h3>
      </div>

        <div class="box-body">

          <form id="isi_data" name="tambah" action="?tampil=about_editpro" method="post" enctype="multipart/form-data"
          class="form-horizontal">

          <input type="hidden" name="id" value="<?= $data['id_descabout']; ?>">

          <div class="col-md-12">
            <div class="form-group">
              <label class="label-control col-md-3">Description</label>
              <div class="col-md-12">
                <textarea name="description" rows="5" cols="100" class="form-control" placeholder="description is here ..." required><?php echo $data['description']; ?></textarea>
              </div>
            </div>
          </div>
          </div>

            <div class="box-footer">
              <div class="form-group">
                <div class="col-md-12">
                  <button type="Submit" name="tambah" class="btn btn-primary">
                    <span class="fa fa-edit"></span> Edit</button>
                  <a href="?tampil=about" class="btn btn-danger"><span class="fa fa-remove"></span> Close</a>
                </div>
              </div>
            </div>

          </form>


    </div>
  </div>


</div>
</section>
