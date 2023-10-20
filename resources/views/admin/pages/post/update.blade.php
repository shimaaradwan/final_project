@extends('admin.layout.app')
@section('title', 'update post')
@section('content')
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>@yield('title','updatepost')</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
		<link rel="stylesheet" href="{{asset('front')}}/assets/css/style1.css">
		<link rel="stylesheet" href="{{asset('front')}}/css/style2.css">
	</head>

	<body>

		<div class="container">
			<form class="m-auto" style="max-width:600px" action="{{ route('posts.update',$post->id )}}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
				<h3 class="my-4">update Post</h3>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="title2" class="col-md-5 col-form-label">Post Title</label>
					<div class="col-md-7"><input type="text"  class="form-control form-control-lg" id="title2" name="title" value="{{ $post->title }}"  required placeholder="Enter Post Title"></div>
				</div>
                @error('title')
                <div class="alert alert-danger">
                    {{$message}}
                </div>

                @enderror

				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="content4" class="col-md-5 col-form-label">Content</label>
					<div class="col-md-7"><textarea   class="form-control form-control-lg" id="content4" name="content" value="{{ $post->content }}" required placeholder="Enter Content"></textarea></div>
				</div>
                @error('content')
                <div class="alert alert-danger">
                    {{$message}}
                </div>

                @enderror

                <hr class="my-4" />
                <div class="form-group mb-3 row"><label for="content4" class="col-md-5 col-form-label">featured</label>

				<div class="input-group">
                    <div class="custom-file">
                        <select name= "featured" value="{{ $post->featured }}" class="form-control">
                            <option selected disabled> choose status </option>
                            <option value="1"> featured </option>
                            <option value="0"> unfeatured </option>
                        </select>
                    </div>
                @error('featured')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror
        </div>

				<hr class="my-4" />
                <div class="form-group mb-3 row"><label for="content4" class="col-md-5 col-form-label">published</label>

				<div class="input-group">
                    <div class="custom-file">
                        <select name= "published" value="{{ $post->published }}"  class="form-control">
                            <option selected disabled> choose status </option>
                            <option value="1"> published </option>
                            <option value="0"> unpublished </option>
                        </select>
                    </div>

                @error('published')
                <div class="alert alert-danger">
                    {{$message}}
                </div>

                @enderror
            </div>

				<hr class="my-4" />
				<div>
				<label for="image" class="col-md-5 col-form-label">Select Image</label>
					<input type="file" id="image" name="image" accept="image/*">
				</div>
                @error('image')
                <div class="alert alert-danger">
                    {{$message}}
                </div>

                @enderror

				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="insert10" class="col-md-5 col-form-label"></label>
					<div class="col-md-7"><button class="btn btn-primary btn-lg" type="submit">Insert</button></div>
               </div>
			</form>
		</div>
	</body>

</html>
@endsection

