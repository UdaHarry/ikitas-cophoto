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

@include('admin.modal-hapus')

<div class="row">
    <div class="card shadow mb-4 border-left-primary">
    <div class="card-header py-3">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">Service</div>
            </div>
            <div class="col-auto m-2">
                <button type="button" class="btn btn-sm btn-info btn-icon-split" data-toggle="modal" data-target="#modalService">
                    <span class="icon text-white-50">
                    <i class="fas fa-plus-circle"></i>
                    </span>
                    <span class="text">Tambah</span>
                </button>
            </div>
        </div>
    </div>
    @include('admin.add-service')
    @include('admin.edit-service')
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="serviceTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Service</th>
                        <th>Icon</th>
                        <th>Keterangan</th>
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
@endsection

@section('addScript')
<!-- Page level plugins -->
<script src="{{ asset('srcAdmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('srcAdmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('srcAdmin/js/demo/datatables-demo.js')}}"></script>

<script>
    var table;
    $(function(){
       $("#sc-ser").addClass("active");

       setTimeout(function(){
            $("div.alert").remove();
        }, 5000 );

       showService();
    });

    function showService(){
      table = $('#serviceTable').dataTable({
            "bDestroy": true,
            processing:true,
            serverSide:true, 
            "lengthMenu": [[ 10, 15, 25,], [10, 15, 25]],
            ajax: "{!! route('listService') !!}",
            order:[0,'desc'],
            columns:[
              {data:'id',name:'id'},
              {data:'service',name:'service'},
              {data:'icon',name:'icon', "orderable": false},
              {data:'keterangan',name:'keterangan', "orderable": false},
              {data:'action',name:'action', "orderable": false}
            ]
      });
    }

    function editDataService(id){
        $('#editService').modal('show');
        $.ajax({
            url : "my-service/"+id+"/editService",
            type : "GET",
            dataType : "JSON",
            success : function(data){
                $('#id_service').val(data.id);
                $('#edit_Icon').val(data.icon);
                $('#edit_Service').val(data.service);
                $('#edit_Keterangan').val(data.keterangan);
            },
            error : function(){
                alert("Tidak dapat menyimpan data!");
            }   
        });
    }

    function deleteDataService(id){
        $('#modalHapus').modal('show');
        $('button#btn_delete').click(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url : "deleteService/"+id,
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