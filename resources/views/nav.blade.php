<nav class="nav">
    <div class="nav-container">
        <div>
            <a href="{{url('/')}}"><p>
                Home</p></a>
        </div>
        <div class="category">
            <p>Category</p>

            <div class="categ-dropdown ">
                @foreach($categ as $c)
                <a href="{{url('categ/'.$c->id)}}">
                    <div class="categ-items">
                        <p>{{$c->category}}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        <div>
            <a href="{{url('contact')}}">
            <p>Contact</p></a>
        </div>
    </div>

</nav>
