<!-- Modal -->
<div id="editLabel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

    <form  method="POST" enctype="multipart/form-data" action="{{ url('/galeri/updateLabel')}}">
    @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Galeri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- id -->
        <input type="hidden" name="id_label" id="id_label">
        <!-- id -->

        <!-- Quotes -->
        <div class="form-group row">
            <label for="edit_quote" class="col-sm-5 col-form-label">label <p class="d-inline" style="font-size: 7pt;color:red;"><i>( Max 35 Character )</i></p></label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="edt_label" name="edt_label" maxlength="35" required>
            </div>
        </div>
        <!-- nama Web -->

      </div>
      <div class="modal-footer">
      <button class="btn btn-sm btn-success" type="submit">Save</button>
      </div>
    </form>

    </div>
  </div>
</div>