@extends('layouts.main')
@section('content')
<div class="row">
              <div class="col-md-12">
                <!-- start: TABLE WITH IMAGES PANEL -->
                <div class="panel panel-white">
                  <div class="panel-heading">
                    <h4 class="panel-title">Striped <span class="text-bold">rows</span></h4>
                    <div class="panel-tools">                   
                      <div class="dropdown">
                      <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                        <i class="fa fa-cog"></i>
                      </a>
                      <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                        <li>
                          <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                        </li>
                        <li>
                          <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
                        </li>
                        <li>
                          <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
                        </li>
                        <li>
                          <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                        </li>                   
                      </ul>
                      </div>
                      <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                    </div>
                  </div>
                  <div class="panel-body">
                    <p>
                      Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.
                    </p>
                    <table class="table table-striped table-hover" id="sample-table-2">
                      <thead>
                        <tr>
                          <th class="center">
                          <div class="checkbox-table">
                            <label>
                              <input type="checkbox" class="flat-grey selectall">
                            </label>
                          </div></th>
                          <th class="center">Photo</th>
                          <th>Full Name</th>
                          <th class="hidden-xs">Role</th>
                          <th class="hidden-xs">Email</th>
                          <th class="hidden-xs">Phone</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($users as $user)
                        <tr>
                          <td class="center">
                          <div class="checkbox-table">
                            <label>
                              <input type="checkbox" class="flat-grey foocheck">
                            </label>
                          </div></td>
                          <td class="center"><img src="{{ url('images/'.$user->image) }}" alt="image" width="50px" height ="50px"/></td>
                          <td>{{ $user->name}}</td>
                          <td class="hidden-xs">{{ $user->role}}</td>
                          <td class="hidden-xs">{{ $user->email}}</td>
                          <td class="hidden-xs">(641)-734-4763</td>
                          <td class="center">
                          <div class="visible-md visible-lg hidden-sm hidden-xs">
                           <form class="right" method="POST" action="{{ route('user.destroy', $user->id) }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">
                              <a href="{{ url('user') }}/{{$user->id}}/edit" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                            <button type="submit" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></button>
                        </form>  
                          </div>
                          <div class="visible-xs visible-sm hidden-md hidden-lg">
                            <div class="btn-group">
                              <a class="btn btn-green dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                <i class="fa fa-cog"></i> <span class="caret"></span>
                              </a>
                              <ul role="menu" class="dropdown-menu pull-right dropdown-dark">
                                <li>
                                  <a role="menuitem" tabindex="-1" href="#">
                                    Edit
                                  </a>
                                </li>
            
                                <li>
                                  <a role="menuitem" tabindex="-1" href="#">
                                     Remove
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div></td>
                        </tr>
                      @endforeach    
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- end: TABLE WITH IMAGES PANEL -->
              </div>
            </div>



@endsection
