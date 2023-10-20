<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>@yield('title','updatepost')</title>
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
				<h3 class="my-4">Update Post</h3>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="title2" class="col-md-5 col-form-label">Post Title</label>
					<div class="col-md-7"><input type="text"  class="form-control form-control-lg" id="title2" name="title" required placeholder="Enter Post Title"></div>
				</div>

				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="content4" class="col-md-5 col-form-label">Content</label>
					<div class="col-md-7"><textarea   class="form-control form-control-lg" id="content4" name="content" required placeholder="Enter Content"></textarea></div>
				</div>

                <hr class="my-4" />
				<div class="form-group mb-3 row"><label for="featured" class="col-md-5 col-form-label">Featured</label>
					<div class="col-md-7"><input type="checkbox"  id="featured" name="featured"></div>
				</div>

				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="published" class="col-md-5 col-form-label">Published</label>
					<div class="col-md-7"><input type="checkbox"  id="published" name="published"></div>
				</div>

				<hr class="my-4" />
				<img src="{{asset('front')}}/assets/imgs/insta-6.jpg" alt="" style="width:100px; height:100px;">
				<div>
				<label for="image" class="col-md-5 col-form-label">Select Image</label>
					<input type="file" id="image" name="image" accept="image/*">
				</div>

				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="insert10" class="col-md-5 col-form-label"></label>
					<div class="col-md-7"><button class="btn btn-primary btn-lg" type="submit">Update</button></div>
               </div>
			</form>
		</div>
	</body>

</html>

