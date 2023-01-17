
<section id="step4" class="cus-2 custom d-none">
  {{-- <input type="text" style="color:black" id="step2_and_fabric_total"> --}}
    <section class="row g-0 my-5 mx-3 mx-md-5 px-0 px-md-2">
        <!-- <div class="col-1 d-flex align-items-center">
        <a href="/customize" class="me-3 pt-1"><i class='bx bx-arrow-back'></i></a>
        </div> -->
        <div class="col-7 mx-0 mx-md-auto d-flex align-items-center d-md-block">
        <h6 class="text-uppercase text-white text-start text-md-center text-wrap ff-mont mb-0
        fabric-filter-text" id="cfTitle">Fitting</h6>
        </div>
        <div class="col-4 three_four_price d-block d-md-none text-end">
        <span class="me-3 text-gold fs-5">$</span><h4
            class="d-inline ff-mont fabric-filter-text" id=""><span>0</span></h4>
        </div>
    </section>

  <section>
    <section id="fabric-filter">
      <div class="d-flex align-items-center flex-column mb-4 mx-3 mx-md-3">
        <div>
          <!--          <h6 class="text-uppercase text-white text-md-center ff-mont mb-3 fabric-filter-text
                d-none d-md-block">Fabric
                      Selection</h6>-->
          <div class="d-flex justify-content-start customize-fabric flex-wrap">
            <div class="pe-3 mb-3">
              <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle w-100 d-flex
          justify-content-center align-items-center text-uppercase"
                        data-bs-toggle="dropdown">
                  Colour
                  <i class='bx bx-chevron-down ms-3'></i>
                </button>
                <ul class="dropdown-menu text-uppercase">
                  @foreach($colors as $color)

                    <li class="dropdown-item">
                      <input type="checkbox" class="form-check-input me-3 m-0"
                             id="oncolor{{$color->id}}" name="colour" value="{{$color->id}}">
                      <label class="form-check-label"
                             for="oncolor{{$color->id}}">{{$color->name}}</label>
                    </li>

                  @endforeach
                  {{-- <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="red" name="colour">
                    <label class="form-check-label" for="red">red</label>
                  </li>
                  <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="green" name="colour">
                    <label class="form-check-label" for="green">Green</label>
                  </li>
                  <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="white" name="colour">
                    <label class="form-check-label" for="white">White</label>
                  </li>
                  <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="silver"
                           name="colour">
                    <label class="form-check-label" for="silver">Silver</label>
                  </li> --}}
                </ul>
              </div>
            </div>
            <div class="pe-3 mb-3">
              <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle w-100 d-flex
          justify-content-center align-items-center text-uppercase"
                        data-bs-toggle="dropdown">
                  Fabrics Type
                  <i class='bx bx-chevron-down ms-3'></i>
                </button>
                <ul class="dropdown-menu text-uppercase">
                  @foreach($textures as $texture)
                    <li class="dropdown-item">
                      <input type="checkbox" class="form-check-input me-3 m-0"
                             id="ontexture{{$texture->id}}" value="{{$texture->id}}">
                      <label class="form-check-label"
                             for="ontexture{{$texture->id}}">{{$texture->name}}</label>
                    </li>
                  @endforeach
                  {{-- <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="pwool"
                           name="fabrics">
                    <label class="form-check-label" for="pwool">Pure Wool</label>
                  </li>
                  <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="cashmere"
                           name="fabrics">
                    <label class="form-check-label" for="cashmere">Cashmere</label>
                  </li>
                  <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="flannel"
                           name="fabrics">
                    <label class="form-check-label" for="flannel">Flannel</label>
                  </li>
                  <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="linen"
                           name="fabrics">
                    <label class="form-check-label" for="linen">linen</label>
                  </li>
                  <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="cotton"
                           name="fabrics">
                    <label class="form-check-label" for="cotton">cotton</label>
                  </li>
                  <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="tweet"
                           name="fabrics">
                    <label class="form-check-label" for="tweet">tweet</label>
                  </li>
                  <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="velvet"
                           name="fabrics">
                    <label class="form-check-label" for="velvet">velvet</label>
                  </li>
                  <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="seesucker"
                           name="fabrics">
                    <label class="form-check-label" for="seesucker">seesucker</label>
                  </li>
                  <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="rcarpet"
                           name="fabrics">
                    <label class="form-check-label" for="rcarpet">red carpet</label>
                  </li> --}}
                </ul>
              </div>
            </div>
            <div class="pe-3 mb-3">
              <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle w-100 d-flex
          justify-content-center align-items-center text-uppercase"
                        data-bs-toggle="dropdown">
                  pattern
                  <i class='bx bx-chevron-down ms-3'></i>
                </button>
                <ul class="dropdown-menu text-uppercase">
                  @foreach($patterns as $pattern)
                    <li class="dropdown-item">
                      <input type="checkbox" class="form-check-input me-3 m-0"
                             id="onpattern{{$pattern->id}}"
                             name="fabrics" value="{{$pattern->id}}">
                      <label class="form-check-label"
                             for="onpattern{{$pattern->id}}">{{$pattern->name}}</label>
                    </li>
                  @endforeach
                  {{-- <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="plaids"
                           name="fabrics">
                    <label class="form-check-label" for="plaids">plaids</label>
                  </li>
                  <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="herringbone"
                           name="fabrics">
                    <label class="form-check-label" for="herringbone">herringbone</label>
                  </li>
                  <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="houndstooth"
                           name="fabrics">
                    <label class="form-check-label" for="houndstooth">houndstooth</label>
                  </li>
                  <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="donegal"
                           name="fabrics">
                    <label class="form-check-label" for="donegal">donegal</label>
                  </li>
                  <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="pattern"
                           name="fabrics">
                    <label class="form-check-label" for="pattern">pattern</label>
                  </li> --}}
                </ul>
              </div>
            </div>
            <div class="pe-3 mb-3">
              <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle w-100 d-flex
          justify-content-center align-items-center text-uppercase"
                        data-bs-toggle="dropdown">
                  Package
                  <i class='bx bx-chevron-down ms-3'></i>
                </button>
                <ul class="dropdown-menu text-uppercase">
                  @foreach($packages as $package)
                    <li class="dropdown-item">
                      <input type="checkbox" class="form-check-input me-3 m-0"
                             id="onpackage{{$package->id}}"
                             name="fabrics" value="{{$package->id}}">
                      <label class="form-check-label"
                             for="onpackage{{$package->id}}">{{$package->title}}</label>
                    </li>
                  @endforeach
                  {{-- <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="plaids"
                           name="fabrics">
                    <label class="form-check-label" for="plaids">plaids</label>
                  </li>
                  <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="herringbone"
                           name="fabrics">
                    <label class="form-check-label" for="herringbone">herringbone</label>
                  </li>
                  <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="houndstooth"
                           name="fabrics">
                    <label class="form-check-label" for="houndstooth">houndstooth</label>
                  </li>
                  <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="donegal"
                           name="fabrics">
                    <label class="form-check-label" for="donegal">donegal</label>
                  </li>
                  <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="pattern"
                           name="fabrics">
                    <label class="form-check-label" for="pattern">pattern</label>
                  </li> --}}
                </ul>
              </div>
            </div>
            <div class="pe-3 mb-3">
              <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle w-100 d-flex
          justify-content-center align-items-center text-uppercase"
                        data-bs-toggle="dropdown">
                  Price
                  <i class='bx bx-chevron-down ms-3'></i>
                </button>
                <ul class="dropdown-menu text-uppercase">
                  <li class="dropdown-item">
                    <input type="radio" class="form-check-input me-3 m-0" id="low"
                           name="fabrics" value="0">
                    <label class="form-check-label" for="low">lowest to highest</label>
                  </li>
                  <li class="dropdown-item">
                    <input type="radio" class="form-check-input me-3 m-0" id="high"
                           name="fabrics" value="1">
                    <label class="form-check-label" for="high">highest to lowest</label>
                  </li>
                  {{-- <li class="dropdown-item">
                    <input type="checkbox" class="form-check-input me-3 m-0" id="legacy"
                           name="fabrics">
                    <label class="form-check-label" for="legacy">legacy</label>
                  </li> --}}
                </ul>
              </div>
            </div>
            <div class="fabric-filter">
              <button class="btn bg-gold rounded-0" onclick="advance_filter()"><a
                  href="#" class="text-navy text-uppercase">Start Filter</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="row g-0 mb-4">
      <div
        class="col-3 col-md-2 pt-3 d-flex justify-content-between align-items-center sticky-top
        flex-column"
        style="height: 100vh;">
        <div class="box-menu">
          <a href="#fitting" class="box center-flex box-select">Fitting</a>
          <a href="#fabric" class="box center-flex">Fabric</a>
          <a href="#jacket" id="cus1_jacket" class="box center-flex">JACKETS</a>
          <a href="#vest" id="cus1_vest" class="box center-flex">VESTS</a>
          <a href="#pant" id="cus1_pant" class="box center-flex">Pants</a>
        </div>
        <a href="#" class="btn bg-gold lh-sm p-0 py-2 text-navy text-uppercase rounded-0
        d-block d-md-none mb-5"
           style="font-size: 10px;">Next Step</a>
      </div>
      @include('layouts/choose_fitting')
      @include('layouts/choose_fabric')
      @include('layouts/choose_vest')
      @include('layouts/choose_pants')
      @include('layouts/choose_jacket')
      @include('layouts/choose_vest')
      @include('layouts/choose_pants')
      <div
        class="col-md-2 pt-3 d-flex align-items-center justify-content-between sticky-top
        flex-column d-none d-md-inline-flex"
        style="height: 98vh;">
        <div class="three_four_price">
          <span class="me-3 text-gold fs-5">$</span><h4 class="d-inline ff-mont ls-0" id="step2_and_fabric_total">100</h4>
        </div>
        <div class="action mb-4">
          <a href="#" class="btn bg-gold lh-sm text-navy text-uppercase rounded-0
        d-none d-md-block mb-5" id="next">Next Step</a>
        </div>
      </div>
    </div>
  </section>

</section>
<script>
  // $(document).ready(function(){
  //   alert("wewewew");
  //   calculate_step4();
  //   // $('#jacket_in').hide();
  //   // $('#jacket_in').addClass('d-none');
  // })

</script>



