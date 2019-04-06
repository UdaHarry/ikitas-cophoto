<!-- Modal -->
<div class="modal fade" id="addLabel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

    <form method="POST" enctype="multipart/form-data">
    @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Label</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Quotes -->
        <div class="form-group row">
                <label for="label" class="col-sm-5 col-form-label">Label<br><p class="d-inline" style="font-size: 7pt;color:red;"><i>( Max 25 Character )</i></p></label>
                <div class="col-sm-7">
                <input type="text" class="form-control" id="label" name="label" maxlength="35" required>
                </div>
            </div>
        <!-- Quotes -->
      </div>
      <div class="modal-footer">
            <button type="submit" class="btn btn-sm btn-primary btn-icon-split">
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