@extends('master')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
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
        <form action="#" method="post">
          @csrf
        <div class="card-header">
          <a onclick="return confirm('Are You Sure To Delete All Proposals?')" href="{{action('Admin\DeleteAllController@final_project_delete_all')}}" type="button" class="btn btn-danger">Delete All</a>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0" style="overflow-x:auto;">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          No.
                      </th>
                      <th style="width: 20%">
                          Project Name
                      </th>
                      <th style="width: 36%">
                          Team Members
                      </th>
                      <th style="width: 10%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%" class="text-right">
                        Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($proposals as $row)
                  <tr>
                    <td>
                        {{$i++}}
                    </td>
                    <td>
                        <a>
                          {{$row->projectTitle}}
                        </a>
                    </td>
                    <td>
                      @foreach (json_decode($row->members) as $key => $item)
                          <div class="group">
                              <p style="
                              margin: 0;
                          "><b>Name:</b> {{$item->name}} &nbsp; <b>ID:</b>  {{$item->stdID}} </p>
                          </div>
                        @endforeach
                        
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-xs" href="{{action('Admin\Final_Year_propoalController@view_project',['id' => $row->id])}}">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-danger btn-xs" href="{{action('Admin\Final_Year_propoalController@delete',['id' => $row->id])}}">
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
        </form>
      </div>
    </section>
  </div>
@endsection