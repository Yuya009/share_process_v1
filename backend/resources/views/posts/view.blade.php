@foreach($articles as $article)

<!-- Title -->
<h1 class="mt-4">{{$article->title}}</h1>
<hr>
<!-- Date/Time -->
<p>{{$article->created_at}}</p>
<hr>
<!-- Preview Image -->
<img class="img-fluid rounded" src="{{$article->post_image}}" alt="">
<hr>
<!-- Post Content -->
<p>{!!$article->body!!}</p>
@endforeach