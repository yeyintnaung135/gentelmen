<div class="col-9 col-md-8 pt-3 px-4 px-md-0 content" id="jacket">
  <div class="row g-0 g-md-5 me-2">
    <div class="col-md-4 sticky-md-top sticky-height pt-3">
      <div class="nav flex-column text-uppercase">
        <h6 class="ff-mont text-white mb-3">customize</h6>
        @foreach($tops as $top)
        <a onclick="jacket_button('{{$top->style}}')" class="pill-menu-cus-link py-2" data-bs-toggle="pill"
           href="#jacket-style">
          <span>{{$top->style}}</span>
          <i class='bx bx-plus'></i>
        </a>
        @endforeach
        <!-- <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#lapels">
          <span>style of lapels</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#lapel-hole">
          <span>lapel button hole</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#lapel-stitching">
          <span>lapel stitching</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#below-pocket">
          <span>below pocket</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#below-pocket">
          <span>ticket pockets</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#sleeve-button-style">
          <span>sleeve button style</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#sleeve-btn">
          <span>sleeve BUTTONS</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#back-vents">
          <span>back vents</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#monogram-font">
          <span>monogram font</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#trimming-lapel">
          <span>trimming lapel</span>
          <i class='bx bx-plus'></i>
        </a> -->
      </div>
    </div>
    <div class="col-md-8">
      <div class="tab-content">
        <div class="tab-pane active" id="jacket-style">
          @foreach($not_unique_tops as $not_unique_top)
        <label class="row cursor-pointer mb-5" for="sb1">
              <span class="col-md-6 mb-2 d-flex flex-column justify-content-center">
                <span class="row g-0 mb-2">
                  <span class="col-1 mt-1">
                    <input type="radio" name="jacket" id="choose_jacket{{$not_unique_top->id}}" value="{{$not_unique_top->id}}"
                            class="form-check-input me-2 mb-1" onclick="getjacket(this.value)"/>
                  </span>
                  <span class="col-11 ps-2">
                    <span class="title">{{$not_unique_top->color}}</span>
                  </span>
                </span>
                <span class=" d-block more">
                  {{$not_unique_top->description}}
                </span>
              </span>
          <span class="col-md-6 jacket">
              <span class="">
                <img src="{{'/assets/images/customize/cus4fitting.png'}}" alt="" class="">
              </span>
            </span>
        </label>
        @endforeach
        </div>
        <div class="tab-pane fade" id="lapels">Menu1</div>
        <div class="tab-pane fade" id="lapel-hole">Menu2</div>
      </div>
    </div>
  </div>
</div>
