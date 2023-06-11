@extends('layouts.main')


<div class="container" style="margin-top: 120px;">
<h2 style="text-align: center;">Table Activities</h2> 
<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/tasks">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit" >Search</button>
                <div style="margin-left: 2%;">
                <a href="/task-add" class="btn btn-primary">Add New Task</a>
                 </div>
              </div>
        </form>
    </div>
</div>


@if ($task->count())
<a href="/"></a>
<table border="1" cellspacing="0" cellpadding="20" >
    <tr>
        <th>No</th>
        <th>Title Activties</th>
        <th>Deadline</th>
        <th>Status</th>
        <th>Categories</th>
        <th>Action</th>
    @foreach ($task as $ts)
    </tr>
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $ts->title_act }}</td>
            <td>{{ $ts->deadline }}</td>
            <td>{{ $ts->status_act }}</td>
            <td>{{ $ts->category->name_cat }}</td>
            <td>
                <a href="/task--{{ $ts->id }}" class="badge bg-info"><i class="bi bi-eye"></i></a>
                <a href="/task-edit{{ $ts->id }}"  class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                <a href="/task-delete{{ $ts->id }}" class="badge bg-danger" onclick="return confirm('Are You Sure Want To Delete This Data?')"><i class="bi bi-x-circle"></i></a>
            </td>
        </tr>
    @endforeach
@else
        <p class="text-center fs-4">No task found</p>
@endif

</table>
<br>

<div class="d-flex justify-content-end">
{{ $task->links() }}
</div>
</div>
<div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
  </div>
