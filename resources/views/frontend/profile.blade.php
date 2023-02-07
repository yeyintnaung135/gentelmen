@extends('layouts.header')
@push('styles')
  <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
  <link href="{{ asset('css/customize.css') }}" rel="stylesheet">
  <link href="{{ asset('css/fabric.css') }}" rel="stylesheet">
@endpush
@section('content')
  @include('layouts/nav')
  <section class="profile">
    <div class="row g-0">
      <div class="col-lg-3 left-panel sticky-lg-top">
        <h6 class="text-center mb-4 ff-mont text-white">User Profile</h6>
        <div class="d-flex flex-column gap-3 px-3 mb-lg-5 mb-1 mb-md-2">
          <img src="{{asset('/assets/images/profile/avatar.png')}}" width="80px"
               height="80px"
               alt="" class="align-self-center">
          <div class="align-self-center text-center">
            @if(!empty($user_detail))
              <p class="text-bold">{{$user_detail->name}}</p>
              <span class="text-muted">{{$user_detail->email}}</span>
            @endif
          </div>
        </div>
        <div class="px-3">
          <hr class="d-none d-lg-block text-white-50">
        </div>
        <div id="nav" class="nav-pills mt-5 d-none d-lg-block" role="tablist">
          <a class="active d-flex align-items-center mb-4" style="height: 20px;"
             data-bs-toggle="pill" href="#profile">
            <img src="{{asset('assets/images/profile/icon/profile.png')}}" width="20px"
                 alt="" class="me-3">
            Profile
          </a>
          <a class="d-flex align-items-center mb-4" style="height: 20px;"
             data-bs-toggle="pill" href="#wishlist">
            <img src="{{asset('assets/images/profile/icon/wishlist.png')}}" width="20px"
                 alt="" class="me-3">

            Wishlist
          </a>
          <a class="d-flex align-items-center mb-4" style="height: 20px;"
             data-bs-toggle="pill" href="#measurements">
            <img src="{{asset('assets/images/profile/icon/measurement.png')}}"
                 width="20px" alt="" class="me-3">
            Measurements
          </a>
          <a class="d-flex align-items-center mb-4" style="height: 20px;"
             data-bs-toggle="pill" href="#orders">
            <img src="{{asset('assets/images/profile/icon/order.png')}}" width="20px"
                 alt=""
                 class="me-3">
            Orders
          </a>
        </div>
        <div class="bottom-logout text-end text-lg-start">
          <a href="#" onclick="logout()" style="color: red;" id="logout">Logout</a>
        </div>
      </div>
      <div class="col-lg-9 right-panel">
        <div class="mobile-nav-pill nav-pills mt-2 d-block d-lg-none d-flex
        justify-content-evenly" role="tablist">
          <a class="active"
             data-bs-toggle="pill" href="#profile">
            Profile
          </a>
          <a class=""
             data-bs-toggle="pill" href="#wishlist">
            My Wishlist
          </a>
          <a class=""
             data-bs-toggle="pill" href="#measurements">
            My Measurements
          </a>
          <a class=""
             data-bs-toggle="pill" href="#orders">
            My Orders
          </a>
        </div>


        <div class="tab-content profile">
          <div id="profile" class="tab-pane active mx-md-5 mb-5"><br>
            <section class="mb-5">
              <h6 class="mb-4 mb-md-5 ms-4 ms-md-0 ff-mont text-white" style="">
                Profile
                Information</h6>
              <form>
                @if(!empty($user_detail))
                  <input type="hidden" style="color:black" id="user_id"
                         name="user_id" value="{{$user_detail->id}}">
                @endif
                <div class="mx-5">
                  <div class="row mb-3 g-0 g-md-5">
                    <div class="col-md-6 mb-3">
                      <label for="username" class="form-label">User
                        Name</label>
                      @if(!empty($user_detail))
                        <input type="text" class="form-control"
                               id="username" name="username"
                               placeholder="Please insert your username"
                               value="{{$user_detail->name}}"
                               autofocus>
                      @else
                        <input type="text" class="form-control"
                               id="username" name="username"
                               placeholder="Please insert your username"
                               autofocus>
                      @endif
                    </div>
                    <div class="col-md-6">
                      <label for="phone" class="form-label mt-0">Phone</label>
                      @if(!empty($user_detail))
                        <input type="text" class="form-control" id="phone"
                               name="phone" value="{{$user_detail->phone}}"
                               placeholder="+95 xxxxxxxxx">
                      @else
                        <input type="text" class="form-control" id="phone"
                               name="phone"
                               placeholder="+95 xxxxxxxxx" value="">
                      @endif
                    </div>
                  </div>
                  <div class="row mb-3 g-0 g-md-5">
                    <div class="col-md-6 mb-3">
                      <label for="dob" class="form-label">Date of
                        Birth</label>
                      @if(!empty($user_detail))
                        <input type="date" class="form-control" id="dob"
                               name="dob" value="{{$user_detail->dob}}">
                      @else
                        <input type="date" class="form-control" id="dob"
                               name="dob">
                      @endif
                    </div>
                    <div class="col-md-6">
                      @if(!empty($user_detail))
                        <label for="gender"
                               class="form-label">Gender</label>
                        <select class="form-select" id="gender"
                                name="gender" aria-label="gender">
                          @if($user_detail->gender == 0 || $user_detail->gender == null)
                            <option selected value="0">Choose your
                              gender
                            </option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                          @elseif($user_detail->gender == 1)
                            <option selected value="1">Male</option>
                            <option value="2">Female</option>
                          @elseif($user_detail->gender == 2)
                            <option value="1">Male</option>
                            <option selected value="2">Female</option>
                          @endif
                        </select>
                      @else
                        <label for="gender"
                               class="form-label">Gender</label>
                        <select class="form-select" id="gender"
                                name="gender" aria-label="gender">
                          <option selected value="0">Choose your gender
                          </option>
                          <option value="1">Male</option>
                          <option value="2">Female</option>
                        </select>
                      @endif
                    </div>
                  </div>
                  <div class="row mb-3 g-0 g-md-5">
                    <div class="col-md-6 mb-3">
                      <label for="city" class="form-label">City</label>
                      @if(!empty($user_detail))
                        <input type="text" class="form-control" id="city"
                               name="city" value="{{$user_detail->city}}">
                      @else
                        <input type="text" class="form-control" id="city"
                               name="city">
                      @endif
                    </div>
                    <div class="col-md-6">
                      <label for="address" class="form-label">Address</label>
                      @if(!empty($user_detail))
                        {{--                    <input type="text" class="form-control" id="address" name="address" value="{{$user_detail->tsp_street}}">--}}
                        <textarea name="address" id="address"
                                  class="form-control"
                                  value="{{$user_detail->tsp_street}}">{{$user_detail->tsp_street}}</textarea>
                      @else
                        {{--                    <input type="text" class="form-control" id="address" name="address">--}}
                        <textarea name="address" id="address"
                                  class="form-control"></textarea>
                      @endif
                      <span class="text-decoration-underline tips">(Please fill detail like
                      Home Number/Room
                    Number Building
                    number etc...)</span>
                    </div>
                  </div>
                </div>

            </section>
            <section>
              <h6 class="mb-4 mb-md-5 ms-4 ms-md-0 ff-mont text-white" style="">
                Account Setting</h6>
              <div class="mx-5">
                <div class="row mb-3 g-0 g-md-5">
                  <div class="col-md-6 mb-3">
                    <label for="username" class="form-label">Password</label>
                    <input type="password" class="form-control" id="username"
                           autofocus>
                    <a href="{{route('user_change_password')}}"
                       class="text-decoration-underline">Change Password</a>
                  </div>
                  <div class="col-md-6">
                    <label for="phone" class="form-label">Email</label>
                    @if(!empty($user_detail))
                      <input type="email" class="form-control" id="email"
                             name="email"
                             value="{{$user_detail->email}}" disabled
                             readonly>
                    @else
                      <input type="email" class="form-control" id="email"
                             name="email" disabled readonly>
                    @endif
                  </div>
                </div>
              </div>
              <div class=" d-flex justify-content-center justify-content-md-end custom mb-5">
                <button class="btn p-0 px-3 mt-5" type="button"
                        onclick="save_user()">Save
                </button>
              </div>
              </form>
            </section>
            <!--            <section>
                          <h6 class="mb-4 mb-md-5 ms-4 ms-md-0 ff-mont text-white" style="">Category
                            Interests</h6>
                          <div class="mx-5 interest">
                            <div class="d-flex flex-wrap">
                              <p>Business wears</p>
                              <p>Graduation</p>
                              <p>Fabrics</p>
                              <button class="btn d-flex align-items-center justify-content-between">
                                Add<i class='bx bx-plus'></i>
                              </button>
                            </div>
                          </div>
                        </section>-->
          </div>
          <div id="wishlist" class="tab-pane fade mx-3 mx-md-5 mb-5"><br>
            <h6 class="mb-4 mb-md-5 ms-0 ff-mont text-white" style="">Wishlist</h6>
            <div id="html_wishlist" class="row g-3 g-md-5">

              <!-- <div class="col-6 col-md-4">
                <div class="text-center">
                  <div class="mb-1 position-relative">
                    <img src="{{asset('assets\images\home\img.png')}}" alt="">
                    <i class='bx bxs-heart position-absolute top-0 end-0 me-2 me-md-3 mt-2 mt-md-3
                    cursor-pointer' style='color:#0e122d'></i>
                  </div>
                  <p>Red and blue flower print tie</p>
                  <p class="text-gold">$ 30</p>
                </div>
              </div>
              <div class="col-6 col-md-4">
                <div class="text-center">
                  <div class="mb-1 position-relative">
                    <img src="{{asset('assets\images\home\img.png')}}" alt="">
                    <i class='bx bxs-heart position-absolute top-0 end-0 me-2 me-md-3 mt-2 mt-md-3
                    cursor-pointer' style='color:#0e122d'></i>
                  </div>
                  <p>Red and blue flower print tie</p>
                  <p class="text-gold">$ 30</p>
                </div>
              </div>
              <div class="col-6 col-md-4">
                <div class="text-center">
                  <div class="mb-1 position-relative">
                    <img src="{{asset('assets\images\home\img.png')}}" alt="">
                    <i class='bx bxs-heart position-absolute top-0 end-0 me-2 me-md-3 mt-2 mt-md-3
                    cursor-pointer' style='color:#0e122d'></i>
                  </div>
                  <p>Red and blue flower print tie</p>
                  <p class="text-gold">$ 30</p>
                </div>
              </div> -->
            </div>
          </div>
          <div id="measurements" class="tab-pane mx-3 mx-md-5 mb-5"><br>
            <div class="d-flex justify-content-between align-items-center">
              <h6 class="mb-4 mb-md-5 ms-4 ms-md-0 ff-mont text-white" style="">
                Measurement</h6>
              <a href="#" class="d-flex justify-content-center align-items-center">
                <i class="bx bx-plus me-3"></i>
                Add new measurement
              </a>
            </div>
            <!-- start -->
            <!-- old customize-->
            <div class="d-none">
              <div class="d-flex d-block d-md-none">
                <p class="me-4" id="jacket">Upper Body</p>
                <p id="pants">Lower Body</p>
              </div>
              <div class="row pt-5">
                {{-- <input type="text" style="color:black" id="fill_upper" value="0"> --}}
                @if($upper == null)
                  <input type="hidden" style="color:black" id="upper_id"
                         value="0">
                @else
                  <input type="hidden" style="color:black" value="{{$upper->id}}"
                         id="upper_id" value="0">
                @endif
                @if($lower == null)
                  <input type="hidden" style="color:black" id="lower_id"
                         value="0">
                @else
                  <input type="hidden" style="color:black" value="{{$lower->id}}"
                         id="lower_id" value="0">
                @endif

                <div class="col-4 col-md-4 px-3 px-md-5 jacket-vessel">
                  {{-- @include('layouts/cus_5_jacket')--}}
                  <div class="" id="upper_measure_space">
                    <p class="h6 mb-3 mt-2 d-none d-md-block">Jacket/Vest</p>
                    <div
                            class="d-flex justify-content-between flex-column flex-md-row mb-3 mb-md-5">
                      <label for="neck"
                             class="d-block form-label m-0">Neck</label>
                      <div class="d-flex align-items-end justify-content-center inp-grp">
                        @if($upper != null)
                          <input type="number" min="0" id="neck"
                                 class="form-control"
                                 onkeypress="fill_upper()"
                                 onkeydown="unfill_upper()"
                                 value="{{$upper->neck}}">
                        @else
                          <input type="number" min="0" id="neck"
                                 class="form-control"
                                 onmouseup="fill_upper()">
                        @endif
                        <span class="unit">cm</span>
                      </div>
                    </div>
                    <div
                            class="d-flex justify-content-between flex-column flex-md-row mb-3 mb-md-5">
                      <label for="chest"
                             class="d-block form-label m-0">Chest</label>
                      <div class="d-flex align-items-end justify-content-center inp-grp">

                        @if($upper != null)
                          <input type="number" min="0" id="chest"
                                 class="form-control"
                                 onmouseup="fill_upper()"
                                 value="{{$upper->chest}}">
                        @else
                          <input type="number" min="0" id="chest"
                                 class="form-control"
                                 onmouseup="fill_upper()">
                        @endif
                        <span class="unit">cm</span>
                      </div>
                    </div>
                    <div
                            class="d-flex justify-content-between flex-column flex-md-row mb-3 mb-md-5">
                      <label for="waist"
                             class="d-block form-label m-0">Waist</label>
                      <div class="d-flex align-items-end justify-content-center inp-grp">
                        @if($upper != null)
                          <input type="number" min="0" id="waist"
                                 value="{{$upper->waist}}"
                                 class="form-control"
                                 onmouseup="fill_upper()">
                        @else
                          <input type="number" min="0" id="waist"
                                 class="form-control"
                                 onmouseup="fill_upper()">
                        @endif
                        <span class="unit">cm</span>
                      </div>
                    </div>
                    <div
                            class="d-flex justify-content-between flex-column flex-md-row mb-3 mb-md-5">
                      <label for="hips"
                             class="d-block form-label m-0">Hips</label>
                      <div class="d-flex align-items-end justify-content-center inp-grp">
                        @if($upper != null)
                          <input type="number" min="0" id="hips"
                                 value="{{$upper->hips}}"
                                 class="form-control"
                                 onmouseup="fill_upper()">
                        @else
                          <input type="number" min="0" id="hips"
                                 class="form-control"
                                 onmouseup="fill_upper()">
                        @endif
                        <span class="unit">cm</span>
                      </div>
                    </div>
                    <div
                            class="d-flex justify-content-between flex-column flex-md-row mb-3 mb-md-5">
                      <label for="shoulder" class="d-block form-label m-0">Shoulder</label>
                      <div class="d-flex align-items-end justify-content-center inp-grp">
                        @if($upper != null)
                          <input type="number" min="0" id="shoulder"
                                 value="{{$upper->shoulder}}"
                                 class="form-control"
                                 onmouseup="fill_upper()">
                        @else
                          <input type="number" min="0" id="shoulder"
                                 class="form-control"
                                 onmouseup="fill_upper()">
                        @endif
                        <span class="unit">cm</span>
                      </div>
                    </div>
                    <div
                            class="d-flex justify-content-between flex-column flex-md-row mb-3 mb-md-5">
                      <label for="sleeve" class="d-block form-label m-0">Sleeve</label>
                      <div class="d-flex align-items-end justify-content-center inp-grp">
                        @if($upper != null)
                          <input type="number" min="0" id="sleeve"
                                 value="{{$upper->sleeve}}"
                                 class="form-control"
                                 onmouseup="fill_upper()">
                        @else
                          <input type="number" min="0" id="sleeve"
                                 class="form-control"
                                 onmouseup="fill_upper()">
                        @endif
                        <span class="unit">cm</span>
                      </div>
                    </div>
                    <div
                            class="d-flex justify-content-between flex-column flex-md-row mb-3 mb-md-5">
                      <label for="front" class="d-block form-label m-0">Front
                        Chest</label>
                      <div class="d-flex align-items-end justify-content-center inp-grp">
                        @if($upper != null)
                          <input type="number" min="0" id="front"
                                 value="{{$upper->front}}"
                                 class="form-control"
                                 onmouseup="fill_upper()">
                        @else
                          <input type="number" min="0" id="front"
                                 class="form-control"
                                 onmouseup="fill_upper()">
                        @endif
                        <span class="unit">cm</span>
                      </div>
                    </div>
                    <div
                            class="d-flex justify-content-between flex-column flex-md-row mb-3 mb-md-5">
                      <label for="back_back" class="d-block form-label m-0">Back</label>
                      <div class="d-flex align-items-end justify-content-center inp-grp">
                        @if($upper != null)
                          <input type="number" min="0" id="back_back"
                                 value="{{$upper->back}}"
                                 class="form-control"
                                 onmouseup="fill_upper()">
                        @else
                          <input type="number" min="0" id="back_back"
                                 class="form-control"
                                 onmouseup="fill_upper()">
                        @endif
                        <span class="unit">cm</span>
                      </div>
                    </div>
                    <div
                            class="d-flex justify-content-between flex-column flex-md-row mb-3 mb-md-5">
                      <label for="jlength" class="d-block form-label m-0">Jacket
                        Length</label>
                      <div class="d-flex align-items-end justify-content-center inp-grp">
                        @if($upper != null)
                          <input type="number" min="0" id="jlength"
                                 value="{{$upper->jacket_length}}"
                                 class="form-control"
                                 onmouseup="fill_upper()">
                        @else
                          <input type="number" min="0" id="jlength"
                                 class="form-control"
                                 onmouseup="fill_upper()">
                        @endif
                        <span class="unit">cm</span>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col-8 col-md-4 d-flex flex-column justify-content-center image-vessel">
                  <img alt="Size Image"
                       src="{{asset('/assets/images/customize/measure-desktop.png')}}"
                       id="measureImage">
                </div>
                <div class="col-4 col-md-4 px-3 px-md-5 pants-vessel d-none d-md-block">
                  {{-- @include('layouts/cus_5_pants')--}}
                  <div class="" id="lower_measure_space">
                    <p class="h6 mb-3 mt-2 d-none d-md-block">Pant</p>

                    <div
                            class="d-flex justify-content-between flex-column flex-md-row mb-3 mb-md-5">
                      <label for="pcrotch" class="d-block form-label m-0">Crotch</label>
                      <div class="d-flex align-items-end justify-content-center inp-grp">
                        @if($lower != null)
                          <input type="number" min="0" id="pcrotch"
                                 value="{{$lower->crotch}}"
                                 class="form-control"
                          >
                        @else
                          <input type="number" min="0" id="pcrotch"
                                 class="form-control"
                          >
                        @endif
                        <span class="unit">cm</span>
                      </div>
                    </div>
                    <div
                            class="d-flex justify-content-between flex-column flex-md-row mb-3 mb-md-5">
                      <label for="pthighs" class="d-block form-label m-0">Thighs</label>
                      <div class="d-flex align-items-end justify-content-center inp-grp">
                        @if($lower != null)
                          <input type="number" min="0" id="pthighs"
                                 value="{{$lower->thighs}}"
                                 class="form-control"
                          >
                        @else
                          <input type="number" min="0" id="pthighs"
                                 class="form-control"
                          >
                        @endif
                        <span class="unit">cm</span>
                      </div>
                    </div>
                    <div
                            class="d-flex justify-content-between flex-column flex-md-row mb-3 mb-md-5">
                      <label for="pstomach" class="d-block form-label m-0">Stomach</label>
                      <div class="d-flex align-items-end justify-content-center inp-grp">
                        @if($lower != null)
                          <input type="number" min="0" id="pstomach"
                                 value="{{$lower->stomach}}"
                                 class="form-control"
                          >
                        @else
                          <input type="number" min="0" id="pstomach"
                                 class="form-control"
                          >
                        @endif
                        <span class="unit">cm</span>
                      </div>
                    </div>
                    <div
                            class="d-flex justify-content-between flex-column flex-md-row mb-3 mb-md-5">
                      <label for="pbottom" class="d-block form-label m-0">Bottom</label>
                      <div class="d-flex align-items-end justify-content-center inp-grp">
                        @if($lower != null)
                          <input type="number" min="0" id="pbottom"
                                 value="{{$lower->bottom}}"
                                 class="form-control"
                          >
                        @else
                          <input type="number" min="0" id="pbottom"
                                 class="form-control"
                          >
                        @endif
                        <span class="unit">cm</span>
                      </div>
                    </div>
                    <div
                            class="d-flex flex-column flex-md-row justify-content-between mb-3 mb-md-5">
                      <label for="pknee"
                             class="d-block form-label m-0">Knee</label>
                      <div class="d-flex align-items-end justify-content-center inp-grp">
                        @if($lower != null)
                          <input type="number" min="0" id="pknee"
                                 value="{{$lower->knee}}"
                                 class="form-control"
                          >
                        @else
                          <input type="number" min="0" id="pknee"
                                 class="form-control"
                          >
                        @endif
                        <span class="unit">cm</span>
                      </div>
                    </div>
                    <div
                            class="d-flex justify-content-between flex-column flex-md-row mb-3 mb-md-5">
                      <label for="plength" class="d-block form-label m-0">Pant
                        Length</label>
                      <div class="d-flex align-items-end justify-content-center inp-grp">
                        @if($lower != null)
                          <input type="number" min="0" id="plength"
                                 value="{{$lower->length}}"
                                 class="form-control"
                          >
                        @else
                          <input type="number" min="0" id="plength"
                                 class="form-control"
                          >
                        @endif
                        <span class="unit">cm</span>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </div>
            <!-- new customize -->
            <div class="measure">
              <p class="text-decoration-underline text-center my-3" id="store"
                 onclick="store_measurement_overall()">
                <a href="#">Save measurement</a></p>
              <div class="alert alert-danger d-flex justify-content-center d-none"
                   role="alert" id="info_error_alert"
                   style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Info Data
              </div>
              {{-- Body Types --}}
              <div class="measure-types nav-pills" role="tablist">
                <div class="measure-type">
                  <a class="nav-link active" data-bs-toggle="tab" href="#upper"
                     id="upper_tab">UPPER</a>
                </div>
                <div class="measure-type">
                  <a class="nav-link" data-bs-toggle="tab" href="#lower"
                     id="lower_tab">LOWER</a>
                </div>
                <div class="measure-type">
                  <a class="nav-link" data-bs-toggle="tab" href="#info">INFO</a>
                </div>
              </div>
              <div class="unit-wrapper">
                <div class="unit-label-wrapper">
                  <input type="radio" id="in" name="measure_unit"
                         class="unit-check d-none" value="in"
                         checked onclick="get_measure_unit(this.value)">
                  <label for="in" class="unit-label">in</label>
                </div>
                <div class="unit-label-wrapper">
                  <input type="radio" id="cm" name="measure_unit"
                         class="unit-check d-none" value="cm"
                         onclick="get_measure_unit(this.value)">
                  <label for="cm" class="unit-label">Cm</label>
                </div>
              </div>
              {{-- content --}}
              <div class="tab-content">
                <div id="upper" class="tab-pane active">
                  <div class="measure-items">
                    <a class="measure-item circle active-link" href="#neck_upper">
                      <img src="{{asset("assets/images/customize/measurement/neck.png")}}"
                           alt="neck">
                      <p>neck</p>
                      <span class="badge text-bg-danger upper_errors d-none"
                            id="neck_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#chest_upper">
                      <img src="{{asset("assets/images/customize/measurement/chest.png")}}"
                           alt="chest">
                      <p>Chest</p>
                      <span class="badge text-bg-danger upper_errors d-none"
                            id="chest_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#waist_upper">
                      <img src="{{asset("assets/images/customize/measurement/waist.png")}}"
                           alt="waist">
                      <p>Waist (Upper Waist)</p>
                      <span class="badge text-bg-danger upper_errors d-none"
                            id="waist_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#hips_upper">
                      <img src="{{asset("assets/images/customize/measurement/hips.png")}}"
                           alt="hips">
                      <p>hips</p>
                      <span class="badge text-bg-danger upper_errors d-none"
                            id="hips_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#shoulder_upper">
                      <img src="{{asset("assets/images/customize/measurement/shoulder.png")}}"
                           alt="shoulder">
                      <p>shoulder</p>
                      <span class="badge text-bg-danger upper_errors d-none"
                            id="shoulder_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#sleeve_length_Right">
                      <img src="{{asset("assets/images/customize/measurement/hips.png")}}"
                           alt="sleeve_length_Right">
                      <p>Sleeve Length Right</p>
                      <span class="badge text-bg-danger upper_errors d-none"
                            id="sleeve_r_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#sleeve_length_left">
                      <img src="{{asset("assets/images/customize/measurement/shoulder.png")}}"
                           alt="sleeve_length_left">
                      <p>Sleeve Length Left</p>
                      <span class="badge text-bg-danger upper_errors d-none"
                            id="sleeve_l_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#stomach_upper">
                      <img src="{{asset("assets/images/customize/measurement/stomach.png")}}"
                           alt="stomach">
                      <p>stomach</p>
                      <span class="badge text-bg-danger upper_errors d-none"
                            id="stomach_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#biceps">
                      <img src="{{asset("assets/images/customize/measurement/biceps.png")}}"
                           alt="biceps">
                      <p>biceps</p>
                      <span class="badge text-bg-danger upper_errors d-none"
                            id="biceps_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#forearm">
                      <img src="{{asset("assets/images/customize/measurement/forearm.png")}}"
                           alt="forearm">
                      <p>forearm</p>
                      <span class="badge text-bg-danger upper_errors d-none"
                            id="forearm_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#cuffs">
                      <img src="{{asset("assets/images/customize/measurement/stomach.png")}}"
                           alt="cuffs">
                      <p>cuffs</p>
                      <span class="badge text-bg-danger upper_errors d-none"
                            id="cuffs_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#chest_front">
                      <img src="{{asset("assets/images/customize/measurement/stomach.png")}}"
                           alt="chest
            front">
                      <p>chest front width</p>
                      <span class="badge text-bg-danger upper_errors d-none"
                            id="chest_f_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#chest_back">
                      <img src="{{asset("assets/images/customize/measurement/stomach.png")}}"
                           alt="chest
            back">
                      <p>chest Back width</p>
                      <span class="badge text-bg-danger upper_errors d-none"
                            id="chest_b_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#jacket_front">
                      <img src="{{asset("assets/images/customize/measurement/biceps.png")}}"
                           alt="jacket_front_length">
                      <p>Jacket Front Length</p>
                      <span class="badge text-bg-danger upper_errors d-none"
                            id="jacket_f_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#jacket_back">
                      <img src="{{asset("assets/images/customize/measurement/biceps.png")}}"
                           alt="jacket_back_length">
                      <p>Jacket Back Length</p>
                      <span class="badge text-bg-danger upper_errors d-none"
                            id="jacket_b_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#vest_length">
                      <img src="{{asset("assets/images/customize/measurement/biceps.png")}}"
                           alt="vest_length">
                      <p>Vest Length</p>
                      <span class="badge text-bg-danger upper_errors d-none"
                            id="vest_len_error">Require</span>
                    </a>
                  </div>
                  <div class="measure-item-content">
                    <div id="neck_upper" class="content">
                      <div class="measure-img-wrapper">
                        <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                             alt="neck">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">
                          <input type="text" placeholder="0.0"
                                 id="neck_input">
                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="chest_upper" class="content">
                      <div class="measure-img-wrapper">
                        <img src="{{asset('assets/images/customize/measurement/_MG_0002.JPG')}}"
                             alt="chest">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">
                          <input type="text" placeholder="0.0"
                                 id="chest_input">
                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="waist_upper" class="content">
                      <div class="measure-img-wrapper">
                        <img src="{{asset('assets/images/customize/measurement/_MG_0003.JPG')}}"
                             alt="waist_upper">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">
                          <input type="text" placeholder="0.0"
                                 id="waist_upper_input">
                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="hips_upper" class="content">
                      <div class="measure-img-wrapper">
                        <img src="{{asset('assets/images/customize/measurement/_MG_0011.JPG')}}"
                             alt="hips_upper">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">

                          <input type="text" placeholder="0.0"
                                 id="hips_upper_input">
                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="shoulder_upper" class="content">
                      <div class="measure-img-wrapper">
                        <img src="{{asset('assets/images/customize/measurement/shoulder-content.jpg')}}"
                             alt="shoulder">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">
                          <input type="text" placeholder="0.0"
                                 id="shoulder_input">
                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="sleeve_length_Right" class="content">
                      <div class="measure-img-wrapper">
                        <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                             alt="sleeve_length_Right">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">
                          <input type="text" placeholder="0.0"
                                 id="sleeve_length_Right_input">
                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="sleeve_length_left" class="content">
                      <div class="measure-img-wrapper">
                        <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                             alt="sleeve_length_left">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">

                          <input type="text" placeholder="0.0"
                                 id="sleeve_length_left_input">

                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="stomach_upper" class="content">
                      <div class="measure-img-wrapper">
                        <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                             alt="stomach_upper">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">
                          <input type="text" placeholder="0.0"
                                 id="stomach_upper_input">
                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="biceps" class="content">
                      <div class="measure-img-wrapper">
                        <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                             alt="biceps">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">

                          <input type="text" placeholder="0.0"
                                 id="biceps_input">

                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="forearm" class="content">
                      <div class="measure-img-wrapper">
                        <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                             alt="forearm">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">
                          <input type="text" placeholder="0.0"
                                 id="forearm_input">

                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="cuffs" class="content">
                      <div class="measure-img-wrapper">
                        <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                             alt="cuffs">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">

                          <input type="text" placeholder="0.0"
                                 id="cuffs_input">

                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="chest_front" class="content">
                      <div class="measure-img-wrapper">
                        <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                             alt="chest front">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">

                          <input type="text" placeholder="0.0"
                                 id="chest_front_input">

                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="chest_back" class="content">
                      <div class="measure-img-wrapper">
                        <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                             alt="chest back">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">

                          <input type="text" placeholder="0.0"
                                 id="chest_back_input">

                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="jacket_front" class="content">
                      <div class="measure-img-wrapper">
                        <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                             alt="jacket_front">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">

                          <input type="text" placeholder="0.0"
                                 id="jacket_front_input">

                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="jacket_back" class="content">
                      <div class="measure-img-wrapper">
                        <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                             alt="jacket_back">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">
                          <input type="text" placeholder="0.0"
                                 id="jacket_back_input">

                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="vest_length" class="content">
                      <div class="measure-img-wrapper">
                        <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                             alt="vest_length">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">

                          <input type="text" placeholder="0.0"
                                 id="vest_length_input">

                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="lower" class="tab-pane">
                  <div class="measure-items">
                    <a class="measure-item circle active-link"
                       href="#waist_lower">
                      <img src="{{asset("assets/images/customize/measurement/waist.png")}}"
                           alt="waist_lower">
                      <p>Waist (Lower Waist)</p>
                      <span class="badge text-bg-danger lower_errors d-none"
                            id="pwaist_error">Require</span>
                    </a>
                    <!--          <a class="measure-item" href="#stomach_lower">
            <img src="{{asset("assets/images/customize/measurement/stomach.png")}}" alt="stomach_lower">
            <p>stomach</p>
            <span class="badge text-bg-danger lower_errors d-none" id="pstomach_error">Require</span>
          </a>-->
                    <a class="measure-item circle" href="#stomach_lower">
                      <img src="{{asset("assets/images/customize/measurement/stomach.png")}}"
                           alt="stomach_lower">
                      <p>stomach</p>
                      <span class="badge text-bg-danger lower_errors d-none"
                            id="pstomach_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#hips_lower">
                      <img src="{{asset("assets/images/customize/measurement/hips.png")}}"
                           alt="hips_lower">
                      <p>hips</p>
                      <span class="badge text-bg-danger lower_errors d-none"
                            id="phips_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#crotch">
                      <img src="{{asset("assets/images/customize/measurement/stomach.png")}}"
                           alt="crotch">
                      <p>crotch</p>
                      <span class="badge text-bg-danger lower_errors d-none"
                            id="pcrotch_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#thighs">
                      <img src="{{asset("assets/images/customize/measurement/thighs.png")}}"
                           alt="thighs">
                      <p>thighs</p>
                      <span class="badge text-bg-danger lower_errors d-none"
                            id="pthighs_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#knees">
                      <img src="{{asset("assets/images/customize/measurement/knees.png")}}"
                           alt="knees">
                      <p>knees</p>
                      <span class="badge text-bg-danger lower_errors d-none"
                            id="pknees_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#calf">
                      <img src="{{asset("assets/images/customize/measurement/knees.png")}}"
                           alt="calf">
                      <p>Calf</p>
                      <span class="badge text-bg-danger lower_errors d-none"
                            id="pcalf_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#pants_short">
                      <img src="{{asset("assets/images/customize/measurement/neck.png")}}"
                           alt="pants_short">
                      <p>Pants Short</p>
                      <span class="badge text-bg-danger lower_errors d-none"
                            id="pshort_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#pants_length">
                      <img src="{{asset("assets/images/customize/measurement/neck.png")}}"
                           alt="pants_length">
                      <p>Pants Length</p>
                      <span class="badge text-bg-danger lower_errors d-none"
                            id="plength_error">Require</span>
                    </a>
                    <a class="measure-item circle" href="#bottom_length">
                      <img src="{{asset("assets/images/customize/measurement/knees.png")}}"
                           alt="bottom_length">
                      <p>Bottom Length</p>
                      <span class="badge text-bg-danger lower_errors d-none"
                            id="pbottom_error">Require</span>
                    </a>
                    <!--
          <a class="measure-item circle" href="#j_length">
            <img src="{{asset("assets/images/customize/measurement/chest.png")}}"
                 alt="j_length">
            <p>Jacket Front Length</p>
          </a>
          <a class="measure-item circle" href="#jacket_shoulder_bottom">
            <img src="{{asset("assets/images/customize/measurement/waist.png")}}"
                 alt="jacket_shoulder_bottom">
            <p>Jacket Shoulder to Bottom</p>
          </a>
          <a class="measure-item" href="#shirt_length">
            <img src="{{asset("assets/images/customize/measurement/forearm.png")}}"
                 alt="shirt_length">
            <p>Shirt Length</p>
          </a>
          <a class="measure-item" href="#r_low">
            <img src="{{asset("assets/images/customize/measurement/thighs.png")}}" alt="r_low">
            <p>R.Low</p>
          </a>
          <a class="measure-item" href="#l_low">
            <img src="{{asset("assets/images/customize/measurement/thighs.png")}}" alt="l_low">
            <p>L.Low</p>
          </a>
          <a class="measure-item" href="#skirt_length">
            <img src="{{asset("assets/images/customize/measurement/thighs.png")}}"
                 alt="skirt_length">
            <p>Skirt Length</p>
          </a>-->
                  </div>
                  <div class="measure-item-content">
                    <div id="waist_lower" class="content">
                      <div class="measure-img-wrapper">
                        <img src="{{asset('assets/images/customize/measurement/_MG_0003.JPG')}}"
                             alt="waist lower">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">

                          <input type="text" placeholder="0.0"
                                 id="waist_lower_input">

                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="stomach_lower" class="content">
                      <div class="measure-img-wrapper">
                        <img src="{{asset('assets/images/customize/measurement/_MG_0003.JPG')}}"
                             alt="stomach_lower">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">

                          <input type="text" placeholder="0.0"
                                 id="stomach_lower_input">

                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="hips_lower" class="content">
                      <div class="measure-img-wrapper">
                        <img src="{{asset('assets/images/customize/measurement/_MG_0003.JPG')}}"
                             alt="hips_lower">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">
                          <input type="text" placeholder="0.0"
                                 id="hips_lower_input">

                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="crotch" class="content">
                      <div class="measure-img-wrapper">
                        <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                             alt="crotch">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">
                          <input type="text" placeholder="0.0"
                                 id="crotch_input">

                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="thighs" class="content">
                      <div class="measure-img-wrapper">
                        <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                             alt="thighs">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">

                          <input type="text" placeholder="0.0"
                                 id="thighs_input">

                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="knees" class="content">
                      <div class="measure-img-wrapper">
                        <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                             alt="knees">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">

                          <input type="text" placeholder="0.0"
                                 id="knees_input">
                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="calf" class="content">
                      <div class="measure-img-wrapper">
                        <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                             alt="calf">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">

                          <input type="text" placeholder="0.0"
                                 id="calf_input">
                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="pants_short" class="content">
                      <div class="measure-img-wrapper">
                        <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                             alt="pants_short">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">

                          <input type="text" placeholder="0.0"
                                 id="pants_short_input">

                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="pants_length" class="content">
                      <div class="measure-img-wrapper">
                        <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                             alt="pants_length">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">

                          <input type="text" placeholder="0.0"
                                 id="pants_length_input">

                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                    <div id="bottom_length" class="content">
                      <div class="measure-img-wrapper">
                        <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                             alt="bottom_length">
                      </div>
                      <div class="measure-input-wrapper">
                        <div class="measure-input-group">
                          <input type="text" placeholder="0.0"
                                 id="bottom_length_input">
                          <p class="unit">In</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="info" class="tab-pane">
                  <div class="information">
                    <div class="info-div">
                      <!--p-->
                      <div class="info-group">
                        <label for="age">Age</label>
                        <div class="info-input-group">
                          <input type="text" id="age" placeholder="0">
                          <p>Year</p>
                        </div>
                        <span class="alert alert-danger font-weight-bold info_errors d-none"
                              role="alert" id="age_error"
                              style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Age
              </span>
                      </div>
                      <!--select-->
                      <div class="info-group">
                        <label for="age">Height</label>
                        <div class="info-input-group">
                          <input type="text" id="height" placeholder="0">

                          <select name="age" id="height_type">
                            <option value="cm" selected>CM
                            </option>
                            <option value="in">IN</option>
                          </select>

                        </div>
                        <span class="alert alert-danger font-weight-bold info_errors d-none"
                              role="alert" id="height_error"
                              style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Height
              </span>
                      </div>
                      <div class="info-group">
                        <label for="age">Weight</label>
                        <div class="info-input-group">
                          <input type="text" id="weight" placeholder="0">
                          <select name="weight" id="weight_type">
                            <option value="kg" selected>KG
                            </option>
                            <option value="lb">LB</option>
                          </select>

                        </div>
                        <span class="alert alert-danger font-weight-bold info_errors d-none"
                              role="alert" id="weight_error"
                              style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Weight
              </span>
                      </div>
                      <div class="info-group">
                        <label for="age">Shoulder Type</label>
                        <div class="info-input-group">

                          <select name="shoulder_type"
                                  id="shoulder_type">
                            <option value="0">Select</option>
                            <option value="structure" selected>
                              Structure
                            </option>
                            <option value="square">Square
                            </option>
                            <option value="slopped">Slopped
                            </option>
                          </select>

                        </div>
                        <span class="alert alert-danger font-weight-bold info_errors d-none"
                              role="alert" id="st_error"
                              style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Shoulder Type
              </span>
                      </div>
                      <div class="info-group">
                        <label for="age">Dropped Shoulder</label>
                        <div class="info-input-group">

                          <select name="dropped_shoulder"
                                  id="dropped_shoulder">
                            <option value="0">Select</option>
                            <option value="left" selected>Left
                            </option>
                            <option value="right">Right</option>
                          </select>

                        </div>
                        <span class="alert alert-danger font-weight-bold info_errors d-none"
                              role="alert" id="ds_error"
                              style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Dropped Shoulder
              </span>
                      </div>
                      <div class="info-group">
                        <label for="age">Arms Position</label>
                        <div class="info-input-group">
                          <select name="arms_position"
                                  id="arms_position">
                            <option value="0">Select</option>
                            <option value="average" selected>
                              Average
                            </option>
                            <option value="forward">Forward
                            </option>
                            <option value="backward">Backward
                            </option>
                          </select>

                        </div>
                        <span class="alert alert-danger font-weight-bold info_errors d-none"
                              role="alert" id="ap_error"
                              style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Arms Position
              </span>
                      </div>
                      <div class="info-group">
                        <label for="age">Body Shape</label>
                        <div class="info-input-group">

                          <select name="body_shape"
                                  id="body_shape">
                            <option value="0">Select</option>
                            <option value="average" selected>
                              Average
                            </option>
                            <option value="thin">Thin</option>
                            <option value="muscular">Muscular
                            </option>
                            <option value="fuller">Fuller
                            </option>
                          </select>

                        </div>
                        <span class="alert alert-danger font-weight-bold info_errors d-none"
                              role="alert" id="b_shape_error"
                              style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Body Shape
              </span>
                      </div>
                    </div>
                    <div class="info-div">
                      <div class="info-group">
                        <label for="age">Neck Type</label>
                        <div class="info-input-group">

                          <select name="neck_type" id="neck_type">
                            <option value="0">Select</option>
                            <option value="standard" selected>
                              Standard
                            </option>
                            <option value="short">Short</option>
                            <option value="long">Long</option>
                          </select>
                        </div>
                        <span class="alert alert-danger font-weight-bold info_errors d-none"
                              role="alert" id="nt_error"
                              style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Neck Type
              </span>
                      </div>
                      <div class="info-group">
                        <label for="age">Stomach Shape</label>
                        <div class="info-input-group">

                          <select name="stomach_shape"
                                  id="stomach_shape">
                            <option value="0">Select</option>
                            <option value="average" selected>
                              Average
                            </option>
                            <option value="flat">Flat</option>
                            <option value="extended">Extended
                            </option>
                          </select>

                        </div>
                        <span class="alert alert-danger font-weight-bold info_errors d-none"
                              role="alert" id="ss_error"
                              style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Stomach Shape
              </span>
                      </div>
                      <div class="info-group">
                        <label for="age">Upper Body Shape</label>
                        <div class="info-input-group">

                          <select name="upper_body_shape"
                                  id="upper_body_shape">
                            <option value="0">Select</option>
                            <option value="straight" selected>
                              Straight
                            </option>
                            <option value="scooped">Scooped
                            </option>
                          </select>

                        </div>
                        <span class="alert alert-danger font-weight-bold info_errors d-none"
                              role="alert" id="ubs_error"
                              style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Upper Body Shape
              </span>
                      </div>
                      <div class="info-group">
                        <label for="age">Pant Line</label>
                        <div class="info-input-group">
                          <select name="pant_line" id="pant_line">
                            <option value="0">Select</option>
                            <option value="regular" selected>
                              Regular
                            </option>
                            <option value="low">Low</option>
                            <option value="under-belly">Under
                              Belly
                            </option>
                          </select>

                        </div>
                        <span class="alert alert-danger font-weight-bold info_errors d-none"
                              role="alert" id="pl_error"
                              style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Pant Line
              </span>
                      </div>
                      <div class="info-group">
                        <label for="age">Seat</label>
                        <div class="info-input-group">

                          <select name="seat" id="seat">
                            <option value="0">Select</option>
                            <option value="regular" selected>
                              Regular
                            </option>
                            <option value="flat">Flat</option>
                            <option value="prominent">
                              Prominent
                            </option>
                          </select>

                        </div>
                        <span class="alert alert-danger font-weight-bold info_errors d-none"
                              role="alert" id="seat_error"
                              style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Seat
              </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="orders" class="tab-pane fade mx-3 mx-md-5 mb-5">
            <div class="mb-4 mb-md-5 ms-0 d-flex justify-content-between align-items-center
            order-head">
              <h6 class="ff-mont text-white" style="">Orders</h6>
              <a href="#"><i class='bx bx-trash'></i></a>
            </div>
            <!--            <div class="o-filter d-flex">
                          <p class="fil-item active px-2 me-1 me-md-3">All</p>
                          <p class="fil-item px-2 me-1 me-md-3">Customize</p>
                          <p class="fil-item px-2 me-1 me-md-3">Ready To Wear</p>
                          <p class="fil-item px-2 me-1 me-md-3">Additional items</p>
                        </div>-->
            <div class="menu-wrapper">
              <div class="menu__item active">All</div>
              <div class="menu__item">Customize</div>
              <div class="menu__item">Ready To Wear</div>
              <div class="menu__item">Additional items</div>
            </div>
            <div class="customize-orders">
              {{--              <h6 class="text-white">Customize Orders</h6></br>--}}

              @foreach($cus_orders as $cus_order)
                @if($cus_order->status == 1)
                  <span><?php echo date('d M Y', strtotime($cus_order->created_at)); ?>
                at
                    <?php echo date('H:i', strtotime($cus_order->created_at))
                          ?></span>

                  <div class="d-block d-md-flex justify-content-md-around bg-navy-dark rounded-5 mx-0
               px-4 px-md-0 py-5 my-3 position-relative items cursor-pointer" data-bs-toggle="modal"
                       data-bs-target="#orderDetail{{$cus_order->id}}">
                    <div class="d-flex flex-row flex-md-column items-info">
                      <div class="text-white-50 mb-1 mb-md-2">Order Code
                      </div>
                      <div class="">#{{$cus_order->order_code}}</div>
                    </div>
                    <div class="d-flex flex-row flex-md-column items-info">
                      <div class="text-white-50 mb-1 mb-md-2">Total Cost
                      </div>
                      <div class="">${{$cus_order->total}}</div>
                    </div>
                    <div class="d-flex flex-row flex-md-column items-info">
                      <div class="text-white-50 mb-1 mb-md-2">By</div>
                      <div class="">{{$cus_order->user->name}}</div>
                    </div>
                    <div class="d-flex flex-row flex-md-column items-info">
                      <div class="text-white-50 mb-1 mb-md-2">Delivery
                        to
                      </div>
                      <div class="">{{$cus_order->address}}</div>
                    </div>

                    <div class="position-absolute top-0 end-0 mt-2 mt-md-3 mx-4 text-white-50">
                            <?php echo date('d/m/Y', strtotime($cus_order->created_at)) ?>
                    </div>
                  </div>
                @endif
              @endforeach
            </div>
            <div class="cart-orders">
              <h6 class="text-white">Cart Orders</h6></br>

              @foreach($cart_orders as $cart_order)
                <span><?php echo date('d M Y', strtotime($cart_order->created_at)); ?>
                at
                      <?php echo date('H:i', strtotime($cart_order->created_at))
                        ?>
              </span>

                <div class="d-block d-md-flex justify-content-md-around bg-navy-dark rounded-5 mx-0
                px-4 px-md-0 py-5 my-3 position-relative items cursor-pointer"
                     data-bs-toggle="modal"
                     data-bs-target="#cartorderDetail{{$cart_order->id}}"">
                <div class="d-flex flex-row flex-md-column items-info">
                  <div class="text-white-50 mb-1 mb-md-2">Order Code</div>
                  <div class="">#{{$cart_order->order_code}}</div>
                </div>
                <div class="d-flex flex-row flex-md-column items-info">
                  <div class="text-white-50 mb-1 mb-md-2">Total Cost</div>
                  <div class="">${{$cart_order->total}}</div>
                </div>
                <div class="d-flex flex-row flex-md-column items-info">
                  <div class="text-white-50 mb-1 mb-md-2">By</div>
                  <div class="">{{$cart_order->user->name}}</div>
                </div>
                <div class="d-flex flex-row flex-md-column items-info">
                  <div class="text-white-50 mb-1 mb-md-2">Delivery to</div>
                  <div class="">{{$cart_order->address}}</div>
                </div>

                <div class="position-absolute top-0 end-0 mt-2 mt-md-3 mx-4 text-white-50">
                  12/12/2022
                </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
    </div>

    {{--order detail for customize--}}
    @foreach($cus_orders as $cus_order)
      @if($cus_order->status == 1)
        <div class="modal fade" id="orderDetail{{$cus_order->id}}">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">

              <div class="modal-body">
                <div class="order">
                  {{-- <table class="table table-borderless">
                    <tbody>
                    <div class="d-flex justify-content-between">
                      <h6 class="modal-title ff-mont text-white mb-3">Order Detail</h6>
                      <button type="button" class="btn-close btn-close-white"
                              data-bs-dismiss="modal"></button>
                    </div>
                    <tr>
                      <td class="text-white">Product Name :</td>
                      <td class="text-white-70">Doe</td>
                    </tr>
                    <tr>
                      <td class="text-white">Price :</td>
                      <td class="text-white-70">Doe</td>
                    </tr>
                    <tr>
                      <td class="text-white">Payment :</td>
                      <td class="text-white-70">Doe</td>
                    </tr>
                    <tr>
                      <td class="text-white">Email :</td>
                      <td class="text-white-70">Doe</td>
                    </tr>
                    <tr>
                      <td class="text-white">Date :</td>
                      <td class="text-white-70">Doe</td>
                    </tr>
                    <tr>
                      <td class="text-white">Billing Address :</td>
                      <td class="text-white-70">No.34, GH7 Building , Singapore</td>
                    </tr>
                    </tbody>
                  </table> --}}
                  <table class="table table-borderless">
                    <tbody>
                    <h6 class="modal-title ff-mont text-white mb-3">Customize
                      History</h6>
                    <tr>
                      <td class="text-white">Product :</td>
                      <td class="text-white-70">{{$cus_order->cus_category->name}}</td>
                    </tr>
                    <tr>
                      <td class="text-white">Package :</td>
                      <td class="text-white-70">{{$cus_order->package->title}}</td>
                    </tr>
                    <tr>
                      <td class="text-white">Fitting :</td>
                      @if($cus_order->fitting == 1)
                        <td class="text-white-70">EXTRA SLIM FIT</td>
                      @elseif($cus_order->fitting == 2)
                        <td class="text-white-70">SLIM FIT</td>
                      @elseif($cus_order->fitting == 3)
                        <td class="text-white-70">REGULAR FIT</td>
                      @elseif($cus_order->fitting == 4)
                        <td class="text-white-70">LOOSE FIT</td>
                      @endif
                    </tr>
                    <tr>
                      <td class="text-white">Fabric :</td>
                      @if($cus_order->texture_id != null)
                        <td class="text-white-70">{{$cus_order->texture->name}}</td>
                      @else
                        <td class="text-white-70">-</td>
                      @endif
                    </tr>
                    @if($cus_order->cus_cate_id == 9)
                      <tr>
                        <td class="text-white">Suit Pieces :</td>
                        @if($cus_order->suit_piece == 2)
                          <td class="text-white-70">Two Pieces</td>
                        @else
                          <td class="text-white-70">Three Pieces</td>
                        @endif
                      </tr>
                      @if($cus_order->texture_id != null)
                        <tr>
                          <td class="text-white">Jacket in:</td>
                          @if($cus_order->jacket_in == 'true')
                            <td class="text-white-70">Include</td>
                          @else
                            <td class="text-white-70">Not</td>
                          @endif
                        </tr>
                        <tr>
                          <td class="text-white">Vest in:</td>
                          @if($cus_order->vest_in == 'true')
                            <td class="text-white-70">Include</td>
                          @else
                            <td class="text-white-70">Not</td>
                          @endif
                        </tr>
                        <tr>
                          <td class="text-white">Pant in:</td>
                          @if($cus_order->pant_in == 'true')
                            <td class="text-white-70">Include</td>
                          @else
                            <td class="text-white-70">Not</td>
                          @endif
                        </tr>
                      @endif
                    @endif
                    @if($cus_order->jacket_id != null)
                      <tr>
                        <td class="text-white">Jacket Style :</td>
                        <td class="text-white-70">{{$cus_order->jacket->style}}</td>
                      </tr>
                    @endif
                    @if($cus_order->vest_id != null)
                      <tr>
                        <td class="text-white">Vest Style :</td>
                        <td class="text-white-70">{{$cus_order->vest->name}}</td>
                      </tr>
                    @endif
                    @if($cus_order->pant_id != null)
                      <tr>
                        <td class="text-white">Pant Style :</td>
                        <td class="text-white-70">{{$cus_order->pant->style}}</td>
                      </tr>
                    @endif
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-outline-light"
                        data-bs-dismiss="modal">Close
                </button>
              </div>

            </div>
          </div>
        </div>
      @endif
    @endforeach
    {{--order detail for cart--}}
    @foreach($cart_orders as $cart_order)
      <div class="modal fade" id="cartorderDetail{{$cart_order->id}}">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">

            <div class="modal-body">
              <div class="order">

                <table class="table table-borderless">
                  <tbody>
                  <h6 class="modal-title ff-mont text-white mb-3">Cart Order
                    History</h6>
                  @foreach($cart_order_products as $cart)
                    @if($cart_order->id == $cart->cart_order_id)
                      <tr>
                        <td class="text-white">Type :</td>
                        @if($cart->type == 'additional')
                          <td class="text-white-70">Additional</td>
                        @elseif($cart->type == 'ready')
                          <td class="text-white-70">Ready To Wear</td>
                        @endif
                      </tr>
                      <tr>
                        <td class="text-white">Product :</td>
                        @if($cart->type == 'additional')
                          <td class="text-white-70">{{$cart->additional->name}}</td>
                        @elseif($cart->type == 'ready')
                          <td class="text-white-70">{{$cart->ready->name}}</td>
                        @endif
                      </tr>
                    @endif
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-outline-light"
                      data-bs-dismiss="modal">Close
              </button>
            </div>

          </div>
        </div>
      </div>
    @endforeach
  </section>
  <button onclick="topFunction()" id="scrollBtn" title="Go to top" class="d-flex
    justify-content-center align-items-center">
    <i class="bx bx-arrow-back bx-rotate-90"></i>
  </button>
  @include('layouts/footer')
