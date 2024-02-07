@if(isset($type))
<form action="{{ URL::to('/admin/type/' . $type->id) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
    @method('PUT')
@else
<form action="{{ URL::to('/admin/type') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
@endif
    @csrf
<div class="row">
    <div class="col-md-6">
            <div class="form-group">
                <label for="">Status</label>
                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid                        
                @enderror">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ isset($type)? ($category->id == $type->category_id?"selected" : ""):"selected"  }}>{{ $category->title }}</option>
                @endforeach
                </select>
                @error('category_id') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror
            </div> 

            <div class="form-group">
                <label for="">Judul</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid                        
                @enderror" placeholder="Judul" value="{{ isset($type)? $type->title : old('title') }}">
                @error('title') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror
            </div>         
            
            <div class="form-group">
                <label for="">Ukuran</label>
                <input type="text" name="size" id="size" class="form-control @error('size') is-invalid                        
                @enderror" placeholder="Ukuran" value="{{ isset($type)? $type->size : old('size') }}">
                @error('size') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror
            </div>             
            
            <div class="form-group">
                <label for="">Luas bangunan</label>
                <input type="number" name="building_size" id="building_size" class="form-control @error('building_size') is-invalid                        
                @enderror" placeholder="Luas bangunan" value="{{ isset($type)? $type->building_size : old('building_size') }}">
                @error('building_size') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror
            </div>  

            <div class="form-group">
                <label for="">Luas tanah</label>
                <input type="number" name="land_size" id="land_size" class="form-control @error('land_size') is-invalid                        
                @enderror" placeholder="Luas tanah" value="{{ isset($type)? $type->land_size : old('land_size') }}">
                @error('land_size') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror
            </div>        
      
            <div class="form-group">
                <label for="">Harga</label>
                <input type="number" name="price" id="price" class="form-control @error('price') is-invalid                        
                @enderror" placeholder="Harga" value="{{ isset($type)? $type->price : old('price') }}">
                @error('price') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror
            </div>                    

            <div class="form-group">
                <label for="">Gambar Depan (377 x 291)</label>
                <input type="file" name="image_url" id="image_url" class="form-control @error('image_url') is-invalid                        
                @enderror" placeholder="Gambar" value={{ isset($type)? $type->image_url :old('image_url') }}>
                @error('image_url') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror        
                
                @if(isset($type))
                    <img src="{{ URL::to('storage/' .$type->image_url) }}"  width="20%" alt="">
                @endif
            </div>               
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ URL::to('/admin/type') }}" type="button" class="btn btn-warning">Kembali</a>
    </div>

    <div class="col-md-6">          
        <div class="form-group">
            <label for="">Urutan(tulis 0 jika tidak ditampilkan)</label>
            <input type="number" name="index" id="index" class="form-control @error('index') is-invalid                        
            @enderror" placeholder="Urutan" value="{{ isset($type)? $type->index : old('index') }}">
            @error('index') 
                <div class="invalid-feedback">
                {{ $message }}    
                </div>                   
            @enderror
        </div>     
        <div class="form-group">
            <label for="">Kamar Tidur</label>
            <input type="number" name="bedroom" id="bedroom" class="form-control @error('bedroom') is-invalid                        
            @enderror" placeholder="Kamar Tidur" value="{{ isset($type)? $type->bedroom : old('bedroom') }}">
            @error('bedroom') 
                <div class="invalid-feedback">
                {{ $message }}    
                </div>                   
            @enderror
        </div>  
        <div class="form-group">
            <label for="">Kamar Mandi</label>
            <input type="number" name="bathroom" id="bathroom" class="form-control @error('bathroom') is-invalid                        
            @enderror" placeholder="Kamar Mandi" value="{{ isset($type)? $type->bathroom : old('bathroom') }}">
            @error('bathroom') 
                <div class="invalid-feedback">
                {{ $message }}    
                </div>                   
            @enderror
        </div>          
        <div class="form-group">
            <label for="">Carport</label>
            <input type="number" name="carport" id="carport" class="form-control @error('carport') is-invalid                        
            @enderror" placeholder="Carport" value="{{ isset($type)? $type->carport : old('carport') }}">
            @error('carport') 
                <div class="invalid-feedback">
                {{ $message }}    
                </div>                   
            @enderror
        </div>      
        <div class="form-group">
            <label for="">Bike</label>
            <input type="number" name="bike" id="bike" class="form-control @error('bike') is-invalid                        
            @enderror" placeholder="Bike" value="{{ isset($type)? $type->bike : old('bike') }}">
            @error('bike') 
                <div class="invalid-feedback">
                {{ $message }}    
                </div>                   
            @enderror
        </div>     
            <div class="form-group">
                <label for="">Catatan</label>
                <textarea name="note" id="note" class="form-control @error('note') is-invalid                        
                @enderror" placeholder="Catatan">{{ isset($type)? $type->note : old('note') }}</textarea>
                @error('note') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror
            </div>        
    </div>
</div>
</form>