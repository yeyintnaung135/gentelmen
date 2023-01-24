<div class="col-9 col-md-8 pt-3 px-2 px-md-0 content" id="fabric">
  <div class="filter-offcanva">
    <button class="ms-2 mb-4 filter-btn" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#sideFilter">
      <i class='bx bx-filter-alt'></i>Filter
    </button>
  </div>
  <div class="row g-0 g-md-5 me-2" id="grand-space" style="max-width:1200px">
  </div>
  <div class="auto-load text-center">
    <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink"
         x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0"
         xml:space="preserve">
              <path fill="#000"
                    d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                <animateTransform attributeName="transform" attributeType="XML" type="rotate"
                                  dur="1s"
                                  from="0 50 50" to="360 50 50" repeatCount="indefinite"/>
              </path>
          </svg>
  </div>
  <div class="ajax-load text-center" style="display: none">
    <p><img src="{{asset('assets/images/load-loading.gif')}}"/> Loading More Fabrics</p>
  </div>
</div>

 {{-- start popup --}}
 @foreach ($grand_textures as $grand)
 <div class="modal fade addi__modal" id="myFabric{{$grand->id}}">
   <div
     class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered modal-fullscreen-lg-down">
     <div class="fabric-pop modal-content">
       <!-- Modal Header -->
       <div class="modal-header border border-0 d-flex">
         <h5 class="ff-mont text-white text-uppercase text-wrap mb-0">
           {{$grand->name}}
         </h5>
         <button type="button" class="btn-close btn-close-white"
                 data-bs-dismiss="modal"></button>

       </div>
       <!-- Modal body -->
       <div class="modal-body">
         <div class="row">
           <div class="col-md-6 order-2 order-md-1 mt-4 mt-md-0">

             <p class="small-text mb-3 mb-md-5 text-wrap">{{$grand->description}}</p>
             <div class="row mb-4 text-uppercase">
               <div class="col-md-6">
                 <div class="d-flex align-items-center mb-4">
                   <i class="bx bx-check text-gold me-3"></i>
                   <p class="smaller-text">Made in : {{$grand->made_in}}</p>
                 </div>
                 <div class="d-flex align-items-center mb-4">
                   <i class="bx bx-check text-gold me-3"></i>
                   <p class="smaller-text">colour : {{$grand->color->name}}</p>
                 </div>
                 <div class="d-flex align-items-center mb-4">
                   <i class="bx bx-check text-gold me-3"></i>
                   <p class="smaller-text">Fabric Type :
                     Warm (85%)</p>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="d-flex align-items-center mb-4">
                   <i class="bx bx-check text-gold me-3"></i>
                   <p class="smaller-text">composition : {{$grand->composition}}</p>
                 </div>
                 <div class="d-flex align-items-center mb-4">
                   <i class="bx bx-check text-gold me-3"></i>
                   <p class="smaller-text">softness : {{$grand->softness}}</p>
                 </div>
                 <div class="d-flex align-items-center mb-4">
                   <i class="bx bx-check text-gold me-3"></i>
                   <p class="smaller-text">Price : $ {{$grand->price}}</p>
                 </div>
               </div>
             </div>
<!--             <div class="row mt-5">

               <div class="col-6 col-md-6">

                   <button type="button" class="btn bg-gold-0 border border-0"
                           data-bs-dismiss="modal" onclick="select_fabric('{{$grand->id}}')">Select Fabric
                   </button>

               </div>
             </div>-->
             <div class="row">
               <div class="col-10 col-md-6">
                 <label for="texture_check_{{$grand->id}}" type="button" class="btn bg-gold-0 rounded-0 w-100"
                         data-bs-dismiss="modal" onclick="select_fabric('{{$grand->id}}','{{$grand->price}}')">Select Fabric
                 </label>
                 <div class="border border-1 px-3 mt-3 all_in">
                   {{-- <div class="form-check mb-3">
                     <input type="checkbox" id="full-suit" name="select" class="form-check-input
                     me-3">
                     <label for="full-suit" class="form-check-label">FULL SUITS</label>
                   </div> --}}
                   <div class="form-check my-3 jacket_in" id="jacket_in">
                     <input type="checkbox" id="jacket{{$grand->id}}" name="select" class="form-check-input me-3 input_jacket_in">
                     <label for="jacket{{$grand->id}}" class="form-check-label">JACKET</label>
                   </div>
                   <div class="form-check vest_in my-3" id="vest_in">
                    <input type="checkbox" id="vest{{$grand->id}}" name="select" class="form-check-input me-3 input_vest_in">
                    <label for="vest{{$grand->id}}" class="form-check-label">VEST</label>
                   </div>
                   <div class="form-check pants_in my-3" id="pants_in">
                     <input type="checkbox" id="pants{{$grand->id}}" name="select" class="form-check-input me-3 input_pants_in">
                     <label for="pants{{$grand->id}}" class="form-check-label">PANTS</label>
                   </div>
                 </div>
               </div>
             </div>

           </div>
           <div class="col-md-6 order-1 order-md-2" id="swiper-space{{$grand->id}}">
           </div>
         </div>

       </div>
     </div>
   </div>

 </div>

