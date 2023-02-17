@extends('layouts.main')

@section('title')
    <title>Maturitest</title>
@endsection

@section('content')

    <h2 class="text-center">MATURITEST</h2>
    <p class="text-center">Naučte se. Otestujte se - Bez stresu. Bez placení.</p>

{{--
  TEMPLATE PRO PŘEDMĚT:

<a data-toggle="collapse" aria-controls="[[idPredmet]]" aria-expanded="false" href="#[[idPredmet]]" style="text-decoration: none; cursor: pointer" class="text-center bg-secondary rounded mt-3 d-flex justify-content-around">
            <img style="width: 32px" src="{{ asset("/img/arrow-icon.svg")  }}">
            <p class="p-5 h1 text-light">[[jmenoPredmetu]]</p>
            <img style="width: 32px" src="{{ asset("/img/arrow-icon.svg")  }}">
        </a>
        <div class="collapse bg-light border" id="[[idPredmet]]">
            <div class="d-flex flex-column">

                foreach(otazka in predmet) {
                    <a href="[[linkOtazky]]" class="m-1 text-dark"><span class="text-primary font-weight-bold">[[cisloOtazky]].</span> [[jmenoOtazky]]</a>
                }

            </div>
        </div>


  --}}



    <div class="container">
    @foreach($subjects as $subject)
        <?php $question_number = 1; ?>
        <a data-toggle="collapse" aria-controls="ukol{{$subject->name}}" aria-expanded="false" href="#ukol{{$subject->name}}" style="text-decoration: none; cursor: pointer" class="text-center bg-secondary rounded mt-3 d-flex justify-content-around">
            <img style="width: 32px" src="{{ asset("/img/arrow-icon.svg")  }}" alt="arrow_icon">
            <p class="p-5 h1 text-light">{{$subject->name}}</p>
            <img style="width: 32px" src="{{ asset("/img/arrow-icon.svg")  }}" alt="arrow_icon">
        </a>
        <div class="collapse bg-light border" id="ukol{{$subject->name}}">
            <div class="d-flex flex-column">
                    @foreach($questions as $question)
                    @if($question->fk_question_subject == $subject->subject_id)
                    <a href="{{route('questions.question', ['question' => $question->question_id])}}" class="m-1 text-dark"><span class="font-weight-bold">{{$question_number}}</span> {{$question->name}}</a>
                        <?php $question_number++; ?>
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
    </div>

@endsection

@section('script')

@endsection
