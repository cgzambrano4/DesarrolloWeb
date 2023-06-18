@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Tipo Auto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Tipo Auto</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipo-autos.update', $tipoAuto->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tipo-auto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