@endforeach
{{-- end popup --}}
{{--side filter--}}
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
<script>
    $(".list-toggle").click(function () {
        $(this).closest(".content-options").toggleClass("collapsed").toggleClass("expanded");
    });
  function select_fabric(value,price)
  {
    // alert("juju");

    // $('.input_jacket_in').prop('checked',false);
    // $('.input_vest_in').prop('checked',false);
    // $('.input_pants_in').prop('checked',false);
    sessionStorage.setItem('texture_id',value);
    sessionStorage.setItem('texture_price',price);
    // alert($('#jacket'+value).prop("checked"));
    var html_total = "";
    if(sessionStorage.getItem('texture_id') != null && sessionStorage.getItem('texture_id') != '')
    {
      var total4 = parseInt(sessionStorage.getItem('package_price'))+parseInt(sessionStorage.getItem('texture_price'))
    }
    else
    {
      var total4 = sessionStorage.getItem('package_price')
    }
    html_total +=`
    <span class="me-3 text-gold fs-5">$</span><h4 class="d-inline ff-mont ls-0" id="step2_and_fabric_total">${total4}</h4>
    `;
    // alert(total4);
    $('.three_four_price').html(html_total);
    sessionStorage.setItem('cus_total_price',total4);
    //end calculate for reaching step 4
    if($('#jacket'+value).prop("checked") == true)
    {
      sessionStorage.setItem('jacket_in',true);
    }
    else
    {
      sessionStorage.setItem('jacket_in',false);
    }
    if($('#vest'+value).prop("checked") == true)
    {
      sessionStorage.setItem('vest_in',true);
    }
    else
    {
      sessionStorage.setItem('vest_in',false);
    }
    if($('#pants'+value).prop("checked") == true)
    {
      sessionStorage.setItem('pants_in',true);
    }
    else
    {
      sessionStorage.setItem('pants_in',false);
    }
  }
</script>
@push('script_tag')
<script>
  function get_swiper(texture_id)
  {
    var html = "";
    $.ajax({
      type: 'POST',
      url: '/get_swiper_photo_texture',
      data: {
        "_token": "{{csrf_token()}}",
        "texture_id": texture_id
      },
      success: function (data) {
        // start swiper
        console.log(data.textures.photo_one);
        if (data.textures.photo_two == null && data.textures.photo_three == null) {
          html += `<div class="d-lg-none">
            <img src="assets/images/categories/texture/${data.textures.photo_one}"/>
            </div>
          <div class="swiper mySwiper2 mb-3 d-none d-md-block" id="mySwiper2${data.textures.id}">
              <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <img src="assets/images/categories/texture/${data.textures.photo_one}"/>
                  </div>`;
          if (data.textures.photo_two != null) {
            html += `
                  <div class="swiper-slide">
                      <img src="assets/images/categories/texture/${data.textures.photo_two}"/>
                  </div>`;
          }
          if (data.textures.photo_three != null) {
            html += `
                  <div class="swiper-slide">
                      <img src="assets/images/categories/texture/${data.textures.photo_three}"/>
                  </div>`;
          }
          html += `
              </div>
          </div>

          `;
        } else {
          html +=
            `
          <div class="swiper mySwiper2 mb-3" id="mySwiper2${data.textures.id}">
              <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <img src="assets/images/categories/texture/${data.textures.photo_one}"/>
                  </div>`;
          if (data.textures.photo_two != null) {
            html += `
                  <div class="swiper-slide">
                      <img src="assets/images/categories/texture/${data.textures.photo_two}"/>
                  </div>`;
          }
          if (data.textures.photo_three != null) {
            html += `
                  <div class="swiper-slide">
                      <img src="assets/images/categories/texture/${data.textures.photo_three}"/>
                  </div>`;
          }
          html += `
              </div>
          </div>`
        }
        html += `
          <div thumbsSlider="" class="swiper mySwiper d-none d-md-block"
              id="mySwiper${data.textures.id}">
              <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <img src="assets/images/categories/texture/${data.textures.photo_one}"/>
                  </div>`;
        if (data.textures.photo_two != null) {
          html += `
                  <div class="swiper-slide">
                      <img src="assets/images/categories/texture/${data.textures.photo_two}"/>
                  </div>`
        }
        if (data.textures.photo_three != null) {
          html += `
                  <div class="swiper-slide">
                      <img src="assets/images/categories/texture/${data.textures.photo_three}"/>
                  </div>`;
        }
        html += `
              </div>
          </div>
          `;
        $('#swiper-space' + texture_id).html(html);
        const swiper = new Swiper("#mySwiper" + texture_id, {
          // loop: true,
          spaceBetween: 10,
          slidesPerView: 4,
          freeMode: true,
          watchSlidesProgress: true,
        });
        const swiper2 = new Swiper("#mySwiper2" + texture_id, {
          loop: true,
          spaceBetween: 10,
          thumbs: {
            swiper: swiper,
          },
          breakpoints: {
            // when window width is >= 320px
            0: {
              slidesPerView: 1.7,
              spaceBetween: 15
            },
            769: {
              slidesPerView: 1,
              spaceBetween: 15
            },
          }
        });
        //end swiper
      }
    });
  }
</script>
@endpush