@endsection
@section('js')
  <script>

      $('#upper .content').first().slideDown();
      $('#upper .measure-items .measure-item').click(function (e) {
          let current_link = $(this);
          let current_link_href = current_link.attr('href');

          $('#upper .measure-items .measure-item').removeClass('active-link');
          $(this).addClass('active-link');

          $('#upper .content').slideUp();
          $(current_link_href).slideDown();

          e.preventDefault();
      });

      $('#lower .content').first().slideDown();
      $('#lower .measure-items .measure-item').click(function (e) {
          let current_link = $(this);
          let current_link_href = current_link.attr('href');

          $('#lower .measure-items .measure-item').removeClass('active-link');
          $(this).addClass('active-link');

          $('#lower .content').slideUp();
          $(current_link_href).slideDown();

          e.preventDefault();
      });

      $(document).ready(() => {
          let category = "in";
          $('.unit').html("In")
          $("input[name='measure_unit']").click(function () {
              category = this.value;
              // alert(category);
              if (category === "in") {
                  $('.unit').html("In")
              }
              if (category === "cm") {
                  $('.unit').html("Cm")
              }

          });
      })

      const jacket = $('#jacket');
      const pants = $('#pants');
      const pants_vessel = $('.pants-vessel');
      const jacket_vessel = $('.jacket-vessel');
      const image_vessel = $('.image-vessel');
      const measureImage = $('#measureImage');

      jacket.click(() => {
          measureImage.attr('src', '/assets/images/customize/measure-jacket.png')
          jacket_vessel.show();
          pants_vessel.hide();
          pants_vessel.addClass('d-none d-md-block')
      })
      pants.click(() => {
          measureImage.attr('src', '/assets/images/customize/measure-pant.png')
          jacket_vessel.hide()
          pants_vessel.show()
          pants_vessel.addClass('order-1 order-md-3')
          image_vessel.addClass('order-2')
          pants_vessel.removeClass('d-none d-md-block')
      })

      let inputs = $('#upper_measure_space input, #lower_measure_space input');
      inputs.click(function () {
          let current_input = $(this);
          let current_input_id = current_input.attr('id');
          measureImage.attr('src', 'assets/images/customize/cus5images/' + current_input_id + '.png')
      })

      $(document).ready(function () {
          chgImg()

      })

      $(window).resize(function () {
          chgImg()
      })

      const chgImg = () => {
          const WindowWidth = $(window).width();
          if (WindowWidth < 767) {
              measureImage.attr('src', '/assets/images/customize/measure-jacket.png')
          } else if (WindowWidth > 767) {
              jacket_vessel.show()
              measureImage.attr('src', '/assets/images/customize/measure-desktop.png')
              pants_vessel.addClass('d-block')
              pants_vessel.removeClass('order-1')
              image_vessel.removeClass('order-2')
          }
      }

      // scroll function
      let scrollBtn = document.getElementById("scrollBtn");
      window.onscroll = function () {
          scrollFunction()
      };

      function scrollFunction() {
          if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
              scrollBtn.style.display = "block";
              scrollBtn.style.opacity = "1";
              // scrollBtn.style.transform = "scale(1)";
              scrollBtn.style.pointerEvents = "all";
          } else {
              scrollBtn.style.display = "none";
              scrollBtn.style.opacity = "0";
              // scrollBtn.style.transform = "scale(1)";
              scrollBtn.style.pointerEvents = "none";
          }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
      }

      function save_user() {
          // alert("h");
          var user_id = $('#user_id').val();
          var username = $('#username').val();
          var phone = $('#phone').val();
          var dob = $('#dob').val();
          var city = $('#city').val();
          var address = $('#address').val();
          var email = $('#email').val();
          var gender = $('#gender').val();
          $.ajax({
              type: 'POST',
              url: '/store_user_profile_ajax',
              data: {
                  "_token": "{{csrf_token()}}",
                  "user_id": user_id,
                  "username": username,
                  "phone": phone,
                  "dob": dob,
                  "city": city,
                  "address": address,
                  "email": email,
                  "gender": gender
              },
              success: function (data) {
                  console.log(data);
                  if (data.msg == "success") {
                      swal({
                          title: "Success",
                          text: "Successfully Stored User Info",
                          icon: "success",
                      }).then(function () {
                          if (data.user_info.city != null && data.user_info.tsp_street == null) {
                              var location = data.user_info.city;
                          } else if (data.user_info.city == null && data.user_info.tsp_street != null) {
                              var location = data.user_info.tsp_street;
                          } else if (data.user_info.city != null && data.user_info.tsp_street != null) {
                              var location = data.user_info.city + ' ' + data.user_info.tsp_street;
                          } else {
                              var location = '';
                          }

                          sessionStorage.setItem('address', location);

                          window.location.reload();
                      });
                  }
              }
          });
      }
  </script>
