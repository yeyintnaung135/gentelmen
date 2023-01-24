<div class="col-9 col-md-8 pt-3 px-2 px-md-0 content" id="fabric">
  <div class="row g-0 g-md-5 me-2" id="grand-space" style="max-width:1200px">

  </div>
  <div class="auto-load text-center">
    <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink"
         x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0"
         xml:space="preserve" style="fill:white">
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
<script>
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
@push('script_fabric_infinite')
<script>
  // begin fabric  infinite scroll
  var ENDPOINT = "{{ url('/') }}";
  var page = 1;
  var start = 0;
  var pageNo = 0;

    infinteLoadMore(page)
  $(window).scroll(function () {
    console.log("dkfddfj");
    if ($(window).scrollTop() + $(window).height() >= ($(document).height() - 200)) {
      console.log("work scroll function inside!!page = " + page);
      page++;
      start = (page * 6) - 6;

      if (page <= 4) {
          infinteLoadMore(page);
      }



    }
  })

  function infinteLoadMore(page) {
    // alert("hello load more");
    var grand_id = $('#GrandID').val();
    var filter_key = $('#GrandID_filter_key').val();
    var mobile = $('#GrandID_mobile').val();
    var i = 0;
    // alert(filter_key);
    var colorjs = @json($colors);
    var texturejs = @json($textures);
    var patternjs = @json($patterns);
    var packagejs = @json($packages);
    var colorjs_arr = [];
    var texturejs_arr = [];
    var patternjs_arr = [];
    var pricejs_arr = [];
    var packagejs_arr = [];
    var i = 0;

    for (i = 0; i < colorjs.length; i++) {
      if ($('#oncolor' + colorjs[i].id).is(":checked")) {
        // it is checked
        colorjs_arr.push($('#oncolor' + colorjs[i].id).val());
      }
    }
    for (i = 0; i < texturejs.length; i++) {
      if ($('#ontexture' + texturejs[i].id).is(":checked")) {
        // it is checked
        texturejs_arr.push($('#ontexture' + texturejs[i].id).val());
      }
    }
    for (i = 0; i < patternjs.length; i++) {
      if ($('#onpattern' + patternjs[i].id).is(":checked")) {
        // it is checked
        patternjs_arr.push($('#onpattern' + patternjs[i].id).val());
      }
    }
    for (i = 0; i < packagejs.length; i++) {
      if ($('#onpackage' + packagejs[i].id).is(":checked")) {
        // it is checked
        packagejs_arr.push($('#onpackage' + packagejs[i].id).val());
      }
    }
    if ($('#low').is(":checked")) {
      // it is checked
      pricejs_arr.push($('#low').val());
    }
    if ($('#high').is(":checked")) {
      // it is checked
      pricejs_arr.push($('#high').val());
    }
    // console.log(packagejs_arr);
    // console.log(colorjs_arr);
    // console.log(texturejs_arr);
    // console.log(patternjs_arr);
    // console.log(pricejs_arr);
    var jacket_status = 0;
    var pant_status = 0;
    var vest_status = 0;
    $.ajax({
      url: ENDPOINT + "/customize?page=" + page,
      datatype: "html",
      type: "get",
      history: false,
      data: {
        "_token": "{{csrf_token()}}",
        "colors": colorjs_arr,
        "types": texturejs_arr,
        "patterns": patternjs_arr,
        "prices": pricejs_arr,
        "packages": packagejs_arr,
        "jacket_status" : jacket_status,
        "vest_status" : vest_status,
        "pant_status" : pant_status,
        "start": start
      },
      beforeSend: function () {
        $('.auto-load').show();
      }

    })
      .done(function (response) {
        // console.log(response);
        // console.log("PAGE"+response.page_no);

        // console.log(response.res.length);
        // console.log("step1");
        if (response.res.length == 0) {
          $('.auto-load').html("");
          return;
        }

        // pageNo = response.page_no;
        $('.auto-load').hide();
        $("#grand-space").append(response.res)

        // $("#myModal").modal()
      })

      .fail(function (jqXHR, ajaxOptions, thrownError) {
        console.log('Server error occured');
      });


  }

  function advance_filter() {
    $('#grand-space').html("");
    page = 1;
    start = 0;
    infinteLoadMore(page);
  }
</script>

@endpush
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
