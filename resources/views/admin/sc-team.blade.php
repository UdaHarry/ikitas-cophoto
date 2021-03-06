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
@include('admin.add-team')
@include('admin.edit-team')

<div class="row">
<!-- Galeri -->
    <div class="card shadow mb-4 border-left-primary">
    <div class="card-header py-3">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">Team</div>
            </div>
            <div class="col-auto m-2">
                <button type="button" class="btn btn-sm btn-info btn-icon-split" data-toggle="modal" data-target="#modalTeam">
                    <span class="icon text-white-50">
                    <i class="fas fa-plus-circle"></i>
                    </span>
                    <span class="text">Tambah</span>
                </button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="teamTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Jobdesk</th>
                        <th>Facebook</th>
                        <th>Instagram</th>
                        <th>Twitter</th>
                        <th>Linkedin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Galeri -->
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
       $("#sc-abt").addClass("active");

       $("input[type='file'][id$='foto']").change(function(e){
          var fileName = e.target.files[0].name;
          $('.inp-galeri').html(fileName);
       });

       setTimeout(function(){
            $("div.alert").remove();
        }, 5000 );

       showTeam();
    });

    function showTeam(){
        table = $('#teamTable').dataTable({
            "bDestroy": true,
            processing:true,
            serverSide:true, 
            "lengthMenu": [[10, 15, 25,], [10, 15, 25]],
            ajax: "{!! route('listTeam') !!}",
            order:[0,'desc'],
            columns:[
              {data:'id',name:'id'},
              {data:'foto',name:'foto'},
              {data:'nama',name:'nama'},
              {data:'jobdesk',name:'jobdesk'},
              {data:'facebook',name:'facebook'},
              {data:'instagram',name:'instagram'},
              {data:'twitter',name:'twitter'},
              {data:'linkedin',name:'linkedin'},
              {data:'action',name:'action'}
            ]
        });
    }

    function editDataTeam(id){
        $('#editTeam').modal('show');
        $.ajax({
            url : "my-team/"+id+"/editTeam",
            type : "GET",
            dataType : "JSON",
            success : function(data){
                $('#id').val(data.id);
                $('#edit_nama').val(data.nama);
                $('#edit_jobdesk').val(data.jobdesk);
                $('#edit_facebook').val(data.facebook);
                $('#edit_instagram').val(data.instagram);
                $('#edit_twitter').val(data.twitter);
                $('#edit_linkedin').val(data.linkedin);
            },
            error : function(){
                alert("Tidak dapat menyimpan data!");
            }   
        });
    }

    function deleteDataTeam(id){
        $('#modalHapus').modal('show');
        
        $('button#btn_delete').click(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url : "deleteTeam/"+id,
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