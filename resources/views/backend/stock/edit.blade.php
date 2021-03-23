@extends('backend.layouts.app')

@section('title', __('Update Stock'))

@section('content')
    <x-forms.patch :action="route('admin.stock.update', $stock)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Stock')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.stock.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="label" class="col-md-2 col-form-label">@lang('label')</label>

                    <div class="col-md-10">
                        <input type="text" name="label" class="form-control" placeholder="{{  __('label') }} " value="{{   $stock->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="amount" class="col-md-2 col-form-label">@lang('amount')</label>

                    <div class="col-md-10">
                        <input type="text" name="amount" class="form-control" placeholder="{{  __('amount') }} " value="{{   $stock->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="type_id" class="col-md-2 col-form-label">@lang('type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="type_id" class="form-control" placeholder="{{  __('type_id') }} " value="{{   $stock->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="size_id" class="col-md-2 col-form-label">@lang('size_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="size_id" class="form-control" placeholder="{{  __('size_id') }} " value="{{   $stock->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Stock')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection