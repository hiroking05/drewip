<ul class="list-unstyled mt-5 d-flex">
    <div class="container">
        <div class="row">
        @foreach ($topics as $topic)
            <div class="col-md-2 media">
                <figure>
                    <a href="{{ route('topics.show', ['id' => $topic->id ]) }}"><img class="mr-2 rounded" src="{{ Gravatar::src($topic->user->email, 100) }}" alt=""></a>
                    <figcaption class='text-center'>{!! nl2br(e($topic->name)) !!}</figcaption>
                </figure>
            </div>
        @endforeach
        </div>
    </div>
</ul>
{{ $topics->links('pagination::bootstrap-4') }}