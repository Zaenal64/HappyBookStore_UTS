@extends('welcome')

@section('main')
    <main>
        <div class="main-container">
            <div class="main-left">
                <div class="main-header">
                    <p>Contact</p>
                </div>

                <div class="contact-container">
                    <div class="contact-content">
                        <div>
                            <p class="title">Store Address</p>

                            <p>Jalan Pembangunan Baru Raya</p>

                            <p>Kompleks Pertokoan Emerald Blok III/12</p>

                            <p>Bintaro, Tanggerang Selatan</p>
                        </div>

                        <div>
                            <p class="title">Open Daily</p>

                            <p>08.00 - 20.00</p>
                        </div>

                        <div>
                            <p class="title">Contact</p>

                            <p>Phone : 021-088776655</p>

                            <p>Email : happybookstore@happy.com</p>
                        </div>

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
