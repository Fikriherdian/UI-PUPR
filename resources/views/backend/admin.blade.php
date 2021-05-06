@extends('backend.include.masteradmin')

@section('main-content')
<div class="row"> 
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Blank Pageheader </h2>
            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Admin</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <h3 class="text-center">Content goes here!</h3>
        <!-- <textarea name="ckeditor" id="ckeditor" cols="30" rows="10"></textarea> -->
        <!-- <textarea id="mytextarea">Hello, World!</textarea> -->
        <!-- <div id="editor"></div> -->
        <div id="froala-editor"></div>
    </div>
</div>
@endsection
@push('styles')
    <link href="/js/froala/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="/js/froala/css/codemirror.min.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css"> -->
@endpush
@push('scripts')
<!-- <script type="text/javascript" src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script> -->
<script type="text/javascript" src="/js/froala/js/froala_editor.pkgd.min.js"></script>
<script type="text/javascript" src="/js/froala/js/html2pdf.bundle.js"></script>
<script type="text/javascript" src="/js/froala/js/codemirror.min.js"></script>
<script type="text/javascript" src="/js/froala/js/xml.min.js"></script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script> -->

<!-- The script below imports your chosen language for the editor --> 
<script id="language" src="/js/froala/js/languages/id.js"></script>
<script>
      // The following function creates a new instance of the Froala Editor and inserts it into the DIV element created above with id="froala-editor"
      new FroalaEditor('div#froala-editor',
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

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endpush
