<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Post</title>
</head>

<body>
    <h1 class="text-center my-4">Posts</h1>

    <div class="container">

        <div class="d-flex justify-content-end">
            <a href="/post/create" class="btn btn-primary">Create Post</a>
        </div>
        <hr>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <select class="form-select" id="selectCategory">
                <option selected>-- Select All --</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @foreach($posts as $post)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ @$post->title}}</h5>
                        <small>{{ $post->category->name }}</small>
                        <p class="card-text">{{ @$post->body}}</p>
                    </div>
                    <div class="card-footer">
                        <a href="/post/detail/{{$post->id}}" class="btn btn-primary">Detail</a>
                        <a href="/post/edit/{{$post->id}}" class="btn btn-success">Edit</a>
                        <a href="/post/delete/{{$post->id}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('#selectCategory').on('change', function(){
                
                const category_id = $(this).val()

                fetch(`/posts/category/?category_id=${category_id}`)
                    .then(res => res.text())
                    .then(data => console.log(data))
            })
        })
    </script>
</body>

</html>