<section id="step5" class="custom d-none">
  <div class="alert alert-dark alert-dismissible d-none" id="alertnone">
    Need to fill this field - <span id="need" class="text-dark"></span>
  </div>
  <div class="alert alert-dark alert-dismissible d-none" id="login_error">
    Need to login first!!!
  </div>
  <div class="measure">
    <p class="text-decoration-underline text-center my-3" id="store">
      <a href="#">Save measurement</a></p>
    {{-- Body Types --}}
    <div class="measure-types nav-pills" role="tablist">
      <div class="measure-type">
        <a class="nav-link active" data-bs-toggle="tab" href="#upper">UPPER</a>
      </div>
      <div class="measure-type">
        <a class="nav-link" data-bs-toggle="tab" href="#lower">LOWER</a>
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
      <div id="upper" class="tab-pane active">
        <div class="measure-items">
          <a class="measure-item active-link" href="#neck">
            <img src="{{asset("assets/images/customize/measurement/neck.png")}}" alt="neck">
            <p>neck</p>
          </a>
          <a class="measure-item" href="#chest">
            <img src="{{asset("assets/images/customize/measurement/chest.png")}}" alt="chest">
            <p>Chest</p>
          </a>
          <a class="measure-item" href="#waist_upper">
            <img src="{{asset("assets/images/customize/measurement/waist.png")}}" alt="waist">
            <p>Waist (Upper Waist)</p>
          </a>
          <a class="measure-item" href="#hips_upper">
            <img src="{{asset("assets/images/customize/measurement/hips.png")}}" alt="hips">
            <p>hips</p>
          </a>
          <a class="measure-item" href="#shoulder">
            <img src="{{asset("assets/images/customize/measurement/shoulder.png")}}" alt="shoulder">
            <p>shoulder</p>
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
          <a class="measure-item" href="#stomach_upper">
            <img src="{{asset("assets/images/customize/measurement/stomach.png")}}" alt="stomach">
            <p>stomach</p>
          </a>
          <a class="measure-item" href="#biceps">
            <img src="{{asset("assets/images/customize/measurement/biceps.png")}}" alt="biceps">
            <p>biceps</p>
          </a>
          <a class="measure-item" href="#forearm">
            <img src="{{asset("assets/images/customize/measurement/forearm.png")}}" alt="forearm">
            <p>forearm</p>
          </a>
          <a class="measure-item" href="#cuffs">
            <img src="{{asset("assets/images/customize/measurement/stomach.png")}}" alt="cuffs">
            <p>cuffs</p>
          </a>
          <a class="measure-item" href="#chest_front">
            <img src="{{asset("assets/images/customize/measurement/stomach.png")}}" alt="chest
            front">
            <p>chest front width</p>
          </a>
          <a class="measure-item" href="#chest_back">
            <img src="{{asset("assets/images/customize/measurement/stomach.png")}}" alt="chest
            back">
            <p>chest Back width</p>
          </a>
          <a class="measure-item" href="#jacket_front">
            <img src="{{asset("assets/images/customize/measurement/biceps.png")}}"
                 alt="jacket_front_length">
            <p>Jacket Front Length</p>
          </a>
          <a class="measure-item" href="#jacket_back">
            <img src="{{asset("assets/images/customize/measurement/biceps.png")}}"
                 alt="jacket_back_length">
            <p>Jacket Back Length</p>
          </a>
          <a class="measure-item" href="#vest_length">
            <img src="{{asset("assets/images/customize/measurement/biceps.png")}}"
                 alt="vest_length">
            <p>Vest Length</p>
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
                <input type="text" placeholder="0.0" id="neck_input">
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
                <input type="text" placeholder="0.0" id="chest_input">
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
                <input type="text" placeholder="0.0" id="waist_upper_input">
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
                <input type="text" placeholder="0.0" id="hips_upper_input">
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
                <input type="text" placeholder="0.0" id="shoulder_input">
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
                <input type="text" placeholder="0.0" id="sleeve_length_Right_input">
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
                <input type="text" placeholder="0.0" id="sleeve_length_left_input">
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
                <input type="text" placeholder="0.0" id="stomach_upper_input">
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
                <input type="text" placeholder="0.0" id="biceps_input">
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
                <input type="text" placeholder="0.0" id="forearm_input">
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
                <input type="text" placeholder="0.0" id="cuffs_input">
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
                <input type="text" placeholder="0.0" id="chest_front_input">
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
                <input type="text" placeholder="0.0" id="chest_back_input">
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
                <input type="text" placeholder="0.0" id="jacket_front_input">
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
                <input type="text" placeholder="0.0" id="jacket_back_input">
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
                <input type="text" placeholder="0.0" id="vest_length_input">
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
          </a>
          <a class="measure-item" href="#stomach_lower">
            <img src="{{asset("assets/images/customize/measurement/stomach.png")}}" alt="stomach_lower">
            <p>stomach</p>
          </a>
          <a class="measure-item" href="#hips_lower">
            <img src="{{asset("assets/images/customize/measurement/hips.png")}}" alt="hips_lower">
            <p>hips</p>
          </a>
          <a class="measure-item" href="#crotch">
            <img src="{{asset("assets/images/customize/measurement/stomach.png")}}" alt="crotch">
            <p>crotch</p>
          </a>
          <a class="measure-item" href="#thighs">
            <img src="{{asset("assets/images/customize/measurement/thighs.png")}}" alt="thighs">
            <p>thighs</p>
          </a>
          <a class="measure-item" href="#knees">
            <img src="{{asset("assets/images/customize/measurement/knees.png")}}" alt="knees">
            <p>knees</p>
          </a>
          <a class="measure-item" href="#calf">
            <img src="{{asset("assets/images/customize/measurement/knees.png")}}" alt="calf">
            <p>Calf</p>
          </a>
          <a class="measure-item" href="#pants_short">
            <img src="{{asset("assets/images/customize/measurement/neck.png")}}" alt="pants_short">
            <p>Pants Short</p>
          </a>
          <a class="measure-item" href="#pants_length">
            <img src="{{asset("assets/images/customize/measurement/neck.png")}}" alt="pants_length">
            <p>Pants Length</p>
          </a>
          <a class="measure-item" href="#bottom_length">
            <img src="{{asset("assets/images/customize/measurement/knees.png")}}"
                 alt="bottom_length">
            <p>Bottom Length</p>
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
                <input type="text" placeholder="0.0" id="waist_lower_input">
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
                <input type="text" placeholder="0.0" id="stomach_lower_input">
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
                <input type="text" placeholder="0.0" id="hips_lower_input">
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
                <input type="text" placeholder="0.0" id="crotch_input">
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
                <input type="text" placeholder="0.0" id="thighs_input">
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
                <input type="text" placeholder="0.0" id="knees_input">
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
                <input type="text" placeholder="0.0" id="calf_input">
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
                <input type="text" placeholder="0.0" id="pants_short_input">
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
                <input type="text" placeholder="0.0" id="pants_length_input">
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
                <input type="text" placeholder="0.0" id="bottom_length_input">
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
            </div>
            <!--select-->
            <div class="info-group">
              <label for="age">Height</label>
              <div class="info-input-group">
                <input type="text" id="age" placeholder="0">
                <select name="age">
                  <option value="cm">CM</option>
                  <option value="in">IN</option>
                </select>
              </div>
            </div>
            <div class="info-group">
              <label for="age">Weight</label>
              <div class="info-input-group">
                <input type="text" id="weight" placeholder="0">
                <select name="weight">
                  <option value="kg">KG</option>
                  <option value="lp">LB</option>
                </select>
              </div>
            </div>
            <div class="info-group">
              <label for="age">Shoulder Type</label>
              <div class="info-input-group">
                <select name="shoulder_type">
                  <option value="">Select</option>
                  <option value="structure">Structure</option>
                  <option value="square">Square</option>
                  <option value="slopped">Slopped</option>
                </select>
              </div>
            </div>
            <div class="info-group">
              <label for="age">Dropped Shoulder</label>
              <div class="info-input-group">
                <select name="dropped_shoulder">
                  <option value="">Select</option>
                  <option value="left">Left</option>
                  <option value="right">Right</option>
                </select>
              </div>
            </div>
            <div class="info-group">
              <label for="age">Arms Position</label>
              <div class="info-input-group">
                <select name="arms_position">
                  <option value="">Select</option>
                  <option value="average">Average</option>
                  <option value="forward">Forward</option>
                  <option value="backward">Backward</option>
                </select>
              </div>
            </div>
            <div class="info-group">
              <label for="age">Body Shape</label>
              <div class="info-input-group">
                <select name="body_shape">
                  <option value="">Select</option>
                  <option value="average">Average</option>
                  <option value="thin">Thin</option>
                  <option value="muscular">Muscular</option>
                  <option value="fuller">Fuller</option>
                </select>
              </div>
            </div>
          </div>
          <div class="info-div">
            <div class="info-group">
              <label for="age">Neck Type</label>
              <div class="info-input-group">
                <select name="neck_type">
                  <option value="">Select</option>
                  <option value="standard">Standard</option>
                  <option value="short">Short</option>
                  <option value="long">Long</option>
                </select>
              </div>
            </div>
            <div class="info-group">
              <label for="age">Stomach Shape</label>
              <div class="info-input-group">
                <select name="stomach_shape">
                  <option value="">Select</option>
                  <option value="average">Average</option>
                  <option value="flat">Flat</option>
                  <option value="extended">Extended</option>
                </select>
              </div>
            </div>
            <div class="info-group">
              <label for="age">Upper Body Shape</label>
              <div class="info-input-group">
                <select name="upper_body_shape">
                  <option value="">Select</option>
                  <option value="straight">Straight</option>
                  <option value="scooped">Scooped</option>
                </select>
              </div>
            </div>
            <div class="info-group">
              <label for="age">Pant Line</label>
              <div class="info-input-group">
                <select name="pant_line">
                  <option value="">Select</option>
                  <option value="regular">Regular</option>
                  <option value="low">Low</option>
                  <option value="under-belly">Under Belly</option>
                </select>
              </div>
            </div>
            <div class="info-group">
              <label for="age">Seat</label>
              <div class="info-input-group">
                <select name="seat">
                  <option value="">Select</option>
                  <option value="regular">Regular</option>
                  <option value="flat">Flat</option>
                  <option value="prominent">Prominent</option>
                </select>
              </div>
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


</script>
