<section id="step1" class="custom d-none">
  <h5 class="mb-5 ff-mont text-white ls-0 text-uppercase text-center">I Want To Order</h5>
  <div class="row g-3 g-md-5">


    @foreach($customize_cates as $customize_cate)
      <div onclick="cus2_option('{{$customize_cate->id}}')"  class="col-md-4 col-6 mb-md-0" data-aos="fade-up">
        <div class="radio-group">
          <input type="radio" name="customize_category" value="{{$customize_cate->id}}" id="cus{{$customize_cate->id}}" class="form-check-input"/>
          <label class="radio-label cursor-pointer" for="cus{{$customize_cate->id}}">
            <img src="{{asset('/assets/images/customize_category/'.$customize_cate->file)}}" alt=""
                 class="mb-1" id="cus_checked{{$customize_cate->id}}">
            <span class="ff-mont cus2-title">{{$customize_cate->name}}</span><br>
          </label>
        </div>
      </div>
    @endforeach
    <!-- <div class="col-md-4 col-6 mb-md-0" data-aos="fade-up" >
      <div class="radio-group ">
        <input type="radio" name="test" id="jacket" class="form-check-input"/>
        <label class="radio-label cursor-pointer" for="jacket">
          <img src="{{asset('assets/images/home/liam.png')}}" alt="" class="img-fluid mb-1">
          <span class="ff-cinzel">Jacket</span>
        </label>
      </div>
    </div>
    <div class="col-md-4 col-6 mb-md-0" data-aos="fade-up" >
      <div class="radio-group ">
        <input type="radio" name="test" id="shirt" class="form-check-input"/>
        <label class="radio-label cursor-pointer" for="shirt">
          <img src="{{asset('assets/images/home/liam.png')}}" alt="" class="img-fluid mb-1">
          <span class="ff-cinzel">Shirt</span>
        </label>
      </div>
    </div>
    <div class="col-md-4 col-6 mb-md-0" data-aos="fade-up" >
      <div class="radio-group ">
        <input type="radio" name="test" id="vest" class="form-check-input"/>
        <label class="radio-label cursor-pointer" for="vest">
          <img src="{{asset('assets/images/home/liam.png')}}" alt="" class="img-fluid mb-1">
          <span class="ff-cinzel">Vest</span>
        </label>
      </div>
    </div>
    <div class="col-md-4 col-6 mb-md-0" data-aos="fade-up" >
      <div class="radio-group ">
        <input type="radio" name="test" id="pants" class="form-check-input"/>
        <label class="radio-label cursor-pointer" for="pants">
          <img src="{{asset('assets/images/home/liam.png')}}" alt="" class="img-fluid mb-1">
          <span class="ff-cinzel">Pants</span>
        </label>
      </div>
    </div> -->
  </div>
  <div class=" d-flex justify-content-center justify-content-md-end custom mb-5">
    <button class="btn p-0 px-3 mt-5" id="next">NEXT STEP</button>
  </div>
</section>

