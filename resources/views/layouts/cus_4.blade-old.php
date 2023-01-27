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
          <span class="me-3 text-gold fs-5">$</span><h4 class="d-inline ff-mont ls-0"
                                                        id="step2_and_fabric_total">100</h4>
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



