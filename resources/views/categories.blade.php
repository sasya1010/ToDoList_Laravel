@extends('layouts.main')

<div class="container" style="margin-top: 120px;">
    <h2 style="text-align: center;">Categories</h2>
    <br>
    <div class="row justify-content-center col-md-6">
    <a href="/category-add" class="btn btn-primary">Add New Task</a>
    </div>
    <br>
    <table border="1" cellspacing="0" cellpadding="15" class="justify-content-center">
        <tr>
            <th>No</th>
            <th>Name of Categories</th>
            <th>Action</th>
            @php
            $i = 1;
            @endphp
        @foreach ($categories as $cat)
        </tr>
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $cat->name_cat}}</td>
                <td>
                    <a href="/category-edit{{ $cat->id }}"  class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                    <a href="/category-delete{{ $cat->id }}" class="badge bg-danger" onclick="return confirm('Are You Sure Want To Delete This Data?')"><i class="bi bi-x-circle"></i></a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
    <br><br><br><br><br><br><br><br><br><br>
    <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
  </div>