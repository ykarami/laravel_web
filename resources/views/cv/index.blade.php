@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liste des cv</h1>
            <div class="pull-right">
                <a href="{{url('cvs/create')}} " class="btn btn-success">New cv</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Titre</th><th>Présentation</th><th>Date de creation</th><th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $cvs as $cv)
                    <tr>
                        <td>{{$cv->titre}}</td>
                        <td>{{$cv->presentation}}</td>
                        <td>{{$cv->created_at}}</td>
                        <td>
                            <a href="" class=" btn btn-primary">Details</a>
                            <a href="" class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection