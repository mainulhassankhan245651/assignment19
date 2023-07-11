<h2>{{ $post->title }}</h2>
<h2>{{ $post->description }}</h2>
<p>{{ $post->content }}</p>

<h3>Comments</h3>
@foreach($post->comments as $comment)
    <p>{{ $comment->content }}</p>
@endforeach

<form action="/posts/{{ $post->id }}/comments" method="post">
    @csrf
    <textarea name="content"></textarea>
    <button type="submit">Submit Comment</button>
</form>
