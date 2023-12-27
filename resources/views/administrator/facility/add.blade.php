@if(isset($facility))
<form action="{{ URL::to('/admin/facility/' . $facility->id) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
    @method('PUT')
@else
<form action="{{ URL::to('/admin/facility') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
@endif
    @csrf
<div class="row">
    <div class="col-md-6">
            <div class="form-group">
                <label for="">Judul</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid                        
                @enderror" placeholder="Judul" value="{{ isset($facility)? $facility->title : old('title') }}">
                @error('title') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror
            </div>               
            
            <div class="form-group">
                <label for="">Icon <a class='link btn-link' target="_blank" href='https://icons.getbootstrap.com/'>(Klik di sini)</a></label>
                <input type="text" name="icon" id="icon" class="form-control @error('icon') is-invalid                        
                @enderror" placeholder="Icon" value="{{ isset($facility)? $facility->icon : old('icon') }}">
                @error('icon') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror
            </div>            
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ URL::to('/admin/facility') }}" type="button" class="btn btn-warning">Kembali</a>
    </div>

    <div class="col-md-6">          
            <div class="form-group">
                <label for="">Urutan(tulis 0 jika tidak ditampilkan)</label>
                <input type="number" name="index" id="index" class="form-control @error('index') is-invalid                        
                @enderror" placeholder="Urutan" value="{{ isset($facility)? $facility->index : old('index') }}">
                @error('index') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror
            </div>        
            <div class="form-group">
                <label for="">Note</label>
                <textarea  name="note" id="note" class="form-control @error('note') is-invalid                        
                @enderror" placeholder="Note" value="">{{ isset($facility)? $facility->note : old('index') }}</textarea>
                @error('note') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror
            </div>                    
    </div>
</div>
</form>