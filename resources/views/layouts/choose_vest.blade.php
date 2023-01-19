<div class="col-9 col-md-8 pt-3 px-4 px-md-0 content" id="vest">
  <div class="row g-0 g-md-5 me-2">
    <div class="col-md-4 sticky-md-top sticky-height pt-3">
      <div class="nav flex-column text-uppercase">
        <h6 class="ff-mont text-white mb-3">customize</h6>
        @foreach($vests as $vest)
        <a onclick="vest_lapel('{{$vest->style}}')" class="pill-menu-cus-link py-2 active" data-bs-toggle="pill"
           href="#vest-lapel">
          <span>{{$vest->style}}</span>
          <i class='bx bx-plus'></i>
        </a>
        @endforeach
        <!-- <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#piping">
          <span>piping & stitching</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#vest-style">
          <span>vest style & buttons</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#bottom">
          <span>bottom style</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#below-pocket">
          <span>below pocket</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#chest-pocket">
          <span>chest pocket</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#back-fabric">
          <span>back fabric</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#back-adjuster">
          <span>back adjuster</span>
          <i class='bx bx-plus'></i>
        </a> -->
      </div>
    </div>
    <div class="col-md-8">
      <div class="tab-content">
        <div class="tab-pane active" id="vest-lapel">
          @foreach($not_unique_vests as $not_unique_vest)
          <label class="row cursor-pointer mb-5" for="sb1">
                <span class="col-md-6 mb-2 d-flex flex-column justify-content-center">
                  <span class="row g-0 mb-2">
                    <span class="col-1 mt-1">
                       <input type="radio" name="vest" id="choose_vest{{$not_unique_vest->id}}" value="{{$not_unique_vest->id}}"
                              class="form-check-input me-2 mb-1" onclick="getvest(this.value)"/>
                    </span>
                    <span class="col-11 ps-2">
                      <span class="title">{{$not_unique_vest->color}}</span>
                    </span>
                  </span>
                  <span class="text-white-50 d-block">
                    {{$not_unique_vest->description}}
                  </span>
                </span>
            <span class="col-md-6 jacket">
                <span class="fit-img-container">
                  <img src="{{'/assets/images/customize/shirt_button/'. $not_unique_vest->photo_one}}" alt="" class="">
                </span>
              </span>
          </label>
          @endforeach
          <!-- <label class="row cursor-pointer mb-5" for="sb2">
                <span class="col-md-6 mb-2 d-flex flex-column justify-content-center">
                  <span class="row g-0 mb-2">
                    <span class="col-1 mt-1">
                       <input type="radio" name="jacket" id="sb2"
                              class="form-check-input me-2 mb-1"/>
                    </span>
                    <span class="col-11 ps-2">
                      <span class="title">Single Breasted two Button</span>
                    </span>
                  </span>
                  <span class="text-white-50 d-block">
                    Lorem ipsum dolor sit amet, consectetur
                    adipisicing
                    elit.
                  </span>
                </span>
            <span class="col-md-6 jacket">
                <span class="fit-img-container">
                  <img src="{{asset('/assets/images/fabrics/img_1.png')}}" alt="" class="">
                </span>
              </span>
          </label>
          <label class="row cursor-pointer mb-5" for="sb3">
                <span class="col-md-6 mb-2 d-flex flex-column justify-content-center">
                  <span class="row g-0 mb-2">
                    <span class="col-1 mt-1">
                       <input type="radio" name="jacket" id="sb3"
                              class="form-check-input me-2 mb-1"/>
                    </span>
                    <span class="col-11 ps-2">
                      <span class="title">Single Breasted three Button</span>
                    </span>
                  </span>
                  <span class="text-white-50 d-block">
                    Lorem ipsum dolor sit amet, consectetur
                    adipisicing
                    elit.
                  </span>
                </span>
            <span class="col-md-6 jacket">
                <span class="fit-img-container">
                  <img src="{{asset('/assets/images/fabrics/img_1.png')}}" alt="" class="">
                </span>
              </span>
          </label> -->
        </div>
        <div class="tab-pane fade" id="lapels">Menu1</div>
        <div class="tab-pane fade" id="lapel-hole">Menu2</div>
      </div>
    </div>
  </div>
</div>
