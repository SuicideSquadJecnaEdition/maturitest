@extends('layouts.admin')

@section('title')
    <title>Update Listing</title>
@endsection

@section('content')

    {{--
  TEMPLATE PRO LISTING:

<div class="bg-light border rounded mb-3">
            <div class="d-flex justify-content-between">
                <p class="h3 m-0 p-1">[[textPodListingem]]</p>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="[[urlNaUpdate]]">
                        <img class="bg-info p-1 m-1" style="width: 24px" src="{{ asset("img/wrench-icon.svg")  }}">
                    </a>
                    <a href="[[urlNaVnoreni]]">
                        <img class="bg-info p-1 m-1" style="width: 24px" src="{{ asset("img/right-arrow.svg")  }}">
                    </a>
                </div>
            </div>
        </div>


  --}}

    <div class="container mt-5">
        <h1 class="text-center">ADMIN</h1>
        <h3 class="text-center">Header Listingu</h3>

        <div class="bg-light border rounded mb-3">
            <div class="d-flex justify-content-between">
                <p class="h3 m-0 p-1">Text</p>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="#">
                        <img class="bg-info p-1 m-1" style="width: 24px" src="{{ asset("img/wrench-icon.svg")  }}">
                    </a>
                    <a href="#">
                        <img class="bg-info p-1 m-1" style="width: 24px" src="{{ asset("img/right-arrow.svg")  }}">
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-light border rounded mb-3">
            <div class="d-flex justify-content-between">
                <p class="h3 m-0 p-1">Text</p>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="#">
                        <img class="bg-info p-1 m-1" style="width: 24px" src="{{ asset("img/wrench-icon.svg")  }}">
                    </a>
                    <a href="#">
                        <img class="bg-info p-1 m-1" style="width: 24px" src="{{ asset("img/right-arrow.svg")  }}">
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-light border rounded mb-3">
            <div class="d-flex justify-content-between">
                <p class="h3 m-0 p-1">Text</p>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="#">
                        <img class="bg-info p-1 m-1" style="width: 24px" src="{{ asset("img/wrench-icon.svg")  }}">
                    </a>
                    <a href="#">
                        <img class="bg-info p-1 m-1" style="width: 24px" src="{{ asset("img/right-arrow.svg")  }}">
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-light border rounded mb-3">
            <div class="d-flex justify-content-between">
                <p class="h3 m-0 p-1">Text</p>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="#">
                        <img class="bg-info p-1 m-1" style="width: 24px" src="{{ asset("img/wrench-icon.svg")  }}">
                    </a>
                    <a href="#">
                        <img class="bg-info p-1 m-1" style="width: 24px" src="{{ asset("img/right-arrow.svg")  }}">
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-light border rounded mb-3">
            <div class="d-flex justify-content-between">
                <p class="h3 m-0 p-1">Text</p>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="#">
                        <img class="bg-info p-1 m-1" style="width: 24px" src="{{ asset("img/wrench-icon.svg")  }}">
                    </a>
                    <a href="#">
                        <img class="bg-info p-1 m-1" style="width: 24px" src="{{ asset("img/right-arrow.svg")  }}">
                    </a>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <a class="btn btn-danger" href="#">Přidat nový</a>
        </div>

    </div>

@endsection

@section('script')

@endsection
