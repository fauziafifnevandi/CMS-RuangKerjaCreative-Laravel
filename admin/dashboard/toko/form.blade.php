@if (isset($toko))
    {!! Form::hidden('id', $toko->id) !!}
@endif

<!-- Nama -->
@if ($errors->any())
<div class="form-group {{ $errors->has('toko') ? 'has-error' : 'has-success' }}">
@else
<div class="form-group">
@endif
     {!! Form::label('nama', 'Nama :', ['class' => 'control-label']) !!}
     {!! Form::text('nama', null, ['class' => 'form-control']) !!}
     @if ($errors->has('nama'))
        <span class="help-block">{{ $errors->first('nama') }}</span>
     @endif
</div>

<!-- link -->
@if ($errors->any())
<div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : 'has-success' }}">
@else
<div class="form-group">
@endif
     {!! Form::label('link', 'link toko online :', ['class' => 'control-label']) !!}
     {!! Form::text('link', null, ['class' => 'form-control']) !!}
     @if ($errors->has('link'))
        <span class="help-block">{{ $errors->first('link') }}</span>
     @endif
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Gambar Toko -->
@if ($errors->any())
<div class="form-group {{ $errors->has('gambar_toko') ? 'has-error' : 'has-success' }}">
@else
<div class="form-group" >
@endif
    {!! Form::label('gambar_toko', 'Gambar :') !!}<br>
    <img id="thumbnil" src="{{ asset('img/toko/gambar/' . $toko->gambar_toko) }}" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
    {!! Form::file('gambar_toko',['onchange' => 'showMyImage(this)']) !!}
    @if ($errors->has('gambar_toko'))
        <span class="help-block">{{ $errors->first('gambar_toko') }}</span>
    @endif
    
    <!-- MENAMPILKAN Koleksi -->
    @if (isset($gambar_toko))
        @if (isset($toko->gambar_toko))
            <img src="{{ asset('img/toko/gambar/' . $toko->gambar_toko) }}" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
        @endif
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
