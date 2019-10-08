@extends('base')

@section('body')
<dl>
    <dt>Input Nama Anda</dt>
    <dd>{{$komentar->nama}}</dd>
    <dt>Input Komentar Anda</dt>
    <dd>{{$komentar->komentar}}</dd>

</dl>
@endsection