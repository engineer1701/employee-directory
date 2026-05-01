@extends('layouts.app')

@section('content')
<h2>Add Employee</h2>
@if($errors->any())
    <ul class="error">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="POST" action="{{ route('employees.store') }}">
    @csrf
    <p>Name: <input type="text" name="name" value="{{ old('name') }}"></p>
    <p>Email: <input type="email" name="email" value="{{ old('email') }}"></p>
    <p>Department: <input type="text" name="department" value="{{ old('department') }}"></p>
    <p>Position: <input type="text" name="position" value="{{ old('position') }}"></p>
    <button type="submit">Add Employee</button>
</form>
@endsection