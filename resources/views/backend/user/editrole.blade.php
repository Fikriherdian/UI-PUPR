@extends('backend.include.masteradmin')

@section('main-content')
<div class="row"> 
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Edit Role</h2>
            <p class="pageheader-text">Halaman untuk menambah role</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Admin</a></li>
                        <li class="breadcrumb-item"><a href="{{route('role.index')}}" class="breadcrumb-link">Role</a></li>
                        <li class="breadcrumb-item"><a href="{{route('role.edit',$role->id)}}" class="breadcrumb-link">Edit Role</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <h3 class="text-center">Menambah Role</h3>
            <form method="post" action="{{route('role.update',$role->id)}}">
            @csrf 
            @method('PATCH')
            <div class="form-group inp">
                    <label for="nama">Nama<span class="text-danger">*</span></label>
                    <div class="input">
                        <input type="text" name="nama" id="nama" autocomplete="off" class="inp" value="{{$role->nama}}" required> 
                    </div> 
                </div>
                <div class="form-group">
                    <label for="status">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control">
                        <option value="aktif" {{(($role->status=='aktif')? 'selected' : '')}}>Aktif</option>
                        <option value="nonaktif" {{(($role->status=='nonaktif')? 'selected' : '')}}>Nonaktif</option>
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
    <link href="/js/froala/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="/js/froala/css/codemirror.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">   
    <link href="/backend/css/bootstrap-datepicker.css" rel="stylesheet">
@endpush
@push('scripts')
    <script src="/backend/js/jquery.js"></script>
    <script src="/backend/js/moment.min.js"></script>
    <script src="/backend/js/bootstrap-datepicker.js"></script>
    <script src="/backend/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
    <script type="text/javascript" src="/js/froala/js/froala_editor.pkgd.min.js"></script>
    <script type="text/javascript" src="/js/froala/js/html2pdf.bundle.js"></script>
    <script type="text/javascript" src="/js/froala/js/codemirror.min.js"></script>
    <script type="text/javascript" src="/js/froala/js/xml.min.js"></script>
    <script id="language" src="/js/froala/js/languages/id.js"></script>
    <script src="{{asset('backend/js/jquery-ui.js')}}"></script>
<script>
    $('#lfm').filemanager('image');
</script>
<script>
    $( function() {
        $( "#date" ).datepicker({
        dateFormat: "d MM yy"
        });
    });
</script>
@endpush
