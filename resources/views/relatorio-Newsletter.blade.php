@extends('layouts.appPainel')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
    <table class="table table-hover table-striped table-bordered table-sm">
      <thead class="thead-dark">
        <tr>
          <th>Id</th>
          <th>Email</th>

        </tr>
      </thead>
      <tbody>

          @foreach ($newsletters as $newsletter)
            <tr>
            <td>{{$newsletter->id}}</td>
            <td>{{$newsletter->email}}</td>


            </tr>
          @endforeach

      </tbody>
    </table>

        </div>
    </div>
  </div>


  @endsection
