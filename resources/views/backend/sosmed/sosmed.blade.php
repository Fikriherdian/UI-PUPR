@extends('backend.include.masteradmin')

@section('main-content')
<div class="row"> 
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Semua Sosmed</h2>
            <p class="pageheader-text">Halaman untuk melihat semua sosmed</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Admin</a></li>
                        <li class="breadcrumb-item"><a href="/admin/sosmed/tampil" class="breadcrumb-link">Sosmed</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <h3 class="text-center">Semua Sosmed</h3>
        <table id="example" class="table table-striped table-bordered second" style="width:100%">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Link</th>
                    <th>Icon</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sosmed as $b)
                <tr>
                    <td>{{$b->nama}}</td>
                    <td>{{$b->link}}</td>
                    <td><img src="{{$b->icon}}" alt="" style="width:200px"></td>
                    <td> @if($b->status=='aktif')
                            <span class="badge badge-success">{{$b->status}}</span>
                        @else
                            <span class="badge badge-danger">{{$b->status}}</span>
                        @endif
                    </td>
                    <td>
                        <div class="btn-group ml-auto">
                            <a href="/admin/sosmed/edit/{{$b->id}}" class="btn btn-sm btn-outline-light"><i class="fas fa-eye"></i></a>
                            <a href="/admin/sosmed/delete/{{$b->id}}" class="btn btn-sm btn-outline-light"><i class="far fa-trash-alt"></i></a>
                        </div>
                    </td>
                </tr> 
                @endforeach                                           
            </tbody>
            <tfoot>
                <tr>
                    <th>Nama</th>
                    <th>Link</th>
                    <th>Icon</th>
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
@endpush