<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    {{-- font-awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  
    <style>
            body{
                padding:100px;
            }
            </style>
</head>
<body>
    <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
              <h3 >Post Lists</h3>
              <br>
              <a href="{{url('/posts/create')}}">
                  <button class="btn btn-primary float-right mb-3">
                      <i class="fa fa-plus-circle"></i> Add News
                  </button>
                  {{-- @if(Session('successAlert'))
                  <div class="alert alert-success alert-dismissible show fade">
                      <strong>{{Session('successAlert')}}</strong>
                      <button class="close" data-dismiss="alert">&times;</button>
                  </div>
                  @endif --}}
              </a>
              @if(Session('successAlert'))
              <div class="alert alert-success alert-dismissible show fade">
                  <strong>{{Session('successAlert')}}</strong>
                  <button class="close" data-dismiss="alert">&times;</button>
              </div>
              @endif
             
              <table class="table table-bordered table-hover">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Title</th>
                          <th>Content</th>
                          <th>Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($posts as $post)
                      <tr>
                      <td>{{$post->id}}</td>
                      <td>{{$post->title}}</td>
                      <td>{{$post->content}}</td>
                          <td>
                              <form action="{{url('posts/'.$post->id)}}" method="POST">
                                @csrf  
                                @method('DELETE')
                              <a href="{{url('posts/'.$post->id.'/edit')}}">
                              <button type="button" class="btn btn-success"><i class="fa fa-edit"></i> Edit</button>
                              </a>
                              <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i> Delete</button>
                              </form>

                          </td>
                      </tr>
                      @endforeach
                  </tbody>

              </table>
              {{$posts->links()}}

          </div>
          <div class="col-md-2"></div>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
</body>
</html>