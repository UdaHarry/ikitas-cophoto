@extends('admin.layouts')

@section('addCss')
<link href="{{ asset('srcAdmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

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

    
    @include('admin.edit-best')
    @include('admin.modal-hapus')

<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="card shadow mb-4 border-left-primary">
        <div class="card-header py-3">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">Service</div>
                </div>
                <div class="col-auto m-2">
                    <button type="button" class="btn btn-sm btn-info btn-icon-split" data-toggle="modal" data-target="#addBest">
                        <span class="icon text-white-50">
                        <i class="fas fa-plus-circle"></i>
                        </span>
                        <span class="text">Tambah</span>
                    </button>
                </div>
            </div>
        </div>
        @include('admin.add-best')
        @include('admin.edit-best')
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="bestTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                </table>
            </div>
        </div>
        </div>

    </div>   

    <!-- Area Landing-->
    <div class="col-lg-5 col-md-5">
      
      <form id="form-top" method="POST" enctype="multipart/form-data" action="my-sambutan/1/updateSambutan">
          @csrf

        <div class="card shadow mb-3">
          <!-- card header -->
          <div class="card-header">
            
            <h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-scroll"></i> Description</h4>
          </div>
          <!-- card header -->

          <!-- card body -->
          <div class="card-body">
            
            <h6 class="card-title">Sambutan Landing</h6>

            <!-- preview image -->
            <div class="prev-homelanding">
              <!-- Isi Gambar Fitur -->
            </div>

            <!-- upload gambar -->
            <div class="form-group">
              <div class="custom-file mt-2">
                <input type="file" accept="image/*" class="custom-file-input" id="img_sabutan" name="img_sabutan">
                <label class="custom-file-label inp-1" for="img_sabutan">Choose file <p class="d-inline" style="font-size: 8pt;">(Recomended 750 x 360)</p></label>
              </div>
            </div>
            <!-- upload gambar -->

            <!-- nama Web -->
            <div class="form-group row">
                <label for="sam_title" class="col-sm-4 col-form-label">Title</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="sam_title" name="sam_title"  maxlength="50">
                </div>
            </div>
            <!-- nama Web -->

            <!-- about us -->
            <div class="form-group row">
                <label for="sam_deskripsi" class="col-sm-4 col-form-label">Description</label>
                <div class="col-sm-8">
                <textarea class="form-control" id="sam_deskripsi" rows="3" name="sam_deskripsi" ></textarea>
                </div>
            </div>
            <!-- about us -->
            
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
      </form>
    </div>

</div>
@endsection

@section('addScript')
<!-- Page level plugins -->
<script src="{{ asset('srcAdmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('srcAdmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('srcAdmin/js/demo/datatables-demo.js')}}"></script>

<script>
    var table;
    $("input[type='file'][id$='img_sabutan']").change(function(e){
        var fileName = e.target.files[0].name;
        $('.inp-1').html(fileName);
    });

    $(function(){
        $("#sc-abt").addClass("active");
        descriptionLanding();
        showBest();
        setTimeout(function(){
            $("div.alert").remove();
        }, 5000 );
    });

    /** Preview Top Landing Sementara Sebelum Masuk ke JS */
    
    function descriptionLanding(){
        $.ajax({
            url : "/my-sambutan/1/editSambutan",
            type : "GET",
            dataType : "JSON",
            success : function(data){
                $('.prev-homelanding').html('<img src="'+data.img_sambutan+'" alt="" class="img-fluid" >');
                $('#sam_title').val(data.title);
                $('#sam_deskripsi').val(data.deskripsi);
            },
            error : function(){
              alert("Tidak dapat menyimpan data!");
            }   
        });
    }

    function showBest(){
      table = $('#bestTable').dataTable({
            "bDestroy": true,
            processing:true,
            serverSide:true, 
            "lengthMenu": [[ 10, 15, 25,], [10, 15, 25]],
            ajax: "{!! route('listBest') !!}",
            order:[0,'desc'],
            columns:[
              {data:'id',name:'id'},
              {data:'title',name:'title'},
              {data:'deskripsi',name:'deskripsi'},
              {data:'action',name:'action'}
            ]
      });
    }

    function editDataBest(id){
        $('#editBest').modal('show');
        $.ajax({
            url : "my-sambutan/"+id+"/editBest",
            type : "GET",
            dataType : "JSON",
            success : function(data){
                $('#id_best').val(data.id);
                $('#edit_title').val(data.title);
                $('#edit_Keterangan').val(data.deskripsi);
            },
            error : function(){
                alert("Tidak dapat menyimpan data!");
            }   
        });
    }

    function deleteDataBest(id){
        $('#modalHapus').modal('show');
        $('button#btn_delete').click(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url : "deleteBest/"+id,
                type : "DELETE",
                dataType : "JSON",
                success : function(data){
                        $('#modalHapus').modal('hide');
                        table.api().ajax.reload();
                },
                error : function(){
                    alert("Tidak dapat menyimpan data!");
                }   
            });
        });
    }
</script>
@endsection