<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body bg-primary">
                Selamat data {{  auth()->user()->name }} di halaman admin 😊
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <a href="{{ URL::to('/admin/receipt')}}">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-receipt"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">Booking</span>
                <span class="info-box-number">
                    2
                    <small>Booking</small>
                </span>
                </div>
                <!-- /.info-box-content -->
            </div>          
        </a> 
    </div>

    <div class="col-md-3">
        <a href="{{ URL::to('/admin/user') }}">        
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">Member</span>
                <span class="info-box-number">
                    4
                    <small>Member</small>
                </span>
                </div>
                <!-- /.info-box-content -->
            </div>    
        </a>        
    </div>    
</div>
