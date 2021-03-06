@extends('admin.layout.master')

@section('title', __('Workspaces'))

@section('module', __('Workspaces List'))

@section('content')
<div class="m-portlet">
    <div class="m-portlet__body">
        <div class="m-section">
            <div class="m-section__content">
                <table class="table m-table m-table--head-bg-success table-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>@lang('Workspace')</th>
                            <th>@lang('Total Seat')</th>
                            <th>@lang('Location')</th>
                            @if (Auth::user()->role == config('site.permission.admin'))
                                <th>
                                    <a href="{{ route('workspaces.create') }}" class="btn m-btn--pill m-btn--air btn-secondary" data-toggle="m-tooltip" data-placement="left" data-original-title="@lang('Add Workspace')">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($workspaces as $key => $item)
                        <tr>
                            <th scope="row">{{ ($key+1) }}</th>
                            <td class="sorting_1" tabindex="0">
                                <div>
                                    <div class="m-card-user__details">
                                        <h3 class="m-card-user__name">
                                            <a href="{{ url('admin/calendar/workplace/' . $item->id) }}">{{ $item->name }}</a>
                                        </h3>
                                    </div>
                                    <div>
                                        <div>
                                            <span class="w-50">
                                                <img src="{{ $item->photo }}" alt="" class="size-workspace">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>{{ $item->total_seat }}</h5>
                            </td>
                            <td>
                                @foreach($item->locations as $location)
                                    <p>{{ $location->name }} : {{ $location->total_seat }} @lang('seat')</p>
                                @endforeach
                            </td>
                            @if (Auth::user()->role == config('site.permission.admin'))
                                <td>
                                    <a href="{{ route('workspaces.edit', ['id' => $item->id]) }}" class="btn btn-warning m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill" data-toggle="m-tooltip" data-placement="left" data-original-title="@lang('Edit Workspace')">
                                        <i class="flaticon-edit-1"></i>
                                    </a>
                                    {!! Form::open(['route' => ['workspaces.destroy', $item->id],
                                        'class' => 'd-inline',
                                        'method' => 'DELETE'
                                    ]) !!}
                                    {!! Form::button('<i class="flaticon-cancel"></i>', [
                                        'class' => 'delete btn btn-danger m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill',
                                        'type' => 'submit',
                                        'message' => __('Delete this item?')
                                    ]) !!}
                                    {!! Form::close() !!}
                                </td>
                            @endif
                        </tr>
                        @empty
                            @include('admin.components.alert', ['type' => 'warning', 'message' => __('Have no data!')])
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
