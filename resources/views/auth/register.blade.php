@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header bg-dark text-center text-white">{{ __('Register Form') }}</div>

                <div class="card-body ">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                     <div class="row">
                     <div class="col-md-6">
                        <div class="form-group ">
                           <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Full Name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                            
                                
                        <div class="col-lg-6">
                        <div class="form-group ">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                            
                                

                        

                        
                        
                       
                               
                        
                        
                        
                        
                        
                        
                        

                        <div class="col-md-6">
                        <div class="form-group ">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="col-md-6">
                        <div class="form-group">
                             <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        </div>
                        </div>
                        
                               
                        </div>
                        <div class="form-group row justify-content-center md-0">
                            <div class="col-md-8 offset-md-12">
                                <button type="submit" class="btn text-white  btn-md btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>

body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background: linear-gradient(to right, #0a346d, #1598ef);
    
}

.card{
    box-shadow: 0px 4px 8px 0px #757575;
    border-radius: 0px
}

.btn {
    display: block;
    width: 100%;
    border-radius: 30px;
    border: none;
    background: linear-gradient(to right, rgba(249, 0, 104, 1) 0%, rgba(247, 117, 24, 1) 100%);
    background: -webkit-linear-gradient(left, rgba(249, 0, 104, 1) 0%, rgba(247, 117, 24, 1) 100%)
}




</style>
                            
                               
                        
                       


                        


                            
                                


                           
                        
  
                               

                        


                       

                           
                               
                        
                            

                        


                            
                                
          
                        