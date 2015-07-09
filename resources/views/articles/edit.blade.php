@extends('layouts.main')
@section('content')
    @if(count($errors))
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <div class="row">
  <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">

    <!-- start: LOGIN BOX -->
    <div class="box-login">
      <h3>Create article</h3>
    <form action="{{ route('article.update', $article->id) }}" method="POST" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <input type="hidden" name="_method" value="PUT">
        <div class="errorHandler alert alert-danger no-display">
          <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
        </div>
        <fieldset>
          <div class="form-group form-actions">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-article"></i></span>
              <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $article->name }}">
            </div>
          </div>
          <div class="form-group form-actions">
            <div class="input-group">
              <span class="input-group-addon" >@</span>
              <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $article->email }}">
            </div>
          </div>
          <div class="form-group form-actions">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
          </div>
          <div class="form-group form-actions">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-article"></i></span>
              <select id="form-field-select-1" class="form-control" name="role">>
                <option  value="admin">Admin </option>
                <option value="employee">Employee</option>
              </select>
            </div>
          </div>
        <div class="form-actions">
          <button type="submit" class="btn btn-green pull-right">
            Create <i class="fa fa-save"></i>
          </button>
        </div>
      </fieldset>
    </form>
    <!-- start: COPYRIGHT -->

    <!-- end: COPYRIGHT -->
  </div>
  <!-- end: LOGIN BOX -->
  <!-- start: FORGOT BOX -->

  <!-- end: FORGOT BOX -->
  <!-- start: REGISTER BOX -->

  <!-- end: REGISTER BOX -->
</div>
</div>

 
@endsection
