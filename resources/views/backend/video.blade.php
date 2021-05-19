@extends('backend.include.masteradmin')

@section('main-content')
<div class="row"> 
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Edit Video</h2>
            <p class="pageheader-text">Halaman untuk edit video</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Admin</a></li>
                        <li class="breadcrumb-item"><a href="/admin/video/edit/1" class="breadcrumb-link">Edit video</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <h3 class="text-center">Edit video</h3>
            <form method="POST"action="/admin/video/update/1" enctype="multipart/form-data">
            {{ csrf_field() }} {{ method_field('POST') }}
                <div class="form-group inp">
                    <label for="kanan">Kanan<span class="text-danger">*</span></label>
                    <div class="input">
                        <input type="text" name="kanan" id="kanan" autocomplete="off" class="inp" value="{{$video->kanan}}" required> 
                    </div> 
                </div>
                <div class="form-group inp">
                    <label for="kiri">Kiri<span class="text-danger">*</span></label>
                    <div class="input">
                        <input type="text" name="kiri" id="kiri" autocomplete="off" class="inp" value="{{$video->kiri}}" required> 
                    </div> 
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
