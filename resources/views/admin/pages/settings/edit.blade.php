@extends('admin.layouts.master')
@section('title')
{{ __('update') }}
@endsection

@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')
<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('admin.setting.update',['setting' => $setting->id]) }}" method="post">
            @csrf
            @method('PUT')

            <h5>Settings</h5>
            <hr>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="logo">Logo</label>
                    <input type="text" name="logo" id="logo" class="form-control" value="{{ $setting->logo }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="email">email</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{ $setting->email }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="phone_number">phone_number</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ $setting->phone_number }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="address">address</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{ $setting->address }}">
                </div>
            </div>

            <hr>
            <h5>Socials</h5>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="twitter">twitter</label>
                    <input type="text" name="twitter" id="twitter" class="form-control" value="{{ $setting->twitter }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="linkedin">linkedin</label>
                    <input type="text" name="linkedin" id="linkedin" class="form-control" value="{{ $setting->linkedin }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="facebook">facebook</label>
                    <input type="text" name="facebook" id="facebook" class="form-control" value="{{ $setting->facebook }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="instagram">instagram</label>
                    <input type="text" name="instagram" id="instagram" class="form-control" value="{{ $setting->instagram }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="telegram">telegram</label>
                    <input type="text" name="instagram" id="telegram" class="form-control" value="{{ $setting->telegram }}">
                </div>
            </div>

            <hr>
            <h5>Socials</h5>
            <div class="row">
                <div class="form-group col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="hero_title">hero_title</label>
                            <input type="text" name="hero_title" id="hero_title" class="form-control" value="{{ $setting->hero_title }}">
                        </div>
                        <div class="col-md-12">
                            <label for="hero_button_text">hero_button_text</label>
                            <input type="text" name="hero_button_text" id="hero_button_text" class="form-control" value="{{ $setting->hero_button_text }}">
                        </div>
                        <div class="col-md-12">
                            <label for="hero_button_text">hero_button_text</label>
                            <input type="text" name="hero_button_text" id="hero_button_text" class="form-control" value="{{ $setting->hero_button_text }}">
                        </div>
                        <div class="col-md-12">
                            <label for="hero_button_src">hero_button_src</label>
                            <input type="text" name="hero_button_src" id="hero_button_src" class="form-control" value="{{ $setting->hero_button_src }}">
                        </div>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="hero_description">hero_description</label>
                    <textarea name="hero_description" id="hero_description" cols="30" rows="10" class="form-control">{{ $setting->hero_description }}</textarea>
                </div>

            </div>

            <hr>
            <h5>why us</h5>
            <div class="row">
                <div class="col-md-6">
                    <label for="why_us_image">why_us_image</label>
                    <input type="file" name="why_us_image" id="why_us_image" class="form-control" value="{{ $setting->why_us_image }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="why_us_title">why_us_title</label>
                    <input type="text" name="why_us_title" id="why_us_title" class="form-control" value="{{ $setting->why_us_title }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="why_us_title">why_us_title</label>
                    <input type="text" name="why_us_title" id="why_us_title" class="form-control" value="{{ $setting->why_us_title }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="why_us_button_text">why_us_button_text</label>
                    <input type="text" name="why_us_button_text" id="why_us_button_text" class="form-control" value="{{ $setting->why_us_button_text }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="why_us_button_src">why_us_button_src</label>
                    <input type="text" name="why_us_button_src" id="why_us_button_src" class="form-control" value="{{ $setting->why_us_button_src }}">
                </div>

                <div class="form-group col-md-12">
                    <label for="why_us_description">why_us_description</label>
                    <textarea name="why_us_description" id="why_us_description" cols="30" rows="3" class="form-control">{{ $setting->why_us_description }}</textarea>
                </div>

            </div>

            <hr>
            <h5>about</h5>
            <div class="row">
                <div class="col-md-12">
                    <label for="about_title">about_title</label>
                    <input type="text" name="about_title" id="about_title" class="form-control" value="{{ $setting->about_title }}">
                </div>

                <div class="col-md-12">
                    <label for="about_title">about_title</label>
                    <textarea name="about_description" id="about_description" cols="30" rows="3" class="form-control">{{ $setting->about_description }}</textarea>
                </div>

            </div>

            <hr>
            <h5>services</h5>
            <div class="row">
                <div class="col-md-12">
                    <label for="service_title">service_title</label>
                    <input type="text" name="service_title" id="service_title" class="form-control" value="{{ $setting->service_title }}">
                </div>

                <div class="col-md-12">
                    <label for="service_description">service_description</label>
                    <textarea name="service_description" id="service_description" cols="30" rows="3" class="form-control">{{ $setting->service_description }}</textarea>
                </div>
            </div>

            <hr>
            <h5>Appointment</h5>
            <div class="row">
                <div class="col-md-12">
                    <label for="appointment_title">appointment_title</label>
                    <input type="text" name="appointment_title" id="appointment_title" class="form-control" value="{{ $setting->appointment_title }}">
                </div>

                <div class="col-md-12">
                    <label for="service_description">service_description</label>
                    <textarea name="service_description" id="service_description" cols="30" rows="3" class="form-control">{{ $setting->appointment_description }}</textarea>
                </div>
            </div>

            <hr>
            <h5>Departments</h5>
            <div class="row">
                <div class="col-md-12">
                    <label for="departments_title">departments_title</label>
                    <input type="text" name="departments_title" id="departments_title" class="form-control" value="{{ $setting->departments_title }}">
                </div>

                <div class="col-md-12">
                    <label for="departments_description">departments_description</label>
                    <textarea name="departments_description" id="departments_description" cols="30" rows="3" class="form-control">{{ $setting->departments_description }}</textarea>
                </div>
            </div>

            <hr>
            <h5>Doctors</h5>
            <div class="row">
                <div class="col-md-12">
                    <label for="doctors_title">doctors_title</label>
                    <input type="text" name="doctors_title" id="doctors_title" class="form-control" value="{{ $setting->doctors_title }}">
                </div>

                <div class="col-md-12">
                    <label for="doctors_description">doctors_description</label>
                    <textarea name="doctors_description" id="doctors_description" cols="30" rows="3" class="form-control">{{ $setting->doctors_description }}</textarea>
                </div>
            </div>

            <hr>
            <h5>Questions</h5>
            <div class="row">
                <div class="col-md-12">
                    <label for="questions_title">questions_title</label>
                    <input type="text" name="questions_title" id="questions_title" class="form-control" value="{{ $setting->questions_title }}">
                </div>

                <div class="col-md-12">
                    <label for="questions_description">questions_description</label>
                    <textarea name="questions_description" id="questions_description" cols="30" rows="3" class="form-control">{{ $setting->questions_description }}</textarea>
                </div>
            </div>

            <hr>
            <h5>Gallery</h5>
            <div class="row">
                <div class="col-md-12">
                    <label for="gallery_title">gallery_title</label>
                    <input type="text" name="gallery_title" id="gallery_title" class="form-control" value="{{ $setting->gallery_title }}">
                </div>

                <div class="col-md-12">
                    <label for="gallery_description">gallery_description</label>
                    <textarea name="gallery_description" id="gallery_description" cols="30" rows="3" class="form-control">{{ $setting->gallery_description }}</textarea>
                </div>
            </div>

            <hr>
            <h5>Contact</h5>
            <div class="row">
                <div class="col-md-4">
                    <label for="contact_title">contact_title</label>
                    <input type="text" name="contact_title" id="contact_title" class="form-control" value="{{ $setting->contact_title }}">
                </div>

                <div class="col-md-4">
                    <label for="latitude">latitude</label>
                    <input type="text" name="latitude" id="latitude" class="form-control" value="{{ $setting->latitude }}">
                </div>
                <div class="col-md-4">
                    <label for="longitude">longitude</label>
                    <input type="text" name="longitude" id="longitude" class="form-control" value="{{ $setting->longitude }}">
                </div>

                <div class="col-md-12">
                    <label for="contact_description">contact_description</label>
                    <textarea name="contact_description" id="contact_description" cols="30" rows="3" class="form-control">{{ $setting->contact_description }}</textarea>
                </div>
            </div>

            <hr>
            <h5>Footer</h5>
            <div class="row">
                <div class="col-md-12">
                    <label for="author">author</label>
                    <input type="text" name="author" id="author" class="form-control" value="{{ $setting->author }}">
                </div>

                <div class="col-md-12">
                    <label for="footer_description">footer_description</label>
                    <textarea name="footer_description" id="footer_description" cols="30" rows="3" class="form-control">{{ $setting->footer_description }}</textarea>
                </div>
            </div>

            <div class="row">
                <div class="form-group my-2 col-md-12">
                    <button class="btn btn-md btn-block btn-primary">Edit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection