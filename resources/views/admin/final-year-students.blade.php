@extends('master')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Final Year Students</h1>
          </div>
          <div class="col-sm-12">
            @if(Session::has('message'))
                <p class="alert alert-success text-center">{{ Session::get('message') }}</p>
            @endif
            @if(Session::has('error'))
            <p class="alert alert-danger text-center">{{ Session::get('error') }}</p>
            @endif
          </div>
        </div>
      </div>
    </section>
  

    <section class="content">
  
      <div class="card">
        <div class="card-header">
          <a onclick="return confirm('Are You Sure To Delete All Students?')" href="{{action('Admin\DeleteAllStdController@final_student_delete_all')}}" type="button" class="btn btn-danger">Delete All</a>
  
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          No.
                      </th>
                      <th  style="width: 35% ">
                        Student Name
                      </th>
                      <th  style="width: 35% ">
                        Student ID
                    </th>
                      <th class="text-right" style="width: 20%">
                        Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                @php
                  $i =1;
                @endphp
                  @foreach ($students as $row)
                  <tr>
                    <td>
                      {{$i++}}
                    </td>
                    <td >
                        {{$row->name}}
                    </td>
                    <td >
                        {{$row->studentID}}
                  </td>
                    <td class="project-actions text-right">
                      <a class="btn btn-danger btn-sm" href="{{action('Admin\StudentController@delete',['id'=>$row->id])}}">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                       </a>
                    </td>
                </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
  </div>
@endsection