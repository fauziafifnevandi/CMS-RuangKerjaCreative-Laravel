@if (isset($beranda))
    {!! Form::hidden('id', $beranda->id) !!}
@endif


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Gambar Beranda -->
@if ($errors->any())
<div class="form-group {{ $errors->has('gambar_beranda') ? 'has-error' : 'has-success' }}">
@else
<div class="form-group" >
@endif
    {!! Form::label('gambar_beranda', 'Gambar Beranda :') !!}<br>
    <img id="thumbnil" src="{{ asset('img/beranda/gambar/' . $beranda->gambar_beranda) }}" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
    {!! Form::file('gambar_beranda',['onchange' => 'showMyImage(this)']) !!}
    @if ($errors->has('gambar_beranda'))
        <span class="help-block">{{ $errors->first('gambar_beranda') }}</span>
    @endif
    
    <!-- Menampilkan Beranda -->
    @if (isset($gambar_beranda))
        @if (isset($beranda->gambar_beranda))
            <img src="{{ asset('img/beranda/gambar_beranda/' . $beranda->gambar_beranda) }}" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
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

