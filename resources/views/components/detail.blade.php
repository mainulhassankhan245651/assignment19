<div class="container px-5 my-5">
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <section>
                <h2 class="text-secondary fw-bolder mb-4">Selected Post Detail</h2>
                <!-- Education Card 1-->

                <div id="education-list">
                           
                            <h2>{{ $post->title }}</h2>
                            <h2>{{ $post->excerpt }}</h2>
                            <p>{{ $post->description }}</p>

                            <h3>Comments</h3>
                                @foreach($post->comments as $comment)
                                    <p>{{ $comment->content }}</p>
                                @endforeach

                            <form action="/posts/{{ $post->id }}/comments" method="post">
                                @csrf
                                <textarea name="content"></textarea></br>
                                <button type="submit">Submit Comment</button>
                            </form>
                </div>


            </section>
        </div>
    </div>
</div>


