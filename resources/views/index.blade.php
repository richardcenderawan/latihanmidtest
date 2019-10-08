@extends('base')

@section('body')
<button > <a href="{{ route('todoNewForm') }}">Add</a> </button>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Deskripsi</th>
        <th>Status</th>
        <th>Keterangan aksi</th>
    </tr>
    @foreach ($todos as $todo)
    <tr>
        <td>{{$todo->id}}</td>
        <td>{{$todo->description}}</td>
        <td><?php if($todo->status == 0) echo"unfinish";
        else if($todo->status == 1) echo"finished"; ?>
        </td>
        <td><a href="{{ route('todoDelete',['id' => $todo->id]) }}"onclick="return confirm('Apakah Kamu Yakin?')">Delete</a> 
            <a href="{{ route('todoUpdate',['id' => $todo->id]) }}">Pilihan Edit</a></td>
    
    </tr>
    @endforeach
</table>
@endsection