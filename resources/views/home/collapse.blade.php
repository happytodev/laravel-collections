@extends('layouts.app')

@section('content')

    <h1>Method collapse() example</h1>
    <h2>Collection used</h2>
    @php
    echo '<h3>Complex</h3>';
    $collection->dump();

    echo "<h2>COLLAPSED</h2>";
    @endphp
    <code>dump($collection->collapse());</code>
    @php
    dump($collection->collapse());
    @endphp

@endsection
