<div class="col-9 col-md-8 pt-3 px-4 px-md-0 content" id="jacket">
  {{-- <input type="text" style="color:black" id="jacket_box"> --}}
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
      </div>
    </div>
    <div class="col-md-8">
      <div class="tab-content">
        <div class="tab-pane active" id="jacket-style">
          {{-- @foreach($not_unique_tops as $not_unique_top)
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
        @endforeach --}}
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
        <div class="tab-pane fade" id="lapels">Menu1</div>
        <div class="tab-pane fade" id="lapel-hole">Menu2</div>
      </div>
    </div>
  </div>
</div>
@push('script_tag')
<script>

</script>
@endpush
@push('script_jacket_infinite')
<script>
// infinteLoadMoreJacket(page);
function jacket_infinite_scroll_start(style)
{
  //start jacket infinite scroll
  var ENDPOINT = "{{ url('/') }}";
  var page = 1;
  var start = 0;
  var pageNo = 0;
  var style = style;
    infinteLoadMoreJacket(page,style)


  $(window).scroll(function () {
    // alert($('#jacket_box').val());
    if ($(window).scrollTop() + $(window).height() >= ($(document).height() - 300)) {
      page++;
      start = (page * 6) - 6;
      // console.log('Page = ' + page);
      if (page <= 4) {

        infinteLoadMoreJacket(page,style);

      }
    }
  })
  function infinteLoadMoreJacket(page,style) {
    // alert("kfdjfdk");
    var jacket_status = 1;
    var pant_status = 0;
    var vest_status = 0;
    $.ajax({
      url: ENDPOINT + "/customize?page=" + page,
      datatype: "html",
      type: "get",
      history: false,
      data: {
        "_token": "{{csrf_token()}}",
        "jacket_status" : jacket_status,
        "pant_status" : pant_status,
        "vest_status" : vest_status,
        "style" : style,
        "start" : start
      },
      beforeSend: function () {
        $('.auto-load').show();
      }
    })
      .done(function (response) {
        // console.log(response.length);
        if (response.res.length == 0) {
          $('.auto-load').html("");
          return;
        }
        $('.auto-load').hide();

        $("#jacket-style").append(response.res);
        // $("#grand_space").fadeIn(3000);
        // console.log("fade")
        // $("#myModal").modal()
      })
      .fail(function (jqXHR, ajaxOptions, thrownError) {
        console.log('Server error occured');
      });
  }
  //end infinite scroll

}
function jacket_button(style) {
  // alert(style);
  $('#jacket-style').html("");
    page = 1;
    start = 0;
    jacket_infinite_scroll_start(style)

  }
</script>
@endpush
