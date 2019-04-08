@extends('admin.layouts')

@section('content')
    @if(session('sukses'))
    <div class="alert alert-success a" role="alert">
        <i class="icon fa fa-check"></i>
        {{session('sukses')}}
    </div>
    @endif
    @if(session('gagal'))
    <div class="alert alert-danger a" role="alert">
        <i class="icon fas fa-exclamation-triangle"></i>
        {{session('gagal')}}
    </div>
    @endif

        <div class="row">
          <!-- Area Config atas -->
            <div class="col-lg-5 col-md-5">
                <form id="form-top" method="POST" enctype="multipart/form-data" action="/my-setting/1/updateSetting">
                @csrf
                <div class="card shadow mb-3">
                <!-- card header -->
                <div class="card-header">
                    
                    <h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-cog"></i> Other Setting</h4>
                </div>
                <!-- card header -->

                <!-- card body -->
                <div class="card-body">
                
                    <h6 class="card-title">Header Area</h6>

                    <!-- foto -->
                    <!-- preview image -->
                    <div class="form-group row">
                    <label for="prev-foto" class="col-sm-4 col-form-label">foto User<br><p class="d-inline" style="font-size: 8pt;color:red;"><i>Png format only</i></p></label>
                    <div class="col-sm-7">
                        <div class="bg-secondary d-flex justify-content-center">
                            
                            <div id="prev-foto" class="prev-foto p-4">
                            <!-- Isi Gambar Fitur -->
                            </div>

                        </div>
                        <div class="form-group">
                        <div class="custom-file mt-2">
                            <input type="file" accept="image/png" class="custom-file-input" id="about-img" name="img-foto" multiple>
                            <label class="custom-file-label inp-1" for="about-img">Choose file</label>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- foto -->

                    <!-- nama Web -->
                    <div class="form-group row">
                        <label for="oldpass" class="col-sm-4 col-form-label">Password Lama</label>
                        <div class="col-sm-7">
                        <input type="password" class="form-control" id="oldpass" name="oldpass" minlength="6" >
                        </div>
                    </div>
                    <!-- nama Web -->

                    <!-- nama Web -->
                    <div class="form-group row">
                        <label for="newpass" class="col-sm-4 col-form-label">Pasword Baru</label>
                        <div class="col-sm-7">
                        <input type="password" class="form-control" id="newpass" name="newpass" minlength="6" >
                        </div>
                    </div>
                    <!-- nama Web -->

                    <!-- nama Web -->
                    <div class="form-group row">
                        <label for="verpass" class="col-sm-4 col-form-label">Verifikasi Password Baru</label>
                        <div class="col-sm-7">
                        <input type="password" class="form-control" id="verpass" name="verpass" minlength="6" >
                        </div>
                    </div>
                    <!-- nama Web -->
                    
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
            </form>
            </div>
        </div>
@endsection

@section('addScript')
<script>
    $("input[type='file'][id$='about-img']").change(function(e){
        var fileName = e.target.files[0].name;
        $('.inp-1').html(fileName);
    });

    $(function(){
       $("#sc-con").addClass("active");
       showData();
       setTimeout(function(){
            $("div.alert").remove();
        }, 5000 );
    });

    function showData(){
      $.ajax({
        url : "/my-setting/1/editSetting",
        type : "GET",
        dataType : "JSON",
        success : function(data){
          $('#prev-foto').html('<img src="'+data.foto+'" alt="" class="img-fluid" >');
        },
        error : function(){
          alert("Tidak dapat menyimpan data!");
        }   
      });
    }

</script>
@endsection