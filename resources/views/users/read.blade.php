@extends('layouts.main')
@section('content')
<div class="row">
  <div class="col-md-12">
    <!-- start: TABLE WITH IMAGES PANEL -->
    <div class="panel panel-white">
      <div class="panel-heading">
        <h4 class="panel-title">Table <span class="text-bold">users</span></h4>
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
                <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
              </li>                   
            </ul>
          </div>
         
        </div>
      </div>
      <div class="panel-body">
        
        <table class="table table-striped table-hover" id="sample-table-2">
          <thead>
            <tr>
            
                <th class="center">Photo</th>
                <th>Full Name</th>
                <th class="hidden-xs">Role</th>
                <th class="hidden-xs">Email</th>
                <th class="hidden-xs">Dibuat</th>
                <th class="hidden-xs">Order</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
              <tr>
                
                  <td class="center"><img src="{{ url('images/users/'.$user->image) }}" alt="image" width="50px" height ="50px"/></td>
                  <td><a href="{{ url('user') }}/{{$user->id}}/show">{{ $user->name}}</a></td>
                  <td class="hidden-xs">{{ $user->role}}</td>
                  <td class="hidden-xs">{{ $user->email}}</td>
                  <td class="hidden-xs">{{ date("d M Y ",strtotime($user->created_at)) }} at {{ date("\t H:i a",strtotime($user->created_at)) }}</td>
                  <td class="hidden-xs">
                  
                   <a href="{{ url('user') }}/{{$user->id}}/edit" class="btn btn-xs btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>

                   <a href="{{ url('user') }}/{{$user->id}}/destroy" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
                  </td>
               </tr>
               @endforeach   
             </tbody>
           </table>
             {!! $users->render() !!} 
         </div>
       </div>
       <!-- end: TABLE WITH IMAGES PANEL -->
     </div>
   </div>


  

   @endsection
