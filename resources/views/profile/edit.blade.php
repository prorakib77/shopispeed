{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <div class="p-4 bg-white shadow sm:p-8 dark:bg-gray-800 sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 bg-white shadow sm:p-8 dark:bg-gray-800 sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 bg-white shadow sm:p-8 dark:bg-gray-800 sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.dashboard_master')
@section('content')
    {{-- for profile photo  --}}
    <style>
        .pictures-container {
            position: relative;
            cursor: pointer;
            text-align: center;
        }

        .pictures {
            width: 106px;
            height: 106px;
            background-color: #fff;
            border: 4px solid #CCCCCC;
            color: #FFFFFF;
            border-radius: 50%;
            margin: 5px auto;
            overflow: hidden;
            transition: all 0.2s;
            -webkit-transition: all 0.2s;
        }

        .pictures-src {
            width: 100%;
            height: 100%;
        }

        .pictures:hover {
            border-color: #4caf50;
        }

        .pictures input[type="file"] {
            cursor: pointer;
            display: block;
            height: 100%;
            left: 0;
            opacity: 0 !important;
            position: absolute;
            top: 0;
            width: 100%;
        }




        .choice {
            text-align: center;
            cursor: pointer;
        }

        .choice input[type="radio"],
        .choice input[type="checkbox"] {
            position: absolute;
            left: -10000px;
            z-index: -1;
        }

        .choice .icon {
            text-align: center;
            vertical-align: middle;
            height: 106px;
            width: 106px;
            border-radius: 50%;
            color: #fff;
            margin: 5px auto;
            border: 4px solid #CCCCCC;
            transition: all 0.2s;
            -webkit-transition: all 0.2s;
            overflow: hidden;
        }

        .choice .icon:hover {
            border-color: #4caf50;
        }

        .choice.active .icon {
            border-color: #2ca8ff;
        }
    </style>
    {{-- for profile photo  --}}



    <!-- main content -->
    <!-- main title -->
    <div class="col-12">
        <div class="main__title">
            <h2>Edit user</h2>
        </div>
    </div>
    <!-- end main title -->

    <!-- profile -->
    <div class="col-12">
        <div class="profile__content">
            <!-- profile user -->
            <div class="profile__user">
                <div class="profile__avatar">
                    <img src="{{ asset('admin') }}/img/user.svg" alt="">
                </div>
                <!-- or red -->
                <div class="profile__meta profile__meta--green">
                    <h3>{{ Auth::user()->name }} <span>(Approved)</span></h3>
                    <span>HotFlix ID: {{ Auth::user()->id }}</span>
                </div>
            </div>
            <!-- end profile user -->

            <!-- profile tabs nav -->
            <ul class="nav nav-tabs profile__tabs" id="profile__tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1"
                        aria-selected="true">Profile</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2"
                        aria-selected="false">Comments</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3"
                        aria-selected="false">Reviews</a>
                </li>
            </ul>
            <!-- end profile tabs nav -->

            <!-- profile mobile tabs nav -->
            <div class="profile__mobile-tabs" id="profile__mobile-tabs">
                <div class="profile__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <input type="button" value="Profile">
                    <span></span>
                </div>

                <div class="profile__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" data-value="profile"><a class="nav-link active" id="1-tab"
                                data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1"
                                aria-selected="true">Profile</a></li>

                        <li class="nav-item" data-value="comments"><a class="nav-link" id="2-tab" data-toggle="tab"
                                href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Comments</a></li>

                        <li class="nav-item" data-value="reviews"><a class="nav-link" id="3-tab" data-toggle="tab"
                                href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Reviews</a></li>
                    </ul>
                </div>
            </div>
            <!-- end profile mobile tabs nav -->

            <!-- profile btns -->
            <div class="profile__actions">
                <a href="#modal-status3" class="profile__action profile__action--banned open-modal"><i
                        class="icon ion-ios-lock"></i></a>
                <a href="#modal-delete3" class="profile__action profile__action--delete open-modal"><i
                        class="icon ion-ios-trash"></i></a>
            </div>
            <!-- end profile btns -->
        </div>
    </div>
    <!-- end profile -->

    <!-- content tabs -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
            <div class="col-12">
                <div class="row">
                    <!-- details form -->
                    <div class="col-12 col-lg-6">
                        <form action="{{ url('profile/photo/upload') }}" class="form form--profile" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row row--form">
                                <div class="col-12">
                                    <h4 class="form__title">Profile details</h4>
                                    <h4>{{ Auth::user()->profile_photo }}</h4>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-12">

                                    @if (Auth::user()->profile_photo)
                                        <div class="pictures-container">
                                            <div class="pictures">
                                                <img src="{{ asset('admin/uploads/profile_photo') }}/{{ Auth::user()->profile_photo }}" class="picture-src"
                                                    id="wizardPicturePreview" title="" />
                                                <input type="file" name="profile_photo" id="wizard-picture"
                                                    aria-invalid="false" class="valid" accept="image/*" />
                                            </div>
                                            <h6 style="color: #fff;">Choose Picture</h6>
                                        </div>
                                    @else
                                        <div class="pictures-container">
                                            <div class="pictures">
                                                <img src="{{ asset('admin/uploads/profile_photo') }}/deafult_profile.webp"
                                                    class="picture-src" id="wizardPicturePreview" title="" />
                                                <input type="file" name="profile_photo" id="wizard-picture"
                                                    aria-invalid="false" class="valid" accept="image/*" />
                                            </div>
                                            <h6 style="color: #fff;">Choose Picture</h6>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="form__group">
                                        <label class="form__label" for="name">Name</label>
                                        <input id="name" type="text" name="name" class="form__input"
                                            value="{{ Auth::user()->name }}">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="form__group">
                                        <label class="form__label" for="email">Email</label>
                                        <input id="email" type="text" name="email" class="form__input"
                                            value="{{ Auth::user()->email }}">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="form__group">
                                        <label class="form__label" for="subscription">Subscription</label>
                                        <select class="js-example-basic-single" id="subscription">
                                            <option value="Basic">Basic</option>
                                            <option value="Premium">Premium</option>
                                            <option value="Cinematic">Cinematic</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="form__group">
                                        <label class="form__label" for="rights">Rights</label>
                                        <select class="js-example-basic-single" id="rights">
                                            <option value="User">User</option>
                                            <option value="Moderator">Moderator</option>
                                            <option value="Admin">Admin</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="form__btn" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end details form -->

                    <!-- password form -->
                    <div class="col-12 col-lg-6">
                        <form action="#" class="form form--profile">
                            <div class="row row--form">
                                <div class="col-12">
                                    <h4 class="form__title">Change password</h4>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="form__group">
                                        <label class="form__label" for="oldpass">Old Password</label>
                                        <input id="oldpass" type="password" name="oldpass" class="form__input">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="form__group">
                                        <label class="form__label" for="newpass" value="{{ old('newpass') }}">New
                                            Password</label>
                                        <input id="newpass" type="password" name="newpass" class="form__input">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="form__group">
                                        <label class="form__label" for="confirmpass"
                                            value="{{ old('confirmpass') }}">Confirm New Password</label>
                                        <input id="confirmpass" type="password" name="confirmpass" class="form__input">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="form__btn" type="button">Change</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end password form -->
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
            <!-- table -->
            <div class="col-12">
                <div class="main__table-wrap">
                    <table class="main__table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ITEM</th>
                                <th>AUTHOR</th>
                                <th>TEXT</th>
                                <th>LIKE / DISLIKE</th>
                                <th>CRAETED DATE</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    <div class="main__table-text">23</div>
                                </td>
                                <td>
                                    <div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
                                </td>
                                <td>
                                    <div class="main__table-text">John Doe</div>
                                </td>
                                <td>
                                    <div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
                                </td>
                                <td>
                                    <div class="main__table-text">12 / 7</div>
                                </td>
                                <td>
                                    <div class="main__table-text">24 Oct 2021</div>
                                </td>
                                <td>
                                    <div class="main__table-btns">
                                        <a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
                                            <i class="icon ion-ios-eye"></i>
                                        </a>
                                        <a href="#modal-delete"
                                            class="main__table-btn main__table-btn--delete open-modal">
                                            <i class="icon ion-ios-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="main__table-text">24</div>
                                </td>
                                <td>
                                    <div class="main__table-text"><a href="#">Benched</a></div>
                                </td>
                                <td>
                                    <div class="main__table-text">John Doe</div>
                                </td>
                                <td>
                                    <div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
                                </td>
                                <td>
                                    <div class="main__table-text">67 / 22</div>
                                </td>
                                <td>
                                    <div class="main__table-text">24 Oct 2021</div>
                                </td>
                                <td>
                                    <div class="main__table-btns">
                                        <a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
                                            <i class="icon ion-ios-eye"></i>
                                        </a>
                                        <a href="#modal-delete"
                                            class="main__table-btn main__table-btn--delete open-modal">
                                            <i class="icon ion-ios-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end table -->

            <!-- paginator -->
            <div class="col-12">
                <div class="paginator-wrap">
                    <span>10 from 23</span>

                    <ul class="paginator">
                        <li class="paginator__item paginator__item--prev">
                            <a href="#"><i class="icon ion-ios-arrow-back"></i></a>
                        </li>
                        <li class="paginator__item"><a href="#">1</a></li>
                        <li class="paginator__item paginator__item--active"><a href="#">2</a></li>
                        <li class="paginator__item"><a href="#">3</a></li>
                        <li class="paginator__item"><a href="#">4</a></li>
                        <li class="paginator__item paginator__item--next">
                            <a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end paginator -->
        </div>

        <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
            <!-- table -->
            <div class="col-12">
                <div class="main__table-wrap">
                    <table class="main__table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ITEM</th>
                                <th>AUTHOR</th>
                                <th>TEXT</th>
                                <th>RATING</th>
                                <th>LIKE / DISLIKE</th>
                                <th>CRAETED DATE</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    <div class="main__table-text">23</div>
                                </td>
                                <td>
                                    <div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
                                </td>
                                <td>
                                    <div class="main__table-text">John Doe</div>
                                </td>
                                <td>
                                    <div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
                                </td>
                                <td>
                                    <div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i>
                                        7.9</div>
                                </td>
                                <td>
                                    <div class="main__table-text">12 / 7</div>
                                </td>
                                <td>
                                    <div class="main__table-text">24 Oct 2021</div>
                                </td>
                                <td>
                                    <div class="main__table-btns">
                                        <a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
                                            <i class="icon ion-ios-eye"></i>
                                        </a>
                                        <a href="#modal-delete2"
                                            class="main__table-btn main__table-btn--delete open-modal">
                                            <i class="icon ion-ios-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="main__table-text">24</div>
                                </td>
                                <td>
                                    <div class="main__table-text"><a href="#">Benched</a></div>
                                </td>
                                <td>
                                    <div class="main__table-text">John Doe</div>
                                </td>
                                <td>
                                    <div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
                                </td>
                                <td>
                                    <div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i>
                                        8.6</div>
                                </td>
                                <td>
                                    <div class="main__table-text">67 / 22</div>
                                </td>
                                <td>
                                    <div class="main__table-text">24 Oct 2021</div>
                                </td>
                                <td>
                                    <div class="main__table-btns">
                                        <a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
                                            <i class="icon ion-ios-eye"></i>
                                        </a>
                                        <a href="#modal-delete2"
                                            class="main__table-btn main__table-btn--delete open-modal">
                                            <i class="icon ion-ios-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end table -->

            <!-- paginator -->
            <div class="col-12">
                <div class="paginator-wrap">
                    <span>10 from 32</span>

                    <ul class="paginator">
                        <li class="paginator__item paginator__item--prev">
                            <a href="#"><i class="icon ion-ios-arrow-back"></i></a>
                        </li>
                        <li class="paginator__item"><a href="#">1</a></li>
                        <li class="paginator__item paginator__item--active"><a href="#">2</a></li>
                        <li class="paginator__item"><a href="#">3</a></li>
                        <li class="paginator__item"><a href="#">4</a></li>
                        <li class="paginator__item paginator__item--next">
                            <a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end paginator -->
        </div>
    </div>
    <!-- end content tabs -->

    <!-- end main content -->


    {{-- for profile picture   --}}
    <script>
        Prepare the preview
        for profile picture
        $("#wizard-picture").change(function() {
            readURL(this);
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    {{-- for profile picture   --}}
@endsection

@section('alert_jvs')

@if (session('profile_photo_success'))

<script>
    Swal.fire({
        icon:'success',
        title: 'Your profile image has been saved successfully',
        showConfirmButton: false,
        timer: 3000
    })
</script>
    
@endif

@endsection