<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title','posts')</title>
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
         <h1>Posts</h1>

         <table id="keywords" cellspacing="0" cellpadding="0">
           <thead>
             <tr>
               <th><span>Title</span></th>
			   <th><span>Date Published</span></th>
               <th><span>Featured</span></th>
               <th><span>Visits</span></th>
               <th><span>Delete</span></th>
               <th><span>Update</span></th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td class="lalign">silly tshirts</td>
			   <td>2 Feb 2023</td>
               <td>Yes</td>
               <td>110</td>
               <td><a href=""><img  src="{{asset('front')}}/assets/imgs/delete.jpg" alt="Delete"></a></td>
               <td><a href=""><img  src="{{asset('front')}}/assets/imgs/update.jpg" alt="Delete"></a></td>
             </tr>
             <tr>
               <td class="lalign">desktop workspace photos</td>
			         <td>2 Feb 2023</td>
               <td>No</td>
               <td>500</td>
               <td><a href=""><img  src="{{asset('front')}}/assets/imgs/delete.jpg" alt="Delete"></a></td>
               <td><a href=""><img  src="{{asset('front')}}/assets/imgs/update.jpg" alt="Delete"></a></td>
             </tr>
             <tr>
               <td class="lalign">arrested development quotes</td>
			         <td>2 Feb 2023</td>
               <td>Yes</td>
               <td>900</td>
               <td><a href=""><img  src="{{asset('front')}}/assets/imgs/delete.jpg" alt="Delete"></a></td>
               <td><a href=""><img  src="{{asset('front')}}/assets/imgs/update.jpg" alt="Delete"></a></td>
             </tr>
             <tr>
               <td class="lalign">popular web series</td>
			         <td>2 Feb 2023</td>
               <td>No</td>
               <td>350</td>
               <td><a href=""><img  src="{{asset('front')}}/assets/imgs/delete.jpg" alt="Delete"></a></td>
               <td><a href=""><img  src="{{asset('front')}}/assets/imgs/update.jpg" alt="Delete"></a></td>
             </tr>
             <tr>
               <td class="lalign">2013 webapps</td>
			         <td>2 Feb 2023</td>
               <td>Yes</td>
               <td>460</td>
               <td><a href=""><img  src="{{asset('front')}}/assets/imgs/delete.jpg" alt="Delete"></a></td>
               <td><a href=""><img  src="{{asset('front')}}/assets/imgs/update.jpg" alt="Delete"></a></td>
             </tr>
             <tr>
               <td class="lalign">ring bananaphone</td>
			         <td>2 Feb 2023</td>
               <td>No</td>
               <td>748</td>
               <td><a href=""><img  src="{{asset('front')}}/assets/imgs/delete.jpg" alt="Delete"></a></td>
               <td><a href=""><img  src="{{asset('front')}}/assets/imgs/update.jpg" alt="Delete"></a></td>
             </tr>
           </tbody>
         </table>
        </div>
</body>
</html>
