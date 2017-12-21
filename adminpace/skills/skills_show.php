<section class="content">
<div class="row">

<div class="col-xs-12">
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title"><b>Skills</b> | Description</h3>
      <div class="pull-right">
        <a href="?tampil=skills_add" class="btn btn-danger">
          <i class="fa fa-plus-circle"></i> Add Data</a>
      </div>
    </div>

    <div class="box-body">
      <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>

          <?php

              $no = 1;
              $sql = mysqli_query($koneksi, "SELECT * FROM tbl_descskills")
              or die(mysqli_error($koneksi));
              while($data = mysqli_fetch_array($sql)){
          ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $data['description']; ?></td>
              <td>
                <a href="?tampil=skills_edit&id=<?php echo $data['id_descskills']; ?>" title="edit" class="btn btn-primary btn-xs">
                        <span class="fa fa-refresh" aria-hidden="true"></span></a>
                <a href="javascript:;" data-id="<?php echo $data['id_descskills'] ?>" title="delete" data-toggle="modal" data-target="#skills_delete"
                        class="btn btn-danger btn-xs">
                        <span class="fa fa-trash" aria-hidden="true"></span></a>
              </td>
            </tr>

            <?php
              $no++;
            }
            ?>

        </tbody>
      </table>
    </div>

    <!-- modal Hapus-->
    <div id="skills_delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> <span class="glyphicon glyphicon-exclamation-sign"></span> Confirm Delete</h4>
            </div>
            <div class="modal-body">
                Are you sure ?
            </div>
            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-success" id="skills-delete">Yes</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
            </div>

            </div>
        </div>
    </div>
    <script src="modals/confirm.js"></script>

  </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
</div>

<div class="row">

  <div class="col-xs-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title"><b>Skills</b> | List</h3>
        <div class="pull-right">
          <a href="?tampil=skillslist_add" class="btn btn-primary">
            <i class="fa fa-plus-circle"></i> Add Data</a>
        </div>
      </div>

      <div class="box-body">
        <div class="table-responsive">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Description</th>
            <th>Percent</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>

            <?php

                $no = 1;
                $sql = mysqli_query($koneksi, "SELECT * FROM tbl_skills")
                or die(mysqli_error($koneksi));
                while($data = mysqli_fetch_array($sql)){

            ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $data['description']; ?></td>
                <td><?php echo $data['percent']."%"; ?></td>
                <td>
                  <a href="?tampil=skillslist_edit&id=<?php echo $data['id_skills']; ?>" title="edit" class="btn btn-primary btn-xs">
                          <span class="fa fa-refresh" aria-hidden="true"></span></a>
                  <a href="javascript:;" data-id="<?php echo $data['id_skills'] ?>" title="delete" data-toggle="modal" data-target="#skillslist_delete"
                          class="btn btn-danger btn-xs">
                          <span class="fa fa-trash" aria-hidden="true"></span></a>
                </td>
              </tr>

              <?php
                $no++;
              }
              ?>
          </tbody>
        </table>
      </div>

      <!-- modal Hapus-->
      <div id="skillslist_delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">

              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title"> <span class="glyphicon glyphicon-exclamation-sign"></span> Confirm Delete</h4>
              </div>
              <div class="modal-body">
                  Are you sure ?
              </div>
              <div class="modal-footer">
                  <a href="javascript:;" class="btn btn-success" id="skillslist-delete">Yes</a>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
              </div>

              </div>
          </div>
      </div>
      <script src="modals/konfirmasi.js"></script>

    </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>

</div>
</section>
