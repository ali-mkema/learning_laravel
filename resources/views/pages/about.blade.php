@extends('Layout.app')


@section('content')
         <h1 class="text-center">{{$title2}}</h1>
         <div class="">

            <form action="insert_data.php" method="post" style=".form-group{padding:10px;} ">
                <div class="form-group row">
                <label for="colFormLabelSm" class="col-lg-2 col-form-label col-form-label-lg">Person Id:</label>
                <div class="col-md-6">
                  <input type="text" name="txtPId" class="form-control form-control-lg" id="colFormLabelSm" placeholder=""  >
                </div>
              </div>
              <div class="form-group row" style="padding-top: 10px;">
                <label for="colFormLabelSm" class="col-lg-2 col-form-label col-form-label-lg">First Name:</label>
                <div class="col-md-6">
                  <input type="text" name="txtFname" class="form-control form-control-lg" id="colFormLabelSm" placeholder="" >
                </div>
              </div>
              <div class="form-group row" style="padding-top: 10px;">
                <label for="colFormLabel" class="col-lg-2 col-form-label col-form-label-lg">Last Name:</label>
                <div class="col-md-6">
                  <input type="text" name="txtLname" class="form-control form-control-lg" id="colFormLabel" placeholder="" >
                </div>
              </div>
              <div class="form-group row" style="padding-top: 10px;">
                <label for="colFormLabel" class="col-lg-2 col-form-label col-form-label-lg">Gender:</label>
                <div class="col-md-6">
                  <input type="text" name="txtGender" class="form-control form-control-lg" id="colFormLabelLg" placeholder="" >
                </div>
              </div>	 
              <div class="form-group row" style="padding-top: 10px;">
                <label for="colFormLabelSm" class="col-lg-2 col-form-label col-form-label-lg">Nationality:</label>
                <div class="col-md-6">
                  <input type="text" name="txtNtn" class="form-control form-control-lg" id="colFormLabelSm" placeholder="" >
                </div>
              </div>
              <div class="form-group row" style="padding-top: 10px;">
                <label for="colFormLabel" class="col-lg-2 col-form-label col-form-label-lg">Address:</label>
                <div class="col-md-6">
                  <input type="text" name="txtAddr" class="form-control form-control-lg" id="colFormLabel" placeholder="" >
                </div>
              </div>
              <div class="form-group row" style="padding-top: 10px;">
                    <label for="colFormLabel" class="col-lg-2 col-form-label col-form-label-lg">Department:</label>
                    <div class="col-md-6">
                    <input type="text" name="txtDep" class="form-control form-control-lg" id="colFormLabelLg" placeholder="" >
                    <p style="padding-top: 10px;margin-left:40%"><button type="button" class="btn btn-lg btn-primary">Insert</button></p>
                    </div>
              </div>
            </form>

         </div>
@endsection