@if (count($users) > 0)
    <ul class="list-unstyled mt-5 d-flex">
        <div class="row">
        @foreach ($users as $user)
            <div class="col-md-2 media">
                <figure class='mr-5'>
                    <a href="{{ route('users.show', ['id' => $user->id]) }}"><img class="mr-2 rounded" src="{{ Gravatar::src($user->email, 100) }}" alt=""></a>
                    <figcaption class='text-center'>{{ $user->name }}</figcaption>
                </figure>  
            </div>
        @endforeach
         </div>
    </ul>
    {{ $users->links('pagination::bootstrap-4') }}
@endif