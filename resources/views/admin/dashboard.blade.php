@extends('master')
@section('content')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <div class="col-sm-6">
        </div>
      </div>
    </div>
  </div>


  <section class="content">
    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3 class="text-white">Add <br> Supervisor</h3>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{action('Admin\SupervisorController@add')}}" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3 class="text-white">Supervisor <br> List</h3>
            </div>
            <div class="icon">
              <i class="ion ion-android-contacts"></i>
            </div>
            <a href="{{action('Admin\SupervisorController@list')}}" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3 class="text-white">Third Year <br>Project</h3>
            </div>
            <div class="icon">
              <i class="ion ion-document-text"></i>
            </div>
            <a href="{{action('Admin\Third_Year_propoalController@third_project')}}" class="small-box-footer">  <i class="fas fa-arrow-circle-right text-white"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3 class="text-white">Final Year <br>Project</h3>
            </div>
            <div class="icon">
              <i class="ion ion-document-text"></i>
            </div>
            <a href="{{action('Admin\Final_Year_propoalController@final_project')}}" class="small-box-footer">  <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box" style="background-color: #cc7a00">
            <div class="inner">
              <h3 class="text-white">Third Year <br>Students</h3>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people"></i>
            </div>
            <a href="{{action('Admin\StudentController@third_student')}}" class="small-box-footer">  <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box" style="background-color: #339966">
            <div class="inner">
              <h3 class="text-white">Final Year <br>Students</h3>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people"></i>
            </div>
            <a href="{{action('Admin\StudentController@final_student')}}" class="small-box-footer">  <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
      </div>
</div>
@endsection