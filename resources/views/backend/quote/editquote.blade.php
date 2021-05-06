@extends('backend.include.masteradmin')

@section('main-content')
<div class="row"> 
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Edit Quote</h2>
            <p class="pageheader-text">Halaman untuk edit quote</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Admin</a></li>
                        <li class="breadcrumb-item"><a href="{{route('user.create')}}" class="breadcrumb-link">Quote</a></li>
                        <li class="breadcrumb-item"><a href="{{route('quote.edit',$quote->id)}}" class="breadcrumb-link">Edit Quote</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <h3 class="text-center">Edit Quote</h3>
            <form method="post" action="{{route('quote.update',$quote->id)}}">
            @csrf 
            @method('PATCH')
                <div class="form-group">
                    <label for="posisi">Posisi <span class="text-danger">*</span></label>
                    <select name="posisi" class="form-control">
                        <option value="pimpinan" {{(($quote->posisi=='pimpinan')? 'selected' : '')}}>Pimpinan</option>
                        <option value="mahasiswa" {{(($quote->posisi=='mahasiswa')? 'selected' : '')}}>Mahasiswa</option>
                        <option value="dosen" {{(($quote->posisi=='dosen')? 'selected' : '')}}>Dosen</option>
                        <option value="manajemen" {{(($quote->posisi=='manajemen')? 'selected' : '')}}>Manajemen</option>
                    </select>
                </div>
                <div class="form-group inp">
                    <label for="quote">Quote<span class="text-danger">*</span></label>
                    <div class="input">
                        <input type="text" name="quote" id="quote" autocomplete="off" class="inp" value="{{$quote->quote}}" required> 
                    </div> 
                </div>
                <div class="form-group inp">
                    <label for="nama">Nama<span class="text-danger">*</span></label>
                    <div class="input">
                        <input type="text" name="nama" id="nama" autocomplete="off" class="inp" value="{{$quote->nama}}" required> 
                    </div> 
                </div>
                <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Foto <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-btn" >
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary" style="color:#d9d9d9">
                            <i class="fa fa-picture-o"></i> Pilih
                            </a>
                        </span>
                    <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$quote->photo}}" required>
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('photo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control">
                        <option value="aktif" {{(($quote->status=='aktif')? 'selected' : '')}}>Aktif</option>
                        <option value="nonaktif" {{(($quote->status=='nonaktif')? 'selected' : '')}}>Nonaktif</option>
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
