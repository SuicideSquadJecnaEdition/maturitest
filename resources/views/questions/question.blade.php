@extends('layouts.main')

@section('title')
    <title>Otázka</title>
@endsection

{{--
  TEMPLATE PRO OTÁZKU:

<div class="mt-5 mb-5">

            <h3>[[otazkaName]]</h3>
            <p>[[otazkaText]]</p>

            <div id="[[otazkaName]]Indicator"  class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">

                foreach(img in otazka) {
                <li data-target="#[[otazkaName]]Indicator" data-slide-to="[[cisloForEache]]" [[class="active" -- POUZE PRO PRVNI PRINT]]></li>
                }

                </ol>
                <div class="carousel-inner">

                foreach(img in otazka) {
                <div class="carousel-item [[active - jen pro první print]]">
                        <img class="d-block w-100" src="{{  asset("[[otazkaImgPath]]") }}">
                    </div>
                }

                </div>
                <a class="carousel-control-prev" href="#[[otazkaName]]Indicator" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#[[otazkaName]]Indicator" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


  --}}


@section('content')
    <div class="container">
        <h2 class="h1 text-center">{{$question->name}}</h2>
        <div class="mt-5 mb-5">

            <h3>--- Header otázky ---</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis pulvinar. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Phasellus et lorem id felis nonummy placerat. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Fusce suscipit libero eget elit. Praesent dapibus. Aliquam ante. Integer imperdiet lectus quis justo. Fusce suscipit libero eget elit. Quisque porta. Sed convallis magna eu sem.
            </p>

            <div id="carouselOneIndicator"  class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselOneIndicator" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselOneIndicator" data-slide-to="1"></li>
                    <li data-target="#carouselOneIndicator" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" alt="contentImage" src="{{  asset("/img/test-img.jpg") }}">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" alt="contentImage" src="{{  asset("/img/test-img.jpg") }}">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" alt="contentImage" src="{{  asset("/img/test-img.jpg") }}">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselOneIndicator" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselOneIndicator" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="mt-5 mb-5">

            <h3>--- Header otázky ---</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis pulvinar. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Phasellus et lorem id felis nonummy placerat. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Fusce suscipit libero eget elit. Praesent dapibus. Aliquam ante. Integer imperdiet lectus quis justo. Fusce suscipit libero eget elit. Quisque porta. Sed convallis magna eu sem.
            </p>

            <div id="carouselTwoIndicator"  class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselTwoIndicator" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselTwoIndicator" data-slide-to="1"></li>
                    <li data-target="#carouselTwoIndicator" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" alt="contentImage" src="{{  asset("/img/test-img.jpg") }}">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" alt="contentImage" src="{{  asset("/img/test-img.jpg") }}">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" alt="contentImage" src="{{  asset("/img/test-img.jpg") }}">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselTwoIndicator" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselTwoIndicator" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <h3 class="mb-3 font-weight-bold">Otestujte své znalosti!</h3>
        <form>
        <!-- $question->question / answear
                foreach($questions as $question)
                    @if($question->fk_question_subject == $subject->subject_id)
                    <a href="{{route('questions.question', ['question' => $question->question_id])}}" class="m-1 text-dark"><span class="font-weight-bold">{{$question_number}}</span> {{$question->name}}</a>
                        <?php $question_number++; ?>
                    @endif
                @endforeach-->
        
            <p><label for="otazka1" class="font-weight-bold">1.</label> Idk idk idk test otázka d awdaw d <input id="otazka1" type="text"></p>
            <p><label for="otazka2" class="font-weight-bold">2.</label> Idk idk idk test otázka dwadwa dawd awd <input id="otazka2" type="text"></p>
            <p><label for="otazka3" class="font-weight-bold">3.</label> Idk idk idk test otázka dwad awd awd  dawd wa <input id="otazka3" type="text"></p>
            <p><label for="otazka4" class="font-weight-bold">4.</label> Idk idk idk test otázka awdwa <input id="otazka4" type="text"></p>
            <p><label for="otazka5" class="font-weight-bold">5.</label> Idk idk idk test otázka <input id="otazka5" type="text"></p>

            <div class="text-center">
                <button type="submit" class="btn btn-danger">Zkontrolovat</button>
            </div>
        </form>
    </div>

@endsection

@section('script')

@endsection
