@extends('admin.layouts')

@section('content')
    <!-- Page Heading -->
    <div class="row">

    <!-- Area Landing-->
    <div class="col-lg-7 col-md-7">

        <div class="card shadow mb-3">
          <!-- card header -->
          <div class="card-header">
            
            <h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-image"></i> Top Image</h4>
          </div>
          <!-- card header -->

          <!-- card body -->
          <div class="card-body">
            
            <h6 class="card-title">Home Landing</h6>

            <!-- preview image -->
            <div class="prev-homelanding">
              <!-- Isi Gambar Fitur -->
            </div>

            <!-- upload gambar -->
            <div class="form-group">
              <div class="custom-file mt-2">
                <input type="file" accept="image/*" class="custom-file-input" id="about-img" name="about-img" multiple>
                <label class="custom-file-label inp-1" for="about-img">Choose file <p class="d-inline" style="font-size: 8pt;">(Recomended 1920 x 900)</p></label>
              </div>
            </div>
            <!-- upload gambar -->
            
            <hr>

            <h6 class="card-title">Banner</h6>

            <!-- preview image -->
            <div class="prev-banner">
              <!-- Isi Gambar Fitur -->
            </div>

            <!-- upload gambar -->
            <div class="form-group">
              <div class="custom-file mt-2">
                <input type="file" accept="image/*" class="custom-file-input" id="about-img2" name="about-img" multiple>
                <label class="custom-file-label inp-2" for="about-img">Choose file <p class="d-inline" style="font-size: 8pt;">(Recomended 1920 x 400)</p></label>
              </div>
            </div>
            <!-- upload gambar -->
            
          </div>
          <!-- card body -->

          <!-- button submit -->
          <div class="card-footer small text-muted text-right">

            <!-- button submit -->
            <div class="d-flex justify-content-end">
              <button class="btn btn-sm btn-primary" type="submit" >Update</button>
            </div>
            <!-- button submit -->

          </div>
          <!-- button submit -->
        </div>
    
    </div>
    
    <!-- Area Config atas -->
    <div class="col-lg-5 col-md-5">

        <div class="card shadow mb-3">
        <!-- card header -->
        <div class="card-header">
            
            <h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-cog"></i> Other Setting</h4>
        </div>
        <!-- card header -->

        <!-- card body -->
        <div class="card-body">
        
            <h6 class="card-title">Header Area</h6>
            <!-- nama Web -->
            <div class="form-group row">
                <label for="nama-web" class="col-sm-4 col-form-label">Website Name</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" id="nama-web" maxlength="25">
                </div>
            </div>
            <!-- nama Web -->

            <!-- icon -->
            <!-- preview image -->
            <div class="form-group row">
            <label for="prev-icon" class="col-sm-4 col-form-label">Icon Website</label>
            <div class="col-sm-7">
                <div class="bg-secondary d-flex justify-content-center">
                    
                    <div id="prev-icon" class="prev-icon p-4">
                    <!-- Isi Gambar Fitur -->
                    </div>

                </div>
                <div class="form-group">
                <div class="custom-file mt-2">
                    <input type="file" accept="image/png" class="custom-file-input" id="about-img3" name="about-img" multiple>
                    <label class="custom-file-label inp-3" for="about-img">Choose file</label>
                </div>
                </div>
            </div>
            </div>
            <!-- icon -->

            <hr>

            <h6 class="card-title">Footer Area</h6>
            <!-- about us -->
            <div class="form-group row">
                <label for="nama-web" class="col-sm-4 col-form-label">About Us</label>
                <div class="col-sm-7">
                <textarea class="form-control" id="nama-web" rows="3"></textarea>
                </div>
            </div>
            <!-- about us -->

            <!-- Follow Us -->
            <div class="form-group row">
                <label for="nama-web" class="col-sm-4 col-form-label">Follow Us</label>
                <div class="col-sm-7">
                    <!-- facebook -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fab fa-facebook" font-weight-bold"></i></span>
                        </div>
                        <input id="maps" type="text" class="form-control" name="maps">
                    </div>
                    <!-- facebook -->

                    <!-- Twitter -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                        </div>
                        <input id="maps" type="text" class="form-control" name="maps">
                    </div>
                    <!-- Twitter -->

                    <!-- Instagram -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                        </div>
                        <input id="maps" type="text" class="form-control" name="maps">
                    </div>
                    <!-- Instagram -->

                    <!-- linkedin -->
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fab fa-linkedin font-weight-bold"></i></span>
                        </div>
                        <input id="maps" type="text" class="form-control" name="maps">
                    </div>
                    <!-- linkedin -->
                </div>
            </div>
            <!-- Follow Us -->
            
        </div>
        <!-- card body -->

        <!-- button submit -->
        <div class="card-footer small text-muted text-right">

            <!-- button submit -->
            <div class="d-flex justify-content-end">
            <button class="btn btn-sm btn-primary" type="submit">Update</button>
            </div>
            <!-- button submit -->

        </div>
        <!-- button submit -->
        </div>

    </div>

    </div>
    <!-- /.container-fluid -->
@endsection

@section('addScript')
<script>
    $(function(){
       $("#pr-def").addClass("active"); 
    });

    $("input[type='file'][id$='about-img']").change(function(e){
        var fileName = e.target.files[0].name;
        $('.inp-1').html(fileName);
    });

    $("input[type='file'][id$='about-img2']").change(function(e){
        var fileName = e.target.files[0].name;
        $('.inp-2').html(fileName);
    });
    
    $("input[type='file'][id$='about-img3']").change(function(e){
        var fileName = e.target.files[0].name;
        $('.inp-3').html(fileName);
    });

    /** Preview Top Landing Sementara Sebelum Masuk ke JS */
    $('.prev-homelanding').html('<img src="{{ asset("srcFront/img/banner/banner-2.jpg")}}" alt="" class="img-fluid" >');
    $('.prev-banner').html('<img src="{{ asset("srcFront/img/banner/banner.jpg")}}" alt="" class="img-fluid" >');
    $('.prev-icon').html('<img src="{{ asset("srcAdmin/img/logo-2.png")}}" alt="" class="img-fluid" >');

</script>
@endsection