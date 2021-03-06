@extends('admin.admin_master')
@section('main_contant')

<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->


                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Add Student</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                            <li class="breadcrumb-item active">Add Student</li>
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
                                        <form method="post" action="{{url('/create/student')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="student_name">User Name</label>
                                                        <input id="student_name" name="student_name" type="text" value="{{old('student_name')}}" class="form-control">
                                                        @if($errors->has('student_name'))
                                                       <div style="color:red"> {{$errors->first('student_name')}}</div>
                                                       @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="father_name">Father Name</label>
                                                        <input id="father_name" name="father_name" type="text" value="{{old('father_name')}}" class="form-control">
                                                        @if($errors->has('father_name'))
                                                       <div style="color:red"> {{$errors->first('father_name')}}</div>
                                                       @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="mother_name">Mother Name</label>
                                                        <input id="mother_name" name="mother_name" type="text" value="{{old('mother_name')}}" class="form-control">
                                                        @if($errors->has('mother_name'))
                                                       <div style="color:red"> {{$errors->first('mother_name')}}</div>
                                                       @endif
                                                    </div>
                                                     <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input id="phone" name="phone" type="text" value="{{old('phone')}}" class="form-control">
                                                        @if($errors->has('phone'))
                                                       <div style="color:red"> {{$errors->first('phone')}}</div>
                                                       @endif
                                                    </div>
                                                     <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input id="email" name="email" type="text" value="{{old('email')}}" class="form-control">
                                                        @if($errors->has('email'))
                                                       <div style="color:red"> {{$errors->first('email')}}</div>
                                                       @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="department">Department</label>
                                                        <input id="department" name="department" type="text" value="{{old('department')}}" class="form-control">
                                                        @if($errors->has('last_name'))
                                                       <div style="color:red"> {{$errors->first('department')}}</div>
                                                       @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="institute_name">Institute Name</label>
                                                        <input id="institute_name" name="institute_name" type="text" value="{{old('institute_name')}}" class="form-control">
                                                        @if($errors->has('institute_name'))
                                                       <div style="color:red"> {{$errors->first('institute_name')}}</div>
                                                       @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="board">Board Name</label>
                                                        <input id="institute_name" name="board" type="text" value="{{old('board')}}" class="form-control">
                                                        @if($errors->has('board'))
                                                       <div style="color:red"> {{$errors->first('board')}}</div>
                                                       @endif
                                                    </div>
                                                    
                                                </div>
        
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Gender</label>
                                                        <select name="gender" value="{{old('gender')}}" class="form-control select2">
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
                                                    <input value="{{old('dob')}}"name="dob"  type="text" class="form-control" placeholder="dd M, yyyy" data-date-format="dd M, yyyy" data-provide="datepicker" data-date-autoclose="true">

                                                </div><!-- input-group -->
                                                @if($errors->has('dob'))
                                                       <div style="color:red"> {{$errors->first('dob')}}</div>
                                                       @endif
                                            </div>

                                                     <div class="form-group">
                                                        <label for="reg_no">registration Number</label>
                                                        <input id="reg_no" name="reg_no" type="text" value="{{old('reg_no')}}" class="form-control">
                                                        @if($errors->has('reg_no'))
                                                       <div style="color:red"> {{$errors->first('reg_no')}}</div>
                                                       @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="roll_number">Roll Number</label>
                                                        <input id="roll_number" name="roll_number" type="text" value="{{old('roll_number')}}" class="form-control">
                                                        @if($errors->has('roll_number'))
                                                       <div style="color:red"> {{$errors->first('roll_number')}}</div>
                                                       @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input id="password" name="password" type="password" value="{{old('password')}}" class="form-control">
                                                        @if($errors->has('password'))
                                                       <div style="color:red"> {{$errors->first('password')}}</div>
                                                       @endif
                                                    </div>
                                                     <div class="form-group">
                                                        <label for="present_adress">Present Adress</label>
                                                        <input id="present_adress" name="present_address" type="text" value="{{old('present_address')}}" class="form-control">
                                                        @if($errors->has('present_address'))
                                                       <div style="color:red"> {{$errors->first('present_address')}}</div>
                                                       @endif
                                                    </div>
                                                     <div class="form-group">
                                                        <label for="parmanent_address">Parmanent Address</label>
                                                        <input id="parmanent_address" name="permanent_address" type="text" value="{{old('permanent_address')}}" class="form-control">
                                                        @if($errors->has('permanent_address'))
                                                       <div style="color:red"> {{$errors->first('permanent_address')}}</div>
                                                       @endif
                                                    </div>
                                                    
                                                     <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Student Images</h4>
                                            <div class="fallback">
                                                <input name="image" type="file" value="{{old('image')}}" multiple="">
                                            </div>
                                    </div>

                                </div> 
                                <!-- end card-->
                                                </div>
                                            </div>
        
                                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Add Student</button>
                                        </form>
        
                                    </div>
                                </div>
                    
                </div>
                <!-- End Page-content -->
                @if(isset($success) && $success == true) 
               <script>
                Swal.fire(
                    'success','New Student sucessfully done','success'
                );
            
          </script>
               @endif 
 @endsection
