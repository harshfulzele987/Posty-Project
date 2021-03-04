@props(['post' => $post])

<div>

    <div class="mb-4">
        <a href="{{ route('users.post',$post->user) }} " class="front-bold"> {{ $post->user->name }}</a>

        <samp class="text-gray-500 text-sm">{{ $post->created_at->diffForHumans()}}</samp>
        <p class="mb-2">{{ $post->body}} </p>

        @can('delete' , $post)
            
                <form action="{{ route('posts.distroy', $post) }}" method="post" 
                class="mr-1">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="text-blue-500">Delete Post</button>
            </form>
          
        @endcan
        </form>
        
        <div class="flex item-center">
            @auth
            @if(!$post->likeBy(auth()->user()))

            <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
          @csrf
                <button type="submit" class="text-blue-500">Like</button>
            </form>
            @else
            <form action="{{ route('posts.likes', $post) }}" method="post" 
                class="mr-1">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="text-blue-500">Unlike</button>
            </form>
            @endauth
            @endif
           

            <span> {{$post->likes->count() }} likes</span>
        
        </div>
        
      
        



    </div>
</div>