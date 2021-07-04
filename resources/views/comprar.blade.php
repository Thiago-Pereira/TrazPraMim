@extends('layouts.app')

@section('content')
    {{-- <NavBar /> --}}
    <nav class="bg-secondary text-white pl-4 d-flex justify-content-between position-fixed" style="width: 100%; height: 46px; padding-bottom: 50px;">
        <ul class="my-auto">
            <li class="d-flex align-items-center justify-content-around">
                <a href="{{route('menu')}}" class="d-block text-dark" style="line-height: 46px; padding: 0 14px; text-decoration: none; font-size: 16px;">
                    <img style=" width: 21%;  object-fit: cover;" src="{{asset('assets/logo.jpeg')}}" alt="Logo" >
                </a>
            </li>
        </ul>
        <div class="bg-secondary" style="margin-right: 16px; font-size: 17px; border: none; cursor: pointer;">
            <form action="#">
                <input type="text" placeholder="Pesquisar.." name="search" style="padding: 6px; margin-top: 8px; font-size: 17px; border: none;" >
                <button type="submit">
                    <i class="fas fa-search" class="bg-secondary"></i>
                </button>
            </form>
        </div>
    </nav>




    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center" style="padding-top: 60px;">
            <select name="region" id="region" class="mt-2 border-0" style="border-radius: 0.25rem;">
                <option value="" disabled>Selecione a região</option>
                <option value="leste">Leste</option>
                <option value="sudeste">Sudeste</option>
                <option value="sudoeste">Sudoeste</option>
                <option value="norte">Norte</option>
                <option value="nordeste">Nordeste</option>
                <option value="sul">Sul</option>
                <option value="centro_oeste">Centro Oeste</option>
            </select>

            <div class="row justify-content-between align-items-center" style="width: 100%; gap: 2rem; padding: 0 1rem;">
                <div class="col" style="border-radius: 0.25rem; padding: 1rem;">
                    <div class="d-flex bg-white p-1" style="width: 450px; border-radius: 0.25rem;">
                        <div class="mb-1">
                            <h1 style="font-size: 1.5rem; margin-bottom: 0.25rem;">Acarajé</h1>
                            <img style="width: 16rem; border-radius: 0.25rem;" src="https://th.bing.com/th/id/Rf1219b820054d06e7e5d865ebdf5a0f8?rik=YRO9xexjW5Wn0A&pid=ImgRaw" alt="acarajé" >
                        </div>
                        <div class="m-2 d-flex flex-column align-items-center justify-content-center">
                            <p>Esse é o texto do negócio</p>
                            <button class="p-3 text-white" style="border-radius: 0.25rem; cursor: pointer; transition: all 0.3s; background-color: #0987A0; margin: 2rem 0; padding: 1rem 2rem;">
                                Listar viajantes
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col" style="border-radius: 0.25rem; padding: 1rem;">
                    <div class="d-flex bg-white p-1" style="width: 450px; border-radius: 0.25rem;">
                        <div class="mb-1">
                            <h1 style="font-size: 1.5rem; margin-bottom: 0.25rem;">Chimarrão</h1>
                            <img style="width: 16rem; border-radius: 0.25rem;" src="https://th.bing.com/th/id/OIP.zvFE2tBE8FxR6FpsjgXfaAHaE8?pid=ImgDet&rs=1" alt="chimarrao">
                        </div>
                        <div class="m-2 d-flex flex-column align-items-center justify-content-center">
                            <p>Esse é o texto do negócio</p>
                            <button class="p-3 text-white" style="border-radius: 0.25rem; cursor: pointer; transition: all 0.3s; background-color: #0987A0; margin: 2rem 0; padding: 1rem 2rem;">
                                Listar viajantes
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col" style="border-radius: 0.25rem; padding: 1rem;">
                    <div class="d-flex bg-white p-1" style="width: 450px; border-radius: 0.25rem;">
                        <div class="mb-1">
                            <h1 style="font-size: 1.5rem; margin-bottom: 0.25rem;">Doce de Leite</h1>
                            <img style="width: 16rem; border-radius: 0.25rem;" src="https://http2.mlstatic.com/delicia-de-doce-de-leite-mineiro-prainha-D_NQ_NP_356405-MLB25022051270_082016-F.jpg" alt="doce de leite" >
                        </div>
                        <div class="m-2 d-flex flex-column align-items-center justify-content-center">
                            <p>Esse é o texto do negócio</p>
                            <button class="p-3 text-white" style="cursor: pointer; transition: all 0.3s; background-color: #0987A0; margin: 2rem 0; padding: 1rem 2rem; border-radius: 0.25rem;">
                                Listar viajantes
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
