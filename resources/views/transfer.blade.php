@extends('layout');
@section('content')

<div class="content">
<div class="title">
    Transfer
</div>

<form method="POST" action="{{ route('transfer.store') }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  <input type="text" name="domainName" placeholder="Domain Name">
  <input type="text" name="dbName" placeholder="Database Name">
  <input type="user" name="userName" placeholder="User Name">
  <input type="password" name="dbPassword" placeholder="password">
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


@endsection('content');
