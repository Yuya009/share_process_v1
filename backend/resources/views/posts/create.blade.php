<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Summernote with Bootstrap 4</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@if(session('created'))
<div class="alert alert-success">{{session('created')}}</div>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-7 offset-3 mt-4">
            <div class="card-body">
 
                <form method="POST" action="{{url('/posts/store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">件名</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for ="body">投稿本文</label>
                        <textarea class="form-control" name="body" id="summernote" cols="30" rows="10"></textarea>
                    </div>
                    <button type=”submit” class="btn btn-danger btn-block">保存</button>
                </form>
                
            </div>
        </div>
    </div>
</div>
<script>
    $('#summernote').summernote({
      placeholder: 'Hello Bootstrap 4',
      tabsize: 2,
      height: 100
    });
  </script>
</body>
</html>