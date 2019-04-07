<!-- Modal -->
<div id="editGaleri" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

    <form data-table-target="galeriTable" method="POST" enctype="multipart/form-data" action="{{ url('/my-galeri/updateGaleri')}}">
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

        <!-- Label -->
        <div class="form-group row">
            <label for="edit_label" class="col-sm-5 col-form-label">Label</label>
            <div class="col-sm-7">
                <select class="form-control" id="edit_label" name="edit_label">
                    @foreach($label as $data)
                    <option value="{{ $data->label }}" >{{ $data->label }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!-- Label -->

        <!-- Quotes -->
        <div class="form-group row">
            <label for="edit_quote" class="col-sm-5 col-form-label">Quotes <p class="d-inline" style="font-size: 7pt;color:red;"><i>( Max 35 Character )</i></p></label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="edit_quote" name="edit_quote" maxlength="35" required>
            </div>
        </div>
        <!-- nama Web -->
        
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