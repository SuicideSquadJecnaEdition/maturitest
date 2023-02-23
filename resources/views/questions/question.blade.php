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
        </div>

        <div class="mt-5 mb-5">

            <h3>--- Header otázky ---</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis pulvinar. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Phasellus et lorem id felis nonummy placerat. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus. Fusce suscipit libero eget elit. Praesent dapibus. Aliquam ante. Integer imperdiet lectus quis justo. Fusce suscipit libero eget elit. Quisque porta. Sed convallis magna eu sem.
            </p>
        </div>

        <h3 class="mb-3 font-weight-bold">Otestujte své znalosti!</h3>

        <form id="test_form" method="POST" action="{{route('check-answers', ['question_id' => $question->question_id])}}">
            <input type="hidden" value="{{$question->question_id}}">
            @csrf
            <?php $test_number = 1; ?>
            @foreach($question_test as $test)

                <p>
                    <label for="odpoved{{$test->question_test_id}}" class="font-weight-bold">{{$test_number}}</label>
                    {{$test->question}}
                    <input id="odpoved{{$test->question_test_id}}" name="odpoved{{$test->question_test_id}}" type="text">
                </p>
                    <?php $test_number++; ?>
            @endforeach
            <div class="text-center">
                <button type="submit" class="btn btn-danger" id="check-btn">Zkontrolovat</button>
            </div>
        </form>
        <div id="goodAnswers"></div>
        <div id="badAnswers"></div>
    </div>

@endsection

@section('script')

@endsection
