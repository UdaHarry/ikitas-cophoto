<!-- Modal -->
<div class="modal fade" id="addGaleri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

    <form method="POST" enctype="multipart/form-data">
    @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Galeri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Label -->
        <div class="form-group row">
            <label for="label" class="col-sm-5 col-form-label">Label</label>
            <div class="col-sm-7">
                <select class="form-control" id="label" name="label">
                    <option>test 1</option>
                    <option>test 2</option>
                </select>
            </div>
        </div>
        <!-- Label -->

        <!-- Quotes -->
        <div class="form-group row">
                <label for="webname" class="col-sm-5 col-form-label">Quotes <p class="d-inline" style="font-size: 7pt;color:red;"><i>( Max 35 Character )</i></p></label>
                <div class="col-sm-7">
                <input type="text" class="form-control" id="webname" name="webname" maxlength="35" required>
                </div>
            </div>
        <!-- nama Web -->
        
        <!-- upload image -->
        <div class="form-group row">
            <label for="prev-icon" class="col-sm-5 col-form-label">Photo</label>
            <div class="col-sm-7">
                <div class="form-group">
                <div class="custom-file">
                    <input type="file" accept="image/*" class="custom-file-input" id="addGaleri" name="foto" multiple>
                    <label class="custom-file-label inp-galeri" for="addGaleri">Choose file</label>
                </div>
                </div>
            </div>
        </div>
        <!-- upload image -->
      </div>
      <div class="modal-footer">
            <button type="submit" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#addGaleri">
                <span class="icon text-white-50">
                <i class="fas fa-save"></i>
                </span>
                <span class="text">Save</span>
            </button>
      </div>
    </form>

    </div>
  </div>
</div>