<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>@yield('title','updateuser')</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
		<link rel="stylesheet" href="{{asset('front')}}/assets/css/style1.css">
		<link rel="stylesheet" href="{{asset('front')}}/assets/css/style2.css">
	</head>

	<body>
		<!-- Start Navbar -->
		<nav id='menu'>
			<input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
			<ul>
			  <li><a href=''>Home</a></li>
			  <li><a class='dropdown-arrow' href=''>Posts</a>
				<ul class='sub-menus'>
				  <li><a href=''>Posts List</a></li>
				  <li><a href=''>Add Car</a></li>
				</ul>
			  </li>
			  <li><a class='dropdown-arrow' href='testimonials.php'>Users</a>
				<ul class='sub-menus'>
				  <li><a href=''>Users List</a></li>
				</ul>
			  </li>
			  <li><a href='#'>Contact Us</a></li>
			</ul>
		  </nav>
		  <!-- End Navbar -->

		<div class="container">
			<form class="m-auto" style="max-width:600px" enctype="multipart/form-data">
				<h3 class="my-4">Update User</h3>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="firstName" class="col-md-5 col-form-label">First Name</label>
					<div class="col-md-7"><input type="text"  class="form-control form-control-lg" id="firstName" name="firstName" required></div>
				</div>

				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="lastName" class="col-md-5 col-form-label">Last Name</label>
					<div class="col-md-7"><input type="text"  class="form-control form-control-lg" id="lastName" name="lastName" required></div>
				</div>

				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="phone" class="col-md-5 col-form-label">Phone</label>
					<div class="col-md-7"><input type="text"  class="form-control form-control-lg" id="phone" name="phone" required></div>
				</div>

				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="email" class="col-md-5 col-form-label">Email</label>
					<div class="col-md-7"><input type="text"  class="form-control form-control-lg" id="email" name="email" required></div>
				</div>

				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="password" class="col-md-5 col-form-label">Password</label>
					<div class="col-md-7"><input type="password"  class="form-control form-control-lg" id="password" name="password" required></div>
				</div>

                <hr class="my-4" />
				<div class="form-group mb-3 row"><label for="gender" class="col-md-5 col-form-label">Gender</label>
					<select  class="form-select custom-select custom-select-lg" id="gender" name="gender">
						<option selected>Male</option>
						<option selected>Female</option>
					</select>
				</div>

				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="active" class="col-md-5 col-form-label">Active</label>
					<div class="col-md-7"><input type="checkbox"  id="active" name="active"></div>
				</div>

				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="insert10" class="col-md-5 col-form-label"></label>
					<div class="col-md-7"><button class="btn btn-primary btn-lg" type="submit">Update</button></div>
               </div>
			</form>
		</div>
	</body>

</html>

