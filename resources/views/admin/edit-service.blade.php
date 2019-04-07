<!-- Modal -->
<div class="modal fade" id="editService" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

    <form method="POST" enctype="multipart/form-data" action="{{ url('/my-service/updateService')}}">
    @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- id -->
        <input type="hidden" name="id_service" id="id_service">
        <!-- id -->

        <!-- Icon -->
        <div class="form-group row">
            <label for="edit_Service" class="col-sm-5 col-form-label">Service</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="edit_Service" name="edit_Service" required>
            </div>
        </div>
        <!-- Icon -->
        <!-- Keterangan -->
        <div class="form-group row">
            <label for="edit_Keterangan" class="col-sm-5 col-form-label">Keterangan</label>
            <div class="col-sm-7">
                <textarea class="form-control" id="edit_Keterangan" rows="3" name="edit_Keterangan" minlength="20" maxlength="150" required></textarea>
            </div>
        </div>
        <!-- Keterangan -->
        <!-- Icon -->
        <div class="form-group row">
            <label for="edit_Icon" class="col-sm-5 col-form-label">Icon <br>
                <p class="d-inline" style="font-size: 8pt;color:red;">reference link icon :<br>
                    <a href="https://linearicons.com/free">linearicons.com/free</a><br>
                    <a href="https://fontawesome.com/">fontawesome.com/</a><br>
                    <a href="https://cdn.materialdesignicons.com/3.5.95/">materialdesignicons.com/3.5.95/</a>
                </p>
            </label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="edit_Icon" name="edit_Icon" required>
            </div>
        </div>
        <!-- Icon -->
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