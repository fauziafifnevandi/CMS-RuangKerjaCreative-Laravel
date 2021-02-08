@if (isset($konfigurasi))
    {!! Form::hidden('id', $konfigurasi->id) !!}
@endif

<!--nama-->
@if ($errors->any())
<div class="form-group {{ $errors->has('nama') ? 'has-error' : 'has-success' }}">
@else
<div class="form-group">
@endif
     {!! Form::label('nama', 'Nama:', ['class' => 'control-label']) !!}
     {!! Form::text('nama', null, ['class' => 'form-control']) !!}
     @if ($errors->has('nama'))
        <span class="help-block">{{ $errors->first('nama') }}</span>
     @endif
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- logo -->
@if ($errors->any())
<div class="form-group {{ $errors->has('logo') ? 'has-error' : 'has-success' }}">
@else
<div class="form-group" >
@endif
    {!! Form::label('logo', 'Logo :') !!}<br>
    <img id="thumbnil" src="{{ asset('img/konfigurasi/logo/' . $konfigurasi->logo) }}" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
    {!! Form::file('logo',['onchange' => 'showMyImage(this)']) !!}
    @if ($errors->has('logo'))
        <span class="help-block">{{ $errors->first('logo') }}</span>
    @endif
    
    <!-- MENAMPILKAN konfigurasi -->
    @if (isset($logo))
        @if (isset($konfigurasi->Logo))
            <img src="{{ asset('img/konfigurasi/logo/' . $konfigurasi->logo) }}" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
        @endif
    @endif
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- favicon -->
@if ($errors->any())
<div class="form-group {{ $errors->has('favicon') ? 'has-error' : 'has-success' }}">
@else
<div class="form-group" >
@endif
    {!! Form::label('favicon', 'Facivon :') !!}<br>
    <img id="thumbnils" src="{{ asset('img/konfigurasi/favicon/' . $konfigurasi->favicon) }}" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
    {!! Form::file('favicon',['onchange' => 'showMyImages(this)']) !!}
    @if ($errors->has('favicon'))
        <span class="help-block">{{ $errors->first('favicon') }}</span>
    @endif
    
    <!-- MENAMPILKAN konfigurasi -->
    @if (isset($favicon))
        @if (isset($konfigurasi->favicon))
            <img src="{{ asset('img/konfigurasi/favicon/' . $konfigurasi->favicon) }}" class="img-fluid" style="max-width:100px;max-height:100px"><br/>
        @endif
    @endif
</div> 

<!--meta_keyword-->
@if ($errors->any())
<div class="form-group {{ $errors->has('meta_keyword') ? 'has-error' : 'has-success' }}">
@else
<div class="form-group">
@endif
     {!! Form::label('meta_keyword', 'Meta Keyword :', ['class' => 'control-label']) !!}
     {!! Form::text('meta_keyword', null, ['class' => 'form-control']) !!}
     @if ($errors->has('meta_keyword'))
        <span class="help-block">{{ $errors->first('meta_keyword') }}</span>
     @endif
</div>

<!--meta_description-->
@if ($errors->any())
<div class="form-group {{ $errors->has('meta_description') ? 'has-error' : 'has-success' }}">
@else
<div class="form-group">
@endif
     {!! Form::label('meta_description', 'Meta Keyword :', ['class' => 'control-label']) !!}
     {!! Form::text('meta_description', null, ['class' => 'form-control']) !!}
     @if ($errors->has('meta_description'))
        <span class="help-block">{{ $errors->first('meta_description') }}</span>
     @endif
</div>

<!-- facebook-->
@if ($errors->any())
<div class="form-group {{ $errors->has('facebook') ? 'has-error' : 'has-success' }}">
@else
<div class="form-group">
@endif
     {!! Form::label('facebook', 'Facebook :', ['class' => 'control-label']) !!}
     {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
     @if ($errors->has('facebook'))
        <span class="help-block">{{ $errors->first('facebook') }}</span>
     @endif
</div>

<!--instagram-->
@if ($errors->any())
<div class="form-group {{ $errors->has('instagram') ? 'has-error' : 'has-success' }}">
@else
<div class="form-group">
@endif
     {!! Form::label('instagram', 'Instagram :', ['class' => 'control-label']) !!}
     {!! Form::text('instagram', null, ['class' => 'form-control']) !!}
     @if ($errors->has('instagram'))
        <span class="help-block">{{ $errors->first('instagram') }}</span>
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
<script>
 function showMyImages(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {           
            var file = files[i];
            var imageType = /image.*/;     
            if (!file.type.match(imageType)) {
                continue;
            }           
            var img=document.getElementById("thumbnils");            
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
