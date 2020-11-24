<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        body{
            padding:100px;
        }
        </style>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="{{url('posts/'.$post->id)}}" method="POST">
                    {{ csrf_field() }}
                    @method('PUT')
                        <h1 class="text-success">Update Post</h1>
                    <div class="form-group">
                        <label for="title"><b>Title</b></label>
                           
                        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter post title" value="{{ $post->title ?? old('title')}}">
                        @error('title')
                        <div class="invalid-feedback">{{$message}}</div>
                         @enderror
                    </div>

                    <div class="form-group">
                            <label for="content"><strong>Content</strong></label>
                               
                            <textarea  name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="3" placeholder="Enter content">{{$post->content ?? old('content')}}</textarea>
                            @error('content')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <button class="btn btn-success">Update</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
</body>
</html>