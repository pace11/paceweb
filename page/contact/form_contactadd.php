<div class="row">
  <div class="alert alert-success">

<?php

    $date = date('Y-m-d H:i:s');
    $des = addslashes($_POST['comment']);
    $phone = "628"."$_POST[phone]";

    // querry untuk melakukan simpan data
    $input  = mysqli_query($koneksi, "INSERT INTO tbl_comment SET
              name          = '$_POST[name]',
              phone         = '$phone',
              comment       = '$des',
              date_in       = '$date'
              ")  or die (mysqli_error($koneksi));

  if ($input){
    echo"<b>Thanks for responses</b>";
    echo"<meta http-equiv='refresh' content='2;
    url=?tampil=form_contact'>";
  }
 ?>
    </div>
</div>
