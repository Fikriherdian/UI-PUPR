@extends('backend.include.masteradmin')

@section('main-content')
<div class="row"> 
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Tambah Page</h2>
            <p class="pageheader-text">Halaman untuk menambah page</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Admin</a></li>
                        <li class="breadcrumb-item"><a href="/admin/page/tampil" class="breadcrumb-link">Page</a></li>
                        <li class="breadcrumb-item"><a href="/admin/page/tambah" class="breadcrumb-link">Tambah Page</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <h3 class="text-center">Tambah Page</h3>
            <form method="POST"action="/admin/page/store" enctype="multipart/form-data">
            {{ csrf_field() }} {{ method_field('POST') }}
                <div class="form-group inp">
                    <label for="nama">Nama<span class="text-danger">*</span></label>
                    <div class="input">
                        <input type="text" name="nama" id="nama" autocomplete="off" class="inp" required> 
                    </div> 
                </div>
                <div class="form-group">
                    <label for="parents">Parents <span class="text-danger">*</span></label>
                    <select name="parents" class="form-control" style="height:34px!important;" required>
                        <option value="" >--Pilih Status--</option>
                            <option value="0">None</option>
                            @foreach($page as $p)
                            <option value='{{$p->id}}'>{{$p->nama}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="form-group inp">
                    <label for="urutan">Urutan<span class="text-danger">*</span></label>
                    <div class="input">
                        <input type="text" name="urutan" id="nama" autocomplete="off" class="inp" list="urutan" required> 
                        <datalist id="urutan">
                        <option value="" >--Pilih Urutan--</option>
                            <option value="0">Pertama</option>
                            @foreach($page as $p)
                            <option value='{{$p->id}}' >{{$p->nama}}</option>
                            @endforeach
                        </datalist>
                    </div> 
                </div>
                <div class="form-group inp">
                    <label for="link">Link<span class="text-danger">*</span></label>
                    <div class="input">
                        <input type="text" name="link" id="link" autocomplete="off" class="inp" > 
                    </div> 
                </div>
                <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Cek URL Foto <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-btn" >
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary" style="color:#d9d9d9">
                            <i class="fa fa-picture-o"></i> Pilih
                            </a>
                        </span>
                    <input id="thumbnail" class="form-control" type="text" name="photo" value="{{old('photo')}}" >
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('photo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi<span class="text-danger">*</span></label>
                    <!-- <textarea name="deskripsi" id="froala-editor" cols="30" rows="10" required></textarea> -->
                    <textarea id="summernote" name="deskripsi" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control" style="height:34px!important;">
                    <option value='aktif'>Aktif</option>
                            <option value='nonaktif'>Nonaktif</option>
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
    <!-- <link rel="stylesheet" href="{{asset('backend/summernote/bootstrap.min.css')}}">   -->
    <link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">   
    <link href="/backend/css/bootstrap-datepicker.css" rel="stylesheet">
@endpush
@push('scripts')
    <script src="/backend/js/jquery.js"></script>
    <script src="/backend/js/moment.min.js"></script>
    <script src="/backend/js/bootstrap-datepicker.js"></script>
    <script src="/backend/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
    <script src="{{asset('backend/summernote/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('backend/summernote/bootstrap.min.js')}}"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <!-- <script type="text/javascript" src="/js/froala/js/froala_editor.pkgd.min.js"></script>
    <script type="text/javascript" src="/js/froala/js/html2pdf.bundle.js"></script>
    <script type="text/javascript" src="/js/froala/js/codemirror.min.js"></script>
    <script type="text/javascript" src="/js/froala/js/xml.min.js"></script> -->
    <script id="language" src="/js/froala/js/languages/id.js"></script>
    <script src="{{asset('backend/js/jquery-ui.js')}}"></script>
<!-- <script>
      // The following function creates a new instance of the Froala Editor and inserts it into the DIV element created above with id="froala-editor"
      new FroalaEditor('textarea#froala-editor',
      {
    "key": "INSERT-YOUR-FROALA-KEY-HERE",
    "events": {},
    "documentReady": true,
    "codeMirror": false,
    "colorsBackground": [
        "#61BD6D",
        "#1ABC9C",
        "#54ACD2",
        "#2C82C9",
        "#9365B8",
        "#475577",
        "#CCCCCC",
        "#41A85F",
        "#00A885",
        "#3D8EB9",
        "#2969B0",
        "#553982",
        "#28324E",
        "#000000",
        "#F7DA64",
        "#FBA026",
        "#EB6B56",
        "#E25041",
        "#A38F84",
        "#EFEFEF",
        "#FFFFFF",
        "#FAC51C",
        "#F37934",
        "#D14841",
        "#B8312F",
        "#7C706B",
        "#D1D5D8",
        "REMOVE"
    ],
    "colorsButtons": [
        "colorsBack",
        "|",
        "-"
    ],
    "imageAllowedTypes": [
        "jpeg",
        "jpg",
        "png",
        "gif",
        "webp"
    ],
    "language": "id"
});
</script> -->
<script>
$(document).ready(function() {
  $('#summernote').summernote({
    placeholder: "Ketik disini ....",
    tabsize: 2,
    height: 100
    });
});
</script>
@endpush
