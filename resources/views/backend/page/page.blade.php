@extends('backend.include.masteradmin')

@section('main-content')
<div class="row"> 
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Semua Page</h2>
            <p class="pageheader-text">Halaman untuk melihat semua page</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Admin</a></li>
                        <li class="breadcrumb-item"><a href="{{route('page.index')}}" class="breadcrumb-link">Page</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Basic Table</h5>
            <div class="card-body">
                <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered second" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Slug</th>
                            <th>Parents</th>
                            <th>Urutan</th>
                            <th>Belakang</th>
                            <th>Link</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($page as $b)
                        <tr>
                            <td>{{$b->nama}}</td>
                            <td>{{$b->slug}}</td>
                            <td>{{$b->parents}}</td>
                            <td>{{$b->urutan}}</td>
                            <td>{{$b->belakang}}</td>
                            <td>{{$b->link}}</td>
                            <td> @if($b->status=='aktif')
                                    <span class="badge badge-success">{{$b->status}}</span>
                                @else
                                    <span class="badge badge-danger">{{$b->status}}</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group ml-auto">
                                    <a href="{{route('page.edit',$b->id)}}" class="btn btn-sm btn-outline-light"><i class="fas fa-eye"></i></a>
                                    <form method="POST" action="{{route('page.destroy',$b->id)}}">
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
                            <th>Nama</th>
                            <th>Slug</th>
                            <th>Parents</th>
                            <th>Urutan</th>
                            <th>Belakang</th>
                            <th>Link</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
                </div>
            </div>
        </div>
        <div class="section-block">
            <h5 class="section-title">Daftar Halaman</h5>
            <p>Daftar halaman parents.</p>
        </div>
        <div class="accrodion-regular">
            <div id="accordion3">
            @foreach($page as $p)
                @if($p->parents == '0')
                <?php $parent = $p->id; ?>
                <div class="card mb-2">
                    <div class="card-header" id="heading{{$p->slug}}">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#{{$p->slug}}" aria-expanded="false" aria-controls="{{$p->slug}}">
                                <span class="fas fa-angle-down mr-3"></span>{{$p->nama}}
                            </button>       </h5>
                    </div>
                    <div id="{{$p->slug}}" class="collapse" aria-labelledby="heading{{$p->slug}}" data-parent="#accordion3">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <?php
                                foreach($page as $c){
                                    if($c->parents == $parent){
                                        echo '<li class="list-group-item">',$c->nama.'</li>';
                                    }
                                }
                                ?>
                            </ul>
                         </div>
                    </div>
                </div>
                @endif
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
@push('styles')
@endpush
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
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