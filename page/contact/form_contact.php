<form name="tambah" action="?tampil=form_contactadd" method="post" enctype="multipart/form-data">

    <div class="row">

        <div class="col-sm-6">
            <div class="form-group">
                <input name="name" type="text" placeholder="Name" class="form-control" required>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">628+</span>
                <input name="phone" type="text" placeholder="Phone" class="form-control" maxlength="10" onkeypress="return hanyaAngka(event)" required>
              </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <textarea name="comment" class="form-control" rows="6" placeholder="Message" required></textarea>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary">SEND MESSAGE</button>
            </div>
        </div>

    </div>

</form>

<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))

		    return false;
		  return true;
		}
	</script>
