<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<a class="navbar-brand" href="{{url('/')}}">Free Ads</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse text-center" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('register')}}">Register</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/posts">Posts</a>
    </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="/posts/create">Create Post</a></li>
    </ul>
    {{-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form> --}}
</div>
</nav>