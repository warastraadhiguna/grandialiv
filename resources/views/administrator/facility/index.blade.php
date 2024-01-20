@include('sweetalert::alert')

<div class="card">
  <div class="card-body">
    <form action="{{ URL::to('/admin/company-facility/' . $company->id) }}" method="POST" autocomplete="off">
        @method('PUT')    
        @csrf
        <div class="form-group">
          <label for="">Judul Facilitas</label>
          <input type="text" class="form-control" name="facility_title" value="{{ $company->facility_title }}">   
          <label for="" class="mt-3">Catatan Facilitas</label>      
          <textarea name="facility_note" class="form-control">{{ $company->facility_note }}</textarea>
        </div>  

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</div>

<a href="{{ URL::to('/admin/facility/create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus" aria-hidden="true"></i> Tambah</a>  


  <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="10%">Judul</th>        
                        <th width="10%">Urutan</th>                              
                        <th>Gambar</th>                         
                        <th width="20%">Action</th> 
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($facilities as $facility)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $facility->title  }}</td>
                        <td class="align-middle">{{ $facility->index   }}</td>      
                        <td class="align-middle"><img src="{{ URL::to('storage/' .$facility->image_url) }}"  width="35%" alt=""></td>                 
                        <td class="align-middle">
                            <div class="d-flex">
                                <a href="{{ URL::to('/admin/facility/' . $facility->id . "/edit") }}" class="btn btn-success mx-2  btn-sm"> <i class="fas fa-edit"></i> Edit</a>  
                                
                                <form action="{{ URL::to('/admin/facility/' . $facility->id) }}" method="POST">
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