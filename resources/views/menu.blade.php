@extends('layouts.app')

@section('content')


<nav class="bg-secondary text-white pl-4 d-flex justify-content-between position-fixed" style="width: 100%; height: 46px; padding-bottom: 50px;">
    <ul class="my-auto">
        <li class="d-flex align-items-center justify-content-around">
            <a href="{{route('menu')}}" class="d-block text-dark" style="line-height: 46px; padding: 0 14px; text-decoration: none; font-size: 16px;">
                <img style=" width: 21%;  object-fit: cover;" src="{{asset('assets/logo.jpeg')}}" alt="Logo" >
            </a>
        </li>
    </ul>
    <div class="bg-secondary" style="margin-right: 16px; font-size: 17px; border: none; cursor: pointer;">
        <a href=""></a>
    </div>
</nav>


<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="d-flex flex-column mx-auto align-items-center" >
            <label class="font-weight-bold text-dark" style="padding-bottom: 10px; font-size: 18px;">Configurações</label>
            <div class="d-flex flex-row bg-white align-items-center justify-content-center rounded" style="cursor: pointer; height: 100px; width: 100px;">
                <div style="color: #0987A0;">
                    <i class="fas fa-cog fa-2x"></i>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column mx-auto align-items-center" >
            <label class="font-weight-bold text-dark" style="padding-bottom: 10px; font-size: 18px;">Viagem</label>
            <div class="d-flex flex-row bg-white align-items-center justify-content-center rounded" style="cursor: pointer; height: 100px; width: 100px;">
                <div style="color: #0987A0;">
                    <i class="fas fa-car-side fa-2x"></i>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column mx-auto align-items-center" >
            <label class="font-weight-bold text-dark" style="padding-bottom: 10px; font-size: 18px;">Compra</label>
            <div class="d-flex flex-row bg-white align-items-center justify-content-center rounded" style="cursor: pointer; height: 100px; width: 100px;">
                <a href="{{ route('comprar') }}" style="color: #0987A0;">
                    <i class="fas fa-cart-arrow-down fa-2x"></i>
                </a>
            </div>
        </div>
        <div class="d-flex flex-column mx-auto align-items-center" >
            <label class="font-weight-bold text-dark" style="padding-bottom: 10px; font-size: 18px;">Área de Cadastro</label>
            <div class="d-flex flex-row bg-white align-items-center justify-content-center rounded" style="cursor: pointer; height: 100px; width: 100px;">
                <div style="color: #0987A0;">
                    <i class="fas fa-id-badge fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
