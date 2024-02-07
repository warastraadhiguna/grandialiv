@if(isset($user))
<form action="{{ URL::to('/admin/user/' . $user->id) }}" method="POST" autocomplete="off">
    @method('PUT')
@else
<form action="{{ URL::to('/admin/user') }}" method="POST" autocomplete="off">
@endif
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid                        
                @enderror" placeholder="Nama" value="{{ isset($user)? $user->name : old('name') }}">
                @error('name') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror
            </div>
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" id="username" class="form-control @error('username') is-invalid                        
                @enderror" placeholder="Username" value="{{ isset($user)? $user->username :old('username') }}">
                @error('username') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror                        
            </div>         

            <div class="form-group">
                <label for="">Role</label>
                <select name="role" id="role" class="form-control @error('role') is-invalid                        
                @enderror">
                    @if(auth()->user()->role == 'superadmin')
                    <option value="admin" {{ isset($user)? ("admin" == $user->role?"selected" : ""):"selected"  }}>Admin</option>                    
                    <option value="superadmin" {{  isset($user)? ("superadmin" == $user->role?"selected" : ""):""  }}>Superadmin</option>                        
                    @endif               
                </select>
                @error('role') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror
            </div>                        
            
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ URL::to('/admin/user') }}" type="button" class="btn btn-warning">Kembali</a>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid                        
                @enderror" placeholder="{{ isset($user)? "kosongi jika tidak mengubah" :"*********" }}">
                @error('password') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror                           
            </div>      
            <div class="form-group">
                <label for="">Konfirmasi Password</label>
                <input type="password" name="re_password" id="re_password" class="form-control @error('re_password') is-invalid                        
                    @enderror" placeholder="{{ isset($user)? "kosongi jika tidak mengubah" :"*********" }}">
                @error('re_password') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror  
            </div>    
            <div class="form-group">
                <label for="">Status</label>
                <select name="is_active" id="is_active" class="form-control @error('is_active') is-invalid                        
                @enderror">
                    <option value="1" {{ isset($user)? ("1" == $user->is_active?"selected" : ""):"selected"  }}>Aktif</option>
                    <option value="0" {{  isset($user)? ("0" == $user->is_active?"selected" : ""):""  }}>Non Aktif</option>
                </select>
                @error('is_active') 
                    <div class="invalid-feedback">
                    {{ $message }}    
                    </div>                   
                @enderror
            </div>              
        </div>    
    </div>
</form>