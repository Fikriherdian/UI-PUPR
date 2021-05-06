@extends('backend.include.masteradmin')

@section('main-content')
<div class="row"> 
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Semua Berita</h2>
            <p class="pageheader-text">Halaman untuk melihat semua berita</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Admin</a></li>
                        <li class="breadcrumb-item"><a href="{{route('berita.index')}}" class="breadcrumb-link">Berita</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <h3 class="text-center">Semua Berita</h3>
        <table id="example" class="table table-striped table-bordered second" style="width:100%">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Date</th>
                    <th>Kategori</th>
                    <th>Tags</th>
                    <th>Slug</th>
                    <th>Photo</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($berita as $b)
                <tr>
                    <td>{{$b->judul}}</td>
                    <td>{{$b->date}}</td>
                    <td>
                        <?php
                            foreach($kategori as $k){
                                if($b->kategori == $k->id){
                                    echo $k->nama;  
                                }
                            }
                        ?>
                    </td>
                    <td>{{$b->tag}}</td>
                    <td>{{$b->slug}}</td>
                    <td><img src="{{$b->photo}}" alt="" style="width:200px"></td>
                    <td> @if($b->status=='aktif')
                            <span class="badge badge-success">{{$b->status}}</span>
                        @else
                            <span class="badge badge-danger">{{$b->status}}</span>
                        @endif
                    </td>
                    <td>
                        <div class="btn-group ml-auto">
                            <a href="{{route('berita.edit',$b->id)}}" class="btn btn-sm btn-outline-light"><i class="fas fa-eye"></i></a>
                            <form method="POST" action="{{route('berita.destroy',$b->id)}}">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-outline-light dltBtn" data-id={{$b->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </div>
                    </td>
                </tr> 
                @endforeach                                           
            </tbody>
            <tfoot>
                <tr>
                    <th>Judul</th>
                    <th>Date</th>
                    <th>Kategori</th>
                    <th>Tags</th>
                    <th>Slug</th>
                    <th>Photo</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection
@push('styles')
@endpush
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
    $('#lfm').filemanager('image');
    $('#lfm1').filemanager('image');
</script>
<script>
    $( function() {
        $( "#date" ).datepicker({
        dateFormat: "d MM yy"
        });
    });
    $(document).ready(function() {
        $('#summary').summernote({
        placeholder: "Ketik disini .....",
            tabsize: 2,
            height: 100
        });
    });
</script>
<script>
      $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
          $('.dltBtn').click(function(e){
              var form=$(this).closest('form');
              var dataID=$(this).data('id');
              // alert(dataID);
              e.preventDefault();
              swal({
                    title: "Apa anda yakin?",
                    text: "Jika di hapus, data ini tidak akan bisa dikembalikan lagi",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                       form.submit();
                    } else {
                        swal("Data tersimpan!");
                    }
                });
          })
      })
  </script>
@endpush