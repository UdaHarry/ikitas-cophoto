<!-- Modal -->
<div id="editTeam" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

    <form  method="POST" enctype="multipart/form-data" action="{{ url('/my-team/updateTeam')}}">
    @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Galeri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- id -->
        <input type="hidden" name="id" id="id">
        <!-- id -->

        <!-- Nama -->
        <div class="form-group row">
            <label for="edit_nama" class="col-sm-5 col-form-label">Nama </label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="edit_nama" name="edit_nama" maxlength="35" required>
            </div>
        </div>
        <!-- Nama -->

        <!-- Jobdesk -->
        <div class="form-group row">
            <label for="edit_jobdesk" class="col-sm-5 col-form-label">Jobdesk </label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="edit_jobdesk" name="edit_jobdesk" maxlength="35" required>
            </div>
        </div>
        <!-- Jobdesk -->

        <!-- Facebook -->
        <div class="form-group row">
            <label for="edit_facebook" class="col-sm-5 col-form-label">Facebook </label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="edit_facebook" name="edit_facebook" maxlength="35">
            </div>
        </div>
        <!-- Facebook -->

        <!-- Instagram -->
        <div class="form-group row">
            <label for="edit_instagram" class="col-sm-5 col-form-label">Instagram </label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="edit_instagram" name="edit_instagram" maxlength="35">
            </div>
        </div>
        <!-- Instagram -->

        <!-- Twitter -->
        <div class="form-group row">
            <label for="edit_twitter" class="col-sm-5 col-form-label">Twitter </label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="edit_twitter" name="edit_twitter" maxlength="35">
            </div>
        </div>
        <!-- Twitter -->

        <!-- linkedin -->
        <div class="form-group row">
            <label for="edit_linkedin" class="col-sm-5 col-form-label">Linkedin </label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="edit_linkedin" name="edit_linkedin" maxlength="35">
            </div>
        </div>
        <!-- linkedin -->
        
        <!-- upload image -->
        <div class="form-group row">
            <label for="prev-icon" class="col-sm-5 col-form-label">Photo</label>
            <div class="col-sm-7">
                <div class="form-group">
                <div class="custom-file">
                    <input type="file" accept="image/*" class="custom-file-input" id="edit_foto" name="edit_foto">
                    <label class="custom-file-label inp-galeri" for="edit_foto">Choose file</label>
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