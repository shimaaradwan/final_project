@extends('admin.layout.app')
@section('title', 'update comment')
@section('content')
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>@yield('title','updatecomment')</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
		<link rel="stylesheet" href="{{asset('front')}}/assets/css/style1.css">
		<link rel="stylesheet" href="{{asset('front')}}/css/style2.css">
	</head>
	<body>

		<div class="container">
			<form class="m-auto" style="max-width:600px" action="{{ route('comments.store')}}" method="post" enctype="multipart/form-data">
                @csrf
				<h3 class="my-4">update Comment</h3>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="title2" class="col-md-5 col-form-label">comment</label>
					<div class="col-md-7"><input type="text"  class="form-control form-control-lg" id="comment" name="comment" value="{{$comment->comment}}" required placeholder="Enter Post Title"></div>
				</div>

				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="content4" class="col-md-5 col-form-label">name</label>
					<div class="col-md-7"><input type="text"  class="form-control form-control-lg" id="name" name="name" value="{{$comment->name}}" required placeholder="Enter Post Title"></div>
				</div>

                <hr class="my-4" />
                <div class="form-group mb-3 row"><label for="content4" class="col-md-5 col-form-label">email</label>

                    <div class="col-md-7"><input type="email"  class="form-control form-control-lg" id="email" name="email" value="{{$comment->email}}" required placeholder="Enter  email"></div>


        </div>

				<hr class="my-4" />
                <div class="form-group mb-3 row"><label for="content4" class="col-md-5 col-form-label">website</label>
                    <div class="col-md-7"><input type="url"  class="form-control form-control-lg" id="email" name="website" value="{{$comment->website}}" required placeholder="Enter website"></div>


            </div>
            <hr class="my-4" />
            <div class="form-group mb-3 row"><label for="insert10" class="col-md-5 col-form-label"></label>
                <div class="col-md-7"><button class="btn btn-primary btn-lg" type="submit">update</button></div>
           </div>
        </form>
    </div>
</body>

</html>
@endsection
