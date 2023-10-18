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
            border-color: yellow;
        }
    </style>
    {{-- for profile photo  --}}



    <!-- main content -->
    <!-- main title -->
    <div class="col-12">
        <div class="main__title">
            <h2>{{ 'Profile' }}</h2>
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
                    <div class="col-12 col-lg-12">
                        <form action="#" class="form form--profile">
                            <div class="row row--form">
                                <div class="col-12">
                                    <h4 class="form__title">Profile details</h4>
                                </div>
                                @if (Auth::user()->profile_photo)
                                    <div class="mb-3 col-12 col-md-6 col-lg-12 col-xl-12">
                                        <div class="pictures-container">
                                            <div class="pictures">
                                                <img src="{{ asset('admin/profile_photo') }}/deafult_profile.webp"
                                                    class="picture-src" alt="" />

                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="mb-3 col-12 col-md-6 col-lg-12 col-xl-12">
                                        <div class="pictures-container">
                                            <div class="pictures">
                                                <img src="{{ asset('admin/uploads/profile_photo') }}/deafult_profile.webp"
                                                    class="picture-src" alt="" />

                                            </div>
                                        </div>
                                    </div>
                                @endif
                                
                                <div class="col-12 col-md-6 col-lg-12 col-xl-12">
                                    <div class="form__group">
                                        <label class="form__label" for="name">Name</label>
                                        <input id="name" type="text" name="name" class="form__input"
                                            value="{{ Auth::user()->name }}">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-12">
                                    <div class="form__group">
                                        <label class="form__label" for="email">Email</label>
                                        <input id="email" type="text" name="email" class="form__input"
                                            value="{{ Auth::user()->email }}">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-12">
                                    <div class="form__group">
                                        <label class="form__label" for="subscription">Subscription</label>
                                        <select class="js-example-basic-single" id="subscription">
                                            <option value="Basic">Basic</option>
                                            <option value="Premium">Premium</option>
                                            <option value="Cinematic">Cinematic</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-12">
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
                                    <a href="{{ route('profile.edit') }}" class="form__btn">Edit Profile</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end details form -->

                    
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
@endsection