@endsection
@push('logout-script')
  <script>

      function logout() {
          // alert(value);
          swal({
              title: "Are You Sure You want to Logout",
              icon: 'warning',
              buttons: ["No", "Yes"]
          })

              .then((isConfirm) => {

                  if (isConfirm) {

                      $.ajax({
                          type: 'POST',
                          url: 'logout',
                          dataType: 'json',
                          data: {
                              "_token": "{{ csrf_token() }}",
                          },

                          success: function () {

                              swal({
                                  title: "Success!",
                                  text: "Successfully Logout!",
                                  icon: "success",
                              }).then(function () {
                                  window.location = '/'
                              });


                          },
                      });
                  }
              });
      }

  </script>
@endpush
@push('script_tag')
  <script>

      $('#save_measurement').click(function () {
          var user_id = $('#user_id').val();
          // alert(user_id);
          //  alert("helll");

          var upper_id = $('#upper_id').val();
          var lower_id = $('#lower_id').val();
          //Jacket-Vest data
          var neck = $('#neck').val();
          var chest = $('#chest').val();
          var waist = $('#waist').val();
          var hips = $('#hips').val();
          var shoulder = $('#shoulder').val();
          var sleeve = $('#sleeve').val();
          var front = $('#front').val();
          var back = $('#back_back').val();
          var length = $('#jlength').val();

          //Pant data
          var crotch = $('#pcrotch').val();
          var thighs = $('#pthighs').val();
          var stomach = $('#pstomach').val();
          var bottom = $('#pbottom').val();
          var knee = $('#pknee').val();
          var plength = $('#plength').val();
          alert(crotch);
          var fill_upper = false;
          var fill_lower = false;
          if ($.trim(neck) != '') {
              fill_upper = true;
          }
          if ($.trim(chest) != '') {
              fill_upper = true;
          }
          if ($.trim(waist) != '') {
              fill_upper = true;
          }
          if ($.trim(hips) != '') {
              fill_upper = true;
          }
          if ($.trim(shoulder) != '') {
              fill_upper = true;
          }
          if ($.trim(sleeve) != '') {
              fill_upper = true;
          }
          if ($.trim(front) != '') {
              fill_upper = true;
          }
          if ($.trim(back) != '') {
              fill_upper = true;
          }
          if ($.trim(length) != '') {
              fill_upper = true;
          }

          if ($.trim(crotch) != '') {
              fill_lower = true;
          }
          if ($.trim(thighs) != '') {
              fill_lower = true;
          }
          if ($.trim(stomach) != '') {
              fill_lower = true;
          }
          if ($.trim(bottom) != '') {
              fill_lower = true;
          }
          if ($.trim(knee) != '') {
              fill_lower = true;
          }
          if ($.trim(plength) != '') {
              fill_lower = true;
          }
          alert(fill_upper);
          alert(fill_lower);
          $.ajax({
              type: 'POST',
              url: '/store_user_info_measure_ajax',
              data: {
                  "_token": "{{csrf_token()}}",
                  "user_id": user_id,
                  "upper_id": upper_id,
                  "lower_id": lower_id,
                  "neck": neck,
                  "chest": chest,
                  "waist": waist,
                  "hips": hips,
                  "shoulder": shoulder,
                  "sleeve": sleeve,
                  "front": front,
                  "back": back,
                  "length": length,
                  "fill_upper": fill_upper,

                  "fill_lower": fill_lower,
                  "crotch": crotch,
                  "thighs": thighs,
                  "stomach": stomach,
                  "bottom": bottom,
                  "knee": knee,
                  "plength": plength,

              },
              success: function (data) {
                  $('#upper_id').val(data.upper_id);
                  swal({
                      title: "Success",
                      text: "Successfully Saved Measurement",
                      icon: "success",
                  }).then(function () {
                  });
              }
          });
      });
  </script>
