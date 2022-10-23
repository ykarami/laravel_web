@extends('layouts.master')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-offset-4 ">
            <form action="{{url('cvs')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Titre : </label>
                    <input type="text" name="titre" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Présentation : </label>
                    <textarea name="presentation" id="" class="form-control"></textarea>
                </div>
                
                <br>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-success" value="Enregitrer">
                </div>
                

            </form>
        </div>
    </div>
</div>

@endsection