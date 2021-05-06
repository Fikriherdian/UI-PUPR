@extends('backend.include.masteradmin')

@section('main-content')
<div class="row"> 
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Edit Setting</h2>
            <p class="pageheader-text">Halaman untuk edit setting</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Admin</a></li>
                        <li class="breadcrumb-item"><a href="/admin/setting/edit/1" class="breadcrumb-link">Edit Setting</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <h3 class="text-center">Edit Setting</h3>
            <form method="POST"action="/admin/setting/update/1" enctype="multipart/form-data">
            {{ csrf_field() }} {{ method_field('POST') }}
                <div class="form-group">
                    <label for="institusi">Nama Institusi<span class="text-danger">*</span></label>
                    <textarea name="institusi" id="froala-editor" cols="30" rows="10" required>{{$setting->institusi}}</textarea>
                </div>
                <div class="form-group inp">
                    <label for="depan">Title Website Depan<span class="text-danger">*</span></label>
                    <div class="input">
                        <input type="text" name="depan" id="depan" autocomplete="off" class="inp" value="{{$setting->depan}}" required> 
                    </div> 
                </div>
                <div class="form-group inp">
                    <label for="belakang">Title Website Belakang<span class="text-danger">*</span></label>
                    <div class="input">
                        <input type="text" name="belakang" id="belakang" autocomplete="off" class="inp" value="{{$setting->belakang}}" required> 
                    </div> 
                </div>
                <div class="form-group inp">
                    <label for="copyright">Copyright<span class="text-danger">*</span></label>
                    <div class="input">
                        <input type="text" name="copyright" id="copyright" autocomplete="off" class="inp" value="{{$setting->copyright}}" required> 
                    </div> 
                </div>
                <div class="form-group">
                    <label for="icon" class="col-form-label">Icon <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-btn" >
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary" style="color:#d9d9d9">
                            <i class="fa fa-picture-o"></i> Pilih
                            </a>
                        </span>
                    <input id="thumbnail" class="form-control" type="text" name="icon" value="{{$setting->icon}}" required>
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('photo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="logonavbar" class="col-form-label">Logo Navbar<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-btn" >
                            <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary" style="color:#d9d9d9">
                            <i class="fa fa-picture-o"></i> Pilih
                            </a>
                        </span>
                    <input id="thumbnail1" class="form-control" type="text" name="logonavbar" value="{{$setting->logonavbar}}" required>
                    </div>
                    <div id="holder1" style="margin-top:15px;max-height:100px;"></div>
                    @error('photo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="logo" class="col-form-label">Logo<span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-btn" >
                            <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary" style="color:#d9d9d9">
                            <i class="fa fa-picture-o"></i> Pilih
                            </a>
                        </span>
                    <input id="thumbnail2" class="form-control" type="text" name="logo" value="{{$setting->logo}}" required>
                    </div>
                    <div id="holder2" style="margin-top:15px;max-height:100px;"></div>
                    @error('photo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group inp">
                    <label for="telepon">No Telepon<span class="text-danger">*</span></label>
                    <div class="input">
                        <input type="text" name="telepon" id="telepon" autocomplete="off" class="inp" value="{{$setting->telepon}}" required> 
                    </div> 
                </div>
                <div class="form-group inp">
                    <label for="fax">Fax<span class="text-danger">*</span></label>
                    <div class="input">
                        <input type="text" name="fax" id="fax" autocomplete="off" class="inp" value="{{$setting->fax}}" required> 
                    </div> 
                </div>
                <div class="form-group inp">
                    <label for="alamat">Alamat<span class="text-danger">*</span></label>
                    <div class="input">
                        <input type="text" name="alamat" id="alamat" autocomplete="off" class="inp" value="{{$setting->alamat}}" required> 
                    </div> 
                </div>
                <div class="form-group inp">
                    <label for="email">Email<span class="text-danger">*</span></label>
                    <div class="input">
                        <input type="text" name="email" id="email" autocomplete="off" class="inp" value="{{$setting->email}}" required> 
                    </div> 
                </div>
                <div class="form-group inp">
                    <label for="maps">Maps<span class="text-danger">*</span></label>
                    <div class="input">
                        <input type="text" name="maps" id="maps" autocomplete="off" class="inp" value="{{$setting->maps}}" required> 
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
    $('#lfm1').filemanager('image');
    $('#lfm2').filemanager('image');
</script>
<script>
    $( function() {
        $( "#date" ).datepicker({
        dateFormat: "d MM yy"
        });
    });
</script>
<script>
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
    </script>
@endpush
