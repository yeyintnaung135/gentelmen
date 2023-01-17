<section id="step5" class="custom d-none">
  <div class="alert alert-dark alert-dismissible d-none" id="alertnone">
    Need to fill this field - <span id="need" class="text-dark"></span>
  </div>
  <div class="alert alert-dark alert-dismissible d-none" id="login_error">
    Need to login first!!!
  </div>
  <p class="text-decoration-underline text-center text-md-end my-3" id="store">
    <a href="#">Save measurement</a></p>
  <h6 class="text-white ff-mont">Personal Information</h6>
  <div class="d-flex justify-content-center measurement mb-5 mt-3 my-md-5">

    <div class="center-flex log-form mx-2">
      <label for="height" class="d-block form-label">AGE</label>

      <div class="d-flex align-items-end justify-content-center inp-grp">
        @if($user == null || $user_info->age == null)
          <input type="number" id="age" class="form-control text-center" onmouseup="change_text()">
        @else
          <input type="number" id="age" class="form-control text-center" value="{{$user_info->age}}"
                 onmouseup="change_text()">
        @endif
        <span class="age--year">Year</span>
      </div>
    </div>
    <div class="center-flex log-form mx-2">
      <label for="height" class="d-block form-label">HEIGHT</label>
      <div class="center-flex flex-row with-select">
        @if($user == null || $user_info->height == null)
          <div class="center-flex flex-row with-select h-100">
            <input type="number" min="2" id="height_value" class="form-control" onmouseup="change_text()">
            <select name="height_type" id="height_type" class="htype">
              <option selected value="0">ft</option>
              <option value="1">cm</option>
            </select>
          </div>
        @else
          <div class="center-flex flex-row with-select h-100">
            <input type="number" min="2" id="height_value" value="{{$user_info->height}}"
                   class="form-control" onmouseup="change_text()">
            @if($user_info->height_type == 0)
            <select name="height_type" id="height_type" class="htype">
              <option selected value="0">ft</option>
              <option value="1">cm</option>
            </select>
            @else
            <select name="height_type" id="height_type" class="htype">
              <option  value="0">ft</option>
              <option selected value="1">cm</option>
            </select>
            @endif
          </div>
        @endif
      </div>
    </div>
    <div class="center-flex log-form mx-2">
      <label for="weight" class="d-block form-label">WEIGHT</label>
      <div class="center-flex flex-row with-select">
        @if($user == null || $user_info->weight == null)
          <input type="number" id="weight" class="form-control" onmouseup="change_text()">
          <select name="weight_type" id="weight_type" class="type">
            <option selected value="lb">lb</option>
            <option value="kg">kg</option>
          </select>
        @else
          <input type="number" id="weight" class="form-control" value="{{$user_info->weight}}"
                 onmouseup="change_text()">
          @if($user_info->weight_type == "lb")
            <select name="weight_type" id="weight_type" class="type">
              <option selected value="lb">lb</option>
              <option value="kg">kg</option>
            </select>
          @else
            <select name="weight_type" id="weight_type" class="type">
              <option value="lb">lb</option>
              <option selected value="kg">kg</option>
            </select>
          @endif
        @endif
      </div>
    </div>
  </div>
  <div class="">
    <div class="measure-unit">
      <h6 class="text-white ff-mont mb-3 fs-5">Choose Desire Unit for measurement</h6>
      <div class="d-flex">
      <div class="unit-radio-group me-3">
        <label for="cm" class="unit-label">Cm</label>
        <input type="radio" value="cm" name="measure_unit" id="cm" class="form-check-input" checked onclick="get_measure_unit(this.value)">
      </div>
      <div class="unit-radio-group">
        <label for="in" class="unit-label">Inches</label>
        <input type="radio" value="in" name="measure_unit" id="in" class="form-check-input" onclick="get_measure_unit(this.value)">
      </div>
      </div>
    </div>
    <div class="d-flex d-block d-md-none">
      <p class="me-4" id="jacket">Upper Body</p>
      <p id="pants">Lower Body</p>
    </div>
    <div class="row pt-5">

      <div class="col-4 col-md-4 px-3 px-md-5 jacket-vessel">
        @include('layouts/cus_5_jacket')
      </div>
      <div class="col-8 col-md-4 d-flex flex-column justify-content-center image-vessel">
        <img alt="Size Image" src="{{asset('/assets/images/customize/measure-desktop.png')}}"
             id="measureImage">
      </div>
      <div class="col-4 col-md-4 px-3 px-md-5 pants-vessel d-none d-md-block">
        @include('layouts/cus_5_pants')
      </div>
    </div>
  </div>
  <div class="d-none">
    <div class="nav nav-pills">
      <a class="nav-link active text-white-50 me-4" data-bs-toggle="pill"
         href="#jacket">Jacket/Vest</a>
      <a class="nav-link text-white-50" data-bs-toggle="pill" href="#pants">Pant</a>
    </div>
    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane container active" id="jacket">
        <div class="row">
          <div class="col-4">
            @include('layouts/cus_5_jacket')
          </div>
          <div class="col-8 d-flex align-items-center">
            <img src="{{asset('/assets/images/customize/measure-jacket.png')}}" alt="">
          </div>
        </div>
      </div>
      <div class="tab-pane container fade" id="pants">
        <div class="row">
          <div class="col-4">
            @include('layouts/cus_5_pants')
          </div>
          <div class="col-8 d-flex align-items-center">
            <img src="{{asset('/assets/images/customize/measure-pant.png')}}" alt="">
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class=" d-flex justify-content-center justify-content-md-end custom mb-5">
    <button class="btn p-0 px-3 mt-5" id="next">NEXT STEP</button>
  </div>
</section>
<script>

  $(document).ready(() => {
    let category = "in";
    $("input[name='measure_unit'], label#unit-label").click(function() {
      category = this.value;
      // alert(category);
      if(category === "cm") {
        $('.unit').html("cm")
      }
      if(category === "in") {
        $('.unit').html("in")
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
  inputs.focus(function () {
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


</script>
