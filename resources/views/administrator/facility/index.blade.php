@include('sweetalert::alert')

<a href="{{ URL::to('/admin/facility/create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus" aria-hidden="true"></i> Tambah</a>  


  <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="10%">Judul</th>        
                        <th width="10%">Urutan</th>    
                        <th>Note</th>                                                     
                        <th>Icon</th>                        
                        <th width="20%">Action</th> 
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($facilities as $facility)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $facility->title  }}</td>
                        <td class="align-middle">{{ $facility->index   }}</td>      
                        <td class="align-middle">{{ $facility->note }}</td>
                        <td class="align-middle">{{ $facility->icon }}</td>                 
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