@extends('admin.admin_master')

@section('main_admin')


<div class="content-wrapper">
    <div class="container-full">


      <!-- Main content -->
		<section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Update User</h4>

               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form method="POST" action="{{ route('user.update', $userToEdit->id)}}">
                           @csrf
                         <div class="row">
                            <div class="col-12">

                                <div class="form-group">
                                    <h5>User Role <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="usertype" id="select" required class="form-control">
                                            <option value="" selected disabled >Select Role</option>
                                            <option value="admin" {{$userToEdit->usertype==='admin'? 'selected': ''}}>Admin</option>
                                            <option value="user" {{$userToEdit->usertype==='user'? 'selected': ''}}>User</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                           <div class="col-12">
                               <div class="form-group">
                                   <h5>User Name <span class="text-danger">*</span></h5>
                                   <div class="controls">
                                       <input type="text" name="name" value="{{ $userToEdit->name}}" class="form-control" required data-validation-required-message="This field is required">
                                    </div>

                               </div>
                               <div class="form-group">
                                   <h5>User Email  <span class="text-danger">*</span></h5>
                                   <div class="controls">
                                       <input type="email" name="email" value="{{ $userToEdit->email}}" class="form-control" required data-validation-required-message="This field is required">
                                    </div>
                               </div>
                           </div>

                         </div>

                           <div class="text-xs-right">
                               <input type="submit" class="btn btn-rounded btn-info" value="Update" />
                           </div>
                       </form>

                   </div>
                   <!-- /.col -->
                 </div>
                 <!-- /.row -->
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->

           </section>
           <!-- /.content -->

    </div>
</div>

@endsection
