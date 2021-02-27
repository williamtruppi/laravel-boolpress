<div class="flex-center position-ref">
            <div class="content">
                <div class="title m-b-md">
                    @yield("name")
                </div>

                <div class="links">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('posts.index')}}">posts</a>
                    <a href="{{route('categories.index')}}">categories</a>
                    <a href="{{route('about')}}">About</a>
                </div>
            </div>
        </div>