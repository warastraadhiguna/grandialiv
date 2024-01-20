@include('sweetalert::alert')

<div class="card">
  <div class="card-body">
    <form action="{{ URL::to('/admin/company-type/' . $company->id) }}" method="POST" autocomplete="off">
        @method('PUT')    
        @csrf
        <div class="form-group">
          <label for="">Judul Tipe</label>
          <input type="text" class="form-control" name="type_title" value="{{ $company->type_title }}">   
          <label for="" class="mt-3">Catatan Tipe</label>      
          <textarea name="type_note" class="form-control">{{ $company->type_note }}</textarea>
        </div>  

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</div>

<a href="{{ URL::to('/admin/category/create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus" aria-hidden="true"></i> Tambah</a>  

<table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
          <th width="5%">No</th>
          <th width="30%">Judul</th>        
          <th width="10%">Urutan</th>                              
          <th>Gambar</th>                        
          <th width="20%">Action</th> 
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category)
      <tr>
          <td class="align-middle">{{ $loop->iteration }}</td>
          <td class="align-middle">{{ $category->title  }}</td>
          <td class="align-middle">{{ $category->index   }}</td>      
          <td class="align-middle"><img src="{{ URL::to('storage/' .$category->image_url) }}"  width="35%" alt=""></td>                 
          <td class="align-middle">
              <div class="d-flex">
                  <a href="{{ URL::to('/admin/category/' . $category->id . "/edit") }}" class="btn btn-success mx-2  btn-sm"> <i class="fas fa-edit"></i> Edit</a>  
                  
                  <form action="{{ URL::to('/admin/category/' . $category->id) }}" method="POST">
                      @method('delete')
                      @csrf
                      <button onclick="return confirm('Anda yakin menghapus data ini?')" type="submit" class="btn btn-danger  btn-sm"><i class="fas fa-times"></i> Hapus</button>      
                  </form>
              </div>
      
          </td>                                    
      </tr>            
      @endforeach     
    </tbody>
</table>