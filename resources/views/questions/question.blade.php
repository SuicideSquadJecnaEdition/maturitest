@extends('layouts.main')

@section('title')
    <title>Otázka</title>
@endsection


@section('content')
    <div class="container">
        <h2 class="h1 text-center">{{$question->name}}</h2>
        <div class="mt-5 mb-5">
            <h3>{{$header ?? 'Na této otázce ještě pracujeme'}}</h3>
            <p>
                {{$text ?? 'Tato otázka zatím žádný text nemá'}}
            </p>
        </div>
            @if(count($question_test) != 0)
            <h3 class="mb-3 font-weight-bold">Otestujte své znalosti!</h3>

            <form id="test_form" method="POST" action="{{route('check-answers', ['question_id' => $question->question_id])}}">
                <input type="hidden" value="{{$question->question_id}}">
                @csrf
                    <?php $test_number = 1; ?>
                @foreach($question_test as $test)
                    <p>
                        <label for="odpoved{{$test_number}}" class="font-weight-bold">{{$test_number}}</label>
                        {{$test->question}}
                        <input id="odpoved{{$test_number}}" name="odpoved{{$test_number}}" type="text">
                    </p>
                        <?php $test_number++; ?>
                @endforeach
                <div class="text-center">
                    <button type="submit" class="btn btn-danger" id="check-btn">Zkontrolovat</button>
                </div>
            </form>
            <div id="goodAnswers"></div>
            <div id="badAnswers"></div>
        @endif
    </div>

@endsection

@section('script')
    $(document).ready(function (){
        $('#test_form').submit(function (e){
            e.preventDefault();
                $.ajax({
                type: "POST",
                url: "{{route('check-answers', ['question_id' => $question->question_id])}}",
                data: $('#test_form').serialize(),
                success: function (response){
                const sum = response.split(',')
                $('#goodAnswers').html("Počet správných odpovědí:" + sum[0])
                $('#badAnswers').html("Počet špatných odpovědí:" + (sum[1] - sum[0]))
                },
                error: function (error){
                $('#goodAnswers').html("Něco se pokazilo, omlouváme se za potíže.")
                console.log(error)
                },
            });
        });
    });
@endsection
