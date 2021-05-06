@extends('backend.include.masteradmin')

@section('main-content')
<div class="row"> 
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Tambah Berita</h2>
            <p class="pageheader-text">Halaman untuk menambah berita</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Admin</a></li>
                        <li class="breadcrumb-item"><a href="/admin/berita/tampil" class="breadcrumb-link">Berita</a></li>
                        <li class="breadcrumb-item"><a href="/admin/berita/tambah" class="breadcrumb-link">Tambah Berita</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <h3 class="text-center">Menambah Berita</h3>
            <form method="POST"action="/admin/berita/store" enctype="multipart/form-data">
            {{ csrf_field() }} {{ method_field('POST') }}
                <div class="form-group inp">
                    <label for="judul">Judul<span class="text-danger">*</span></label>
                    <div class="input">
                        <input type="text" name="judul" id="judul" autocomplete="off" class="inp" required> 
                    </div> 
                </div>
                <div class="form-group inp">
                    <label for="judul">Tanggal<span class="text-danger">*</span></label>
                    <div class="input">
                        <input id="date" type="text" name="date" id="judul" autocomplete="off" class="inp" required>
                    </div> 
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori <span class="text-danger">*</span></label>
                    <select name="kategori" class="form-control" required>
                        <option value="">--Pilih Kategori--</option >
                            @foreach($kategori as $k)
                            <option value='{{$k->id}}'>{{$k->nama}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="col-6 form-group">
                    <div class="input-container">
                        <h3 style="margin-bottom:4%;">Tags</h3>	
                        <select name="tag[]" multiple  data-live-search="true" class="form-control selectpicker">
                            <option value="tag1">Tags 1</option>
                            <option value="tag2">Tags 2</option>
                            <option value="tag3">Tags 3</option>
                        </select>
                    </div>  
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi<span class="text-danger">*</span></label>
                    <textarea id="summernote" name="deskripsi" ></textarea>
                </div>
                <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Foto <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-btn" >
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary" style="color:#d9d9d9">
                            <i class="fa fa-picture-o"></i> Pilih
                            </a>
                        </span>
                    <input id="thumbnail" class="form-control" type="text" name="photo" value="{{old('photo')}}" required>
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('photo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control">
                        <option value="">--Pilih Status--</option required>
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
    <link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">   
    <link href="/backend/css/bootstrap-datepicker.css" rel="stylesheet">
    <link href="/backend/css/jquery-ui.css" rel="stylesheet">
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>

@endpush
@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
    <script src="/backend/js/jquery.js"></script>
    <script src="/backend/js/moment.min.js"></script>
    <script src="/backend/js/bootstrap-datepicker.js"></script>
    <script src="/backend/laravel-filemanager/js/stand-alone-button.js"></script>    
    <script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
    <!-- <script src="{{asset('backend/summernote/jquery-3.5.1.min.js')}}"></script> -->
    <script src="{{asset('backend/summernote/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="{{asset('backend/js/jquery-ui.js')}}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<script>
    $('#lfm').filemanager('image');
    $('#lfm1').filemanager('image');
</script>
<script>
    $( function() {
        $( "#date" ).datepicker({
        dateFormat: "dd MM yy"
        });
    });
</script>
<script>
$(document).ready(function() {
  $('#summernote').summernote({
    placeholder: "Ketik disini ....",
    tabsize: 2,
    height: 100
    });
});
</script>
<script>
$(document).on('click', '.upload-field', function(){
  var file = $(this).parent().parent().parent().find('.input-file');
  file.trigger('click');
});
$(document).on('change', '.input-file', function(){
  $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
});
var datalist = jQuery('datalist');
var options = jQuery('datalist option');
var optionsarray = jQuery.map(options ,function(option) {
		return option.value;
});
var input = jQuery('input[list]');
var inputcommas = (input.val().match(/,/g)||[]).length;
var separator = ',';
		
function filldatalist(prefix) {
	if (input.val().indexOf(separator) > -1 && options.length > 0) {
		datalist.empty();
		for (i=0; i < optionsarray.length; i++ ) {
			if (prefix.indexOf(optionsarray[i]) < 0 ) {
				datalist.append('<option value="'+prefix+optionsarray[i]+'">');
			}
		}
	}
}
input.bind("change paste keyup",function() {
	var inputtrim = input.val().replace(/^\s+|\s+$/g, "");
	var currentcommas = (input.val().match(/,/g)||[]).length;
	if (inputtrim != input.val()) {
		if (inputcommas != currentcommas) {
			var lsIndex = inputtrim.lastIndexOf(separator);
			var str = (lsIndex != -1) ? inputtrim.substr(0, lsIndex)+", " : "";
			filldatalist(str);
			inputcommas = currentcommas;
		}
		input.val(inputtrim);
	}
});
</script>
@endpush
