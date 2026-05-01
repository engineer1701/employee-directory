@extends('layouts.app')

@section('content')
<h2>Employee Directory</h2>
@if(session('success'))
    <p class="success">{{ session('success') }}</p>
@endif
<table>
    <tr>
        <th>Name</th><th>Email</th><th>Department</th><th>Position</th><th>Actions</th>
    </tr>
    @foreach($employees as $employee)
    <tr>
        <td>{{ $employee->name }}</td>
        <td>{{ $employee->email }}</td>
        <td>{{ $employee->department }}</td>
        <td>{{ $employee->position }}</td>
        <td>
            <a href="{{ route('employees.edit', $employee->id) }}">Edit</a>
            <form method="POST" action="{{ route('employees.destroy', $employee->id) }}" style="display:inline">
                @csrf @method('DELETE')
                <button onclick="return confirm('Delete?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection