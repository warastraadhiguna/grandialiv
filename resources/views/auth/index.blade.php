<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer-navbar/">

    <link rel="icon" type="image/x-icon" href="{{ URL::to('/') }}/img/logo.png">  

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    

  </head>
  <body class="d-flex flex-column h-100">
<div class="container mt-lg-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-body">
                    <div class="text-center">
                        <strong>
                            <h4>LOGIN</h4>
                        </strong>
                    </div>
                    <p>Masukkan akses akun anda</p>

                    @if(session()->has("loginError"))
                    <div class="alert alert-danger">
                        {{ session("loginError") }}
                    </div>                        
                    @endif

                    <form action="{{ URL::to('/login') }}" method="POST" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid                        
                        @enderror" name="username" placeholder="Username"/>
                            @error('username') 
                                <div class="invalid-feedback">
                                {{ $message }}    
                                </div>                   
                            @enderror                            
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid                        
                        @enderror" name="password" placeholder="***********"/>
                        @error('password') 
                                <div class="invalid-feedback">
                                {{ $message }}    
                                </div>                   
                        @enderror                              
                        </div>          
                        <button class="btn btn-primary mt-4 px-2">Login <i class="fas fa-sign-in-alt"></i></button>              
                    </form>
                </div>
            </div>
        </div>           
        <div class="col-md-6">
            <img src="{{ asset('/img/login.png') }}" width="100%"/>
        </div>        
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


      
  </body>
</html>