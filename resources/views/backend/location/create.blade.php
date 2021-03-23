@extends('backend.layouts.app')

@section('title', __('Create Location'))

@section('content')
    <x-forms.post :action="route('admin.location.store')">
        <x-backend.card>
            <x-slot name="header">
                @lang('Create Location')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.location.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div class="form-group row">
                    <label for="building" class="col-md-2 col-form-label">@lang('building')</label>

                    <div class="col-md-10">
                        <input type="text" name="building" class="form-control" placeholder="{{  __('building') }} " value="{{  old('building') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="floor" class="col-md-2 col-form-label">@lang('floor')</label>

                    <div class="col-md-10">
                        <input type="text" name="floor" class="form-control" placeholder="{{  __('floor') }} " value="{{  old('floor') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="directions" class="col-md-2 col-form-label">@lang('directions')</label>

                    <div class="col-md-10">
                        <input type="text" name="directions" class="form-control" placeholder="{{  __('directions') }} " value="{{  old('directions') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="longitude" class="col-md-2 col-form-label">@lang('longitude')</label>

                    <div class="col-md-10">
                        <input type="text" name="longitude" class="form-control" placeholder="{{  __('longitude') }} " value="{{  old('longitude') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="latitude" class="col-md-2 col-form-label">@lang('latitude')</label>

                    <div class="col-md-10">
                        <input type="text" name="latitude" class="form-control" placeholder="{{  __('latitude') }} " value="{{  old('latitude') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="area_id" class="col-md-2 col-form-label">@lang('area_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="area_id" class="form-control" placeholder="{{  __('area_id') }} " value="{{  old('area_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="personable_id" class="col-md-2 col-form-label">@lang('personable_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="personable_id" class="form-control" placeholder="{{  __('personable_id') }} " value="{{  old('personable_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="personable_type" class="col-md-2 col-form-label">@lang('personable_type')</label>

                    <div class="col-md-10">
                        <input type="text" name="personable_type" class="form-control" placeholder="{{  __('personable_type') }} " value="{{  old('personable_type') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="type_id" class="col-md-2 col-form-label">@lang('type_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="type_id" class="form-control" placeholder="{{  __('type_id') }} " value="{{  old('type_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="is_active" class="col-md-2 col-form-label">@lang('is_active')</label>

                    <div class="col-md-10">
                        <input type="text" name="is_active" class="form-control" placeholder="{{  __('is_active') }} " value="{{  old('is_active') }} "  required   />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="image_id" class="col-md-2 col-form-label">@lang('image_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="image_id" class="form-control" placeholder="{{  __('image_id') }} " value="{{  old('image_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="app_token_id" class="col-md-2 col-form-label">@lang('app_token_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="app_token_id" class="form-control" placeholder="{{  __('app_token_id') }} " value="{{  old('app_token_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="app_ref_id" class="col-md-2 col-form-label">@lang('app_ref_id')</label>

                    <div class="col-md-10">
                        <input type="text" name="app_ref_id" class="form-control" placeholder="{{  __('app_ref_id') }} " value="{{  old('app_ref_id') }} "  />
                    </div>

                </div><!--form-group-->
                <div class="form-group row">
                    <label for="voice" class="col-md-2 col-form-label">@lang('voice')</label>

                    <div class="col-md-10">
                        <input type="text" name="voice" class="form-control" placeholder="{{  __('voice') }} " value="{{  old('voice') }} "  />
                    </div>

                </div><!--form-group-->
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Location')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.post>
@endsection