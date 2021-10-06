@extends('layouts.app')

@section('content')

    <section class="container card">
        <div class="row">
            <div class="col-sm card">
                <img class="img-fluid"src="{{asset('image\v-1.png')}}" alt="">
            </div>
            <div class="col-sm card">
                <img class="img-fluid"src="{{asset('image\v-2.png')}}" alt="">
            </div>
            <div class="col-sm card">
                <img class="img-fluid"src="{{asset('image\v-3.png')}}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-sm card">
                <img class="img-fluid"src="{{asset('image\v-4.png')}}" alt="">
            </div>
            <div class="col-sm card">
                <img class="img-fluid"src="{{asset('image\v-5.png')}}" alt="">
            </div>
            <div class="col-sm card">
                <img class="img-fluid"src="{{asset('image\v-6.png')}}" alt="">
            </div>
        </div>
    </section>



    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('products.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('products.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

