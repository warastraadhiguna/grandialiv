@include('sweetalert::alert')
<form action="{{ URL::to('/admin/about/' . $company->id) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="row">
        <div class="col-md-12">
                <div class="form-group">
                    <label for="">Gambar Depan</label>
                    <input type="file" name="about_url" id="about_url" class="form-control @error('about_url') is-invalid                        
                    @enderror" placeholder="Gambar" value={{ isset($company)? $company->about_url :old('about_url') }}>
                    @error('about_url') 
                        <div class="invalid-feedback">
                        {{ $message }}    
                        </div>                   
                    @enderror        
                    
                    @if(isset($company))
                        <img src="{{ URL::to('storage/' .$company->about_url) }}"  width="20%" alt="">
                    @endif
                </div>           
                <div class="form-group">
                    <label for="">Konten</label>
                    <textarea name="about_contain"  class="summernote form-control @error('about_contain') is-invalid                        
                    @enderror">{{ isset($company)? $company->about_contain :old('about_contain') }}</textarea>
                    @error('about_contain') 
                        <div class="invalid-feedback">
                        {{ $message }}    
                        </div>                   
                    @enderror                        
                </div>                   
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</form>