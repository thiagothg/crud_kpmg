@extends('layouts.app')

@section('title')
    @lang('labels.student')
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item active" aria-current="page"> @lang('labels.student') </li>
@endsection

@section('content')
    <a href="{{ route('student.create') }}" class="btn btn-success btn-sm" title="@lang('labels.new_record')">
        <i class="fa fa-plus" aria-hidden="true"></i> @lang('labels.new_record')
    </a>
    <br />
    <br />

    <div class="table-responsive">
        <table id="table" class="display table table-striped table-hover" style="width:100%">
            <thead class="table-dark">
                <tr>
                    <th scope="col">@lang('validation.attributes.id')</th>
                    <th scope="col">@lang('validation.attributes.name')</th>
                    <th scope="col">@lang('validation.attributes.cpf')</th>
                    <th scope="col">@lang('validation.attributes.email')</th>
                    <th scope="col">@lang('validation.attributes.matricula')</th>
                    <th scope="col">@lang('validation.attributes.ativo')</th>
                    <th scope="col">@lang('validation.attributes.created_at')</th>
                    <th scope="col">@lang('labels.acoes')</th>
                </tr>
            </thead>
        </table>
    </div>

    @include('components.modal_delete_confirm')
@endsection


@section('scripts')
    <script src="{{ asset('js/student/index.js') }}"></script>
@endsection
