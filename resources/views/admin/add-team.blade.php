<!-- Modal -->
<div class="modal fade" id="modalTeam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

    <form method="POST" enctype="multipart/form-data" action="{{ url('/my-team/addTeam')}}">
    @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Galeri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Nama -->
        <div class="form-group row">
            <label for="add_nama" class="col-sm-5 col-form-label">Nama </label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="add_nama" name="add_nama" maxlength="35" required>
            </div>
        </div>
        <!-- Nama -->

        <!-- Jobdesk -->
        <div class="form-group row">
            <label for="add_jobdesk" class="col-sm-5 col-form-label">Jobdesk </label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="add_jobdesk" name="add_jobdesk" maxlength="35" required>
            </div>
        </div>
        <!-- Jobdesk -->

        <!-- Facebook -->
        <div class="form-group row">
            <label for="add_facebook" class="col-sm-5 col-form-label">Facebook </label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="add_facebook" name="add_facebook" maxlength="35">
            </div>
        </div>
        <!-- Facebook -->

        <!-- Instagram -->
        <div class="form-group row">
            <label for="add_instagram" class="col-sm-5 col-form-label">Instagram </label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="add_instagram" name="add_instagram" maxlength="35">
            </div>
        </div>
        <!-- Instagram -->

        <!-- Twitter -->
        <div class="form-group row">
            <label for="add_twitter" class="col-sm-5 col-form-label">Twitter </label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="add_twitter" name="add_twitter" maxlength="35">
            </div>
        </div>
        <!-- Twitter -->

        <!-- linkedin -->
        <div class="form-group row">
            <label for="add_linkedin" class="col-sm-5 col-form-label">Linkedin </label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="add_linkedin" name="add_linkedin" maxlength="35">
            </div>
        </div>
        <!-- linkedin -->
        
        <!-- upload image -->
        <div class="form-group row">
            <label for="prev-icon" class="col-sm-5 col-form-label">Photo</label>
            <div class="col-sm-7">
                <div class="form-group">
                <div class="custom-file">
                    <input type="file" accept="image/*" class="custom-file-input" id="foto" name="foto" required>
                    <label class="custom-file-label inp-galeri" for="foto">Choose file</label>
                </div>
                </div>
            </div>
        </div>
        <!-- upload image -->
      </div>
      <div class="modal-footer">
      <button class="btn btn-sm btn-success" type="submit">Save</button>
      </div>
    </form>

    </div>
  </div>
</div>