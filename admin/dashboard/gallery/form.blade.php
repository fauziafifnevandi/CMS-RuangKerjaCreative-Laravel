@if (isset($gallery))
    {!! Form::hidden('id', $gallery->id) !!}
@endif

<!-- judul -->
@if ($errors->any())
<div class="form-group {{ $errors->has('judul') ? 'has-error' : 'has-success' }}">
@else
<div class="form-group">
@endif
     {!! Form::label('judul', 'Judul:', ['class' => 'control-label']) !!}
     {!! Form::text('judul', null, ['class' => 'form-control']) !!}
     @if ($errors->has('judul'))
        <span class="help-block">{{ $errors->first('judul') }}</span>
     @endif
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- gambar_gallery -->
@if ($errors->any())
<div class="form-group {{ $errors->has('gambar_gallery') ? 'has-error' : 'has-success' }}">
@else
<div class="form-group" >
@endif
    {!! Form::label('gambar_gallery', 'Sampul Gallery :') !!}<br>
    <img id="thumbnil" src="{{ asset('img/gallery/gambar/' . $gallery->gambar_gallery) }}" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
    {!! Form::file('gambar_gallery',['onchange' => 'showMyImage(this)']) !!}
    @if ($errors->has('gambar_gallery'))
        <span class="help-block">{{ $errors->first('gambar_gallery') }}</span>
    @endif
    
    <!-- MENAMPILKAN gallery -->
    @if (isset($gambar_gallery))
        @if (isset($gallery->gambar_gallery))
            <img src="{{ asset('img/gallery/gambar_gallery/' . $gallery->gambar_gallery) }}" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
        @endif
    @endif
</div>

<!--konten -->
@if ($errors->any())
<div class="form-group {{ $errors->has('konten') ? 'has-error' : 'has-success' }}">
@else
<div class="form-group">
@endif
     {!! Form::label('konten', 'konten:', ['class' => 'control-label']) !!}
     {!! Form::textarea('konten', null, ['class' => 'form-control', 'id' =>'editor' ,'name' =>'konten']) !!}
     @if ($errors->has('konten'))
        <span class="help-block">{{ $errors->first('konten') }}</span>
     @endif
</div>
<!-- SUBMIT -->
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
<script>
 function showMyImage(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {           
            var file = files[i];
            var imageType = /image.*/;     
            if (!file.type.match(imageType)) {
                continue;
            }           
            var img=document.getElementById("thumbnil");            
            img.file = file;    
            var reader = new FileReader();
            reader.onload = (function(aImg) { 
                return function(e) { 
                    aImg.src = e.target.result; 
                }; 
            })(img);
            reader.readAsDataURL(file);
        }    
    }
</script>

<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
</script>
<script>
    CKEDITOR.replace( 'editor' , options);
</script>
