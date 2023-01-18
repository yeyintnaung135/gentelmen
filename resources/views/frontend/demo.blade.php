@extends('layouts.header')
@push('styles')
  <link href="{{ asset('css/demo.css') }}" rel="stylesheet">
@endpush
@section('content')
  @include('layouts/nav')
  {{--  fd--}}
  <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#orderDetail">order Detail
  </button>
  <div class="modal fade" id="orderDetail">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="btn-close btn-close-white"
                  data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <div class="order">
            <table class="table table-borderless">
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
            </table>
            <table class="table table-borderless">
              <tbody>
              <h6 class="modal-title ff-mont text-white mb-3">Customize History</h6>
              <tr>
                <td class="text-white">Package :</td>
                <td class="text-white-70">Doe</td>
              </tr>
              <tr>
                <td class="text-white">Fitting :</td>
                <td class="text-white-70">Doe</td>
              </tr>
              <tr>
                <td class="text-white">Fabric :</td>
                <td class="text-white-70">Doe</td>
              </tr>
              <tr>
                <td class="text-white">Jacket Style :</td>
                <td class="text-white-70">Doe</td>
              </tr>
              <tr>
                <td class="text-white">Pleat Selection :</td>
                <td class="text-white-70">Doe</td>
              </tr>
              <tr>
                <td class="text-white">Vest Lapel :</td>
                <td class="text-white-70">No.34, GH7 Building , Singapore</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>












  <br><br><br>

  {{--hi--}}
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal1">
    Open modal
  </button>

  <!-- Modal -->
  <input type='radio' id='radio1' name='type' value='1'/> <label for="radio1">Radio 1</label>
  <input type='radio' id='radio2' name='type' value='2'/> <label for="radio2">Radio 2</label>
  <input type='radio' id='radio3' name='type' value='3'/> <label for="radio3">Radio 3</label>
  <hr>
  <div class="modal" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body selected-one">
          <p for="radio1">Radio 1</p>
          <p for="radio2">Radio 2</p>
          <p for="radio3">Radio 3</p>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <br><br><br>

  <!--Pop Up Start-->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Open modal
  </button>
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-lg-down pop-up__modal">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="close-btn-wrapper">
            <button type="button" class="btn-close btn-close-white"
                    data-bs-dismiss="modal"></button>
          </div>
          <section class="pop-up">
            <div class="row g-0 g-lg-5">
              <div class="col-12 col-lg-6 order-last order-lg-first">
                <h5 class="pop-up__title d-none d-lg-block">Business conference style 1</h5>
                <p class="pop-up__description">This winter fabric is a timeless pure cashmere. In a
                  dark
                  grey with a
                  fine
                  pink and off
                  white check, this fabric is ideal for suiting, jackets and trousers that drape
                  perfectly.
                  Take a look at our full range of mens suiting for more inspiration.</p>
                <div class="row pop-up__feature-list">
                  <div class="col-12 col-lg-6 row g-0 check-wrapper">
                    <div class="col-2 check-icon"><i class='bx bx-check'></i></div>
                    <div class="col-10 check-text">Lorem ipsum dolor sit amet, consectetur
                      adipisicing elit.
                      Aut, quam!
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 row g-0 check-wrapper">
                    <div class="col-2 check-icon"><i class='bx bx-check'></i></div>
                    <div class="col-10 check-text">Lorem ipsum dolor sit amet, consectetur
                      adipisicing elit.
                      Aut, quam!
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 row g-0 check-wrapper">
                    <div class="col-2 check-icon"><i class='bx bx-check'></i></div>
                    <div class="col-10 check-text">Lorem ipsum dolor sit amet, consectetur
                      adipisicing elit.
                      Aut, quam!
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 row g-0 check-wrapper">
                    <div class="col-2 check-icon"><i class='bx bx-check'></i></div>
                    <div class="col-10 check-text">Lorem ipsum dolor sit amet, consectetur
                      adipisicing elit.
                      Aut, quam!
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 row g-0 check-wrapper">
                    <div class="col-2 check-icon"><i class='bx bx-check'></i></div>
                    <div class="col-10 check-text">Lorem ipsum dolor sit amet, consectetur
                      adipisicing elit.
                      Aut, quam!
                    </div>
                  </div>
                </div>
                <button class="pop-up__button">pick this style</button>
              </div>
              <div class="col-12 col-lg-6 order-first order-lg-last swiper-container">
                <h5 class="pop-up__title d-block d-lg-none">Business conference style 2</h5>
                <div class="swiper top-swiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="{{asset('assets/images/ready/img.png')}}"/>
                    </div>
                    <div class="swiper-slide">
                      <img src="{{asset('assets/images/ready/ready-2.png')}}"/>
                    </div>
                    <div class="swiper-slide">
                      <img src="{{asset('assets/images/ready/ready-3.png')}}"/>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
                <div thumbsSlider="" class="swiper thumbsSlider d-none d-md-block">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="{{asset('assets/images/ready/img.png')}}"/>
                    </div>
                    <div class="swiper-slide">
                      <img src="{{asset('assets/images/ready/ready-2.png')}}"/>
                    </div>
                    <div class="swiper-slide">
                      <img src="{{asset('assets/images/ready/ready-3.png')}}"/>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </section>

        </div>
      </div>
    </div>
  </div>
  <!--Pop Up End-->

  <!--See more See less -->
  <div class="more">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Vestibulum laoreet, nunc eget laoreet sagittis,
    quam ligula sodales orci, congue imperdiet eros tortor ac lectus.
    Duis eget nisl orci. Aliquam mattis purus non mauris
    blandit id luctus felis convallis.
    Integer varius egestas vestibulum.
    Nullam a dolor arcu, ac tempor elit. Donec.
  </div>
  <div class="more">
    Duis nisl nibh, egestas at fermentum at,
  </div>
  <div class="more">
    consectetur adipiscing elit. Proin blandit nunc sed sem dictum id feugiat quam blandit.
    Donec nec sem sed arcu interdum commodo ac ac diam. Donec consequat semper rutrum.
    Vestibulum et mauris elit. Vestibulum mauris lacus, ultricies.
  </div>

  <!-- payment receive  -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal"
          data-bs-target="#paymentReceive">
    Open modal
  </button>
  <div class="modal fade" id="paymentReceive">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <section class="payment-receive">
            <div class="payment-receive__close-wrapper">
              <button type="button" class="btn-close btn-close-white" aria-label="Close"
                      data-bs-dismiss="modal"></button>
            </div>
            <div class="payment-receive__header">
              <div class="receive__success">
                <i class='bx bx-check-circle' style='color:#ffd964'></i>
              </div>
              <div class="receive__success-text">
                <h1>Payment Received !</h1>
                <p>We have received your payment successfully!</p>
              </div>
            </div>
            <div class="payment-receive__body">
              <div class="receive__order">
                <p>Order Number</p>
                <p>#001</p>
              </div>
              <div class="receive__separator">
                <hr>
              </div>
              <div class="receive__detail">
                <h2>Payment Detail</h2>
                <div class="receive__detail-wrapper">
                  <div class="receive-item">
                    <p>Payment Date</p>
                    <p>5 Jan 2023</p>
                  </div>
                  <div class="receive-item">
                    <p>Payment Type</p>
                    <p>PayPal</p>
                  </div>
                  <div class="receive-item">
                    <p>Transaction ID</p>
                    <p>00038198763892</p>
                  </div>
                  <div class="receive-item">
                    <p>Paid Amount</p>
                    <p>$889</p>
                  </div>

                </div>
              </div>
            </div>
            <div class="payment-receive__footer">
              <p>Thanks for shopping at Gentlemen</p>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  <!--End Payment receive-->
  <!--Swiper menu-->
  <div class="menu-wrapper">
    <div class="menu__item">Box 1</div>
    <div class="menu__item">Box 2</div>
    <div class="menu__item">Box 3</div>
    <div class="menu__item">Box 4</div>
    <div class="menu__item">Box 5</div>
    <div class="menu__item">Box 6</div>
    <div class="menu__item">Box 7</div>
    <div class="menu__item">Box 8</div>
    <div class="menu__item">Box 9</div>

  </div>


  <!--

