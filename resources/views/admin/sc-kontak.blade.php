@extends('admin.layouts')

@section('content')
        
        <div class="row">
          <!-- Area Landing-->
          <div class="col-lg-6 col-md-6">
            <form id="form-update" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="shadow card mb-3">


                <div class="alert alert-success alert-dismissible" style="display:none">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="icon fa fa-check"></i>
                  Perubahan berhasil disimpan.
                </div>

                <div class="alert alert-danger alert-dismissible" style="display:none">
                  <i class="icon fa fa-check"></i>
                  Perubahan gagal disimpan.
                </div>

                <!-- card header -->
                <div class="card-header">
                  <i class="fas fa-address-book"></i>
                  Landing
                </div>
                <!-- card header -->

                <!-- card body -->
                <div class="card-body">
                  <h4>Location</h4>
                  <iframe id="prev-maps" src="" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

                  <!-- update text -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-map-marked"></i></span>
                    </div>
                    <input id="maps" type="text" class="form-control" name="maps">
                  </div>
                  <!-- update text -->
                  
                  <h4>Contact</h4>
                  <!-- update text -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input id="email" type="email" class="form-control" name="email">
                  </div>
                  <!-- update text -->
                  
                  <!-- update text -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input id="telepon" type="tel" class="form-control" name="telepon">
                  </div>
                  <!-- update text -->

                  <!-- update text -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                    </div>
                    <input id="hp" type="tel" class="form-control" name="hp">
                  </div>
                  <!-- update text -->

                  <!-- update text -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                    </div>
                    <input id="whatsapp" type="tel" class="form-control" name="whatsapp">
                  </div>
                  <!-- update text -->

                  <div class="d-flex justify-content-end">
                      <button class="btn btn-primary" type="submit" >Update</button>
                  </div>

                </div>
                <!-- card body -->

                <!-- button submit -->
                <div class="card-footer small text-muted text-right"></div>
                <!-- button submit -->
              </div>
            </form>
          </div>

        </div>
@endsection

@section('addScript')
<script>
    $(function(){
       $("#sc-con").addClass("active"); 
    });
</script>
@endsection