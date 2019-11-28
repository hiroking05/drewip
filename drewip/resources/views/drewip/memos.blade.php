<ul class="list-unstyled">
    @foreach ($memos as $memo)
        <li class="media mb-3">
            <div class="media-body">
                <p class="mb-0">{!! nl2br(e($memo->content)) !!}</p>
            </div>
        </li>
    @endforeach
</ul>
{{ $memos->links('pagination::bootstrap-4') }}