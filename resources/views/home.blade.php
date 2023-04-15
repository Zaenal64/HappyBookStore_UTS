@extends('welcome')

@section('main')
    <main>

        <div class="main-container">
            <div class="main-left">
                <div class="main-header">
                    <p>
                        Book List
                    </p>
                </div>

                <div class="home-content">
                    <div class="home-content-title">
                        <div>
                            <p><strong>Title</strong></p>

                        </div>

                        <div>
                            <p><strong>Author</strong></p>

                        </div>

                    </div>

                    @forelse ($books as $book)
                    <a href="{{url('detail/'.$book->id)}}">
                        <div class="home-content-title content-line">
                            <div class="book-items-left">
                                <p>{{ $book->title }}</p>
                            </div>
                            <div class="book-items-right">
                                <p>{{$book->detail->author}}</p>
                            </div>
                        </div>
                    </a>
                    @empty
                    <div class="content-line">
                        <p>No Data..</p>
                    </div>
                    @endforelse

                </div>

                <div id="paginate">
                    {{$books->links()}}
                </div>
            </div>

            <div class="main-right">
                <div class="main-header">
                    <p>
                        Category
                    </p>
                </div>

                <div class="c-content">
                    @foreach($categ as $c)
                        <a href="{{url('categ/'.$c->id)}}">
                            <div class="c-content-line">
                                <p>{{$c->category}}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

        </div>



    </main>
@endsection
