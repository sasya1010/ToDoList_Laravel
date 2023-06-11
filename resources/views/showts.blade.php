@extends('layouts.main')

@section('content')

<section id="hero" class="d-flex align-items-center">
<div class="card text-center m-auto">
  <div class="card-header" style="background-color: #72b0d0;color: #ffff;">
    {{ $task->category->name_cat }}
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ $task->title_act }}</h5>
    <p class="card-text">{{ $task->desc_act }}</p>
    <a href="#" class="btn" style="background-color: #72b0d0; color: #ffff;">Finished!</a>
  </div>
  <div class="card-footer text-body-secondary" style="color: #6f6f6f;">
    {{ $task->deadline }}
  </div>
</div>
</section>