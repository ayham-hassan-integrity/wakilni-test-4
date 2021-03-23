@extends('backend.layouts.app')

@section('title', __('Update Location'))

@section('content')
    <x-forms.patch :action="route('admin.location.update', $location)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Location')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.location.index')" :text="__('Cancel')"/>
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="building" class="col-md-2 col-form-label">@lang('building')</label>

                    <div class="col-md-10">
                        <input type="text" name="building" class="form-control" placeholder="{{  __('building') }} " value="{{   $location->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="floor" class="col-md-2 col-form-label">@lang('floor')</label>

                    <div class="col-md-10">
                        <input type="text" name="floor" class="form-control" placeholder="{{  __('floor') }} " value="{{   $location->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="directions" class="col-md-2 col-form-label">@lang('directions')</label>

                    <div class="col-md-10">
                        <input type="text" name="directions" class="form-control" placeholder="{{  __('directions') }} " value="{{   $location->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="longitude" class="col-md-2 col-form-label">@lang('longitude')</label>

                    <div class="col-md-10">
                        <input type="text" name="longitude" class="form-control" placeholder="{{  __('longitude') }} " value="{{   $location->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="latitude" class="col-md-2 col-form-label">@lang('latitude')</label>

                    <div class="col-md-10">
                        <input type="text" name="latitude" class="form-control" placeholder="{{  __('latitude') }} " value="{{   $location->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="area_id" class="col-md-2 col-form-label">@lang('area_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="area_id" class="form-control" placeholder="{{  __('area_id') }} " value="{{   $location->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="personable_id" class="col-md-2 col-form-label">@lang('personable_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="personable_id" class="form-control" placeholder="{{  __('personable_id') }} " value="{{   $location->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="personable_type" class="col-md-2 col-form-label">@lang('personable_type')</label>

                    <div class="col-md-10">
                        <input type="text" name="personable_type" class="form-control" placeholder="{{  __('personable_type') }} " value="{{   $location->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="type_id" class="col-md-2 col-form-label">@lang('type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="type_id" class="form-control" placeholder="{{  __('type_id') }} " value="{{   $location->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="is_active" class="col-md-2 col-form-label">@lang('is_active')</label>

                    <div class="col-md-10">
                        <input type="text" name="is_active" class="form-control" placeholder="{{  __('is_active') }} " value="{{   $location->title }}  "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="image_id" class="col-md-2 col-form-label">@lang('image_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="image_id" class="form-control" placeholder="{{  __('image_id') }} " value="{{   $location->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="app_token_id" class="col-md-2 col-form-label">@lang('app_token_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="app_token_id" class="form-control" placeholder="{{  __('app_token_id') }} " value="{{   $location->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="app_ref_id" class="col-md-2 col-form-label">@lang('app_ref_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="app_ref_id" class="form-control" placeholder="{{  __('app_ref_id') }} " value="{{   $location->title }}  "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="voice" class="col-md-2 col-form-label">@lang('voice')</label>

                    <div class="col-md-10">
                        <input type="text" name="voice" class="form-control" placeholder="{{  __('voice') }} " value="{{   $location->title }}  "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Location')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection