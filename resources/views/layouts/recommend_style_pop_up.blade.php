@foreach($styles as $style)
<div class="modal fade" id="myCategory{{$style->id}}">
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
                <h5 class="pop-up__title d-none d-lg-block">{{$style->category}}</h5>
                <p class="pop-up__description">{{$style->description}}</p>
                <div class="row pop-up__feature-list">
                  <div class="col-12 col-lg-6 row g-0 check-wrapper">
                    <div class="col-2 check-icon"><i class='bx bx-check'></i></div>
                    <div class="col-10 check-text">colour : {{$style->colour}}
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 row g-0 check-wrapper">
                    <div class="col-2 check-icon"><i class='bx bx-check'></i></div>
                    <div class="col-10 check-text">Fabric :
                      {{$style->fabric}}
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 row g-0 check-wrapper">
                    <div class="col-2 check-icon"><i class='bx bx-check'></i></div>
                    <div class="col-10 check-text">Fabric Type :
                      {{$style->fabric_type}}
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 row g-0 check-wrapper">
                    <div class="col-2 check-icon"><i class='bx bx-check'></i></div>
                    <div class="col-10 check-text">composition : {{$style->compostition}}
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 row g-0 check-wrapper">
                    <div class="col-2 check-icon"><i class='bx bx-check'></i></div>
                    <div class="col-10 check-text">softness : {{$style->softness}}
                    </div>
                  </div>
                </div>
                <label id="style_modal_click{{$style->id}}" class="pop-up__button"
                   for="style_check{{$style->id}}" onclick="style_rec('{{$style->id}}','{{$style->name}}')"
                         data-bs-toggle="modal" data-bs-target="#step3-confirm">
                  pick this style
                </label>
              </div>
              <div class="col-12 col-lg-6 order-first order-lg-last swiper-container">
                <h5 class="pop-up__title d-block d-lg-none">Business conference style 2</h5>
                <div class="swiper mySwiper2 top-swiper" id="mySwiper2{{$style->id}}">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="{{'/assets/images/categories/style/'. $style->photo_one}}"/>
                    </div>
                    <div class="swiper-slide">
                      <img src="{{'/assets/images/categories/style/'. $style->photo_two}}"/>
                    </div>
                    <div class="swiper-slide">
                      <img src="{{'/assets/images/categories/style/'. $style->photo_three}}"/>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
                <div thumbsSlider="" class="swiper thumbsSlider d-none d-md-block">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="{{'/assets/images/categories/style/'. $style->photo_one}}"/>
                    </div>
                    <div class="swiper-slide">
                      <img src="{{'/assets/images/categories/style/'. $style->photo_two}}"/>
                    </div>
                    <div class="swiper-slide">
                      <img src="{{'/assets/images/categories/style/'. $style->photo_three}}"/>
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
@endforeach
@push('zh-js')
  <script>
   
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
@endpush
