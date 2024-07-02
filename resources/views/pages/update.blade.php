@extends('Layout.app')


@section('content')
         <h1 class="text-center">{{$title2}}</h1>
         <div class="">
            @if(count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                  @foreach($errors->all() as $error)
                    <li>{{$errors}}</li>
                  @endforeach
                  </ul>
              </div>
            @endif

            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

            <form action="{{url('emp/update-emp')}}" method="post" style=".form-group{padding:10px;} ">
              {{csrf_field()}}
              <div class="form-group row" style="padding-top: 10px;">
                <label for="colFormLabelSm" class="col-lg-2 col-form-label col-form-label-lg">First Name:</label>
                <div class="col-md-6">
                    <input type="text" name="first_name" value={{$items->first_name}} class="form-control form-control-lg" id="colFormLabelSm" placeholder="" >
                    <input type="hidden" name="id" value={{$items->id}} class="form-control form-control-lg" id="colFormLabelSm" placeholder="" >
                </div>
              </div>
              <div class="form-group row" style="padding-top: 10px;">
                <label for="colFormLabel" class="col-lg-2 col-form-label col-form-label-lg">Last Name:</label>
                <div class="col-md-6">
                  <input type="text" name="last_name" value={{$items->last_name}} class="form-control form-control-lg" id="colFormLabel" placeholder="" >
                </div>
              </div>
              <div class="form-group row" style="padding-top: 10px;">
                <label for="colFormLabel" class="col-lg-2 col-form-label col-form-label-lg">Gender:</label>
                <div class="col-md-6">
                  <input type="text" name="gender" value={{$items->gender}} class="form-control form-control-lg" id="colFormLabelLg" placeholder="" >
                </div>
              </div>	 
              <div class="form-group row" style="padding-top: 10px;">
                <label for="colFormLabelSm" class="col-lg-2 col-form-label col-form-label-lg">Nationality:</label>
                <div class="col-md-6">
                  <input type="text" name="nationality" value={{$items->nationality}} class="form-control form-control-lg" id="colFormLabelSm" placeholder="" >
                </div>
              </div>
              <div class="form-group row" style="padding-top: 10px;">
                <label for="colFormLabel" class="col-lg-2 col-form-label col-form-label-lg">Address:</label>
                <div class="col-md-6">
                  <input type="text" name="address" value={{$items->address}} class="form-control form-control-lg" id="colFormLabel" placeholder="" >
                </div>
              </div>
              <div class="form-group row" style="padding-top: 10px;">
                    <label for="colFormLabel" class="col-lg-2 col-form-label col-form-label-lg">Department:</label>
                    <div class="col-md-6">
                    <input type="text" name="department" value={{$items->department}} class="form-control form-control-lg" id="colFormLabelLg" placeholder="" >
                    <p style="padding-top: 10px;margin-left:40%"><button type="submit" class="btn btn-lg btn-primary">Updae Information</button></p>
                    </div>
              </div>
            </form>

         </div>
@endsection