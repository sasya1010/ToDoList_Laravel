@extends('layouts.hal')

<style>
  .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
</style>


<br>
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="/register" method="post">
          @csrf
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-center mt-20">
            <h1 class="lead fw-normal mb-0 me-3"><b>Registrasion Form</b></h1>
          </div>

          <div class="divider d-flex align-items-center my-3 ">
            <p class="text-center fw-bold mx-3 mb-0"></p>
          </div>


          <div class="form-outline mb-4">
            <input type="text" id="name" class="form-control form-control-lg @error('name') is-invalid @enderror"
              placeholder="Enter your name" name="name" required/>
            <label class="form-label" for="name">Name</label>
            @error('name')
              <div class="invalid-feedback">
                 {{ $message }}
              </div>
            @enderror
          </div>

      
          <div class="form-outline mb-4">
            <input type="email" id="email" class="form-control form-control-lg  @error('email') is-invalid @enderror"
              placeholder="Enter a valid email address" name="email" required/>
            <label class="form-label" for="email">Email address</label>
            @error('email')
              <div class="invalid-feedback">
                 {{ $message }}
              </div>
            @enderror
          </div>

          
          <div class="form-outline mb-3">
            <input type="password" id="password" class="form-control form-control-lg  @error('password') is-invalid @enderror"
              placeholder="Enter password" name="password" required/>
            <label class="form-label" for="password">Password</label>
            @error('password')
              <div class="invalid-feedback">
                 {{ $message }}
              </div>
            @enderror
          </div>

          <div class="d-flex justify-content-between align-items-center">
           
            <div class="form-check mb-0">

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
  </div>
