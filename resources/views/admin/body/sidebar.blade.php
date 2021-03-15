@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp


<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
			<div class="ulogo">
				 <a href="{{ route('dashboard')}}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset('backend/images/logo-dark.png')}}" alt="">
                            <h3><b>Dan Trusca</b> Admin</h3>
					 </div>
				</a>
			</div>
        </div>

      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">

		  <li class="{{ ($route == 'dashboard')?'active':'' }}" >
            <a href="{{ route('dashboard') }}">
              <i data-feather="pie-chart"></i>
              <span>Dashboard</span>
            </a>
          </li>

        <li class="treeview {{ ($prefix == '/users')?'active':'' }}">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Manage User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('user.view')}}"><i class="ti-more"></i>View User</a></li>
            <li><a href="{{ route('user.add')}}"><i class="ti-more"></i>Add User</a></li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/profile')?'active':'' }}">
            <a href="#">
              <i data-feather="grid"></i> <span>Manage Profile</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>

            <ul class="treeview-menu">
                <li><a href="{{ route('profile.view') }}"><i class="ti-more"></i>Your Profile</a></li>
                <li><a href="{{ route('password.view') }}"><i class="ti-more"></i>Change Password</a></li>
            </ul>
          </li>

          <li class="treeview {{ ($prefix == '/setups')?'active':'' }}">
                <a href="#">
                <i data-feather="credit-card"></i> <span>Setup Management</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('student.class.view')}}"><i class="ti-more"></i>Student Class</a></li>
                    <li><a href="{{ route('student.year.view')}}"><i class="ti-more"></i>Student Year</a></li>
                    <li><a href="{{ route('student.group.view') }}"><i class="ti-more"></i>Student Group</a></li>
                    <li><a href="{{ route('student.shift.view') }}"><i class="ti-more"></i>Student Shift</a></li>
                    <li><a href="{{ route('fee.category.view') }}"><i class="ti-more"></i>Fee Category</a></li>
                    <li><a href="{{ route('fee.amount.view') }}"><i class="ti-more"></i>Fee Category Amount</a></li>
                    <li><a href=""><i class="ti-more"></i>Exam Type</a></li>
                    <li><a href=""><i class="ti-more"></i>School Subject</a></li>
                    <li><a href=""><i class="ti-more"></i>Assign Subject</a></li>
                    <li><a href=""><i class="ti-more"></i>Designation </a></li>
                </ul>
          </li>

        <li class="treeview">
          <a href="#">
            <i data-feather="mail"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="mailbox_inbox.html"><i class="ti-more"></i>Inbox</a></li>
            <li><a href="mailbox_compose.html"><i class="ti-more"></i>Compose</a></li>
            <li><a href="mailbox_read_mail.html"><i class="ti-more"></i>Read</a></li>
          </ul>
        </li>


        <li class="header nav-small-cap">User Interface</li>

        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Components</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="components_alerts.html"><i class="ti-more"></i>Alerts</a></li>
            <li><a href="components_badges.html"><i class="ti-more"></i>Badge</a></li>

          </ul>
        </li>



        <li class="treeview">
          <a href="#">
            <i data-feather="map"></i>
			<span>Map</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="map_google.html"><i class="ti-more"></i>Google Map</a></li>
            <li><a href="map_vector.html"><i class="ti-more"></i>Vector Map</a></li>
          </ul>
        </li>



		<li class="header nav-small-cap">EXTRA</li>

        <li class="treeview">
          <a href="#">
            <i data-feather="layers"></i>
			<span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Level One</a></li>
            <li class="treeview">
              <a href="#">Level One
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#">Level Two</a></li>
                <li class="treeview">
                  <a href="#">Level Two
                    <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#">Level Three</a></li>
                    <li><a href="#">Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">Level One</a></li>
          </ul>
        </li>

		<li>
          <a href="{{ route('admin.logout')}}">
            <i data-feather="lock"></i>
			<span>Log Out</span>
          </a>
        </li>

      </ul>
    </section>

	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
