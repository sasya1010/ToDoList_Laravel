@extends('layouts.main')

@section('content')

<section id="hero" class="d-flex align-items-center">
<div class="container-fluid h-custom">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <h1 style="text-align: center; color: #ffff;">Edit Activity</h1>
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="tasks-update{{ $task->id }}" method="post">
          @csrf

          <div class="divider d-flex align-items-center my-3 ">
            <p class="text-center fw-bold mx-3 mb-0"></p>
          </div>
          <div class="form-outline mb-4">
            <span class="input-group-text" for="title" style="text-align: center">Title</span>
            <input type="text" class="form-control" placeholder="title activity" aria-label="title activity" id="title" name="title_act" value="{{ $task->title_act }}"required>
          </div>

          
          <div class="form-outline mb-3">
            <div class="input-group">
                <span class="input-group-text" for="desc">Describe</span>
                <textarea class="form-control" aria-label="describe your activity" id="desc" name="desc_act" required>{{ $task->desc_act }}</textarea>
              </div>
          </div>

          <div class="form-outline mb-3">
            <div class="input-group">
                <span class="input-group-text" for="date">Deadline</span>
                <input class="form-control" type="date" id="date" name="deadline" value="{{ (new DateTime($task->deadline))->format('Y-m-d') }}" required>
              </div>
          </div>

          <div class="form-outline mb-3">
            <div class="input-group">
                <span class="input-group-text" for="do">Status</span>
                <select name="status_act" id="do" class="form-control" required>
                    <option value="not finished yet" {{ $task->status_act === 'not finished yet' ? 'selected' : '' }}>Not Finished Yet</option>
                    <option value="finished" {{ $task->status_act === 'finished' ? 'selected' : '' }}>Finished</option>
                </select>
                
              </div>
          </div>

          <div class="form-outline mb-3">
            <div class="input-group">
                <span class="input-group-text" for="category">Category</span>
                <select name="category_id" id="category" value="{{ $task->name_cat }}">
                    <option value="{{ $task->category->id }}">{{ $task->category->name_cat }}</option>
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name_cat }}</option>
                    @endforeach
                </select>
              </div>
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