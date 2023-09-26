@extends('layouts.app')

@section('content')
    <h1>All Supplications</h1>
    <ul>
        @foreach ($supplications as $supplication)
            <li>
                {{ $supplication->text }}
                <form action="{{ route('user_counts', ['supplication_id' => $supplication->id]) }}" method="post">
                    @csrf
                    <button class="add-to-supplication_views-btn" type="submit">Count</button>
                </form>
                
            </li>
        @endforeach
    </ul>
@endsection
