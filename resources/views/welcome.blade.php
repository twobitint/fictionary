@extends('layout')

@section('content')
    <form>
        <input
            name="room"
            size="4"
            value="{{ Str::random(4) }}"
            style="text-transform: uppercase;">
        <input type="submit" value="Join">
    </form>
@endsection
