    <ul class="list-unstyled mt-5 d-flex">
        @foreach ($users as $user)
            <div class="media">
                
                <figure class='mr-5'>
                    <a href="{{ route('users.show', ['id' => $user->id]) }}"><img class="mr-2 rounded" src="{{ Gravatar::src($user->email, 100) }}" alt=""></a>
                    <figcaption class='text-center'>{{ $user->name }}</figcaption>
                </figure>  
                        
            </div>
        @endforeach
            
        