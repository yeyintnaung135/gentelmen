@extends('layouts.header')
@push('styles')
  <link href="{{ asset('css/demo.css') }}" rel="stylesheet">
  <link href="{{ asset('css/customize.css') }}" rel="stylesheet">
@endpush
@section('content')
  @include('layouts/nav')


  <div class="measure">
    {{-- Body Types --}}
    <div class="measure-types nav-pills" role="tablist">
      <div class="measure-type">
        <a class="nav-link active" data-bs-toggle="tab" href="#body">BODY</a>
      </div>
      <div class="measure-type">
        <a class="nav-link" data-bs-toggle="tab" href="#suits">SUITS</a>
      </div>
      <div class="measure-type">
        <a class="nav-link" data-bs-toggle="tab" href="#info">INFO</a>
      </div>
    </div>
    <div class="unit-wrapper">
      <div class="unit-label-wrapper">
        <input type="radio" id="in" name="measure_unit" class="unit-check d-none" value="in"
               checked>
        <label for="in" class="unit-label">in</label>
      </div>
      <div class="unit-label-wrapper">
        <input type="radio" id="cm" name="measure_unit" class="unit-check d-none" value="cm">
        <label for="cm" class="unit-label">Cm</label>
      </div>
    </div>
    {{-- content --}}
    <div class="tab-content">
      <div id="body" class="tab-pane active">
        <div class="measure-items">
          <a class="measure-item active-link" href="#chest">
            <img src="{{asset("assets/images/customize/measurement/chest.png")}}" alt="chest">
            <p>Chest</p>
          </a>
          <a class="measure-item" href="#waist">
            <img src="{{asset("assets/images/customize/measurement/waist.png")}}" alt="waist">
            <p>Waist</p>
          </a>
          <a class="measure-item" href="#hips">
            <img src="{{asset("assets/images/customize/measurement/hips.png")}}" alt="hips">
            <p>hips</p>
          </a>
          <a class="measure-item" href="#shoulder">
            <img src="{{asset("assets/images/customize/measurement/shoulder.png")}}" alt="shoulder">
            <p>shoulder</p>
          </a>
          <a class="measure-item" href="#biceps">
            <img src="{{asset("assets/images/customize/measurement/biceps.png")}}" alt="biceps">
            <p>biceps</p>
          </a>
          <a class="measure-item" href="#forearm">
            <img src="{{asset("assets/images/customize/measurement/forearm.png")}}" alt="forearm">
            <p>forearm</p>
          </a>
          <a class="measure-item" href="#neck">
            <img src="{{asset("assets/images/customize/measurement/neck.png")}}" alt="neck">
            <p>neck</p>
          </a>
          <a class="measure-item" href="#knees">
            <img src="{{asset("assets/images/customize/measurement/knees.png")}}" alt="knees">
            <p>knees</p>
          </a>
          <a class="measure-item" href="#thighs">
            <img src="{{asset("assets/images/customize/measurement/thighs.png")}}" alt="thighs">
            <p>thighs</p>
          </a>
          <a class="measure-item" href="#stomach">
            <img src="{{asset("assets/images/customize/measurement/stomach.png")}}" alt="stomach">
            <p>stomach</p>
          </a>
        </div>
        <div class="measure-item-content">
          <div id="chest" class="content">
            <div class="measure-img-wrapper">
              <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                   alt="chest">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                <input type="text" placeholder="0.0" id="chest_input">
                <p class="unit">In</p>
              </div>
            </div>
          </div>
          <div id="waist" class="content">
            <div class="measure-img-wrapper">
              <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                   alt="chest">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                <input type="text" placeholder="0.0" id="waist_input">
                <p class="unit">In</p>
              </div>
            </div>
          </div>
          <div id="hips" class="content">
            <div class="measure-img-wrapper">
              <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                   alt="chest">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                <input type="text" placeholder="0.0" id="hips_input">
                <p class="unit">In</p>
              </div>
            </div>
          </div>
          <div id="shoulder" class="content">
            <div class="measure-img-wrapper">
              <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                   alt="chest">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                <input type="text" placeholder="0.0" id="shoulder_input">
                <p class="unit">In</p>
              </div>
            </div>
          </div>
          <div id="biceps" class="content">
            <div class="measure-img-wrapper">
              <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                   alt="chest">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                <input type="text" placeholder="0.0" id="biceps_input">
                <p class="unit">In</p>
              </div>
            </div>
          </div>
          <div id="forearm" class="content">
            <div class="measure-img-wrapper">
              <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                   alt="chest">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                <input type="text" placeholder="0.0" id="forearm_input">
                <p class="unit">In</p>
              </div>
            </div>
          </div>
          <div id="neck" class="content">
            <div class="measure-img-wrapper">
              <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                   alt="chest">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                <input type="text" placeholder="0.0" id="neck_input">
                <p class="unit">In</p>
              </div>
            </div>
          </div>
          <div id="knees" class="content">
            <div class="measure-img-wrapper">
              <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                   alt="chest">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                <input type="text" placeholder="0.0" id="knees_input">
                <p class="unit">In</p>
              </div>
            </div>
          </div>
          <div id="thighs" class="content">
            <div class="measure-img-wrapper">
              <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                   alt="chest">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                <input type="text" placeholder="0.0" id="thighs_input">
                <p class="unit">In</p>
              </div>
            </div>
          </div>
          <div id="stomach" class="content">
            <div class="measure-img-wrapper">
              <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                   alt="chest">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                <input type="text" placeholder="0.0" id="stomach_input">
                <p class="unit">In</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="suits" class="tab-pane">
        <div class="measure-items">
          <a class="measure-item active-link" href="#j_length">
            <img src="{{asset("assets/images/customize/measurement/chest.png")}}"
                 alt="j_length">
            <p>Jacket Front Length</p>
          </a>
          <a class="measure-item" href="#jacket_shoulder_bottom">
            <img src="{{asset("assets/images/customize/measurement/waist.png")}}"
                 alt="jacket_shoulder_bottom">
            <p>Jacket Shoulder to Bottom</p>
          </a>
          <a class="measure-item" href="#sleeve_length_Right">
            <img src="{{asset("assets/images/customize/measurement/hips.png")}}"
                 alt="sleeve_length_Right">
            <p>Sleeve Length Right</p>
          </a>
          <a class="measure-item" href="#sleeve_length_left">
            <img src="{{asset("assets/images/customize/measurement/shoulder.png")}}"
                 alt="sleeve_length_left">
            <p>Sleeve Length Left</p>
          </a>
          <a class="measure-item" href="#vest_length">
            <img src="{{asset("assets/images/customize/measurement/biceps.png")}}"
                 alt="vest_length">
            <p>Vest Length</p>
          </a>
          <a class="measure-item" href="#shirt_length">
            <img src="{{asset("assets/images/customize/measurement/forearm.png")}}"
                 alt="shirt_length">
            <p>Shirt Length</p>
          </a>
          <a class="measure-item" href="#pants_length">
            <img src="{{asset("assets/images/customize/measurement/neck.png")}}" alt="pants_length">
            <p>Pants Length</p>
          </a>
          <a class="measure-item" href="#bottom_length">
            <img src="{{asset("assets/images/customize/measurement/knees.png")}}" alt="bottom_length">
            <p>Bottom Length</p>
          </a>
          <a class="measure-item" href="#r_low">
            <img src="{{asset("assets/images/customize/measurement/thighs.png")}}" alt="r_low">
            <p>R.Low</p>
          </a>
        </div>
        <div class="measure-item-content">
          <div id="j_length" class="content">
            <div class="measure-img-wrapper">
              <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                   alt="chest">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                <input type="text" placeholder="0.0" id="chest_input" >
                <p class="unit">In</p>
              </div>
            </div>
          </div>
          <div id="jacket_shoulder_bottom" class="content">
            <div class="measure-img-wrapper">
              <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                   alt="chest">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                <input type="text" placeholder="0.0" id="waist_input">
                <p class="unit">In</p>
              </div>
            </div>
          </div>
          <div id="sleeve_length_Right" class="content">
            <div class="measure-img-wrapper">
              <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                   alt="chest">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                <input type="text" placeholder="0.0" id="hips_input">
                <p class="unit">In</p>
              </div>
            </div>
          </div>
          <div id="sleeve_length_left" class="content">
            <div class="measure-img-wrapper">
              <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                   alt="chest">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                <input type="text" placeholder="0.0" id="shoulder_input">
                <p class="unit">In</p>
              </div>
            </div>
          </div>
          <div id="vest_length" class="content">
            <div class="measure-img-wrapper">
              <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                   alt="chest">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                <input type="text" placeholder="0.0" id="biceps_input">
                <p class="unit">In</p>
              </div>
            </div>
          </div>
          <div id="shirt_length" class="content">
            <div class="measure-img-wrapper">
              <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                   alt="chest">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                <input type="text" placeholder="0.0" id="forearm_input">
                <p class="unit">In</p>
              </div>
            </div>
          </div>
          <div id="pants_length" class="content">
            <div class="measure-img-wrapper">
              <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                   alt="chest">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                <input type="text" placeholder="0.0" id="neck_input">
                <p class="unit">In</p>
              </div>
            </div>
          </div>
          <div id="bottom_length" class="content">
            <div class="measure-img-wrapper">
              <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                   alt="chest">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                <input type="text" placeholder="0.0" id="knees_input">
                <p class="unit">In</p>
              </div>
            </div>
          </div>
          <div id="r_low" class="content">
            <div class="measure-img-wrapper">
              <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                   alt="chest">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                <input type="text" placeholder="0.0" id="thighs_input">
                <p class="unit">In</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="info" class="tab-pane">
        <p>Info</p>
      </div>
    </div>
  </div>
  <div class="measure-items d-none">
    <div class="measure-item"></div>
    <div class="measure-item"></div>
    <div class="measure-item"></div>
    <div class="measure-item"></div>
    <div class="measure-item"></div>
    <div class="measure-item"></div>
    <div class="measure-item"></div>
    <div class="measure-item"></div>
    <div class="measure-item"></div>
    <div class="measure-item"></div>
  </div>

  <!-- Nav pills -->






  <div class="d-none">
    <button class="filter-btn" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#sideFilter">
      <i class='bx bx-filter-alt'></i>Filter
    </button>
    <section class="offcanvas offcanvas-start offcanvas-lg" id="sideFilter">
      <div class="side-filter">
        <div class="fil-header">
          <h5 class="header-title">Filter</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                  aria-label="Close"></button>
        </div>
        <hr>
        <div class="fil-body">
          <div class="fil-contents">
            <div class="fil-content">
              <h6 class="content-title">Fabric Type</h6>
              <div class="content-options collapsed" id="fabric_type">
                <div class="content-option">
                  <input class="form-check-input" type="checkbox" id="cashmere"
                         name="type" value="">
                  <label for="cashmere" class="form-check-label">Cashmere</label>
                </div>
                <div class="content-option">
                  <input class="form-check-input" type="checkbox" id="wool"
                         name="type"
                         value="">
                  <label for="wool" class="form-check-label">Wool</label>
                </div>
                <div class="content-option">
                  <input class="form-check-input" type="checkbox" id="polyester"
                         name="type"
                         value="">
                  <label for="polyester" class="form-check-label">Polyester</label>
                </div>
                <div class='list-toggle'>
                  <p class="expand">See More...</p>
                  <p class="collapse">See Less...</p>
                </div>
              </div>
            </div>
            <div class="fil-content">
              <h6 class="content-title">Package</h6>
              <div class="content-options packages">
                <div class="content-option">
                  <input class="form-check-input price-check d-none" type="radio" id="classic"
                         name="package-type" value="">
                  <label for="classic" class="package-label">Classic</label>
                </div>
                <div class="content-option">
                  <input class="form-check-input price-check d-none" type="radio" id="legacy"
                         name="package-type" value="">
                  <label for="legacy" class="package-label">Legacy</label>
                </div>
                <div class="content-option">
                  <input class="form-check-input price-check d-none" type="radio" id="premium"
                         name="package-type" value="">
                  <label for="premium" class="package-label">Premium</label>
                </div>
              </div>
            </div>
            <div class="fil-content">
              <h6 class="content-title">Colour</h6>
              <div class="content-options collapsed" id="color">
                <div class="content-option">
                  <input class="form-check-input" type="checkbox" id="black"
                         name="type"
                         value="">
                  <label for="black" class="form-check-label">Black</label>
                </div>
                <div class="content-option">
                  <input class="form-check-input" type="checkbox" id="red"
                         name="type" value="">
                  <label for="red" class="form-check-label">Red</label>
                </div>
                <div class="content-option">
                  <input class="form-check-input" type="checkbox" id="grey"
                         name="type"
                         value="">
                  <label for="grey" class="form-check-label">Grey</label>
                </div>
                <div class="content-option">
                  <input class="form-check-input" type="checkbox" id="green"
                         name="type"
                         value="">
                  <label for="green" class="form-check-label">Green</label>
                </div>
                <div class="content-option">
                  <input class="form-check-input" type="checkbox" id="navy"
                         name="type"
                         value="">
                  <label for="navy" class="form-check-label">Navy</label>
                </div>
                <div class="content-option">
                  <input class="form-check-input" type="checkbox" id="pink"
                         name="type"
                         value="">
                  <label for="pink" class="form-check-label">Pink</label>
                </div>
                <div class='list-toggle'>
                  <p class="expand">See More...</p>
                  <p class="collapse">See Less...</p>
                </div>
              </div>
            </div>
            <div class="fil-content">
              <h6 class="content-title">Pattern</h6>
              <div class="content-options collapsed" id="pattern">
                <div class="content-option">
                  <input class="form-check-input" type="checkbox" id="striped"
                         name="type"
                         value="">
                  <label for="striped" class="form-check-label">striped</label>
                </div>
                <div class="content-option">
                  <input class="form-check-input" type="checkbox" id="pattern1"
                         name="type" value="">
                  <label for="pattern1" class="form-check-label">pattern 1</label>
                </div>
                <div class="content-option">
                  <input class="form-check-input" type="checkbox" id="pattern2"
                         name="type" value="">
                  <label for="pattern2" class="form-check-label">pattern 2</label>
                </div>
                <div class="content-option">
                  <input class="form-check-input" type="checkbox" id="pattern3"
                         name="type" value="">
                  <label for="pattern3" class="form-check-label">pattern 3</label>
                </div>
                <div class="content-option">
                  <input class="form-check-input" type="checkbox" id="pattern4"
                         name="type" value="">
                  <label for="pattern4" class="form-check-label">pattern 4</label>
                </div>
                <div class="content-option">
                  <input class="form-check-input" type="checkbox" id="pattern5"
                         name="type" value="">
                  <label for="pattern5" class="form-check-label">pattern 5</label>
                </div>
                <div class='list-toggle'>
                  <p class="expand">See More...</p>
                  <p class="collapse">See Less...</p>
                </div>
              </div>
            </div>
            <div class="fil-content">
              <h6 class="content-title">Price</h6>
              <div class="content-options price">
                <div class="content-option">
                  <input class="form-check-input" type="radio" id="low_height"
                         name="type"
                         value="">
                  <label for="low_height" class="form-check-label">Lowest to highest</label>
                </div>
                <div class="content-option">
                  <input class="form-check-input" type="radio" id="height_low"
                         name="type" value="">
                  <label for="height_low" class="form-check-label">Highest to lowest</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="fil-footer">
          <div class="foot-action-btns">
            <button class="action-btn" data-bs-dismiss="offcanvas"
                    aria-label="Close"><a href="#">Cancel</a></button>
            <button class="action-btn apply" data-bs-dismiss="offcanvas"
                    aria-label="Close"><a href="#">Apply</a></button>
          </div>
        </div>
      </div>
    </section>

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
  </div>
  @include('layouts/footer')
