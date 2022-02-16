@extends('layouts.main')

@section('content')
    
    <form action="{{route('postcardStore')}}" method="POST">

        @method('POST');
        @csrf

        <label for="sender">Sender</label><br>
        <input type="text" name="sender"><br><br>
        <label for="address">Address</label><br>
        <input type="text" name="address"><br><br>
        <label for="text">Text</label><br>
        <input type="text" name="text"><br><br>

        <input class="btn-primary" type="submit" value="Create">





    </form>

@endsection