@endpush
@push('whishlist-scripts')
  <script>
      getData();


      //remove item from ls
      //  $('#tbody').on('click', '.remove', function() {

      //    var id = $(this).data('id'); //no
      //      console.log(id);
      //      var loItem = localStorage.getItem('Item');
      //      var itemArr = JSON.parse(loItem);
      //      //delete
      //      itemArr.splice(id, 1);
      //      localStorage.setItem('Item',JSON.stringify(itemArr));
      //      getData();

      //    });

      var whishlist = localStorage.getItem('Item');
      if (whishlist) {
          getData();
          // getnavData();

      }


      function deletedata(user_id, id, photo_one, name, price) {
          // alert(`user_id = ${user_id}, id = ${id}, photo = ${photo_one}, name = ${name}, price = ${price}`);
          var loItem = window.localStorage.getItem('Item');
          // var removeItem = window.localStorage.getItem('Item','id');
          // alert(removeItem);
          var itemArr = JSON.parse(loItem);
          // var id = 0;
          //delete
          // itemArr.splice(0,1);
          var total_total = itemArr.filter(total => total.id !== id);
          localStorage.setItem('Item', JSON.stringify(total_total));

          document.getElementById('fav-space').innerHTML = parseInt(document.getElementById('fav-space').innerHTML) - 1;
          $('#wishlist' + id).show();
          $('#delete' + id).hide();
          getData();
      }

      function getData() {
          var whishlist = localStorage.getItem('Item');
          console.log(whishlist);
          var whishlistobj = JSON.parse(whishlist);
          var html = '';

          if (whishlistobj != null) {
              $.each(whishlistobj, function (i, v) {

                  console.log(v);
                  user_id = `{{Auth::guard('web')->user()->id}}`;
                  if (v.user_id == user_id) {
                      html += `<div class="col-6 col-md-4">
                    <div class="text-center">
                      <div id="tbody" class="mb-1 position-relative">
                        <img src="{{'/assets/images/categories/ready/${v.photo}'}}" alt="">
                        <button class="remove position-absolute top-0 end-0 me-2 me-md-3 mt-2 mt-md-3
                        cursor-pointer"  style='all:unset'
                        onclick="deletedata('{{Auth::guard('web')->user()->id}}','${v.id}','${v.photo_one}','${v.name}','${v.price}')">
                        <i class='bx bxs-heart' style='color:#0e122d'></i>
                        </button>

                      </div>
                      <p>${v.name}</p>
                      <p class="text-gold">$'${v.price}'</p>
                  </div>
                  </div>`
                  } else {
                      html += ``
                  }

              })
          } else {


          }

          $("#html_wishlist").html(html);

      }


      if (sessionStorage.getItem('to_profile') == 1) {
          var html = "";
          var html_1 = "";
          sessionStorage.removeItem('to_profile');
          html += `
       <a class="d-flex align-items-center mb-4" style="height: 20px;" data-bs-toggle="pill" href="#profile" aria-selected="false" role="tab" tabindex="-1">
            <img src="http://localhost:8000/assets/images/profile/icon/profile.png" width="20px" alt="" class="me-3">
            Profile
          </a>
      <a class="d-flex align-items-center mb-4 active" style="height: 20px;" data-bs-toggle="pill" href="#wishlist" aria-selected="true" role="tab">
        <img src="http://localhost:8000/assets/images/profile/icon/wishlist.png" width="20px" alt="" class="me-3">

        Wishlist
      </a>
      <a class="d-flex align-items-center mb-4" style="height: 20px;"
            data-bs-toggle="pill" href="#measurements">
          <img src="{{asset('assets/images/profile/icon/measurement.png')}}" width="20px" alt="" class="me-3">
          Measurements
        </a>
        <a class="d-flex align-items-center mb-4" style="height: 20px;"
            data-bs-toggle="pill" href="#orders">
          <img src="{{asset('assets/images/profile/icon/order.png')}}" width="20px" alt=""
                class="me-3">
          Orders
        </a>
       `
          $('#nav').html(html);

          $("#wishlist").addClass("active show");
          $('#wishlist').show();
          $("#profile").removeClass("active");

      }
  </script>
@endpush
<!-- @push('whishlist-nav')
  @if(isset(Auth::guard('web')->user()->id))
    <script>
        $(document).ready(function(){
          getnavData();
          // whishlist();
          // deletedata();
        });
        function getnavData(){
            var loItem = window.localStorage.getItem('Item');
            var arrayFromStroage = JSON.parse(localStorage.getItem('Item'));
            var arrayLength = arrayFromStroage.length;
            // var count = localStorage.length('Item');
            //  alert(arrayLength);
            var html = "";
            if (loItem != null) {


              itemArr = JSON.parse(loItem);

              $.each(itemArr,function(i,v){
                user_id = `{{Auth::guard('web')->user()->id}}`;
            // alert( window.userID )
          if(v.user_id == user_id)
          {

            // html += `${arrayLength}`;
            $('#fav-space').html(arrayLength);
          }else{
            html += parse('0');
          }
        });



          // document.getElementById('fav-space').innerHTML = parseInt(document.getElementById('fav-space').innerHTML) + 1;

        }else{

        }
    }
</script>




  @endif
@endpush -->

