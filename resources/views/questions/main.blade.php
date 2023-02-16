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


        <a data-toggle="collapse" aria-controls="ukolPV" aria-expanded="false" href="#ukolPV" style="text-decoration: none; cursor: pointer" class="text-center bg-secondary rounded mt-3 d-flex justify-content-around">
            <img style="width: 32px" src="{{ asset("/img/arrow-icon.svg")  }}">
            <p class="p-5 h1 text-light">PV</p>
            <img style="width: 32px" src="{{ asset("/img/arrow-icon.svg")  }}">
        </a>
        <div class="collapse bg-light border" id="ukolPV">
            <div class="d-flex flex-column">
                <a href="#" class="m-1 text-dark"><span class="text-primary font-weight-bold">1.</span> lol</a>
                <a href="#" class="m-1 text-dark"><span class="text-primary font-weight-bold">2.</span> lol</a>
                <a href="#" class="m-1 text-dark"><span class="text-primary font-weight-bold">3.</span> lol</a>
                <a href="#" class="m-1 text-dark"><span class="text-primary font-weight-bold">4.</span> lol</a>
                <a href="#" class="m-1 text-dark"><span class="text-primary font-weight-bold">5.</span> lol</a>
                <a href="#" class="m-1 text-dark"><span class="text-primary font-weight-bold">6.</span> lol</a>
            </div>
        </div>

        <a data-toggle="collapse" aria-controls="ukolWA" aria-expanded="false" href="#ukolWA" style="text-decoration: none; cursor: pointer" class="text-center bg-secondary rounded mt-3 d-flex justify-content-around">
            <img style="width: 32px" src="{{ asset("/img/arrow-icon.svg")  }}">
            <p class="p-5 h1 text-light">WA</p>
            <img style="width: 32px" src="{{ asset("/img/arrow-icon.svg")  }}">
        </a>
        <div class="collapse bg-light border" id="ukolWA">
            <div class="d-flex flex-column">
                <a href="#" class="m-1 text-dark"><span class="text-primary font-weight-bold">1.</span> lol</a>
                <a href="#" class="m-1 text-dark"><span class="text-primary font-weight-bold">2.</span> lol</a>
                <a href="#" class="m-1 text-dark"><span class="text-primary font-weight-bold">3.</span> lol</a>
                <a href="#" class="m-1 text-dark"><span class="text-primary font-weight-bold">4.</span> lol</a>
                <a href="#" class="m-1 text-dark"><span class="text-primary font-weight-bold">5.</span> lol</a>
                <a href="#" class="m-1 text-dark"><span class="text-primary font-weight-bold">6.</span> lol</a>
            </div>
        </div>

        <a data-toggle="collapse" aria-controls="ukolDS" aria-expanded="false" href="#ukolDS" style="text-decoration: none; cursor: pointer" class="text-center bg-secondary rounded mt-3 d-flex justify-content-around">
            <img style="width: 32px" src="{{ asset("/img/arrow-icon.svg")  }}">
            <p class="p-5 h1 text-light">DS</p>
            <img style="width: 32px" src="{{ asset("/img/arrow-icon.svg")  }}">
        </a>
        <div class="collapse bg-light border" id="ukolDS">
            <div class="d-flex flex-column">
                <a href="#" class="m-1 text-dark"><span class="text-primary font-weight-bold">1.</span> lol</a>
                <a href="#" class="m-1 text-dark"><span class="text-primary font-weight-bold">2.</span> lol</a>
                <a href="#" class="m-1 text-dark"><span class="text-primary font-weight-bold">3.</span> lol</a>
                <a href="#" class="m-1 text-dark"><span class="text-primary font-weight-bold">4.</span> lol</a>
                <a href="#" class="m-1 text-dark"><span class="text-primary font-weight-bold">5.</span> lol</a>
                <a href="#" class="m-1 text-dark"><span class="text-primary font-weight-bold">6.</span> lol</a>
            </div>
        </div>


    </div>

@endsection

@section('script')

@endsection
