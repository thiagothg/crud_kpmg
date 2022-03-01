@extends('layouts.app')

@section('breadcrumbs')
    <li class="breadcrumb-item" aria-current="page"> @lang('labels.student') </li>
    <li class="breadcrumb-item active" aria-current="page">
        @if ($student->exists)
            @lang('labels.edit')
        @else
            @lang('labels.create')
        @endif
    </li>
@endsection

@section('title')
    @lang('labels.student')
    @if ($student->exists)
        @lang('labels.edit')
    @else
        @lang('labels.create')
    @endif
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('student.index') }}" title="@lang('labels.back')"> <i
                        class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    <br />
    <form class="row g-3 col-12 col-md-6" method="post" action="{{ $route }}" novalidate>
        @csrf
        @if ($student->exists)
            @method('PUT')
        @endif

        <div class="form-group mb-2">
            <label for="matricula">@lang('validation.attributes.matricula')</label>
            <input type="text" class="form-control @error('matricula') is-invalid @enderror" name="matricula"
                value="{{ old('matricula', $student->matricula) }}" />
            @error('matricula')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">@lang('validation.attributes.name')</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('name', $student->name) }}" />
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">@lang('validation.attributes.email')</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email', $student->email) }}" />
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="cpf">@lang('validation.attributes.cpf')</label>
            <input type="text" id="cpf" class="form-control cpfMask @error('cpf') is-invalid @enderror" name="cpf"
                value="{{ old('cpf', $student->cpf) }}" />
            @error('cpf')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <div class="form-check">
                <input type="hidden" name="ativo" value="0">
                <input class="form-check-input" type="checkbox" value="1" @if (old('ativo', $student->ativo)) checked @endif
                    id="ativo" name="ativo" @if (!$student->exists) checked @endif>
                <label class="form-check-label" for="ativo">
                    @lang('validation.attributes.ativo')
                </label>
            </div>
        </div>

        <div class="col-12 mb-3">
            <button type="submit" class="btn btn-block btn-primary">
                @if ($student->exists)
                    @lang('labels.edit')
                @else
                    @lang('labels.create')
                @endif
            </button>
        </div>
    </form>
@endsection

@section('scripts')
    <script src="{{ asset('js/student/form.js') }}"></script>
@endsection
