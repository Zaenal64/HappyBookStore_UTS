@extends('welcome')

@section('main')
    <main>
        <div class="main-container">
            <div class="main-left">
                <div class="main-header">
                    <p>Book Detail</p>
                </div>

                <div class="detail-container">
                    <div class="detail-line">
                        <p style="font-weight: bold; margin-bottom: 5px; margin-top: 0;">Title</p>
                        <p>{{$book->title}}</p>
                    </div>


                    <div class="detail-line">
                        <p style="font-weight: bold; margin-bottom: 5px; margin-top: 0;">Author</p>
                        <p>{{$book->detail->author}}</p>
                    </div>


                    <div class="detail-line">
                        <p style="font-weight: bold; margin-bottom: 5px; margin-top: 0;">Publisher</p>
                        <p>{{$book->detail->publisher}}</p>
                    </div>


                    <div class="detail-line">
                        <p style="font-weight: bold; margin-bottom: 5px; margin-top: 0;">Year</p>
                        <p>{{$book->detail->year}}</p>
                    </div>


                    <div class="detail-line">
                        <p style="font-weight: bold; margin-bottom: 5px; margin-top: 0;">Description</p>
                        <p>{{$book->detail->description}}</p>
                    </div>
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
