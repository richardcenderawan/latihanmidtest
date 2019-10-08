@extends('base')

@section('body')
    <form action="{{ route('todoUpdate',['id'=>$todo->id]) }}" method="post">
        @csrf
        <div>
            <label>Deskripsi Anda : </label>
            <input type="text" name="Deskripsi" value="{{$todo->description}}">
        </div>
        <div>
            <label>Status Anda : </label>
            <input type="checkbox" name="Status" <?php if ($todo->status) echo "Selesai/finish";?> >Check = Selesai (finish) Uncheck = Tidak Selesai(tidak finish)
            
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
@endsection