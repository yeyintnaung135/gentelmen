<section id="step5" class="custom d-none">
  <div class="alert alert-dark alert-dismissible d-none" id="alertnone">
    Need to fill this field - <span id="need" class="text-dark"></span>
  </div>
  <div class="alert alert-dark alert-dismissible d-none" id="login_error">
    Need to login first!!!
  </div>
  <div class="measure">
    <p class="text-decoration-underline text-center my-3" id="store" onclick="store_measurement_overall()">
      <a href="#">Save measurement</a></p>
      <div class="alert alert-danger d-flex justify-content-center d-none" role="alert" id="info_error_alert" style="background-color:red !important;color:whitesmoke !important">
        Need To Fill Info Data
      </div>
    {{-- Body Types --}}
    <div class="measure-types nav-pills" role="tablist">
      <div class="measure-type">
        <a class="nav-link active" data-bs-toggle="tab" href="#upper" id="upper_tab">UPPER</a>
      </div>
      <div class="measure-type">
        <a class="nav-link" data-bs-toggle="tab" href="#lower" id="lower_tab">LOWER</a>
      </div>
      <div class="measure-type">
        <a class="nav-link" data-bs-toggle="tab" href="#info">INFO</a>
      </div>
    </div>
    <div class="unit-wrapper">
      <div class="unit-label-wrapper">
        <input type="radio" id="in" name="measure_unit" class="unit-check d-none" value="in"
               checked onclick="get_measure_unit(this.value)">
        <label for="in" class="unit-label">in</label>
      </div>
      <div class="unit-label-wrapper">
        <input type="radio" id="cm" name="measure_unit" class="unit-check d-none" value="cm" onclick="get_measure_unit(this.value)">
        <label for="cm" class="unit-label">Cm</label>
      </div>
    </div>
    {{-- content --}}
    <div class="tab-content">
      <div id="upper" class="tab-pane active">
        <div class="measure-items">
          <a class="measure-item active-link" href="#neck">
            <img src="{{asset("assets/images/customize/measurement/neck.png")}}" alt="neck">
            <p>neck</p>
            <span class="badge text-bg-danger upper_errors d-none" id="neck_error">Require</span>
          </a>
          <a class="measure-item" href="#chest">
            <img src="{{asset("assets/images/customize/measurement/chest.png")}}" alt="chest">
            <p>Chest</p>
            <span class="badge text-bg-danger upper_errors d-none" id="chest_error">Require</span>
          </a>
          <a class="measure-item" href="#waist_upper">
            <img src="{{asset("assets/images/customize/measurement/waist.png")}}" alt="waist">
            <p>Waist (Upper Waist)</p>
            <span class="badge text-bg-danger upper_errors d-none" id="waist_error">Require</span>
          </a>
          <a class="measure-item" href="#hips_upper">
            <img src="{{asset("assets/images/customize/measurement/hips.png")}}" alt="hips">
            <p>hips</p>
            <span class="badge text-bg-danger upper_errors d-none" id="hips_error">Require</span>
          </a>
          <a class="measure-item" href="#shoulder">
            <img src="{{asset("assets/images/customize/measurement/shoulder.png")}}" alt="shoulder">
            <p>shoulder</p>
            <span class="badge text-bg-danger upper_errors d-none" id="shoulder_error">Require</span>
          </a>
          <a class="measure-item" href="#sleeve_length_Right">
            <img src="{{asset("assets/images/customize/measurement/hips.png")}}"
                 alt="sleeve_length_Right">
            <p>Sleeve Length Right</p>
            <span class="badge text-bg-danger upper_errors d-none" id="sleeve_r_error">Require</span>
          </a>
          <a class="measure-item" href="#sleeve_length_left">
            <img src="{{asset("assets/images/customize/measurement/shoulder.png")}}"
                 alt="sleeve_length_left">
            <p>Sleeve Length Left</p>
            <span class="badge text-bg-danger upper_errors d-none" id="sleeve_l_error">Require</span>
          </a>
          <a class="measure-item" href="#stomach_upper">
            <img src="{{asset("assets/images/customize/measurement/stomach.png")}}" alt="stomach">
            <p>stomach</p>
            <span class="badge text-bg-danger upper_errors d-none" id="stomach_error">Require</span>
          </a>
          <a class="measure-item" href="#biceps">
            <img src="{{asset("assets/images/customize/measurement/biceps.png")}}" alt="biceps">
            <p>biceps</p>
            <span class="badge text-bg-danger upper_errors d-none" id="biceps_error">Require</span>
          </a>
          <a class="measure-item" href="#forearm">
            <img src="{{asset("assets/images/customize/measurement/forearm.png")}}" alt="forearm">
            <p>forearm</p>
            <span class="badge text-bg-danger upper_errors d-none" id="forearm_error">Require</span>
          </a>
          <a class="measure-item" href="#cuffs">
            <img src="{{asset("assets/images/customize/measurement/stomach.png")}}" alt="cuffs">
            <p>cuffs</p>
            <span class="badge text-bg-danger upper_errors d-none" id="cuffs_error">Require</span>
          </a>
          <a class="measure-item" href="#chest_front">
            <img src="{{asset("assets/images/customize/measurement/stomach.png")}}" alt="chest
            front">
            <p>chest front width</p>
            <span class="badge text-bg-danger upper_errors d-none" id="chest_f_error">Require</span>
          </a>
          <a class="measure-item" href="#chest_back">
            <img src="{{asset("assets/images/customize/measurement/stomach.png")}}" alt="chest
            back">
            <p>chest Back width</p>
            <span class="badge text-bg-danger upper_errors d-none" id="chest_b_error">Require</span>
          </a>
          <a class="measure-item" href="#jacket_front">
            <img src="{{asset("assets/images/customize/measurement/biceps.png")}}"
                 alt="jacket_front_length">
            <p>Jacket Front Length</p>
            <span class="badge text-bg-danger upper_errors d-none" id="jacket_f_error">Require</span>
          </a>
          <a class="measure-item" href="#jacket_back">
            <img src="{{asset("assets/images/customize/measurement/biceps.png")}}"
                 alt="jacket_back_length">
            <p>Jacket Back Length</p>
            <span class="badge text-bg-danger upper_errors d-none" id="jacket_b_error">Require</span>
          </a>
          <a class="measure-item" href="#vest_length">
            <img src="{{asset("assets/images/customize/measurement/biceps.png")}}"
                 alt="vest_length">
            <p>Vest Length</p>
            <span class="badge text-bg-danger upper_errors d-none" id="vest_len_error">Require</span>
          </a>
        </div>
        <div class="measure-item-content">
          <div id="neck" class="content">
            <div class="measure-img-wrapper">
              <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                   alt="neck">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                @if($user != null && $upper != null)
                <input type="hidden" id="upper_has_id" style="color:white" value="{{$upper->id}}">
                <input type="text" id="neck_input" value="{{$upper->neck}}" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" id="upper_has_id" style="color:white" value="0">
                <input type="text" placeholder="0.0" id="neck_input" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @endif
                <p class="unit">In</p>
              </div>
            </div>
          </div>
          <div id="chest" class="content">
            <div class="measure-img-wrapper">
              <img src="{{asset('assets/images/customize/measurement/_MG_0002.JPG')}}"
                   alt="chest">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                @if($user != null && $upper != null)

                <input type="text" placeholder="0.0" id="chest_input" value="{{$upper->chest}}" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @else

                <input type="text" placeholder="0.0" id="chest_input" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $upper != null)
                <input type="text" placeholder="0.0" id="waist_upper_input" value="{{$upper->waist}}" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="waist_upper_input" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $upper != null)
                <input type="text" placeholder="0.0" id="hips_upper_input" value="{{$upper->hips}}" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="hips_upper_input" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @endif
                <p class="unit">In</p>
              </div>
            </div>
          </div>
          <div id="shoulder" class="content">
            <div class="measure-img-wrapper">
              <img src="https://via.placeholder.com/1024x400?text=Visit+Blogging.com+Now"
                   alt="shoulder">
            </div>
            <div class="measure-input-wrapper">
              <div class="measure-input-group">
                @if($user != null && $upper != null)
                <input type="text" placeholder="0.0" id="shoulder_input" value="{{$upper->shoulder}}" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="shoulder_input" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $upper != null)
                <input type="text" placeholder="0.0" id="sleeve_length_Right_input" value="{{$upper->sleeve_length_right}}" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="sleeve_length_Right_input" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $upper != null)
                <input type="text" placeholder="0.0" id="sleeve_length_left_input" value="{{$upper->sleeve_length_left}}" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="sleeve_length_left_input" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $upper != null)
                <input type="text" placeholder="0.0" id="stomach_upper_input" value="{{$upper->stomach}}" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="stomach_upper_input" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $upper != null)
                <input type="text" placeholder="0.0" id="biceps_input" value="{{$upper->biceps}}" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="biceps_input" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $upper != null)
                <input type="text" placeholder="0.0" id="forearm_input" value="{{$upper->forearm}}" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="forearm_input" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $upper != null)
                <input type="text" placeholder="0.0" id="cuffs_input" value="{{$upper->cuffs}}" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="cuffs_input" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $upper != null)
                <input type="text" placeholder="0.0" id="chest_front_input" value="{{$upper->chest_front_width}}" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="chest_front_input" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $upper != null)
                <input type="text" placeholder="0.0" id="chest_back_input" value="{{$upper->chest_back_width}}" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="chest_back_input" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $upper != null)
                <input type="text" placeholder="0.0" id="jacket_front_input" value="{{$upper->jacket_front_length}}" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="jacket_front_input" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $upper != null)
                <input type="text" placeholder="0.0" id="jacket_back_input" value="{{$upper->jacket_back_length}}" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="jacket_back_input" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $upper != null)
                <input type="text" placeholder="0.0" id="vest_length_input" value="{{$upper->vest_length}}" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="vest_length_input" onmousedown="clear_upper_required()" onkeydown="clear_pass_measure_required()">
                @endif
                <p class="unit">In</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="lower" class="tab-pane">
        <div class="measure-items">
          <a class="measure-item active-link" href="#waist_lower">
            <img src="{{asset("assets/images/customize/measurement/waist.png")}}" alt="waist_lower">
            <p>Waist (Lower Waist)</p>
            <span class="badge text-bg-danger lower_errors d-none" id="pwaist_error">Require</span>
          </a>
          <a class="measure-item" href="#stomach_lower">
            <img src="{{asset("assets/images/customize/measurement/stomach.png")}}" alt="stomach_lower">
            <p>stomach</p>
            <span class="badge text-bg-danger lower_errors d-none" id="pstomach_error">Require</span>
          </a>
          <a class="measure-item" href="#hips_lower">
            <img src="{{asset("assets/images/customize/measurement/hips.png")}}" alt="hips_lower">
            <p>hips</p>
            <span class="badge text-bg-danger lower_errors d-none" id="phips_error">Require</span>
          </a>
          <a class="measure-item" href="#crotch">
            <img src="{{asset("assets/images/customize/measurement/stomach.png")}}" alt="crotch">
            <p>crotch</p>
            <span class="badge text-bg-danger lower_errors d-none" id="pcrotch_error">Require</span>
          </a>
          <a class="measure-item" href="#thighs">
            <img src="{{asset("assets/images/customize/measurement/thighs.png")}}" alt="thighs">
            <p>thighs</p>
            <span class="badge text-bg-danger lower_errors d-none" id="pthighs_error">Require</span>
          </a>
          <a class="measure-item" href="#knees">
            <img src="{{asset("assets/images/customize/measurement/knees.png")}}" alt="knees">
            <p>knees</p>
            <span class="badge text-bg-danger lower_errors d-none" id="pknees_error">Require</span>
          </a>
          <a class="measure-item" href="#calf">
            <img src="{{asset("assets/images/customize/measurement/knees.png")}}" alt="calf">
            <p>Calf</p>
            <span class="badge text-bg-danger lower_errors d-none" id="pcalf_error">Require</span>
          </a>
          <a class="measure-item" href="#pants_short">
            <img src="{{asset("assets/images/customize/measurement/neck.png")}}" alt="pants_short">
            <p>Pants Short</p>
            <span class="badge text-bg-danger lower_errors d-none" id="pshort_error">Require</span>
          </a>
          <a class="measure-item" href="#pants_length">
            <img src="{{asset("assets/images/customize/measurement/neck.png")}}" alt="pants_length">
            <p>Pants Length</p>
            <span class="badge text-bg-danger lower_errors d-none" id="plength_error">Require</span>
          </a>
          <a class="measure-item" href="#bottom_length">
            <img src="{{asset("assets/images/customize/measurement/knees.png")}}"
                 alt="bottom_length">
            <p>Bottom Length</p>
            <span class="badge text-bg-danger lower_errors d-none" id="pbottom_error">Require</span>
          </a>
          <!--
          <a class="measure-item" href="#j_length">
            <img src="{{asset("assets/images/customize/measurement/chest.png")}}"
                 alt="j_length">
            <p>Jacket Front Length</p>
          </a>
          <a class="measure-item" href="#jacket_shoulder_bottom">
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
                @if($user != null && $lower != null)
                <input type="hidden" id="lower_has_id" style="color:white" value="{{$lower->id}}">
                <input type="text" placeholder="0.0" value="{{$lower->waist}}" id="waist_lower_input" onmousedown="clear_lower_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" id="lower_has_id" style="color:white" value="0">
                <input type="text" placeholder="0.0" id="waist_lower_input" onmousedown="clear_lower_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $lower != null)
                <input type="text" placeholder="0.0" value="{{$lower->stomach}}" id="stomach_lower_input" onmousedown="clear_lower_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="stomach_lower_input" onmousedown="clear_lower_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $lower != null)
                <input type="text" placeholder="0.0" value="{{$lower->hips}}" id="hips_lower_input" onmousedown="clear_lower_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="hips_lower_input" onmousedown="clear_lower_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $lower != null)
                <input type="text" placeholder="0.0" value="{{$lower->crotch}}" id="crotch_input" onmousedown="clear_lower_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="crotch_input" onmousedown="clear_lower_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $lower != null)
                <input type="text" placeholder="0.0" value="{{$lower->thighs}}" id="thighs_input" onmousedown="clear_lower_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="thighs_input" onmousedown="clear_lower_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $lower != null)
                <input type="text" placeholder="0.0" id="knees_input" value="{{$lower->knees}}" onmousedown="clear_lower_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="knees_input" onmousedown="clear_lower_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $lower != null)
                <input type="text" placeholder="0.0" id="calf_input" value="{{$lower->calf}}" onmousedown="clear_lower_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="calf_input" onmousedown="clear_lower_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $lower != null)
                <input type="text" placeholder="0.0" id="pants_short_input" value="{{$lower->shorts}}" onmousedown="clear_lower_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="pants_short_input" onmousedown="clear_lower_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $lower != null)
                <input type="text" placeholder="0.0" id="pants_length_input" value="{{$lower->length}}" onmousedown="clear_lower_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="pants_length_input" onmousedown="clear_lower_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null && $lower != null)
                <input type="text" placeholder="0.0" id="bottom_length_input" value="{{$lower->bottom}}" onmousedown="clear_lower_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" placeholder="0.0" id="bottom_length_input" onmousedown="clear_lower_required()" onkeydown="clear_pass_measure_required()">
                @endif
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
                @if($user != null)
                <input type="text" id="age" value="{{$user_info->age}}" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                @else
                <input type="text" id="age" placeholder="0" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                @endif
                <p>Year</p>
              </div>
              <span class="alert alert-danger font-weight-bold info_errors d-none" role="alert" id="age_error" style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Age
              </span>
            </div>
            <!--select-->
            <div class="info-group">
              <label for="age">Height</label>
              <div class="info-input-group">
                @if($user != null)
                <input type="text" id="height" value="{{$user_info->height}}" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                  @if($user_info->height_type == 'cm')
                  <select name="age" id="height_type">
                    <option value="cm" selected>CM</option>
                    <option value="in">IN</option>
                  </select>
                  @else
                  <select name="age" id="height_type">
                    <option value="cm">CM</option>
                    <option value="in" selected>IN</option>
                  </select>
                  @endif
                @else
                <input type="text" id="height" placeholder="0" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                <select name="age" id="height_type">
                  <option value="cm" selected>CM</option>
                  <option value="in">IN</option>
                </select>
                @endif

              </div>
              <span class="alert alert-danger font-weight-bold info_errors d-none" role="alert" id="height_error" style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Height
              </span>
            </div>
            <div class="info-group">
              <label for="age">Weight</label>
              <div class="info-input-group">
                @if($user != null)
                <input type="text" id="weight" placeholder="0" value="{{$user_info->weight}}" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                  @if($user_info->weight_type == 'kg')
                  <select name="weight" id="weight_type">
                    <option value="kg" selected>KG</option>
                    <option value="lb">LB</option>
                  </select>
                  @else
                  <select name="weight" id="weight_type">
                    <option value="kg" >KG</option>
                    <option value="lb" selected>LB</option>
                  </select>
                  @endif
                @else
                <input type="text" id="weight" placeholder="0" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                <select name="weight" id="weight_type">
                  <option value="kg" selected>KG</option>
                  <option value="lb">LB</option>
                </select>
                @endif
              </div>
              <span class="alert alert-danger font-weight-bold info_errors d-none" role="alert" id="weight_error" style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Weight
              </span>
            </div>
            <div class="info-group">
              <label for="age">Shoulder Type</label>
              <div class="info-input-group">
                @if($user != null)
                  @if($user_info->shoulder_type == 'structure')
                  <select name="shoulder_type" id="shoulder_type" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0">Select</option>
                    <option value="structure" selected>Structure</option>
                    <option value="square">Square</option>
                    <option value="slopped">Slopped</option>
                  </select>
                  @elseif($user_info->shoulder_type == 'square')
                  <select name="shoulder_type" id="shoulder_type" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0">Select</option>
                    <option value="structure">Structure</option>
                    <option value="square" selected>Square</option>
                    <option value="slopped">Slopped</option>
                  </select>
                  @elseif($user_info->shoulder_type == 'slopped')
                  <select name="shoulder_type" id="shoulder_type" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0">Select</option>
                    <option value="structure">Structure</option>
                    <option value="square">Square</option>
                    <option value="slopped" selected>Slopped</option>
                  </select>
                  @else
                  <select name="shoulder_type" id="shoulder_type" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" selected>Select</option>
                    <option value="structure">Structure</option>
                    <option value="square">Square</option>
                    <option value="slopped" >Slopped</option>
                  </select>
                  @endif
                @else
                <select name="shoulder_type" id="shoulder_type" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                  <option value="0" selected>Select</option>
                  <option value="structure">Structure</option>
                  <option value="square">Square</option>
                  <option value="slopped">Slopped</option>
                </select>
                @endif
              </div>
              <span class="alert alert-danger font-weight-bold info_errors d-none" role="alert" id="st_error" style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Shoulder Type
              </span>
            </div>
            <div class="info-group">
              <label for="age">Dropped Shoulder</label>
              <div class="info-input-group">
                @if($user != null)
                  @if($user_info->drop_shoulder == 'left')
                  <select name="dropped_shoulder" id="dropped_shoulder" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0">Select</option>
                    <option value="left" selected>Left</option>
                    <option value="right">Right</option>
                  </select>
                  @elseif($user_info->drop_shoulder == 'right')
                  <select name="dropped_shoulder" id="dropped_shoulder" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0">Select</option>
                    <option value="left">Left</option>
                    <option value="right" selected>Right</option>
                  </select>
                  @else
                  <select name="dropped_shoulder" id="dropped_shoulder" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" selected>Select</option>
                    <option value="left">Left</option>
                    <option value="right" >Right</option>
                  </select>
                  @endif
                @else
                <select name="dropped_shoulder" id="dropped_shoulder" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                  <option value="0" selected>Select</option>
                  <option value="left">Left</option>
                  <option value="right">Right</option>
                </select>
                @endif
              </div>
              <span class="alert alert-danger font-weight-bold info_errors d-none" role="alert" id="ds_error" style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Dropped Shoulder
              </span>
            </div>
            <div class="info-group">
              <label for="age">Arms Position</label>
              <div class="info-input-group">
                @if($user != null)
                  @if($user_info->arms_position == 'average')
                  <select name="arms_position" id="arms_position" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0">Select</option>
                    <option value="average" selected>Average</option>
                    <option value="forward">Forward</option>
                    <option value="backward">Backward</option>
                  </select>
                  @elseif($user_info->arms_position == 'forward')
                  <select name="arms_position" id="arms_position" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" >Select</option>
                    <option value="average">Average</option>
                    <option value="forward" selected>Forward</option>
                    <option value="backward">Backward</option>
                  </select>
                  @elseif($user_info->arms_position == 'backward')
                  <select name="arms_position" id="arms_position" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" >Select</option>
                    <option value="average">Average</option>
                    <option value="forward">Forward</option>
                    <option value="backward" selected>Backward</option>
                  </select>
                  @else
                  <select name="arms_position" id="arms_position" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" selected>Select</option>
                    <option value="average">Average</option>
                    <option value="forward">Forward</option>
                    <option value="backward" >Backward</option>
                  </select>
                  @endif
                @else
                <select name="arms_position" id="arms_position" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                  <option value="0" selected>Select</option>
                  <option value="average">Average</option>
                  <option value="forward">Forward</option>
                  <option value="backward">Backward</option>
                </select>
                @endif
              </div>
              <span class="alert alert-danger font-weight-bold info_errors d-none" role="alert" id="ap_error" style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Arms Position
              </span>
            </div>
            <div class="info-group">
              <label for="age">Body Shape</label>
              <div class="info-input-group">
                @if($user != null)
                  @if($user_info->body_shape == 'average')
                  <select name="body_shape" id="body_shape" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0">Select</option>
                    <option value="average" selected>Average</option>
                    <option value="thin">Thin</option>
                    <option value="muscular">Muscular</option>
                    <option value="fuller">Fuller</option>
                  </select>
                  @elseif($user_info->body_shape == 'thin')
                  <select name="body_shape" id="body_shape" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" >Select</option>
                    <option value="average">Average</option>
                    <option value="thin" selected>Thin</option>
                    <option value="muscular">Muscular</option>
                    <option value="fuller">Fuller</option>
                  </select>
                  @elseif($user_info->body_shape == 'mascular')
                  <select name="body_shape" id="body_shape" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" >Select</option>
                    <option value="average">Average</option>
                    <option value="thin">Thin</option>
                    <option value="muscular" selected>Muscular</option>
                    <option value="fuller">Fuller</option>
                  </select>
                  @elseif($user_info->body_shape == 'fuller')
                  <select name="body_shape" id="body_shape" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" >Select</option>
                    <option value="average">Average</option>
                    <option value="thin">Thin</option>
                    <option value="muscular">Muscular</option>
                    <option value="fuller" selected>Fuller</option>
                  </select>
                  @else
                  <select name="body_shape" id="body_shape" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" selected>Select</option>
                    <option value="average">Average</option>
                    <option value="thin">Thin</option>
                    <option value="muscular">Muscular</option>
                    <option value="fuller" >Fuller</option>
                  </select>
                  @endif
                @else
                <select name="body_shape" id="body_shape" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                  <option value="0" selected>Select</option>
                  <option value="average">Average</option>
                  <option value="thin">Thin</option>
                  <option value="muscular">Muscular</option>
                  <option value="fuller">Fuller</option>
                </select>
                @endif
              </div>
              <span class="alert alert-danger font-weight-bold info_errors d-none" role="alert" id="b_shape_error" style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Body Shape
              </span>
            </div>
          </div>
          <div class="info-div">
            <div class="info-group">
              <label for="age">Neck Type</label>
              <div class="info-input-group">
                @if($user != null)
                  @if($user_info->neck_type == 'standard')
                  <select name="neck_type" id="neck_type" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" >Select</option>
                    <option value="standard" selected>Standard</option>
                    <option value="short">Short</option>
                    <option value="long">Long</option>
                  </select>
                  @elseif($user_info->neck_type == 'short')
                  <select name="neck_type" id="neck_type" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" >Select</option>
                    <option value="standard">Standard</option>
                    <option value="short" selected>Short</option>
                    <option value="long">Long</option>
                  </select>
                  @elseif($user_info->neck_type == 'long')
                  <select name="neck_type" id="neck_type" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0">Select</option>
                    <option value="standard">Standard</option>
                    <option value="short">Short</option>
                    <option value="long" selected>Long</option>
                  </select>
                  @else
                  <select name="neck_type" id="neck_type" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" selected>Select</option>
                    <option value="standard">Standard</option>
                    <option value="short">Short</option>
                    <option value="long" >Long</option>
                  </select>
                  @endif
                @else
                <select name="neck_type" id="neck_type" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                  <option value="0" selected>Select</option>
                  <option value="standard">Standard</option>
                  <option value="short">Short</option>
                  <option value="long">Long</option>
                </select>
                @endif
              </div>
              <span class="alert alert-danger font-weight-bold info_errors d-none" role="alert" id="nt_error" style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Neck Type
              </span>
            </div>
            <div class="info-group">
              <label for="age">Stomach Shape</label>
              <div class="info-input-group">
                @if($user != null)
                  @if($user_info->stomach_shape == 'average')
                  <select name="stomach_shape" id="stomach_shape" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" >Select</option>
                    <option value="average" selected>Average</option>
                    <option value="flat">Flat</option>
                    <option value="extended">Extended</option>
                  </select>
                  @elseif($user_info->stomach_shape == 'flat')
                  <select name="stomach_shape" id="stomach_shape" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" >Select</option>
                    <option value="average">Average</option>
                    <option value="flat" selected>Flat</option>
                    <option value="extended">Extended</option>
                  </select>
                  @elseif($user_info->stomach_shape == 'extended')
                  <select name="stomach_shape" id="stomach_shape" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" >Select</option>
                    <option value="average">Average</option>
                    <option value="flat">Flat</option>
                    <option value="extended" selected>Extended</option>
                  </select>
                  @else
                  <select name="stomach_shape" id="stomach_shape" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" selected>Select</option>
                    <option value="average">Average</option>
                    <option value="flat">Flat</option>
                    <option value="extended" >Extended</option>
                  </select>
                  @endif
                @else
                <select name="stomach_shape" id="stomach_shape" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                  <option value="0" selected>Select</option>
                  <option value="average">Average</option>
                  <option value="flat">Flat</option>
                  <option value="extended">Extended</option>
                </select>
                @endif
              </div>
              <span class="alert alert-danger font-weight-bold info_errors d-none" role="alert" id="ss_error" style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Stomach Shape
              </span>
            </div>
            <div class="info-group">
              <label for="age">Upper Body Shape</label>
              <div class="info-input-group">
                @if($user != null)
                  @if($user_info->upper_body_shape == 'straight')
                  <select name="upper_body_shape" id="upper_body_shape" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" >Select</option>
                    <option value="straight" selected>Straight</option>
                    <option value="scooped">Scooped</option>
                  </select>
                  @elseif($user_info->upper_body_shape == 'scooped')
                  <select name="upper_body_shape" id="upper_body_shape" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" >Select</option>
                    <option value="straight">Straight</option>
                    <option value="scooped" selected>Scooped</option>
                  </select>
                  @else
                  <select name="upper_body_shape" id="upper_body_shape" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()" >
                    <option value="0" selected>Select</option>
                    <option value="straight">Straight</option>
                    <option value="scooped" >Scooped</option>
                  </select>
                  @endif
                @else
                <select name="upper_body_shape" id="upper_body_shape" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                  <option value="0" selected>Select</option>
                  <option value="straight">Straight</option>
                  <option value="scooped">Scooped</option>
                </select>
                @endif
              </div>
              <span class="alert alert-danger font-weight-bold info_errors d-none" role="alert" id="ubs_error" style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Upper Body Shape
              </span>
            </div>
            <div class="info-group">
              <label for="age">Pant Line</label>
              <div class="info-input-group">
                @if($user != null)
                  @if($user_info->pant_line == 'regular')
                  <select name="pant_line" id="pant_line" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" >Select</option>
                    <option value="regular" selected>Regular</option>
                    <option value="low">Low</option>
                    <option value="under-belly">Under Belly</option>
                  </select>
                  @elseif($user_info->pant_line == 'low')
                  <select name="pant_line" id="pant_line" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" >Select</option>
                    <option value="regular">Regular</option>
                    <option value="low" selected>Low</option>
                    <option value="under-belly">Under Belly</option>
                  </select>
                  @elseif($user_info->pant_line == 'under-belly')
                  <select name="pant_line" id="pant_line" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" >Select</option>
                    <option value="regular">Regular</option>
                    <option value="low">Low</option>
                    <option value="under-belly" selected>Under Belly</option>
                  </select>
                  @else
                  <select name="pant_line" id="pant_line" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" selected>Select</option>
                    <option value="regular">Regular</option>
                    <option value="low">Low</option>
                    <option value="under-belly" >Under Belly</option>
                  </select>
                  @endif
                @else
                <select name="pant_line" id="pant_line" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                  <option value="0" selected>Select</option>
                  <option value="regular">Regular</option>
                  <option value="low">Low</option>
                  <option value="under-belly">Under Belly</option>
                </select>
                @endif
              </div>
              <span class="alert alert-danger font-weight-bold info_errors d-none" role="alert" id="pl_error" style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Pant Line
              </span>
            </div>
            <div class="info-group">
              <label for="age">Seat</label>
              <div class="info-input-group">
                @if($user != null)
                  @if($user_info->seat == 'regular')
                  <select name="seat" id="seat" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" >Select</option>
                    <option value="regular" selected>Regular</option>
                    <option value="flat">Flat</option>
                    <option value="prominent">Prominent</option>
                  </select>
                  @elseif($user_info->seat == 'flat')
                  <select name="seat" id="seat" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" >Select</option>
                    <option value="regular">Regular</option>
                    <option value="flat" selected>Flat</option>
                    <option value="prominent">Prominent</option>
                  </select>
                  @elseif($user_info->seat == 'prominent')
                  <select name="seat" id="seat" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" >Select</option>
                    <option value="regular">Regular</option>
                    <option value="flat">Flat</option>
                    <option value="prominent" selected>Prominent</option>
                  </select>
                  @else
                  <select name="seat" id="seat" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                    <option value="0" selected>Select</option>
                    <option value="regular">Regular</option>
                    <option value="flat">Flat</option>
                    <option value="prominent" >Prominent</option>
                  </select>
                  @endif
                @else
                <select name="seat" id="seat" onmousedown="clear_info_required()" onkeydown="clear_pass_measure_required()">
                  <option value="0" selected>Select</option>
                  <option value="regular">Regular</option>
                  <option value="flat">Flat</option>
                  <option value="prominent">Prominent</option>
                </select>
                @endif
              </div>
              <span class="alert alert-danger font-weight-bold info_errors d-none" role="alert" id="seat_error" style="background-color:red !important;color:whitesmoke !important">
                Need To Fill Seat
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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
      var user_id = @json($user);
      var upper_id = @json($upper);
      var lower_id = @json($lower);

      //pass to step6 because complete 16 upper data are absolutely have in database
      if(user_id != null && upper_id != null)
      {
        sessionStorage.setItem('pass_measure',1);
      }
      //end to step6 because complete 16 upper data are absolutely have in datatase

      var all_upper_count = 0;
      var all_info_count = 0;
      var all_lower_count = 0;

      //Start get session data if has for user info
      if(sessionStorage.getItem('info_age') != null && sessionStorage.getItem('info_age') != '')
      {
        $('#age').val(sessionStorage.getItem('info_age'));
        all_info_count+=1;
      }
      if(sessionStorage.getItem('info_height') != null && sessionStorage.getItem('info_height') != '')
      {
        $('#height').val(sessionStorage.getItem('info_height'));
        $('#height_type').val(sessionStorage.getItem('info_height_type'));
        all_info_count+=1;
      }
      if(sessionStorage.getItem('info_weight') != null && sessionStorage.getItem('info_weight') != '')
      {
        $('#weight').val(sessionStorage.getItem('info_weight'));
        $('#weight_type').val(sessionStorage.getItem('info_weight_type'));
        all_info_count+=1;
      }
      if(sessionStorage.getItem('info_shoulder_type') != null && sessionStorage.getItem('info_shoulder_type') != '')
      {
        $('#shoulder_type').val(sessionStorage.getItem('info_shoulder_type'));
        all_info_count+=1;
      }
      if(sessionStorage.getItem('info_drop_shoulder') != null && sessionStorage.getItem('info_drop_shoulder') != '')
      {
        $('#dropped_shoulder').val(sessionStorage.getItem('info_drop_shoulder'));
        all_info_count+=1;
      }
      if(sessionStorage.getItem('info_arms_position') != null && sessionStorage.getItem('info_arms_position') != '')
      {
        $('#arms_position').val(sessionStorage.getItem('info_arms_position'));
        all_info_count+=1;
      }
      if(sessionStorage.getItem('info_body_shape') != null && sessionStorage.getItem('info_body_shape') != '')
      {
        $('#body_shape').val(sessionStorage.getItem('info_body_shape'));
        all_info_count+=1;
      }
      if(sessionStorage.getItem('info_neck_type') != null && sessionStorage.getItem('info_neck_type') != '')
      {
        $('#neck_type').val(sessionStorage.getItem('info_neck_type'));
        all_info_count+=1;
      }
      if(sessionStorage.getItem('info_stomach_shape') != null && sessionStorage.getItem('info_stomach_shape') != '')
      {
        $('#stomach_shape').val(sessionStorage.getItem('info_stomach_shape'));
        all_info_count+=1;
      }
      if(sessionStorage.getItem('info_upper_body_shape') != null && sessionStorage.getItem('info_upper_body_shape') != '')
      {
        $('#upper_body_shape').val(sessionStorage.getItem('info_upper_body_shape'));
        all_info_count+=1;
      }
      if(sessionStorage.getItem('info_pant_line') != null && sessionStorage.getItem('info_pant_line') != '')
      {
        $('#pant_line').val(sessionStorage.getItem('info_pant_line'));
        all_info_count+=1;
      }
      if(sessionStorage.getItem('info_seat') != null && sessionStorage.getItem('info_seat') != '')
      {
        $('#seat').val(sessionStorage.getItem('info_seat'));
        all_info_count+=1;
      }
      // alert(all_info_count);

      //End get session data if has for user info
      //Start get session data if has for upper
      if(sessionStorage.getItem('upper_neck') != null && sessionStorage.getItem('upper_neck') != '')
      {
        $('#neck_input').val(sessionStorage.getItem('upper_neck'));
        all_upper_count+=1;
      }
      if(sessionStorage.getItem('upper_chest') != null && sessionStorage.getItem('upper_chest') != '')
      {
        $('#chest_input').val(sessionStorage.getItem('upper_chest'));
        all_upper_count+=1;
      }
      if(sessionStorage.getItem('upper_waist') != null && sessionStorage.getItem('upper_waist') != '')
      {
        $('#waist_upper_input').val(sessionStorage.getItem('upper_waist'))
        all_upper_count+=1;
      }
      if(sessionStorage.getItem('upper_hips') != null && sessionStorage.getItem('upper_hips') != '')
      {
        $('#hips_upper_input').val(sessionStorage.getItem('upper_hips'))
        all_upper_count+=1;
      }
      if(sessionStorage.getItem('upper_shoulder') != null && sessionStorage.getItem('upper_shoulder') != '')
      {
        $('#shoulder_input').val(sessionStorage.getItem('upper_shoulder'))
        all_upper_count+=1;
      }
      if(sessionStorage.getItem('upper_sleeve_right') != null && sessionStorage.getItem('upper_sleeve_right') != '')
      {
        $('#sleeve_length_Right_input').val(sessionStorage.getItem('upper_sleeve_right'))
        all_upper_count+=1;
      }
      if(sessionStorage.getItem('upper_sleeve_left') != null && sessionStorage.getItem('upper_sleeve_left') != '')
      {
        $('#sleeve_length_left_input').val(sessionStorage.getItem('upper_sleeve_left'))
        all_upper_count+=1;
      }
      if(sessionStorage.getItem('upper_stomach') != null && sessionStorage.getItem('upper_stomach') != '')
      {
        $('#stomach_upper_input').val(sessionStorage.getItem('upper_stomach'))
        all_upper_count+=1;
      }
      if(sessionStorage.getItem('upper_biceps') != null && sessionStorage.getItem('upper_biceps') != '')
      {
        $('#biceps_input').val(sessionStorage.getItem('upper_biceps'))
        all_upper_count+=1;
      }
      if(sessionStorage.getItem('upper_forearm') != null && sessionStorage.getItem('upper_forearm') != '')
      {
        $('#forearm_input').val(sessionStorage.getItem('upper_forearm'))
        all_upper_count+=1;
      }
      if(sessionStorage.getItem('upper_cuffs') != null && sessionStorage.getItem('upper_cuffs') != '')
      {
        $('#cuffs_input').val(sessionStorage.getItem('upper_cuffs'))
        all_upper_count+=1;
      }
      if(sessionStorage.getItem('upper_chest_front') != null && sessionStorage.getItem('upper_chest_front') != '')
      {
        $('#chest_front_input').val(sessionStorage.getItem('upper_chest_front'))
        all_upper_count+=1;
      }
      if(sessionStorage.getItem('upper_chest_back') != null && sessionStorage.getItem('upper_chest_back') != '')
      {
        $('#chest_back_input').val(sessionStorage.getItem('upper_chest_back'))
        all_upper_count+=1;
      }
      if(sessionStorage.getItem('upper_jacket_front') != null && sessionStorage.getItem('upper_jacket_front') != '')
      {
        $('#jacket_front_input').val(sessionStorage.getItem('upper_jacket_front'))
        all_upper_count+=1;
      }
      if(sessionStorage.getItem('upper_jacket_back') != null && sessionStorage.getItem('upper_jacket_back') != '')
      {
        $('#jacket_back_input').val(sessionStorage.getItem('upper_jacket_back'))
        all_upper_count+=1;
      }
      if(sessionStorage.getItem('upper_vest_length') != null && sessionStorage.getItem('upper_vest_length') != '')
      {
        $('#vest_length_input').val(sessionStorage.getItem('upper_vest_length'))
        all_upper_count+=1;
      }
      //End get session data if has for upper
      //Start get session data if has for lower
      if(sessionStorage.getItem('lower_pwaist') != null && sessionStorage.getItem('lower_pwaist') != '')
      {
        $('#waist_lower_input').val(sessionStorage.getItem('lower_pwaist'))
        all_lower_count+=1;
      }
      if(sessionStorage.getItem('lower_pknees') != null && sessionStorage.getItem('lower_pknees') != '')
      {
        $('#knees_input').val(sessionStorage.getItem('lower_pknees'))
        all_lower_count+=1;
      }
      if(sessionStorage.getItem('lower_plength') != null && sessionStorage.getItem('lower_plength') != '')
      {
        $('#pants_length_input').val(sessionStorage.getItem('lower_plength'))
        all_lower_count+=1;
      }
      if(sessionStorage.getItem('lower_pstomach') != null && sessionStorage.getItem('lower_pstomach') != '')
      {
        $('#stomach_lower_input').val(sessionStorage.getItem('lower_pstomach'))
        all_lower_count+=1;
      }
      if(sessionStorage.getItem('lower_pshort') != null && sessionStorage.getItem('lower_pshort') != '')
      {
        $('#pants_short_input').val(sessionStorage.getItem('lower_pshort'))
        all_lower_count+=1;
      }
      if(sessionStorage.getItem('lower_phips') != null && sessionStorage.getItem('lower_phips') != '')
      {
        $('#hips_lower_input').val(sessionStorage.getItem('lower_phips'))
        all_lower_count+=1;
      }
      if(sessionStorage.getItem('lower_pthighs') != null && sessionStorage.getItem('lower_pthighs') != '')
      {
        $('#thighs_input').val(sessionStorage.getItem('lower_pthighs'))
        all_lower_count+=1;
      }
      if(sessionStorage.getItem('lower_pbottom') != null && sessionStorage.getItem('lower_pbottom') != '')
      {
        $('#bottom_length_input').val(sessionStorage.getItem('lower_pbottom'))
        all_lower_count+=1;
      }
      if(sessionStorage.getItem('lower_pcrotch') != null && sessionStorage.getItem('lower_pcrotch') != '')
      {
        $('#crotch_input').val(sessionStorage.getItem('lower_pcrotch'))
        all_lower_count+=1;
      }
      if(sessionStorage.getItem('lower_pcalf') != null && sessionStorage.getItem('lower_pcalf') != '')
      {
        $('#calf_input').val(sessionStorage.getItem('lower_pcalf'))
        all_lower_count+=1;
      }
      //End get session data if has for lower
      //start determine to go next step 6
      // alert(all_upper_count);
      if(all_info_count == 12 && sessionStorage.getItem('customize_category_id') == 1 || sessionStorage.getItem('customize_category_id') == 2)
      {
        if(sessionStorage.getItem('customize_category_id') == 1 || sessionStorage.getItem('customize_category_id') == 2)
        {
          if(all_upper_count == 16)
          {
            sessionStorage.setItem('pass_measure',1)
          }
        }
      }
      if(all_info_count == 12 && sessionStorage.getItem('customize_category_id') == 3)
      {
        if(sessionStorage.getItem('customize_category_id') == 3)
        {
          if(all_lower_count == 10)
          {
            sessionStorage.setItem('pass_measure',1)
          }
        }
      }
      //end determine to go next step 6
        let category = "in";
        if(user_id == null && upper_id == null || lower_id == null)
        {
          if(sessionStorage.getItem('measure_unit') == null && sessionStorage.getItem('measure_unit') == '')
          {
            $('.unit').html("In")
          }
          else
          {
            if(sessionStorage.getItem('measure_unit') == 'in')
            {
              $('.unit').html("In")
            }
            else if(sessionStorage.getItem('measure_unit') == 'cm')
            {
              $('.unit').html("Cm")
            }
          }
        }
        else if(user_id != null && upper_id != null || lower_id != null)
        {
          if(upper_id.measure_type == 'in')
          {
            $('.unit').html("In")
          }
          else if(upper_id.measure_type == 'cm')
          {
            $('.unit').html("Cm")
          }
          sessionStorage.setItem('measure_unit',upper_id.measure_type)
        }

        $("input[name='measure_unit']").click(function () {
          sessionStorage.removeItem('pass_measure');
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


</script>
@push('script_tag')
<script>

  function store_measurement_overall(){
    // alert("ghhhhhhhhhhhhhhhhhhggggggggggggggg");
    if(sessionStorage.getItem('from_store_temporary_user') == null || sessionStorage.getItem('from_store_temporary_user') == '')
    {
      var user_id = @json($user);
    }
    else
    {
      var user_id = sessionStorage.getItem('from_store_temporary_user');
    }
    // alert(user);
    // alert("store measure");
    //start info data
    let store_status = true;
    let info_status = true;
    let upper_status = true;
    let lower_status = true;
    var age = $('#age').val();
    var height = $('#height').val();
    var height_type = $('#height_type').val();
    var weight = $('#weight').val();
    var weight_type = $('#weight_type').val();
    var shoulder_type = $('#shoulder_type').val();
    var drop_shoulder = $('#dropped_shoulder').val();
    var arms_position = $('#arms_position').val();
    var body_shape = $('#body_shape').val();
    var neck_type = $('#neck_type').val();
    var stomach_shape = $('#stomach_shape').val();
    var upper_body_shape = $('#upper_body_shape').val();
    var pant_line = $('#pant_line').val();
    var seat = $('#seat').val();
    if($.trim(age) == '')
    {
      $('#age_error').removeClass('d-none');
      info_status = false;
    }
    else
    {
      $('#age_error').addClass('d-none');
      sessionStorage.setItem('info_age',age);
    }
    if($.trim(height) == '')
    {
      $('#height_error').removeClass('d-none');
      info_status = false;
    }
    else
    {
      $('#height_error').addClass('d-none');
      sessionStorage.setItem('info_height',height);
      sessionStorage.setItem('info_height_type',height_type);
    }
    if($.trim(weight) == '')
    {
      $('#weight_error').removeClass('d-none');
      info_status = false;
    }
    else
    {
      $('#weight_error').addClass('d-none');
      sessionStorage.setItem('info_weight',weight);
      sessionStorage.setItem('info_weight_type',weight_type);
    }
    if(shoulder_type == 0)
    {
      $('#st_error').removeClass('d-none');
      info_status = false;
    }
    else
    {
      $('#st_error').addClass('d-none');
      sessionStorage.setItem('info_shoulder_type',shoulder_type);
    }
    if(drop_shoulder == 0)
    {
      $('#ds_error').removeClass('d-none');
      info_status = false;
    }
    else
    {
      $('#ds_error').addClass('d-none');
      sessionStorage.setItem('info_drop_shoulder',drop_shoulder);
    }
    if(arms_position == 0)
    {
      $('#ap_error').removeClass('d-none');
      info_status = false;
    }
    else
    {
      $('#ap_error').addClass('d-none');
      sessionStorage.setItem('info_arms_position',arms_position);
    }
    if(body_shape == 0)
    {
      $('#b_shape_error').removeClass('d-none');
      info_status = false;
    }
    else
    {
      $('#b_shape_error').addClass('d-none');
      sessionStorage.setItem('info_body_shape',body_shape);
    }
    if(neck_type == 0)
    {
      $('#nt_error').removeClass('d-none');
      info_status = false;
    }
    else
    {
      $('#nt_error').addClass('d-none');
      sessionStorage.setItem('info_neck_type',neck_type);
    }
    if(stomach_shape == 0)
    {
      $('#ss_error').removeClass('d-none');
      info_status = false;
    }
    else
    {
      $('#ss_error').addClass('d-none');
      sessionStorage.setItem('info_stomach_shape',stomach_shape);
    }
    if(upper_body_shape == 0)
    {
      $('#ubs_error').removeClass('d-none');
      info_status = false;
    }
    else
    {
      $('#ubs_error').addClass('d-none');
      sessionStorage.setItem('info_upper_body_shape',upper_body_shape);
    }
    if(pant_line == 0)
    {
      $('#pl_error').removeClass('d-none');
      info_status = false;
    }
    else
    {
      $('#pl_error').addClass('d-none');
      sessionStorage.setItem('info_pant_line',pant_line);
    }
    if(seat == 0)
    {
      $('#seat_error').removeClass('d-none');
      info_status = false;
    }
    else
    {
      $('#seat_error').addClass('d-none');
      sessionStorage.setItem('info_seat',seat);
    }
    // alert(info_status);

    //end info data
    // ------------------ Start Upper Scope ------------------//
    if(sessionStorage.getItem('customize_category_id') == 1 || sessionStorage.getItem('customize_category_id') == 2 || sessionStorage.getItem('customize_category_id') == 9)
    {
      // -----------------Start upper data ---------------------//
      var upper_has_id = $('#upper_has_id').val();
      var neck = $('#neck_input').val();
      var chest = $('#chest_input').val();
      var waist = $('#waist_upper_input').val();
      var hips = $('#hips_upper_input').val();
      var shoulder = $('#shoulder_input').val();
      var sleeve_right = $('#sleeve_length_Right_input').val();
      var sleeve_left = $('#sleeve_length_left_input').val();
      var stomach = $('#stomach_upper_input').val();
      var biceps = $('#biceps_input').val();
      var forearm = $('#forearm_input').val();
      var cuffs = $('#cuffs_input').val();
      var chest_front = $('#chest_front_input').val();
      var chest_back = $('#chest_back_input').val();
      var jacket_front = $('#jacket_front_input').val();
      var jacket_back = $('#jacket_back_input').val();
      var vest_len = $('#vest_length_input').val();


      // alert(neck);
      if($.trim(neck) == '')
      {
        $('#neck_error').removeClass('d-none');
        upper_status = false;
      }
      else
      {
        $('#neck_error').addClass('d-none');
        sessionStorage.setItem('upper_neck',neck);
      }
      if($.trim(chest) == '')
      {
        $('#chest_error').removeClass('d-none');
        upper_status = false;
      }
      else
      {
        $('#chest_error').addClass('d-none');
        sessionStorage.setItem('upper_chest',neck);
      }
      if($.trim(waist) == '')
      {
        $('#waist_error').removeClass('d-none');
        upper_status = false;
      }
      else
      {
        $('#waist_error').addClass('d-none');
        sessionStorage.setItem('upper_waist',waist);
      }
      if($.trim(hips) == '')
      {
        $('#hips_error').removeClass('d-none');
        upper_status = false;
      }
      else
      {
        $('#hips_error').addClass('d-none');
        sessionStorage.setItem('upper_hips',hips);
      }
      if($.trim(shoulder) == '')
      {
        $('#shoulder_error').removeClass('d-none');
        upper_status = false;
      }
      else
      {
        $('#shoulder_error').addClass('d-none');
        sessionStorage.setItem('upper_shoulder',shoulder);
      }
      if($.trim(sleeve_right) == '')
      {
        $('#sleeve_r_error').removeClass('d-none');
        upper_status = false;
      }
      else
      {
        $('#sleeve_r_error').addClass('d-none');
        sessionStorage.setItem('upper_sleeve_right',sleeve_right);
      }
      if($.trim(sleeve_left) == '')
      {
        $('#sleeve_l_error').removeClass('d-none');
        upper_status = false;
      }
      else
      {
        $('#sleeve_l_error').addClass('d-none');
        sessionStorage.setItem('upper_sleeve_left',sleeve_left);
      }
      if($.trim(stomach) == '')
      {
        $('#stomach_error').removeClass('d-none');
        upper_status = false;
      }
      else
      {
        $('#stomach_error').addClass('d-none');
        sessionStorage.setItem('upper_stomach',stomach);
      }
      if($.trim(biceps) == '')
      {
        $('#biceps_error').removeClass('d-none');
        upper_status = false;
      }
      else
      {
        $('#biceps_error').addClass('d-none');
        sessionStorage.setItem('upper_biceps',biceps);
      }
      if($.trim(forearm) == '')
      {
        $('#forearm_error').removeClass('d-none');
        upper_status = false;
      }
      else
      {
        $('#forearm_error').addClass('d-none');
        sessionStorage.setItem('upper_forearm',forearm);
      }
      if($.trim(cuffs) == '')
      {
        $('#cuffs_error').removeClass('d-none');
        upper_status = false;
      }
      else
      {
        $('#cuffs_error').addClass('d-none');
        sessionStorage.setItem('upper_cuffs',cuffs);
      }
      if($.trim(chest_front) == '')
      {
        $('#chest_f_error').removeClass('d-none');
        upper_status = false;
      }
      else
      {
        $('#chest_f_error').addClass('d-none');
        sessionStorage.setItem('upper_chest_front',chest_front);
      }
      if($.trim(chest_back) == '')
      {
        $('#chest_b_error').removeClass('d-none');
        upper_status = false;
      }
      else
      {
        $('#chest_b_error').addClass('d-none');
        sessionStorage.setItem('upper_chest_back',chest_back);
      }
      if($.trim(jacket_front) == '')
      {
        $('#jacket_f_error').removeClass('d-none');
        upper_status = false;
      }
      else
      {
        $('#jacket_f_error').addClass('d-none');
        sessionStorage.setItem('upper_jacket_front',jacket_front);
      }
      if($.trim(jacket_back) == '')
      {
        $('#jacket_b_error').removeClass('d-none');
        upper_status = false;
      }
      else
      {
        $('#jacket_b_error').addClass('d-none');
        sessionStorage.setItem('upper_jacket_back',jacket_back);
      }
      if($.trim(vest_len) == '')
      {
        $('#vest_len_error').removeClass('d-none');
        upper_status = false;
      }
      else
      {
        $('#vest_len_error').addClass('d-none');
        sessionStorage.setItem('upper_vest_length',vest_len);
      }
      // -----------------End upper data ---------------------//
      //upper and info need to fill alert start
      // alert(info_status);
      if(upper_status == true && info_status == false)
      {
        // alert("iiiiiiiiii");
        $('#info_error_alert').removeClass('d-none');
        store_status = false;
      }
      if(upper_status == false)
      {
        store_status = false
      }
      //upper and info need to fill alert end
    }
    // ------------------ End Upper Scope ------------------//
    // ------------------ Start Lower Scope ----------------//
    if(sessionStorage.getItem('customize_category_id') == 3 || sessionStorage.getItem('customize_category_id') == 9)
    {
      var lower_has_id = $('#lower_has_id').val();
      var pwaist = $('#waist_lower_input').val();
      var pstomach = $('#stomach_lower_input').val();
      var phips = $('#hips_lower_input').val();
      var pcrotch = $('#crotch_input').val();
      var pthighs = $('#thighs_input').val();
      var pknees = $('#knees_input').val();
      var pcalf = $('#calf_input').val();
      var pshort = $('#pants_short_input').val();
      var plength = $('#pants_length_input').val();
      var pbottom = $('#bottom_length_input').val();
      if($.trim(pwaist) == '')
      {
        $('#pwaist_error').removeClass('d-none');
        lower_status = false;
      }
      else
      {
        $('#pwaist_error').addClass('d-none');
        sessionStorage.setItem('lower_pwaist',pwaist);
      }
      if($.trim(pstomach) == '')
      {
        $('#pstomach_error').removeClass('d-none');
        lower_status = false;
      }
      else
      {
        $('#pstomach_error').addClass('d-none');
        sessionStorage.setItem('lower_pstomach',pstomach);
      }
      if($.trim(phips) == '')
      {
        $('#phips_error').removeClass('d-none');
        lower_status = false;
      }
      else
      {
        $('#phips_error').addClass('d-none');
        sessionStorage.setItem('lower_phips',phips);
      }
      if($.trim(pcrotch) == '')
      {
        $('#pcrotch_error').removeClass('d-none');
        lower_status = false;
      }
      else
      {
        $('#pcrotch_error').addClass('d-none');
        sessionStorage.setItem('lower_pcrotch',pcrotch);
      }
      if($.trim(pthighs) == '')
      {
        $('#pthighs_error').removeClass('d-none');
        lower_status = false;
      }
      else
      {
        $('#pthighs_error').addClass('d-none');
        sessionStorage.setItem('lower_pthighs',pthighs);
      }
      if($.trim(pknees) == '')
      {
        $('#pknees_error').removeClass('d-none');
        lower_status = false;
      }
      else
      {
        $('#pknees_error').addClass('d-none');
        sessionStorage.setItem('lower_pknees',pknees);
      }
      if($.trim(pcalf) == '')
      {
        $('#pcalf_error').removeClass('d-none');
        lower_status = false;
      }
      else
      {
        $('#pcalf_error').addClass('d-none');
        sessionStorage.setItem('lower_pcalf',pcalf);
      }
      if($.trim(pshort) == '')
      {
        $('#pshort_error').removeClass('d-none');
        lower_status = false;
      }
      else
      {
        $('#pshort_error').addClass('d-none');
        sessionStorage.setItem('lower_pshort',pshort);
      }
      if($.trim(plength) == '')
      {
        $('#plength_error').removeClass('d-none');
        lower_status = false;
      }
      else
      {
        $('#plength_error').addClass('d-none');
        sessionStorage.setItem('lower_plength',plength);
      }
      if($.trim(pbottom) == '')
      {
        $('#pbottom_error').removeClass('d-none');
        lower_status = false;
      }
      else
      {
        $('#pbottom_error').addClass('d-none');
        sessionStorage.setItem('lower_pbottom',pbottom);
      }

      if(lower_status == true && info_status == false)
      {
        // alert("iiiiiiiiii");
        $('#info_error_alert').removeClass('d-none');
        store_status = false;
      }
      if(lower_status == false)
      {
        store_status = false
      }
    }
    // ------------------ End Lower Scope ------------------//
    //store upper measure ajax start
    // alert(upper_status);
    // alert(user_id);
    // alert(store_status);
    if(user_id != null && store_status == true)
    {
      sessionStorage.setItem('store_m_status',1);
      $.ajax({
        type: 'POST',
        url: '/store_measure_ajax',
        data: {
          "_token": "{{csrf_token()}}",
          "user_id" : user_id,
          "cus_cate_id" : sessionStorage.getItem('customize_category_id'),
          "measure_type" : sessionStorage.getItem('measure_unit'),

          "age" : age,
          "height" : height,
          "height_type" : height_type,
          "weight" : weight,
          "weight_type" : weight_type,
          "shoulder_type" : shoulder_type,
          "drop_shoulder" : drop_shoulder,
          "arms_position" : arms_position,
          "body_shape" : body_shape,
          "neck_type" : neck_type,
          "stomach_shape" : stomach_shape,
          "upper_body_shape" : upper_body_shape,
          "pant_line" : pant_line,
          "seat" : seat,

          "upper_id":upper_has_id,
          "neck" : neck,
          "chest" : chest,
          "waist" : waist,
          "hips" : hips,
          "shoulder" : shoulder,
          "sleeve_right" : sleeve_right,
          "sleeve_left" : sleeve_left,
          "stomach" : stomach,
          "biceps" : biceps,
          "forearm" : forearm,
          "cuffs" : cuffs,
          "chest_front" : chest_front,
          "chest_back" : chest_back,
          "jacket_front" : jacket_front,
          "jacket_back" : jacket_back,
          "vest_len" : vest_len,

          "lower_id":lower_has_id,
          "pwaist" : pwaist,
          "pstomach" : pstomach,
          "phips" : phips,
          "pcrotch" : pcrotch,
          "pthighs" : pthighs,
          "pknees" : pknees,
          "pcalf" : pcalf,
          "pshort" : pshort,
          "plength" : plength,
          "pbottom" : pbottom
        },
        success: function (data) {
          if(data.msg == 'success')
          {

            sessionStorage.setItem('upper_has_id',data.upper_id);
            sessionStorage.setItem('lower_has_id',data.lower_id);
            sessionStorage.setItem('pass_measure',1);
            swal({
              title: "Success",
              text : "Successfully Save For Measurement",
              icon : "success",
            });
          }

        }
      });
    }
    else if(user_id == null && store_status == true)
    {
      if(sessionStorage.getItem('customize_category_id') == 1 || sessionStorage.getItem('customize_category_id') == 2)
      {
        if(upper_status == true && info_status == true)
        {
          sessionStorage.setItem('store_m_status',1);
          swal({
            title: "Success",
            text : "Successfully Save For Jacket/Vest Measurement As One-Time Guest",
            icon : "success",
          });
          sessionStorage.setItem('pass_measure',1);
        }
      }
      else if(sessionStorage.getItem('customize_category_id') == 3)
      {
        if(lower_status == true && info_status == true)
        {
          sessionStorage.setItem('store_m_status',1);
          swal({
            title: "Success",
            text : "Successfully Save For Pant Measurement As One-Time Guest",
            icon : "success",
          });
          sessionStorage.setItem('pass_measure',1);
        }
      }
      else if(sessionStorage.getItem('customize_category_id') == 9)
      {
        if(lower_status == true && upper_status == true && info_status == true)
        {
          sessionStorage.setItem('store_m_status',1);
          swal({
            title: "Success",
            text : "Successfully Save For Pant Measurement As One-Time Guest",
            icon : "success",
          });
          sessionStorage.setItem('pass_measure',1);
        }
      }

    }
    //store upper measure ajax end
  }

  function clear_upper_required()
  {
    $('.upper_errors').addClass('d-none');
  }
  function clear_lower_required()
  {
    $('.lower_errors').addClass('d-none');
  }
  function clear_info_required()
  {
    $('.info_errors').addClass('d-none');
    $('#info_error_alert').addClass('d-none');
    sessionStorage.removeItem('pass_measure')
  }
  function clear_pass_measure_required()
  {
    // alert('ll');
    sessionStorage.removeItem('pass_measure')
  }
</script>
@endpush
