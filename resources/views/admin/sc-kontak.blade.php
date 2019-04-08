@extends('admin.layouts')

@section('content')
    @if(session('sukses'))
    <div class="alert alert-success a" role="alert">
        <i class="icon fa fa-check"></i>
        {{session('sukses')}}
    </div>
    @endif

        <div class="row">
          <!-- Area Landing-->
          <div class="col-lg-6 col-md-6">
          <form id="form-top" method="POST" enctype="multipart/form-data" action="/my-kontak/1/updateKontak">
              @csrf
              <div class="shadow card mb-3">
                <!-- card header -->
                <div class="card-header">
                  <i class="fas fa-address-book"></i>
                  Landing
                </div>
                <!-- card header -->

                <!-- card body -->
                <div class="card-body">
                  <h4>Location</h4>
                  <!-- <iframe id="prev-maps" src="" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                  <div id="prev-maps">
                  </div>
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
                      <span class="input-group-text"><i class="fas fa-home"></i></span>
                    </div>
                    <input id="home" type="text" class="form-control" name="home">
                  </div>
                  <!-- update text -->

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
       showData();
       setTimeout(function(){
            $("div.alert").remove();
        }, 5000 );
    });

    function showData(){
      $.ajax({
        url : "/my-kontak/1/editKontak",
        type : "GET",
        dataType : "JSON",
        success : function(data){
          // $('#prev-maps').attr('src',data.maps);
          $('#prev-maps').html(data.maps);
          $('iframe').height(300).width('100%');
          $('#maps').val(data.maps);
          $('#home').val(data.home);
          $('#email').val(data.email);
          $('#telepon').val(data.telepon);
          $('#whatsapp').val(data.whatsapp);
        },
        error : function(){
          alert("Tidak dapat menyimpan data!");
        }   
      });
    }

</script>
@endsection