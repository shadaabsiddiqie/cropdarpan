@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
{{--                    <img src="{{ url('storage/images/logo.png') }}" alt="" class="mx-auto" width="10%;">--}}
                    <div class="card-body mx-auto">
                        {{--<h5 class="card-title text-center">{{ __('select language and start diagnosis') }}</h5>--}}
                        <div class="row justify-content-center">
                             @if(auth()->guest() || auth()->user()->role->id == 1)
                                <div class="col-md col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="view overlay">
                                            {{--<img class="card-img-top" src="https://wallpapercave.com/wp/wp2474807.jpg" alt="Card image cap">--}}
                                            <a href="{{ route('voyager.dashboard') }}">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">{{ __('admin') }}</h4>
                                            <p class="card-text">{{ __('messages.card_description', ['role' => __('admin')]) }}</p>
                                            <a href="{{ route('voyager.dashboard') }}" class="btn btn-primary">{{ __('pagination.view_more') }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                             @if(auth()->guest() || auth()->user()->role->id == 2)
                                <div class="col-md col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="view overlay">
                                            {{--<img class="card-img-top" src="https://bloximages.chicago2.vip.townnews.com/agupdate.com/content/tncms/assets/v3/editorial/e/61/e61cc2fa-5440-56ed-9795-566d9e102e5d/5a3d7b269bed7.image.jpg" alt="Card image cap">--}}
                                            <a href="{{ route('voyager.dashboard') }}">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">{{ __('expert') }}</h4>
                                            <p class="card-text">{{ __('messages.card_description', ['role' => __('expert')]) }}</p>
                                            <a href="{{ route('voyager.dashboard') }}" class="btn btn-primary">{{ __('pagination.view_more') }}</a>
                                        </div>
                                    </div>
                                </div>
                             @endif
                             @if(auth()->guest() || auth()->user()->role->id == 3)
                                <div class="col-md col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="view overlay">
                                            {{--<img class="card-img-top" src="https://pixel.nymag.com/imgs/daily/intelligencer/2018/07/26/26-farmer.w536.h536.2x.jpg" alt="Card image cap">--}}
                                            <a href="#">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">{{ __('farmer') }}</h4>
                                            <p class="card-text">{{ __('messages.card_description', ['role' => __('farmer')]) }}</p>
                                            <a href="#" class="btn btn-primary">{{ __('pagination.view_more') }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
