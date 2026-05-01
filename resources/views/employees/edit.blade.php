@extends('layouts.app')

@section('content')
<h2>Edit Employee</h2>
<form method="POST" action="{{ route('employees.update', $employee->id) }}">
    @csrf @method('PUT')
    <p>Name: <input type="text" name="name" value="{{ $employee->name }}"></p>
    <p>Email: <input type="email" name="email" value="{{ $employee->email }}"></p>
    <p>Department: <input type="text" name="department" value="{{ $employee->department }}"></p>
    <p>Position: <input type="text" name="position" value="{{ $employee->position }}"></p>
    <button type="submit">Update</button>
</form>
<a href="{{ route('employees.index') }}">Back</a>
@endsection