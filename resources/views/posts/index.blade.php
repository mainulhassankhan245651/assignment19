@foreach($posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
    <a href="/posts/{{ $post->id }}">View details</a>
@endforeach
