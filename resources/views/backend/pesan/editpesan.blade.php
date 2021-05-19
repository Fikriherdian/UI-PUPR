@extends('backend.include.masteradmin')

@section('main-content')
<div class="row"> 
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Edit pesan</h2>
            <p class="pageheader-text">Halaman untuk edit pesan</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Admin</a></li>
                        <li class="breadcrumb-item"><a href="{{route('pesan.index')}}" class="breadcrumb-link">Pesan</a></li>
                        <li class="breadcrumb-item"><a href="{{route('pesan.edit',$pesan->id)}}" class="breadcrumb-link">Edit Pesan</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <h3 class="text-center">Edit Pesan</h3>
            <form method="post" action="{{route('pesan.update',$pesan->id)}}">
            @csrf 
            @method('PATCH')
                <div class="form-group inp">
                    <label for="nama">Nama<span class="text-danger">*</span></label>
                    <div class="input">
                        <input type="text" name="nama" id="nama" autocomplete="off" class="inp" value="{{$pesan->nama}}" readonly> 
                    </div> 
                </div>
                <div class="form-group inp">
                    <label for="email">Email<span class="text-danger">*</span></label>
                    <div class="input">
                        <input type="text" name="email" id="email" autocomplete="off" class="inp" value="{{$pesan->email}}" readonly> 
                    </div> 
                </div>
                <div class="form-group">
                    <label for="masukan">Masukan<span class="text-danger">*</span></label>
                    <textarea id="summernote" name="deskripsi" readonly>{{$pesan->masukan}}</textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control">
                        <option value="aktif" {{(($pesan->status=='aktif')? 'selected' : '')}}>Aktif</option>
                        <option value="nonaktif" {{(($pesan->status=='nonaktif')? 'selected' : '')}}>Nonaktif</option>
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
    <!-- <script src="{{asset('backend/summernote/jquery-3.5.1.min.js')}}"></script> -->
    <!-- <script src="{{asset('backend/summernote/bootstrap.min.js')}}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script type="text/javascript" src="/js/froala/js/froala_editor.pkgd.min.js"></script>
    <script type="text/javascript" src="/js/froala/js/html2pdf.bundle.js"></script>
    <script type="text/javascript" src="/js/froala/js/codemirror.min.js"></script>
    <script type="text/javascript" src="/js/froala/js/xml.min.js"></script>
    <script id="language" src="/js/froala/js/languages/id.js"></script>
    <script src="{{asset('backend/js/jquery-ui.js')}}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
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
</script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
        placeholder: "Ketik disini .....",
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
