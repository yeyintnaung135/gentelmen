@extends('layouts.header')
@push('styles')
  <link href="{{ asset('css/demo.css') }}" rel="stylesheet">
  <link href="{{ asset('css/customize.css') }}" rel="stylesheet">
@endpush
@section('content')
  @include('layouts/nav')
  <button class="filter-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideFilter">
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



  @include('layouts/footer')
@endsection
@section('js')
  <script>

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

