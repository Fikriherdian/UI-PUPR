@extends('backend.include.masteradmin')

@section('main-content')
<div class="row"> 
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Edit Kategori</h2>
            <p class="pageheader-text">Halaman untuk edit kategori</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Admin</a></li>
                        <li class="breadcrumb-item"><a href="/admin/kategori/tampil" class="breadcrumb-link">Kategori</a></li>
                        <li class="breadcrumb-item"><a href="/admin/kategori/edit/{{$kategori->id}}" class="breadcrumb-link">Edit Kategori</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <h3 class="text-center">Edit Kategori</h3>
            <form method="POST"action="/admin/kategori/update/{{$kategori->id}}" enctype="multipart/form-data">
            {{ csrf_field() }} {{ method_field('POST') }}
                <div class="form-group inp">
                    <label for="nama">Nama<span class="text-danger">*</span></label>
                    <div class="input">
                        <input type="text" name="nama" id="nama" autocomplete="off" class="inp" value="{{$kategori->nama}}" required> 
                    </div> 
                </div>
                <div class="form-group">
                    <label for="status">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control">
                        <option value="aktif" {{(($kategori->status=='aktif')? 'selected' : '')}}>Aktif</option>
                        <option value="nonaktif" {{(($kategori->status=='nonaktif')? 'selected' : '')}}>Nonaktif</option>
                    </select>
                </div>
                <div class="" style="text-align:center;">
                    <button type="submit" class="butt">Submit</button>
                </div>
            </form>
    </div>
</div>
@endsection
@push('styles')
@endpush
@push('scripts')
@endpush
