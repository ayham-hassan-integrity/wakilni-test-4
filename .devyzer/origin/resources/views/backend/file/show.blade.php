@extends('backend.layouts.app')

@section('title', __('View File'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View File')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.file.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('id')</th>
                    <td>{{   $file->id }}</td>
                </tr>
                <tr>
                    <th>@lang('mime')</th>
                    <td>{{   $file->mime }}</td>
                </tr>
                <tr>
                    <th>@lang('filename')</th>
                    <td>{{   $file->filename }}</td>
                </tr>
                <tr>
                    <th>@lang('size')</th>
                    <td>{{   $file->size }}</td>
                </tr>
                <tr>
                    <th>@lang('storage_path')</th>
                    <td>{{   $file->storage_path }}</td>
                </tr>
                <tr>
                    <th>@lang('disk')</th>
                    <td>{{   $file->disk }}</td>
                </tr>
                <tr>
                    <th>@lang('status')</th>
                    <td>{{   $file->status }}</td>
                </tr>
                <tr>
                    <th>@lang('fileable_id')</th>
                    <td>{{   $file->fileable_id }}</td>
                </tr>
                <tr>
                    <th>@lang('fileable_type')</th>
                    <td>{{   $file->fileable_type }}</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('File Created'):</strong> @displayDate($file->created_at) ({{   $file->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($file->updated_at) ({{   $file->updated_at->diffForHumans() }})

                @if($file->trashed())
                    <strong>@lang('File Deleted'):</strong> @displayDate($file->deleted_at) ({{   $file->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
@endsection