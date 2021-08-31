@extends('admin.admin_master')
@section('main_contant')

<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->


                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Update oparetor</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                            <li class="breadcrumb-item active">Update oparetor</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="post" action="{{url('/oparetor/edit/'.$oparetor->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="first_name">First Name</label>
                                                        <input id="first_name" name="first_name" type="text" value="{{$oparetor->first_name}}" class="form-control">
                                                        @if($errors->has('first_name'))
                                                       <div style="color:red"> {{$errors->first('first_name')}}</div>
                                                       @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="last_name">Last Name</label>
                                                        <input id="last_name" name="last_name" type="text" value="{{$oparetor->last_name}}" class="form-control">
                                                        @if($errors->has('last_name'))
                                                       <div style="color:red"> {{$errors->first('last_name')}}</div>
                                                       @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="father_name">Father Name</label>
                                                        <input id="father_name" name="father_name" type="text" value="{{$oparetor->father_name}}" class="form-control">
                                                        @if($errors->has('father_name'))
                                                       <div style="color:red"> {{$errors->first('father_name')}}</div>
                                                       @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="mother_name">Mother Name</label>
                                                        <input id="mother_name" name="mother_name" type="text" value="{{$oparetor->mother_name}}" class="form-control">
                                                        @if($errors->has('mother_name'))
                                                       <div style="color:red"> {{$errors->first('mother_name')}}</div>
                                                       @endif
                                                    </div>
                                                     <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input id="phone" name="phone" type="text" value="{{$oparetor->phone}}" class="form-control">
                                                        @if($errors->has('phone'))
                                                       <div style="color:red"> {{$errors->first('phone')}}</div>
                                                       @endif
                                                    </div>
                                                     <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input id="email" name="email" type="text" value="{{$oparetor->email}}" class="form-control">
                                                        @if($errors->has('email'))
                                                       <div style="color:red"> {{$errors->first('email')}}</div>
                                                       @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input id="password" name="password" type="password" value="{{$oparetor->password}}" class="form-control">
                                                        @if($errors->has('password'))
                                                       <div style="color:red"> {{$errors->first('password')}}</div>
                                                       @endif
                                                    </div>
                                                </div>
        
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Gender</label>
                                                        <select name="gender" value="{{$oparetor->gender}}" class="form-control select2">
                                                            <option>Select</option>
                                                            <option>Male</option>
                                                            <option >Female</option>
                                                        </select>
                                                    </div>
                                                    @if($errors->has('gender'))
                                                       <div style="color:red"> {{$errors->first('gender')}}</div>
                                                       @endif
                                                    <div class="form-group">
                                                <label>Date of birth</label>
                                                <div class="input-group">
                                                    <input value="{{$oparetor->dob}}"name="dob"  type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-provide="datepicker" data-date-autoclose="true">

                                                </div><!-- input-group -->
                                                @if($errors->has('dob'))
                                                       <div style="color:red"> {{$errors->first('dob')}}</div>
                                                       @endif
                                            </div>
                                            <div class="form-group">
                                                        <label for="nid">NID</label>
                                                        <input id="nid" name="nid" type="text" value="{{$oparetor->nid}}" class="form-control">
                                                        @if($errors->has('nid'))
                                                       <div style="color:red"> {{$errors->first('nid')}}</div>
                                                       @endif
                                                    </div>
                                                     <div class="form-group">
                                                        <label for="department">Department</label>
                                                        <input id="department" name="department" type="text" value="{{$oparetor->department}}" class="form-control">
                                                        @if($errors->has('department'))
                                                       <div style="color:red"> {{$errors->first('department')}}</div>
                                                       @endif
                                                    </div>
                                                     <div class="form-group">
                                                        <label for="present_adress">Present Adress</label>
                                                        <input id="present_adress" name="present_address" type="text" value="{{$oparetor->present_address}}" class="form-control">
                                                        @if($errors->has('present_address'))
                                                       <div style="color:red"> {{$errors->first('present_address')}}</div>
                                                       @endif
                                                    </div>
                                                     <div class="form-group">
                                                        <label for="parmanent_address">Parmanent Address</label>
                                                        <input id="parmanent_address" name="permanent_address" type="text" value="{{$oparetor->permanent_address}}" class="form-control">
                                                        @if($errors->has('permanent_address'))
                                                       <div style="color:red"> {{$errors->first('permanent_address')}}</div>
                                                       @endif
                                                    </div>
                                                     <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Oparetor Images</h4>
                                            <div class="fallback">
                                                <input name="image" type="file" value="{{$oparetor->image}}" multiple="">
                                            </div>
                                    </div>

                                </div> 
                                <!-- end card-->
                                                </div>
                                            </div>
        
                                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Update oparetor</button>
                                        </form>
        
                                    </div>
                                </div>
                    
                </div>
                <!-- End Page-content -->
                @if(isset($success) && $success == true) 
                <script>
                 Swal.fire(
                     'success','Updated Oparetor sucessfully done','success'
                 );
             
           </script>
                @endif 
 @endsection