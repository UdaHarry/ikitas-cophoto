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

@include('admin.modal-hapus')

<div class="row">

<!-- Galeri -->
<div class="col-lg-7 col-md-7">
    <div class="card shadow mb-4 border-left-primary">
    <div class="card-header py-3">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">Gallery</div>
            </div>
            <div class="col-auto m-2">
                <button type="button" class="btn btn-sm btn-info btn-icon-split" data-toggle="modal" data-target="#modalGaleri">
                    <span class="icon text-white-50">
                    <i class="fas fa-plus-circle"></i>
                    </span>
                    <span class="text">Tambah</span>
                </button>
            </div>
        </div>
    </div>
    @include('admin.add-galeri')
    @include('admin.edit-galeri')
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="galeriTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Gambar</th>
                        <th>Label</th>
                        <th>Quote</th>
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
<!-- Galeri -->

<!-- label -->
<div class="col-lg-5 col-md-5">
    <div class="card mb-4 border-left-primary">
        <div class="card-header py-3">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">Label</div>
                </div>
                <div class="col-auto m-2">
                    <button type="button" class="btn btn-sm btn-info btn-icon-split" data-toggle="modal" data-target="#addLabel">
                        <span class="icon text-white-50">
                        <i class="fas fa-plus-circle"></i>
                        </span>
                        <span class="text">Tambah</span>
                    </button>
                </div>
            </div>
        </div>
        @include('admin.add-galeri-label')
        @include('admin.edit-galeri-label')
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="galeriListTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Label</th>
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
<!-- label -->

</div>

@endsection

@section('addScript')
<!-- Page level plugins -->
<script src="{{ asset('srcAdmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('srcAdmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('srcAdmin/js/demo/datatables-demo.js')}}"></script>

<script>
    var table, table2;
    $(function(){
       $("#sc-gal").addClass("active");

       $("input[type='file'][id$='foto']").change(function(e){
          var fileName = e.target.files[0].name;
          $('.inp-galeri').html(fileName);
       });

       setTimeout(function(){
            $("div.alert").remove();
        }, 5000 );

        showGaleri();
        showLabel();
    });

    function showGaleri(){
        table = $('#galeriTable').dataTable({
            "bDestroy": true,
            processing:true,
            serverSide:true, 
            "lengthMenu": [[5, 10, 25,], [5, 10, 25]],
            ajax: "{!! route('listGaleri') !!}",
            order:[0,'desc'],
            columns:[
              {data:'id',name:'id'},
              {data:'foto',name:'foto'},
              {data:'label',name:'label'},
              {data:'quote',name:'quote'},
              {data:'action',name:'action'}
            ],
            "columnDefs": [
                { "width": "10%", "targets": 0 },
            ]
        });
    }

    function showLabel(){
        table2 = $('#galeriListTable').dataTable({
            "bDestroy": true,
            processing:true,
            serverSide:true,
            "searching": false,
            "lengthMenu": [[5, 10, 25,], [5, 10, 25]],
            ajax: "{!! route('listGaleriLabel') !!}",
            order:[0,'desc'],
            columns:[
              {data:'id',name:'id'},
              {data:'label',name:'label'},
              {data:'action',name:'action'}
            ],
            "columnDefs": [
                { "width": "10%", "targets": 0 },
                { "width": "30%", "targets": 2 }
            ]
        });
    }

    function editDataGaleri(id){
        var iDx = id;
        $('#editGaleri').modal('show');
        $.ajax({
            url : "my-galeri/"+id+"/editGaleri",
            type : "GET",
            dataType : "JSON",
            success : function(data){
                $('#id').val(data.id);
                $('#edit_label').val(data.label);
                $('#edit_quote').val(data.quote);
            },
            error : function(){
                alert("Tidak dapat menyimpan data!");
            }   
        });
    }

    function deleteDataGaleri(id){
        $('#modalHapus').modal('show');
        
        $('button#btn_delete').click(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url : "deleteGaleri/"+id,
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

    function editDataLabel(id){
        var iDx = id;
        $('#editLabel').modal('show');
        $.ajax({
            url : "my-galeri/"+id+"/editLabel",
            type : "GET",
            dataType : "JSON",
            success : function(data){
                $('#id_label').val(data.id);
                $('#edt_label').val(data.label);
            },
            error : function(){
                alert("Tidak dapat menyimpan data!");
            }   
        });
    }

    function deleteDataLabel(id){
        $('#modalHapus').modal('show');
        $('button#btn_delete').click(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url : "deleteLabel/"+id,
                type : "DELETE",
                dataType : "JSON",
                success : function(data){
                        $('#modalHapus').modal('hide');
                        table2.api().ajax.reload();
                },
                error : function(){
                    alert("Tidak dapat menyimpan data!");
                }   
            });
        });
    }
</script>
@endsection