@endsection
@section('js')
  <script>

      $('#body .content').first().slideDown();
      $('#body .measure-items .measure-item').click(function (e) {
          let current_link = $(this);
          let current_link_href = current_link.attr('href');

          $('#body .measure-items .measure-item').removeClass('active-link');
          $(this).addClass('active-link');

          $('#body .content').slideUp();
          $(current_link_href).slideDown();

          e.preventDefault();
      });

      $('#suits .content').first().slideDown();
      $('#suits .measure-items .measure-item').click(function (e) {
          let current_link = $(this);
          let current_link_href = current_link.attr('href');

          $('#suits .measure-items .measure-item').removeClass('active-link');
          $(this).addClass('active-link');

          $('#suits .content').slideUp();
          $(current_link_href).slideDown();

          e.preventDefault();
      });

      $(document).ready(() => {
          let category = "in";
          $("input[name='measure_unit']").click(function() {
              category = this.value;
              // alert(category);
              if(category === "cm") {
                  $('.unit').html("Cm")
              }
              if(category === "in") {
                  $('.unit').html("In")
              }
          });
      })


      $(".list-toggle").click(function () {
          $(this).closest(".content-options").toggleClass("collapsed").toggleClass("expanded");
      });

      let noOfCharac = 150;
      let contents = document.querySelectorAll(".desc");
      contents.forEach(content => {
          //If text length is less that noOfCharac... then hide the read more button
          if (content.textContent.length < noOfCharac) {
              content.nextElementSibling.style.display = "none";
          } else {
              let displayText = content.textContent.slice(0, noOfCharac);
              let moreText = content.textContent.slice(noOfCharac);
              content.innerHTML = `${displayText}<span class="dots">...</span><span class="hide more">${moreText}</span>`;
          }
      });

      function readMore(btn) {
          let post = btn.parentElement;
          post.querySelector(".dots").classList.toggle("hide");
          post.querySelector(".more").classList.toggle("hide");
          btn.textContent == "Read More" ? btn.textContent = "Read Less" : btn.textContent = "Read More";
      }


  </script>
@endsection

