<?php

  $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_skills WHERE id_skills='$_GET[id]'")
            or die (mysqli_error($koneksi));
  $data   = mysqli_fetch_array($tampil);
 ?>

<section class="content">
<div class="row">

  <div class="col-xs-12">
    <div class="box box-primary">
      <div class="box-header with-border">
          <h3 class="box-title"><b>Skills</b> | List Edit</h3>
      </div>

        <div class="box-body">

          <form id="isi_data" name="tambah" action="?tampil=skillslist_editpro" method="post" enctype="multipart/form-data"
          class="form-horizontal">

          <input type="hidden" name="id" value="<?= $data['id_skills']; ?>">

          <div class="col-md-12">
            <div class="form-group">
              <label class="label-control col-md-12">Description</label>
              <div class="col-md-4">
                <input type="text" name="description" value="<?php echo $data['description']; ?>" class="form-control" placeholder="description is here ..." required>
              </div>
            </div>
          </div>


          <div class="col-md-12">
            <div class="form-group">
              <label class="label-control col-md-12">Percent</label>
              <div class="col-md-2">
                <div class="input-group">
                    <input type="text" class="form-control" name="percent" maxlength="2" value="<?php echo $data['percent']; ?>" placeholder="ex : 70 ..." required>
                    <span class="input-group-addon">%</span>
                  </div>
              </div>
            </div>
          </div>

          </div>

            <div class="box-footer">
              <div class="form-group">
                <div class="col-md-12">
                  <button type="Submit" name="tambah" class="btn btn-primary">
                    <span class="fa fa-edit"></span> Edit</button>
                  <a href="?tampil=skills" class="btn btn-danger"><span class="fa fa-remove"></span> Close</a>
                </div>
              </div>
            </div>


          </form>


    </div>
  </div>


</div>
</section>
