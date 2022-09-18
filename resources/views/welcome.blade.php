@extends('components.head')
@section('main')
<div class="container py-3">
    <h3 class="font-bold text-2xl">Feedback <a href="/new_feedback" class="btn btn-sm btn-success">New</a></h3>
<table class="table">
    <thead>
    <tr>
        <th scope="col" style="width: 10%">S.no</th>
        <th scope="col" style="width: 15%">Name</th>
        <th scope="col" style="width: 23%">Email</th>
        <th scope="col" style="width: 32%;">Message</th>
        <th style="width: 15%"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($feedbacks as $abc)
    <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$abc->name}}</td>
        <td>{{$abc->email}}</td>
        <td>{{$abc->message}}</td>
        <td>
            <a href="/edit_feedback/{{$abc -> id}}" class="btn btn-sm btn-info">Edit</a>
            <a href="/delete_feedback/{{$abc->id}}" class="btn btn-sm btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection
