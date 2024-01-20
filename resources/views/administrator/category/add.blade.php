@if(isset($category))
<form action="{{ URL::to('/admin/category/' . $category->id) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
    @method('PUT')
@else
<form action="{{ URL::to('/admin/category') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
@endif
    @csrf
<div class="row">
    <div class="col-md-6">
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid                        
                @enderror" placeholder="Nama" value="{{ isset($category)? $category->title : old('title') }}">
                @error('title') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror
            </div>               
            
            <div class="form-group">
                <label for="">Gambar Depan (377 x 291)</label>
                <input type="file" name="image_url" id="image_url" class="form-control @error('image_url') is-invalid                        
                @enderror" placeholder="Gambar" value={{ isset($category)? $category->image_url :old('image_url') }}>
                @error('image_url') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror        
                
                @if(isset($category))
                    <img src="{{ URL::to('storage/' .$category->image_url) }}"  width="20%" alt="">
                @endif
            </div>               
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ URL::to('/admin/category') }}" type="button" class="btn btn-warning">Kembali</a>
    </div>

    <div class="col-md-6">          
        <div class="form-group">
            <label for="">Urutan(tulis 0 jika tidak ditampilkan)</label>
            <input type="number" name="index" id="index" class="form-control @error('index') is-invalid                        
            @enderror" placeholder="Urutan" value="{{ isset($category)? $category->index : old('index') }}">
            @error('index') 
                <div class="invalid-feedback">
                {{ $message }}    
                </div>                   
            @enderror
        </div>              
    </div>
</div>
</form>