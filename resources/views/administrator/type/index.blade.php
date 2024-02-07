@include('sweetalert::alert')

<a href="{{ URL::to('/admin/type/create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus" aria-hidden="true"></i> Tambah</a>  

<table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
          <th width="5%">No</th>
          <th width="10%">Type</th>              
          <th width="10%">Judul</th>   
          <th width="10%">Urutan</th>                              
          <th>Gambar</th>                        
          <th width="20%">Action</th> 
      </tr>
    </thead>
    <tbody>
      @foreach($types as $type)
      <tr>
          <td class="align-middle">{{ $loop->iteration }}</td>
          <td class="align-middle">{{ $type->category->title   }}</td>               
          <td class="align-middle">{{ $type->title  }}</td>           
          <td class="align-middle">{{ $type->index   }}</td>      
          <td class="align-middle"><img src="{{ URL::to('storage/' .$type->image_url) }}"  width="35%" alt=""></td>                 
          <td class="align-middle">
              <div class="d-flex">
                  <a href="{{ URL::to('/admin/type/' . $type->id . "/edit") }}" class="btn btn-success mx-2  btn-sm"> <i class="fas fa-edit"></i> Edit</a>  
                  
                  <form action="{{ URL::to('/admin/type/' . $type->id) }}" method="POST">
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