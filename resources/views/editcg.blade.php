@extends('layouts.main')

@section('content')

<section id="hero" class="d-flex align-items-center">
<div class="container-fluid h-custom">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <h1 style="text-align: center; color: #ffff;">Edit Category</h1>
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="category-update{{ $category->id }}" method="post">
          @csrf

          <div class="divider d-flex align-items-center my-3 ">
            <p class="text-center fw-bold mx-3 mb-0"></p>
          </div>
          <div class="form-outline mb-4">
            <span class="input-group-text" for="title" style="text-align: center">Name of your Category</span>
            <input type="text" class="form-control" placeholder="title activity" aria-label="title activity" id="title" name="name_cat" value="{{ $category->name_cat }}"required>
          </div>

          <div class="d-flex justify-content-between align-items-center">
           
            <div class="form-check mb-0">

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Update</button>
          </div>

        </form>
      </div>
  </div>
</div>
</section>