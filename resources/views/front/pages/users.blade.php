<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title','users')</title>
    <link rel="stylesheet" href="{{asset('front')}}/assets/css/posts.css">
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

        <div id="wrapper">
         <h1>Users</h1>

         <table id="keywords" cellspacing="0" cellpadding="0">
           <thead>
             <tr>
               <th><span>First Name</span></th>
			         <th><span>Last Name</span></th>
               <th><span>Email</span></th>
               <th><span>Active</span></th>
               <th><span>Delete</span></th>
               <th><span>Update</span></th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td class="lalign">Adam</td>
			         <td>John</td>
               <td>adam@gmail.com</td>
               <td>Yes</td>
               <td><a href=""><img  src="{{asset('front')}}/assets/imgs/delete.jpg" alt="Delete"></a></td>
               <td><a href=""><img  src="{{asset('front')}}/assets/imgs/update.jpg" alt="Delete"></a></td>
             </tr>

             <tr>
              <td class="lalign">Adam</td>
              <td>John</td>
              <td>adam@gmail.com</td>
              <td>Yes</td>
              <td><a href=""><img  src="{{asset('front')}}/assets/imgs/delete.jpg" alt="Delete"></a></td>
              <td><a href=""><img  src="{{asset('front')}}/assets/imgs/update.jpg" alt="Delete"></a></td>
            </tr>
            <tr>
              <td class="lalign">Adam</td>
              <td>John</td>
              <td>adam@gmail.com</td>
              <td>Yes</td>
              <td><a href=""><img  src="{{asset('front')}}/assets/imgs/delete.jpg" alt="Delete"></a></td>
              <td><a href=""><img  src="{{asset('front')}}/assets/imgs/update.jpg" alt="Delete"></a></td>
            </tr>
            <tr>
              <td class="lalign">Adam</td>
              <td>John</td>
              <td>adam@gmail.com</td>
              <td>No</td>
              <td><a href=""><img  src="{{asset('front')}}/assets/imgs/delete.jpg" alt="Delete"></a></td>
              <td><a href=""><img  src="{{asset('front')}}/assets/imgs/update.jpg" alt="Delete"></a></td>
            </tr>
            <tr>
              <td class="lalign">Adam</td>
              <td>John</td>
              <td>adam@gmail.com</td>
              <td>Yes</td>
              <td><a href=""><img  src="{{asset('front')}}/assets/imgs/delete.jpg" alt="Delete"></a></td>
              <td><a href=""><img  src="{{asset('front')}}/assets/imgs/update.jpg" alt="Delete"></a></td>
            </tr>
           </tbody>
         </table>
        </div>
</body>
</html>
