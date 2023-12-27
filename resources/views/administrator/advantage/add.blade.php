@if(isset($advantage))
<form action="{{ URL::to('/admin/advantage/' . $advantage->id) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
    @method('PUT')
@else
<form action="{{ URL::to('/admin/advantage') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
@endif
    @csrf
<div class="row">
    <div class="col-md-6">
            <div class="form-group">
                <label for="">Judul</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid                        
                @enderror" placeholder="Judul" value="{{ isset($advantage)? $advantage->title : old('title') }}">
                @error('title') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror
            </div>               
            
            <div class="form-group">
                <label for="">Gambar Depan (377 x 291)</label>
                <input type="file" name="image_url" id="image_url" class="form-control @error('image_url') is-invalid                        
                @enderror" placeholder="Gambar" value={{ isset($advantage)? $advantage->image_url :old('image_url') }}>
                @error('image_url') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror        
                
                @if(isset($advantage))
                    <img src="{{ URL::to('storage/' .$advantage->image_url) }}"  width="20%" alt="">
                @endif
            </div>               
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ URL::to('/admin/advantage') }}" type="button" class="btn btn-warning">Kembali</a>
    </div>

    <div class="col-md-6">          
            <div class="form-group">
                <label for="">Urutan(tulis 0 jika tidak ditampilkan)</label>
                <input type="number" name="index" id="index" class="form-control @error('index') is-invalid                        
                @enderror" placeholder="Urutan" value="{{ isset($advantage)? $advantage->index : old('index') }}">
                @error('index') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror
            </div>        
            <div class="form-group">
                <label for="">Note</label>
                <textarea  name="note" id="note" class="form-control @error('note') is-invalid                        
                @enderror" placeholder="Note" value="">{{ isset($advantage)? $advantage->note : old('index') }}</textarea>
                @error('note') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror
            </div>                    
    </div>
</div>
</form>