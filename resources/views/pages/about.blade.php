@extends('app')

@section('content')

    <h1>About</h1>

    @if (count($people))
        <h3>People I like:</h3>

        <ul>
            @foreach ($people as $person)
                <li>{{$person}}</li>
            @endforeach
        </ul>
    @endif

    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi consequatur delectus dolore ducimus fugiat
        hic  molestias, nemo nihil nobis quam quidem sapiente sint tempore ullam veniam, voluptas voluptatibus?
    </p>
@stop