<div class="alert alert-danger bg-danger d-flex text-center d-none align-items-center
  alert-width mt-5"
       id="alertnone" role="alert">
    <svg style="width:2vw;height:2vw" class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
      <use xlink:href="#exclamation-triangle-fill"/>
    </svg>
    <div class="">
      Need to fill this field - <span id="need" class="text-dark"></span>
    </div>
  </div>
  <div class="alert bg-danger d-flex justify-content-evenly align-items-center d-none
  mx-auto mt-5 alert-width"
       id="login_error" role="alert">
    {{-- <svg style="width:2vw;height:2vw" class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
      <use xlink:href="#exclamation-triangle-fill"/>
    </svg> --}}
  <i class='bx bxs-plane-land bx-flashing' style="font-size: 23px;"></i>
  <div class="">
    Need to login first!!!
  </div>
</div>
-->

  @include('layouts/footer')
@endsection
@section('js')
  <script>

    //check

    $(".selected-one p").click(function () {
      let defa;
      defa = $(this).attr('for');
      // console.log(defa);
      localStorage.setItem("lastCheck", defa);
      $("#" + defa).prop("checked", true).trigger("click");
    });
    let lastCheck = localStorage.getItem("lastCheck")
    $("#" + lastCheck).prop("checked", true).trigger("click");

    // For pop up modal
    var swiper = new Swiper(".thumbsSlider", {
      loop: true,
      spaceBetween: 10,
      slidesPerView: 5,
      watchSlidesProgress: true,
      pagination: {
        el: '.swiper-pagination',
      },
    });
    var swiper2 = new Swiper(".top-swiper", {
      loop: true,
      spaceBetween: 10,
      pagination: {
        el: '.swiper-pagination',
      },
      thumbs: {
        swiper: swiper,
      },
    });

    // For see more see less
    $(document).ready(function () {
      var showChar = 100;
      var ellipsestext = "...";
      var moretext = "more";
      var lesstext = "less";
      $('.more').each(function () {
        var content = $(this).html();

        if (content.length > showChar) {

          var c = content.substr(0, showChar);
          var h = content.substr(showChar - 1, content.length - showChar);

          var html = c + '<span class="moreelipses">' + ellipsestext + '</span>&nbsp;<span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

          $(this).html(html);
        }

      });

      $(".morelink").click(function () {
        if ($(this).hasClass("less")) {
          $(this).removeClass("less");
          $(this).html(moretext);
        } else {
          $(this).addClass("less");
          $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
      });
    });

    // swipe menu

  </script>
@endsection

