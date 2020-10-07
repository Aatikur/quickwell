@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
  <div class="x_panel">
    <div class="x_title">
      <h2>Add Package</h2>
      <div class="clearfix"></div>
    </div>
    @if (Session::has('message'))
    <div class="alert alert-success" >{{ Session::get('message') }}</div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif
    <div class="x_content">
        <div class="well">
          <form class="form-horizontal" method="POST" action="{{ route('admin.store_package') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Package Name</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name" placeholder="Enter Package Name" required>
                    @if($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                <label for="amount" class="col-md-4 control-label">Amount</label>
                <div class="col-md-6">
                    <input id="amount" type="number" class="form-control" placeholder="Enter Amount" name="amount" required>
                    @if ($errors->has('amount'))
                        <span class="help-block">
                            <strong>{{ $errors->first('amount') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </div>

        </form>
        </div>
    </div>
  </div>
</div>
 @endsection
