<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JoeBLog landing page.">
    <meta name="author" content="Devcrud">
    <title>@yield('title','Home Page')</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{asset('front')}}/assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + JoeBLog main styles -->
	<link rel="stylesheet" href="{{asset('front')}}/assets/css/joeblog.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- page First Navigation -->
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('front')}}/assets/imgs/logo.svg" alt="">
            </a>
            <div class="socials">
                <a href="javascript:void(0)"><i class="ti-facebook"></i></a>
                <a href="javascript:void(0)"><i class="ti-twitter"></i></a>
                <a href="javascript:void(0)"><i class="ti-pinterest-alt"></i></a>
                <a href="javascript:void(0)"><i class="ti-instagram"></i></a>
                <a href="javascript:void(0)"><i class="ti-youtube"></i></a>
            </div>
        </div>
    </nav>
    <!-- End Of First Navigation -->

    <!-- Page Second Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light bg-primary sticky-top">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="no-sidebar.html">No Sidebar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="single-post.html">Single Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register')}}"> Register  </a>       </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login')}}"> Login  </a>       </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>

                </ul>
                <div class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="components.html" class="ml-4 btn btn-dark mt-1 btn-sm">Components</a>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Of Page Second Navigation -->

    <!-- page-header -->
    <header class="page-header"></header>
    <!-- end of page header -->

    <div class="container">
        <section>
            <div class="feature-posts">


                <a href="single-post.html" class="feature-post-item">
                    <span>Featured Posts</span>
                </a>
                @foreach ($posts1 as $post1 )

                <a href="single-post.html" class="feature-post-item">
                    <img src="{{ asset($post1->image) }}" class="w-100" alt="">
                    <div class="feature-post-caption"> {{"$post1->title"}} </div>
                    @endforeach
            </div>
        </section>
        <hr>
        <div class="page-container">
            <div class="page-content">
                <div class="card">
                    <div class="card-header text-center">
                        @foreach ($posts2 as $post2 )

                        <h5 class="card-title">{{"$post2->title"}}  </h5>
                        <small class="small text-muted">{{"$post2->created_at"}}
                            <span class="px-2">-</span>
                            <a href="#" class="text-muted">32 Comments</a>
                        </small>
                    </div>
                    <div class="card-body">
                        <div class="blog-media">
                            <img src="{{asset($post2->image)}}" alt="" class="w-100">
                            <a href="#" class="badge badge-primary">#Salupt</a>
                        </div>
                        <p class="my-3">{{"$post2->content"}}  </p>
                        @endforeach
                    </div>

                    <div class="card-footer d-flex justify-content-between align-items-center flex-basis-0">
                        <button class="btn btn-primary circle-35 mr-4"><i class="ti-back-right"></i></button>
                        <a href="single-post.html" class="btn btn-outline-dark btn-sm">READ MORE</a>
                        <a href="#" class="text-dark small text-muted">By : Joe Mitchell</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach ($posts3 as $post3 )

                    <div class="col-lg-6">
                        <div class="card text-center mb-5">
                            <div class="card-header p-0">
                                <div class="blog-media">
                                    <img src="{{asset($post3->image)}}" alt="" class="w-100">
                                    <a href="#" class="badge badge-primary">#Placeat</a>
                                </div>
                            </div>
                            <div class="card-body px-0">
                                <h5 class="card-title mb-2"> {{"$post3->title"}} </h5>
                                <small class="small text-muted">{{"$post3->created_at"}}
                                    <span class="px-2">-</span>
                                    <a href="#" class="text-muted">34 Comments</a>
                                </small>
                                <p class="my-2">{{"$post3->content"}} </p>

                            </div>

                            <div class="card-footer p-0 text-center">
                                <a href="single-post.html" class="btn btn-outline-dark btn-sm">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <button class="btn btn-primary btn-block my-4">Load More Posts</button>
            </div>

            <!-- Sidebar -->
            <div class="page-sidebar text-center">
                <h6 class="sidebar-title section-title mb-4 mt-3">About</h6>
                <img src="{{asset('front')}}/assets/imgs/shimaa.jpg" alt="shimaa" class="circle-100 mb-3">
                <div class="socials mb-3 mt-2">

                <a href="https://www.facebook.com/shimaa.radwan.7?mibextid=ZbWKwL"><i class="ti-facebook"></i></a>
                    <a href="https://twitter.com/Shimaaradwan88?t=FUcz4H0gBmjgwd8IET04Lg&s=08"><i class="ti-twitter"></i></a>
                    <a href="https://pin.it/T2KELLV"><i class="ti-pinterest-alt"></i></a>
                    <a href="https://instagram.com/shimaa_radwan20?igshid=ZDdkNTZiNTM="><i class="ti-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCbKK3aHl8wE2Y5nYvl7nSag"><i class="ti-youtube"></i></a>
                </div>
                <p>I am Shimaa Radwan , I graduated from faculty of Engineering - Communication department Helwan University ( Year 2010 ).
                    I have 12 years Experience in vocational & technical courses for engineers and technicains ( marketing & managment).
                    I have 3 years Experience in digital marketing specially in Social Media Specialist.I have a good experience in Web development.</p>


                <h6 class="sidebar-title mt-5 mb-4">Newsletter</h6>
                <form action="">
                    <div class="subscribe-wrapper">
                        <input type="email" class="form-control" placeholder="Email Address">
                        <button type="submit" class="btn btn-primary"><i class="ti-location-arrow"></i></button>
                    </div>
                </form>

                <h6 class="sidebar-title mt-5 mb-4">Tags</h6>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#iusto</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#quibusdam</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#officia</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#animi</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#mollitia</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#quod</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#ipsa at</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#dolor</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#incidunt</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#possimus</a>

                <h6 class="sidebar-title mt-5 mb-4">Instagram</h6>
                <div class="row px-3">
                    <div class="col-4 p-1 figure">
                        <a href="#" class="figure-img">
                            <img src="{{asset('front')}}/assets/imgs/insta-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-4 p-1 figure">
                        <a href="#" class="figure-img">
                            <img src="{{asset('front')}}/assets/imgs/insta-2.jpg" alt="" class="w-100 m-0">
                        </a>
                    </div>
                    <div class="col-4 p-1 figure">
                        <a href="#" class="figure-img">
                            <img src="{{asset('front')}}/assets/imgs/insta-3.jpg" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="col-4 p-1 figure">
                        <a href="#" class="figure-img">
                            <img src="{{asset('front')}}/assets/imgs/insta-4.jpg" alt="" class="w-100 m-0">
                        </a>
                    </div>
                    <div class="col-4 p-1 figure">
                        <a href="#" class="figure-img">
                            <img src="{{asset('front')}}/assets/imgs/insta-5.jpg" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="col-4 p-1 figure">
                        <a href="#" class="figure-img">
                            <img src="{{asset('front')}}/assets/imgs/insta-6.jpg" alt="" class="w-100 m-0">
                        </a>
                    </div>
                </div>

                <figure class="figure mt-5">
                    <a href="single-post.html" class="figure-img">
                        <img src="{{asset('front')}}/assets/imgs/img-4.jpg" alt="" class="w-100">
                        <figcaption class="figcaption">Laboriosam</figcaption>
                    </a>
                </figure>

                <h6 class="sidebar-title mt-5 mb-4">Popular Posts</h6>

                <div class="card mb-4">
                    @foreach ($posts4 as $post4 )

                    <a href="single-post.html" class="overlay-link"></a>
                    <div class="card-header p-0">
                        <div class="blog-media">
                            <img src="{{asset($post4->image)}}" alt="" class="w-100">
                            <a href="#" class="badge badge-primary">#Lorem</a>
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <h5 class="card-title mb-2">{{"$post4->title"}}</h5>
                        <small class="small text-muted"><i class="ti-calendar pr-1"></i> {{"$post4->created_at"}}
                        </small>
                        <p class="my-2">{{"$post4->content"}}</p>
                    </div>
                    @endforeach
                </div>


                <div class="ad-card d-flex text-center align-items-center justify-content-center">
                    <span href="#" class="font-weight-bold">ADS</span>
                </div>
            </div>
        </div>
    </div>

    <div class="instagram-wrapper mt-5">
        <div class="ig-id">
            <a href="javascript:void(0)">Follow @joe_mitchell On Instagram</a>
        </div>
        <a href="javascript:void(0)" class="insta-item">
            <img src="{{asset('front')}}/assets/imgs/insta-1.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="{{asset('front')}}/assets/imgs/insta-2.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="{{asset('front')}}/assets/imgs/insta-3.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="{{asset('front')}}/assets/imgs/insta-4.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="{{asset('front')}}/assets/imgs/insta-5.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="{{asset('front')}}/assets/imgs/insta-6.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
    </div>

    <!-- Page Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-3 text-center text-md-left mb-3 mb-md-0">
                    <img src="{{asset('front')}}/assets/imgs/logo.svg" alt="" class="logo">
                </div>
                <div class="col-md-9 text-center text-md-right">
                    <div class="socials">
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-facebook pr-1"></i> 123,345</a>
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-twitter pr-1"></i> 321,534</a>
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-pinterest-alt pr-1"></i> 543,312</a>
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-instagram pr-1"></i> 123,023</a>
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-youtube pr-1"></i> 231,043</a>
                    </div>
                </div>
            </div>
            <p class="border-top mb-0 mt-4 pt-3 small">&copy; <script>document.write(new Date().getFullYear())</script>, JoeBlog Created By <a href="https://www.devcrud.com" class="text-muted font-weight-bold" target="_blank">DevCrud.</a>  All rights reserved </p>
        </div>
    </footer>
    <!-- End of Page Footer -->

	<!-- core  -->
    <script src="{{asset('front')}}/assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="{{asset('front')}}/assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- JoeBLog js -->
    <script src="{{asset('front')}}/assets/js/joeblog.js"></script>

</body>
</html>
