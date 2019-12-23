@extends('layout.master')

@section('content')
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Naam</th>
                <th scope="col">Regio</th>
                <th scope="col">Sinds</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cateraars as $cateraar)
                <tr>
                    <th scope="row">{{$cateraar->id}}</th>
                    <td>
                        <a href="{{ route('cateraars.show', $cateraar->id) }}">{{$cateraar->naam}}</a>
                    </td>
                    <td>{{$cateraar->regio}}</td>
                    <td>{{$cateraar->created_at}}</td>
                </tr>  
            @endforeach
        </tbody>
    </table>
@endsection
