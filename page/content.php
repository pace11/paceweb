<?php

  if (isset($_GET['tampil'])) $tampil=$_GET['tampil'];
  else $tampil="form_contact";

  if ($tampil == "form_contact") include("contact/form_contact.php");
  elseif ($tampil == "form_contactadd") include("contact/form_contactadd.php");


else echo"Konten tidak ada";

?>
