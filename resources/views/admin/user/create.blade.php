@extends('layouts.index')

@section('content')
<h1>Add new user</h1>
<a href="/" class="btn btn-secondary">back</a>
<form method="post" action="{{ route('user.store') }}" class="w-50 mx-auto my-5">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="age">Age</label>
      <input type="number" class="form-control" id="age" name="age" placeholder="Enter age">
    </div>
    <div class="form-group">
      <label for="phone">phone</label>
      <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter phone">
    </div>
    <div class="form-group">
      <label for="email">email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="nickname">nickname</label>
      <input type="nickname" class="form-control" id="nickname" name="nickname" placeholder="Enter nickname">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection