<!-- Modal -->
<div class="modal fade" id="editBest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

    <form method="POST" enctype="multipart/form-data" action="{{ url('/my-sambutan/updateBest')}}">
    @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengalaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- id -->
        <input type="hidden" name="id_best" id="id_best">
        <!-- id -->

        <!-- Icon -->
        <div class="form-group row">
            <label for="edit_title" class="col-sm-3 col-form-label">Title</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="edit_title" name="edit_title" required>
            </div>
        </div>
        <!-- Icon -->
        <!-- Keterangan -->
        <div class="form-group row">
            <label for="edit_Keterangan" class="col-sm-3 col-form-label">Keterangan</label>
            <div class="col-sm-9">
                <textarea class="form-control" id="edit_Keterangan" rows="3" name="edit_Keterangan" minlength="10" maxlength="150" required></textarea>
            </div>
        </div>
        <!-- Keterangan -->
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