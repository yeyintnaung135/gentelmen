<div class="col-9 col-md-8 pt-3 px-4 px-md-0 content" id="pant">
  <div class="row g-0 g-md-5 me-2">
    <div class="col-md-4 sticky-md-top sticky-height pt-3">
      <div class="nav flex-column text-uppercase">
        <h6 class="ff-mont text-white mb-3">customize</h6>
        @foreach($pants as $pant)
        <a onclick="pant_pleat('{{$pant->style}}')" class="pill-menu-cus-link py-2 active" data-bs-toggle="pill"
           href="#pleat-selection">
          <span>{{$pant->style}}</span>
          <i class='bx bx-plus'></i>
        </a>
        @endforeach
        <!-- <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#bottom-shape">
          <span>BOTTOM SHAPE</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#crease-selection">
          <span>CREASE SELECTION</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#side-pockets">
          <span>SIDE POCKETS</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#cuff-style">
          <span>CUFF STYLE</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#back-pockets">
          <span>BACK pockets</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#belt-loops">
          <span>BELT LOOPS</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#extender-style">
          <span>EXTENDER STYLE</span>
          <i class='bx bx-plus'></i>
        </a>
        <a class="pill-menu-cus-link py-2" data-bs-toggle="pill" href="#tuxedo-side">
          <span>TUXEDO SIDE SATIN</span>
          <i class='bx bx-plus'></i>
        </a> -->
      </div>
    </div>
    <div class="col-md-8">
      <div class="tab-content">
        <div class="tab-pane active" id="pleat-selection">
        @foreach($not_unique_pants as $not_unique_pant)
          <label class="row cursor-pointer mb-5" for="sb1">
                <span class="col-md-6 mb-2 d-flex flex-column justify-content-center">
                  <span class="row g-0 mb-2">
                    <span class="col-1 mt-1">
                       <input type="radio" name="pant" id="choose_pant{{$not_unique_pant->id}}" value="{{$not_unique_pant->id}}"
                              class="form-check-input me-2 mb-1" onclick="getpant(this.value)"/>
                    </span>
                    <span class="col-11 ps-2">
                      <span class="title">{{$not_unique_pant->color}}</span>
                    </span>
                  </span>
                  <span class="d-block more">
                  {{$not_unique_pant->description}}
                  </span>
                </span>
            <span class="col-md-6 jacket">
                <span class="fit-img-container">
                  <img src="{{'/assets/images/customize/pant/'. $pant->photo_one}}" alt="" class="">
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
