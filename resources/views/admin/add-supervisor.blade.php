@extends('master')
@section('content')
<div class="content-wrapper">
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-9 m-5 mx-auto">
            <div class="card card-primary">
              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif
              <div class="card-header">
                <h3 class="card-title">Add Supervisor</h3>
              </div>
              <form method="post" action="{{action('Admin\SupervisorController@store')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputText1">Supervisor Name</label>
                    <input type="text" class="form-control" id="exampleInputText1" placeholder="Enter Name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter password" name="password">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
    
@endsection
