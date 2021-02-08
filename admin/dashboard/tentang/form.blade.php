@if (isset($beranda))
    {!! Form::hidden('id', $beranda->id) !!}
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


<!-- link -->
@if ($errors->any())
<div class="form-group {{ $errors->has('link') ? 'has-error' : 'has-success' }}">
@else
<div class="form-group">
@endif
     {!! Form::label('link', 'Link :', ['class' => 'control-label']) !!}
     {!! Form::text('link', null, ['class' => 'form-control']) !!}
     @if ($errors->has('link'))
        <span class="help-block">{{ $errors->first('link') }}</span>
     @endif
</div>

<!-- isi -->
@if ($errors->any())
<div class="form-group {{ $errors->has('isi') ? 'has-error' : 'has-success' }}">
@else
<div class="form-group">
@endif
     {!! Form::label('isi', 'Isi :', ['class' => 'control-label']) !!}
     {!! Form::textarea ('isi', null, ['class' => 'form-control']) !!}
     @if ($errors->has('isi'))
        <span class="help-block">{{ $errors->first('isi') }}</span>
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

