<section class="content">

<div class="row">

  <div class="col-xs-12">
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title"><b>Comment</b> | List</h3>
      </div>

      <div class="box-body">
        <div class="table-responsive">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Comment</th>
            <th>Date</th>
          </tr>
          </thead>
          <tbody>

            <?php

                $no = 1;
                $a=0;
                $nil = array("danger","success","warning","info");
                $jumlah = count($nil);
                $sql = mysqli_query($koneksi, "SELECT * FROM tbl_comment ORDER BY date_in DESC")
                or die(mysqli_error($koneksi));
                while($data = mysqli_fetch_array($sql)){

            ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td>
                  <i class="fa fa-user"></i>
                  <?php echo $data['name']; ?>
                </td>
                <td>
                  <i class="fa fa-phone-square"></i>
                  <?php echo $data['phone']; ?></td>
                <td>
                  <?php
                  if ($a < $jumlah){
                    echo "<div class='callout callout-$nil[$a]'>";
                    echo $data['comment'];
                    echo "</div>";
                  }else {
                    $a=0;
                    echo "<div class='callout callout-$nil[$a]'>";
                    echo $data['comment'];
                    echo "</div>";
                  }
                   ?>
                </td>
                <td><?php echo $data['date_in']; ?></td>
              </tr>

              <?php
                $no++;
                $a++;
              }
              ?>
          </tbody>
        </table>
      </div>

    </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>

</div>
</section>
