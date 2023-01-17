@extends('layouts.header')
@push('styles')
  <link href="{{asset('css/SelectCss/select2.min.css')}}" rel="stylesheet"/>
  <link href="{{ asset('css/customize.css') }}" rel="stylesheet">
  <link href="{{ asset('css/fabric.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owl/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owl/owl.theme.default.min.css') }}" rel="stylesheet">

@endpush
@section('content')
  @include('layouts/nav')
  <input type="hidden" style="color:black" id="cus_cate_id">
  <input type="hidden" style="color:black" id="package_id">
  <input type="hidden" style="color:black" id="style_id">
  <input type="hidden" style="color:black" id="hidden_total">
  <input type="hidden" style="color:black" id="measure_step_pass" value="0">
  <input type="hidden" style="color:black" id="style_rec_name">
  <input type="hidden" style="color:black" id="style_rec_id">
  <input type="hidden" style="color:black" id="style_rec_cate_id">
  <input type="hidden" style="color:black" id="view_more_status">
  <input type="hidden" style="color:black" id="has_session_jacketvest" value="0">
  <input type="hidden" style="color:black" id="has_session_pant" value="0">
  @if($user == null || $upper == null)
    <input type="hidden" style="color:black" value="0" id="upper_measure_id">
  @else
    <input type="hidden" style="color:black" value="{{$upper->id}}" id="upper_measure_id">
  @endif
  @if($user == null || $lower == null)
    <input type="hidden" style="color:black" value="0" id="lower_measure_id">
  @else
    <input type="hidden" style="color:black" value="{{$lower->id}}" id="lower_measure_id">
  @endif
  <input type="hidden" style="color:black" id="order_id" value="start">
  <input type="hidden" style="color:black" id="suit_code" value="start">
  <section class="cus-breadcrumb py-2">

    <div class="d-flex justify-content-between align-items-center mb-0">
      <a href="#" class="pt-1" id="back"><i class='bx bx-arrow-back'></i></a>
      <a href="#" class="pt-1" id="next-arrow"><i class='bx bx-arrow-back bx-rotate-180'></i></a>
         <a href="#" class="pt-1" id="next-unconfirm"><i class='bx bx-arrow-back bx-rotate-180'></i></a>
    </div>
  </section>
  <section class="custom text-center" style="margin-bottom: 20px;">
    <span class="text-white-50">STEP <span id="step_no" class="text-gold">1</span>/7</span>
    <h4 class="text-uppercase ff-mont text-white mb-3" id="step_title">Choose The Product</h4>
    <div class="indicator d-flex justify-content-center gap-2 gap-lg-4 mx-0 mx-lg-5">
      <div class="indicator-select" id="ind1"></div>
      <div class="" id="ind2"></div>
      <div class="" id="ind3"></div>
      <div class="" id="ind4"></div>
      <div class="" id="ind5"></div>
      <div class="" id="ind6"></div>
      <div class="" id="ind7"></div>
    </div>
  </section>

  @include('layouts/cus_1')
  @include('layouts/cus_2')
  @include('layouts/cus_3')
  @include('layouts/cus_4')
  @include('layouts/cus_5')
  @include('layouts/cus_6')
  @include('layouts/cus_7')
  @include('layouts.popup')
  {{-- @include('layouts/recommend_style_pop_up'); --}}
  {{-- confirm modal start --}}
  <div class="modal fade" id="confirm">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-navy rounded-0">
        <!-- Modal body -->
        <div class="modal-body text-center">
          <h6 class="ff-mont text-uppercase text-bold h5 mt-4 mb-3">Start your customization ?</h6>
          <span>First, you must select the <span id="vtext1"></span> !</span>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer border-0 mx-auto mb-4">
          <button class="btn border border-1 rounded-0 p-0 px-2 py-1 text-white me-3"
                  data-bs-dismiss="modal">BACK TO <span id="vtext2"></span>
          </button>

          <!-- <a type="btn"
            class="btn bg-gold rounded-0 p-0 px-2 py-1 d-flex justify-content-evenly align-items-center"
            id="next-one">
            <span class="text-navy">NEXT STEP</span>
            <i class='bx bx-chevron-right'></i>
          </a> -->
        </div>

      </div>
    </div>
  </div>

  {{-- end confirm modal --}}
  <button onclick="topFunction()" id="scrollBtn" title="Go to top" class="d-flex
    justify-content-center align-items-center">
    <i class='bx bx-arrow-back bx-rotate-90'></i>
  </button>
  {{--  model--}}

  @include('layouts/footer')
  {{--    @include('layouts/scrollTop')--}}
  @include('layouts.recommend_style_pop_up')
@endsection

@section('js')
  <script src="{{asset('css/owl/owl.carousel.min.js')}}"></script>
  <script src="{{asset('css/SelectJs/select2.min.js')}}"></script>


  <script>


    $(document).ready(function() {
      var showChar = 50;
      var ellipsestext = "...";
      var moretext = "Read More";
      var lesstext = "Read Less";
      $('.more').each(function() {
        var content = $(this).html();

        if(content.length > showChar) {

          var c = content.substr(0, showChar);
          var h = content.substr(showChar-1, content.length - showChar);

          var html = c +
                  '<span class="moreelipses">'+ellipsestext+'</span><span class="morecontent"><span>' + h + '</span><a href="" class="morelink">'+moretext+'</a></span>';

          $(this).html(html);
        }

      });

      $(".morelink").click(function(){
        if($(this).hasClass("less")) {
          $(this).removeClass("less");
          $(this).html(moretext);
        } else {
          $(this).addClass("less");
          $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
      });
    });


    $('#cus2_option').hide();
    $('.select2').hide();
    $('#fabric-filter').hide();
    $('.content').first().show();
    $('#next-unconfirm').hide();

    $('.box-menu a').click(function (e) {
      let current_link = $(this);
      let current_link_href = current_link.attr('href');
      let cfTitle = $('#cfTitle')
      console.log(current_link_href)
      if (current_link_href === '#fitting') {
        cfTitle.html('Fitting')
      }
      if (current_link_href === '#fabric') {
        $('#fabric-filter').show();
        cfTitle.html('Fabric Selection')
      } else {
        $('#fabric-filter').hide();
      }
      if (current_link_href === '#jacket') {
        cfTitle.html('Jacket')
      }
      if (current_link_href === '#vest') {
        cfTitle.html('Vest')
      }
      if (current_link_href === '#pant') {
        cfTitle.html('Pant')
      }
      console.log(current_link)
      console.log(current_link_href)
      $('.box-menu a').removeClass('box-select');
      $(this).addClass('box-select');

      $('.content').hide();
      $(current_link_href).show();

      /*
      // current_index = items.indexOf(current_link_href);
      // $('#next-step').attr('href', items.at(current_index+1));
      console.log(i)

      if ($(this).attr('href') === '' && $('#next-one').attr('href') === '') {
        current_link_href = items.at(i);
        $(this).attr('href', current_link_href)
        console.log(current_link_href)
        $(current_link_href).show();
        $(this).addClass('box-select');
        i = 2
      } else {
        current_link_href = items.at(i);
        console.log(current_link_href)
        $(this).attr('href', current_link_href)
        $('.content').hide();
        $(current_link_href).show();
        $(this).addClass('box-select');
        i++
      }
      */
      e.preventDefault();
    });

    AOS.init({
      duration: 1000,
    });
    // var count = 1;
    var user = @json($user);

    if (sessionStorage.getItem('step6') == 0) {
      var count = 6;
      $('#step_title').html('Payment For Your Suit')
      var prev = count - 1;
      $('#step5').addClass('d-none');
      $('#step4').addClass('d-none');
      $('#step3').addClass('d-none');
      $('#step2').addClass('d-none');
      $('#step1').addClass('d-none');
      $('#ind1').addClass('indicator-select');
      $('#ind2').addClass('indicator-select');
      $('#ind3').addClass('indicator-select');
      $('#ind4').addClass('indicator-select');
      $('#ind5').addClass('indicator-select');
      $('#ind' + count).addClass('indicator-select');
      $('#step' + count).removeClass('d-none');
      $('#step' + count).addClass('d-block');
      $('#step_no').html(count);
      window.scrollTo(0, 0);
      if(sessionStorage.getItem('order_id') != null && sessionStorage.getItem('order_id') != '')
      {

        $('#order_id').val(sessionStorage.getItem('order_id'));
        $('#suit_code').val(sessionStorage.getItem('suit_code'));
        store_order();
        store_suit_code();
      }
      if(sessionStorage.getItem('address') != null && sessionStorage.getItem('address') != '')
      {
        $('#order_address').val(sessionStorage.getItem('address'));
      }

    }
    else if(sessionStorage.getItem('customize_category_id') != null && sessionStorage.getItem('package_id') != null && sessionStorage.getItem('style_id') == null && sessionStorage.getItem('fitting') == null && sessionStorage.getItem('measure_step') == null && sessionStorage.getItem('order_id') == null)
    {
      var count = 2;
      $('#step_title').html('Choose the package');
      var prev = count - 1;
      $('#step5').addClass('d-none');
      $('#step4').addClass('d-none');
      $('#step3').addClass('d-none');
      $('#step2').removeClass('d-none');
      $('#step1').addClass('d-none');
      $('#ind1').addClass('indicator-select');
      $('#ind' + count).addClass('indicator-select');
      $('#step' + count).removeClass('d-none');
      $('#step' + count).addClass('d-block');
      $('#step_no').html(count);
      window.scrollTo(0, 0);
    }
    else if(sessionStorage.getItem('customize_category_id') != null && sessionStorage.getItem('package_id') != null && sessionStorage.getItem('style_id') != null && sessionStorage.getItem('fitting') == null && sessionStorage.getItem('measure_step') == null && sessionStorage.getItem('order_id') == null)
    {
      var count = 3;
      $('#step_title').html('STYLE RECOMMENDATIONS');
      var prev = count - 1;
      $('#step5').addClass('d-none');
      $('#step4').addClass('d-none');
      $('#step3').removeClass('d-none');
      $('#step2').addClass('d-none');
      $('#step1').addClass('d-none');
      $('#ind' + count).addClass('indicator-select');
      $('#ind1').addClass('indicator-select');
      $('#ind2').addClass('indicator-select');
      $('#step' + count).removeClass('d-none');
      $('#step' + count).addClass('d-block');
      $('#step_no').html(count);
      // $('#style_nav_check_'+sessionStorage.getItem('style_cate_id')).addClass('active');
      // $('#style_nav_check_'+sessionStorage.getItem('style_cate_id')).click();
      window.scrollTo(0, 0);
      // step3_selected();
      // style_nav_reload();
    }
    else if(sessionStorage.getItem('customize_category_id') != null && sessionStorage.getItem('package_id') != null && sessionStorage.getItem('style_id') != null && sessionStorage.getItem('fitting') != null && sessionStorage.getItem('measure_step') == null && sessionStorage.getItem('order_id') == null)
    {
      if(sessionStorage.getItem('measure_step') != null && sessionStorage.getItem('measure_step') != '' && sessionStorage.getItem('measure_step') != null)
      {
        // alert("5in");
        var count = 5
        $('#step_title').html('GET MEASUREMENTS')
        var prev = count - 1;
        $('#step5').addClass('d-none');
        $('#step5').removeClass('get measurements');
        $('#step4').addClass('d-none');
        $('#step3').addClass('d-none');
        $('#step2').addClass('d-none');
        $('#step1').addClass('d-none');
        $('#ind1').addClass('indicator-select');
        $('#ind2').addClass('indicator-select');
        $('#ind3').addClass('indicator-select');
        $('#ind4').addClass('indicator-select');
        $('#ind5').addClass('indicator-select');
        $('#ind' + count).addClass('indicator-select');
        $('#step' + count).removeClass('d-none');
        $('#step' + count).addClass('d-block');
        $('#step_no').html(count);
        window.scrollTo(0, 0);
        show_measure_data();
        //choosed fitting
        $('#step_title').html('style customization');

        step4_selected();
        set_measure_unit();
        //end choosed fitting
      }
      else
      {
        // alert("44--44");
      var count = 4;
      calculate_step4();
      $('#step_title').html('style customization');
      if(sessionStorage.getItem('fitting') != '' && sessionStorage.getItem('fitting') != null)
      {
        if(sessionStorage.getItem('fitting') == 1)
        {
          $('#esf').attr('checked',true);
        }
        else if(sessionStorage.getItem('fitting') == 2)
        {
          $('#sf').attr('checked',true);
        }
        else if(sessionStorage.getItem('fitting') == 3)
        {
          $('#rf').attr('checked',true);
        }
        else if(sessionStorage.getItem('fitting') == 4)
        {
          $('#lf').attr('checked',true);
        }
        if(sessionStorage.getItem('suit_piece') == 3)
        {
          $('.jacket_in').show();
          $('.pants_in').show();
          $('.vest_in').show();
        }
        else if(sessionStorage.getItem('suit_piece') == 2)
        {
            $('.vest_in').hide();
            $('.jacket_in').show();
          $('.pants_in').show();
        }
        else
        {
          $('.all_in').hide();
          $('.jacket_in').hide();
          $('.pants_in').hide();
          $('.vest_in').hide();
        }
        if(sessionStorage.getItem('jacket_in') == 'true')
        {
          $('#jacket'+sessionStorage.getItem('texture_id')).attr('checked',true);
        }
        if(sessionStorage.getItem('vest_in') == 'true')
        {
          $('#vest'+sessionStorage.getItem('texture_id')).attr('checked',true);
        }
        if(sessionStorage.getItem('pants_in') == 'true')
        {
          $('#pants'+sessionStorage.getItem('texture_id')).attr('checked',true);
        }
        if(sessionStorage.getItem('pant_id') != '' && sessionStorage.getItem('pant_id') != null)
        {
          $('#choose_pant'+sessionStorage.getItem('pant_id')).attr('checked',true);
        }
      }
      var prev = count - 1;
      $('#step5').addClass('d-none');
      $('#step4').removeClass('d-none');
      $('#step3').addClass('d-none');
      $('#step2').addClass('d-none');
      $('#step1').addClass('d-none');
      $('#ind1').addClass('indicator-select');
      $('#ind2').addClass('indicator-select');
      $('#ind3').addClass('indicator-select');
      $('#ind4').addClass('indicator-select');
      $('#ind' + count).addClass('indicator-select');
      $('#step' + count).removeClass('d-none');
      $('#step' + count).addClass('d-block');
      $('#step_no').html(count);
    }
    }
    else if(sessionStorage.getItem('customize_category_id') != null && sessionStorage.getItem('package_id') != null && sessionStorage.getItem('style_id') != null && sessionStorage.getItem('fitting') != null && sessionStorage.getItem('measure_step') != null && sessionStorage.getItem('order_id') == null)
    {
      // alert("S5");
      var count = 5
      $('#step_title').html('GET MEASUREMENTS')
      var prev = count - 1;
      $('#step5').addClass('d-none');
      $('#step5').removeClass('get measurements');
      $('#step4').addClass('d-none');
      $('#step3').addClass('d-none');
      $('#step2').addClass('d-none');
      $('#step1').addClass('d-none');
      $('#ind1').addClass('indicator-select');
      $('#ind2').addClass('indicator-select');
      $('#ind3').addClass('indicator-select');
      $('#ind4').addClass('indicator-select');
      $('#ind5').addClass('indicator-select');
      $('#ind' + count).addClass('indicator-select');
      $('#step' + count).removeClass('d-none');
      $('#step' + count).addClass('d-block');
      $('#step_no').html(count);
      window.scrollTo(0, 0);
      show_measure_data();
      //choosed fitting
      $('#step_title').html('style customization');
      step4_selected();
      set_measure_unit();
      // if(sessionStorage.getItem('fitting') != '' && sessionStorage.getItem('fitting') != null)
      // {
      //   // alert("4in");
      //   if(sessionStorage.getItem('fitting') == 1)
      //   {
      //     $('#esf').attr('checked',true);
      //   }
      //   else if(sessionStorage.getItem('fitting') == 2)
      //   {
      //     $('#sf').attr('checked',true);
      //   }
      //   else if(sessionStorage.getItem('fitting') == 3)
      //   {
      //     $('#rf').attr('checked',true);
      //   }
      //   else if(sessionStorage.getItem('fitting') == 4)
      //   {
      //     $('#lf').attr('checked',true);
      //   }
      //   if(sessionStorage.getItem('suit_piece') == 3)
      //   {
      //     $('.jacket_in').show();
      //     $('.pants_in').show();
      //     $('.vest_in').show();
      //   }
      //   else if(sessionStorage.getItem('suit_piece') == 2)
      //   {
      //       $('.vest_in').hide();
      //       $('.jacket_in').show();
      //       $('.pants_in').show();
      //   }
      //   else
      //   {
      //       $('.all_in').hide();
      //       $('.jacket_in').hide();
      //       $('.pants_in').hide();
      //       $('.vest_in').hide();
      //   }
      //   if(sessionStorage.getItem('jacket_in') == 'true')
      //   {
      //     $('#jacket'+sessionStorage.getItem('texture_id')).attr('checked',true);
      //   }
      //   if(sessionStorage.getItem('vest_in') == 'true')
      //   {
      //     $('#vest'+sessionStorage.getItem('texture_id')).attr('checked',true);
      //   }
      //   if(sessionStorage.getItem('pants_in') == 'true')
      //   {
      //     $('#pants'+sessionStorage.getItem('texture_id')).attr('checked',true);
      //   }
      //   if(sessionStorage.getItem('pant_id') != '' && sessionStorage.getItem('pant_id') != null)
      //   {
      //     $('#choose_pant'+sessionStorage.getItem('pant_id')).attr('checked',true);
      //   }
      // }
      // //end choosed fitting
    }
    else if(sessionStorage.getItem('customize_category_id') != null && sessionStorage.getItem('package_id') != null && sessionStorage.getItem('style_id') != null && sessionStorage.getItem('fitting') != null && sessionStorage.getItem('measure_step') != null && sessionStorage.getItem('order_id') != null)
    {
      if(user != null)
      {
        // alert("reload 6");
        var count = 6;
        $('#step_title').html('Payment For Your Suit')
        var prev = count - 1;
        $('#step6').removeClass('d-none');
        $('#step5').addClass('d-none');
        $('#step4').addClass('d-none');
        $('#step3').addClass('d-none');
        $('#step2').addClass('d-none');
        $('#step1').addClass('d-none');
        $('#ind1').addClass('indicator-select');
        $('#ind2').addClass('indicator-select');
        $('#ind3').addClass('indicator-select');
        $('#ind4').addClass('indicator-select');
        $('#ind5').addClass('indicator-select');
        $('#ind' + count).addClass('indicator-select');
        $('#step' + count).removeClass('d-none');
        $('#step' + count).addClass('d-block');
        $('#step_no').html(count);
        window.scrollTo(0, 0);
        if(sessionStorage.getItem('order_id') != null && sessionStorage.getItem('order_id') != '')
        {
          // alert("has order in db");
          $('#order_id').val(sessionStorage.getItem('order_id'));
          $('#suit_code').val(sessionStorage.getItem('suit_code'));
        }
        if(sessionStorage.getItem('address') != null && sessionStorage.getItem('address') != '')
        {
          $('#order_address').val(sessionStorage.getItem('address'));
        }
        set_measure_unit();
      }
      else
      {
        // alert("555555---55");
        var count = 5
        $('#step_title').html('Payment For Your Suit')
        var prev = count - 1;
        $('#step5').addClass('d-none');
        $('#step5').removeClass('get measurements');
        $('#step4').addClass('d-none');
        $('#step3').addClass('d-none');
        $('#step2').addClass('d-none');
        $('#step1').addClass('d-none');
        $('#ind1').removeClass('indicator-select');
        $('#ind2').removeClass('indicator-select');
        $('#ind3').removeClass('indicator-select');
        $('#ind4').removeClass('indicator-select');
        $('#ind' + count).addClass('indicator-select');
        $('#step' + count).removeClass('d-none');
        $('#step' + count).addClass('d-block');
        $('#step_no').html(count);
        window.scrollTo(0, 0);
        show_measure_data();
        set_measure_unit();
      }
      if(sessionStorage.getItem('age') != '' && sessionStorage.getItem('age') != null)
      {
        // alert("session is not null age");
        $('#age').val(sessionStorage.getItem('age'));
      }
      if(sessionStorage.getItem('weight') != '' && sessionStorage.getItem('weight') != null)
      {
        // alert("session is null weight");
      $('#weight').val(sessionStorage.getItem('weight'));
      }
      if(sessionStorage.getItem('weight_type') != '' && sessionStorage.getItem('weight_type') != null)
      {
        $('#weight_type').val(sessionStorage.getItem('weight_type'));
      }
      if(sessionStorage.getItem('height_ft') != '' && sessionStorage.getItem('height_ft') != null)
      {
        // alert("session is null height ft");
        $('#hft').val(sessionStorage.getItem('height_ft'));
      }
      if(sessionStorage.getItem('height_in') != '' && sessionStorage.getItem('height_in') != null)
      {
        // alert("session is null height in");
        $('#hin').val(sessionStorage.getItem('height_in'));
      }
      // if(sessionStorage.getItem('chest') != '' && sessionStorage.getItem('chest') != null)
      // {
      // $('#chest').val(sessionStorage.getItem('chest'));
      // $('#waist').val(sessionStorage.getItem('waist'));
      // $('#hips').val(sessionStorage.getItem('hips'));
      // $('#shoulder').val(sessionStorage.getItem('shoulder'));
      // $('#sleeve').val(sessionStorage.getItem('sleeve'));
      // $('#front').val(sessionStorage.getItem('front'));
      // $('#neck').val(sessionStorage.getItem('neck'));
      // $('#r_low').val(sessionStorage.getItem('r_low'));
      // $('#l_low').val(sessionStorage.getItem('l_low'));
      // $('#back_back').val(sessionStorage.getItem('back'));
      // }
      // if(sessionStorage.getItem('pwaist') != '' && sessionStorage.getItem('pwaist') != null)
      // {
      //   alert("no null");
      // $('#pwaist').val(sessionStorage.getItem('pwaist'));
      // $('#phips').val(sessionStorage.getItem('phips'));
      // $('#pcrotch').val(sessionStorage.getItem('pcrotch'));
      // $('#pthighs').val(sessionStorage.getItem('pthighs'));
      // $('#plength').val(sessionStorage.getItem('plength'));
      // $('#pbottom').val(sessionStorage.getItem('pbottom'));
      // $('#pknee').val(sessionStorage.getItem('pknee'));
      // $('#pshorts').val(sessionStorage.getItem('pshorts'));
      // $('#pstomach').val(sessionStorage.getItem('pstomach'));
      // }
      store_measure();
      if(user != null)
      {
        store_order();
        store_suit_code();
      }
    }
    else {

      var count = 1
    }
    $(document).ready(function () {
      if(count != 6)
      {
        // alert("6");
        $('#step6').addClass('d-none');
      }
      $('#cus1').prop("checked");
      $('#next, #next-arrow,#next-unconfirm').click(function () {
        // alert("count"+count);

        sessionStorage.setItem('step_no',count);
        var msp = $('#measure_step_pass').val();
        var html = "";
        var cus_cate_id = $('input[name="customize_category"]:checked').val();
        console.log(cus_cate_id);
        console.log(package_id);
        var package_id = $('input[name="packages"]:checked').val();
        console.log(package_id);
        if (count < 6) {
          if (typeof (cus_cate_id) != "undefined" || sessionStorage.getItem('customize_category_id') != null) {
            if(count == 1 || count == 2)
            {
            sessionStorage.setItem('customize_category_id',cus_cate_id);
            if(sessionStorage.getItem('customize_category_id') !== 9)
            {
              sessionStorage.removeItem('suit_piece');
              if(sessionStorage.getItem('texture_id') != null && sessionStorage.getItem('texture_id') != '')
              {
                sessionStorage.setItem('jacket_in',false);
                sessionStorage.setItem('vest_in',false);
                sessionStorage.setItem('pants_in',false);
              }
              else
              {
                sessionStorage.removeItem('jacket_in');
                sessionStorage.removeItem('vest_in');
                sessionStorage.removeItem('pants_in');
              }

              // sessionStorage.removeItem('style_id');
              // sessionStorage.removeItem('style_name');
              // sessionStorage.removeItem('style_cate_id');
              // sessionStorage.removeItem('style_cate_name');
            }
            //Re select check step1 to step 4 jacket,vest,pant start
            if(sessionStorage.getItem('customize_category_id') == 1)
            {
              sessionStorage.removeItem('vest_id');
              sessionStorage.removeItem('pant_id');
              $('#choose_vest'+sessionStorage.getItem('vest_id')).attr('checked',false);
              $('#choose_pant'+sessionStorage.getItem('pant_id')).attr('checked',false);
            }
            else if(sessionStorage.getItem('customize_category_id') == 2)
            {
              sessionStorage.removeItem('jacket_id');
              sessionStorage.removeItem('pant_id');
              $('#choose_jacket'+sessionStorage.getItem('jacket_id')).attr('checked',false);
              $('#choose_pant'+sessionStorage.getItem('pant_id')).attr('checked',false);
            }
            else if(sessionStorage.getItem('customize_category_id') == 3)
            {
              sessionStorage.removeItem('jacket_id');
              sessionStorage.removeItem('vest_id');
              $('#choose_jacket'+sessionStorage.getItem('jacket_id')).attr('checked',false);
              $('#choose_vest'+sessionStorage.getItem('vest_id')).attr('checked',false);
            }
            else if(sessionStorage.getItem('customize_category_id') == 9)
            {
              if(sessionStorage.getItem('suit_piece') == 3)
              {

              }
              else if(sessionStorage.getItem('suit_piece') == 2)
              {
                sessionStorage.removeItem('vest_id');
                $('#choose_vest'+sessionStorage.getItem('vest_id')).attr('checked',false);
              }
            }
            //Re select check step1 to step 4 jacket,vest,pant end
            // Re select check step1 to step 3 star
            // alert("check do");
              if(sessionStorage.getItem('style_id') != null && sessionStorage.getItem('style_id') != '')
              {
                $.ajax({
                  type: 'POST',
                  url: '/check_style_in_step1_ajax',
                  data: {
                    "_token": "{{csrf_token()}}",
                    "style_id": sessionStorage.getItem('style_id'),
                    "cus_cate_id" : sessionStorage.getItem('customize_category_id')
                  },
                  success: function (data) {
                    console.log("ajax check do!!!");
                    console.log(data);
                    if(data == false)
                    {
                      sessionStorage.removeItem('style_id');
                      sessionStorage.removeItem('style_name');
                      sessionStorage.removeItem('style_cate_name');
                      sessionStorage.removeItem('style_cate_id');
                      $('.styleNav').removeClass('active');

                    }
                  }
                });
              }
            // Re select check step1 to step 3 end
            }
            // count++;
            //not check data testing
            if (sessionStorage.getItem('package_id') == null) {
              if(count == 1)
              {
                // alert("only 1");
                var packages = @json($packages);

                sessionStorage.setItem('package_id',packages[0].id);
                sessionStorage.setItem('package_price',packages[0].price);

                count++;
              }
            } else if (sessionStorage.getItem('package_id') != null) {
              if (count >= 1 && count <= 6) {
                count++;
                if(sessionStorage.getItem('package_id') != null && sessionStorage.getItem('package_id') != '')
                {
                  calculate_step4();
                }
                if(count == 3)
                {
                  if(sessionStorage.getItem('customize_category_id') == 9)
                  {
                    sessionStorage.setItem('suit_piece',2);
                  }
                  step3_selected();
                  style_filter(sessionStorage.getItem('suit_piece'));
                }
                if (count == 4) {
                  // alert("step 4 no reload");
                  if(sessionStorage.getItem('style_id') == null || sessionStorage.getItem('style_id') == '')
                  {
                    // alert("in444");
                    count--;
                    $('#step3-unconfirm').modal('show');
                  }
                  else
                  {
                    // count++;
                    // $('#step3-confirm').modal('show');
                  }
                  if(sessionStorage.getItem('suit_piece') == 3)
                  {
                    // alert("radio 3 show");
                    $('.jacket_in').show();
                    $('.pants_in').show();
                    $('.vest_in').show();
                  }
                  else if(sessionStorage.getItem('suit_piece') == 2)
                  {
                    // alert("radio 2 show");
                      $('.vest_in').hide();
                      $('.jacket_in').show();
                    $('.pants_in').show();
                  }
                  else
                  {
                    // alert("bmbm");
                    $('.all_in').hide();
                    $('.jacket_in').hide();
                    $('.pants_in').hide();
                    $('.vest_in').hide();
                  }
                  calculate_step4();

                }
                if (count == 5) {
                    sessionStorage.setItem('measure_step',1);
                    // alert("wate..");
                    if(sessionStorage.getItem('fitting') == null)
                    {
                      // alert("kokoko");
                      $('#vtext1').html("style recommendations");
                      $('#vtext2').html("Step 4");
                      $('#confirm').modal('show');
                      count--;
                    }
                  show_measure_data();
                }
                if (count == 6) {
                  alert("check measure data");
                  //default set measure unit when session is null start
                  if(sessionStorage.getItem('measure_unit') == null && sessionStorage.getItem('measure_unit') == '')
                  {
                    alert("null so fill cm");
                    sessionStorage.setItem('measure_unit','cm');
                  }
                  //default set measure unit when session is null end
                  var address = $('#order_address').val();
                  if(sessionStorage.getItem('order_id') != null && sessionStorage.getItem('order_id') != '')
                  {
                    // alert("has order in db");
                    $('#order_id').val(sessionStorage.getItem('order_id'));
                    $('#suit_code').val(sessionStorage.getItem('suit_code'));
                  }
                  if($.trim('address') != null)
                  {
                    sessionStorage.setItem('address',address);
                  }

                  var cus_cate_id = sessionStorage.getItem('customize_category_id');
                  var correct = true;
                  // alert(cus_cate_id);
                  var upperID = $('#upperID').val();
                  var lowerID = $('#lowerID').val();
                  // alert(upperID+"--"+lowerID);
                  var user = @json($user);
                  var age = $('#age').val();
                  var weight = $('#weight').val();
                  var weight_type = $('#weight_type').val();
                  var height = $('#height_value').val();
                  var height_type = $('#height_type').val();
                  sessionStorage.setItem('age',age);
                  sessionStorage.setItem('weight',weight);
                  sessionStorage.setItem('weight_type',weight_type);
                  sessionStorage.setItem('height',height);
                  sessionStorage.setItem('height_type',height_type);

                  var chest = $('#chest').val();
                  var waist = $('#waist').val();
                  var hips = $('#hips').val();
                  var shoulder = $('#shoulder').val();
                  var sleeve = $('#sleeve').val();
                  var front = $('#front').val();
                  var back = $('#back_back').val();
                  var neck = $('#neck').val();
                  var jlength = $('#jlength').val();
                  sessionStorage.setItem('chest',chest);
                  sessionStorage.setItem('waist',waist);
                  sessionStorage.setItem('hips',hips);
                  sessionStorage.setItem('shoulder',shoulder);
                  sessionStorage.setItem('sleeve',sleeve);
                  sessionStorage.setItem('front',front);
                  sessionStorage.setItem('back',back);
                  sessionStorage.setItem('neck',neck);
                  sessionStorage.setItem('jlength',jlength);

                  // alert("chest = "+chest);

                  var pcrotch = $('#pcrotch').val();
                  var pthighs = $('#pthighs').val();
                  var plength = $('#plength').val();
                  var pbottom = $('#pbottom').val();
                  var pknee = $('#pknee').val();
                  var pstomach = $('#pstomach').val();


                  sessionStorage.setItem('pcrotch',pcrotch);
                  sessionStorage.setItem('pthighs',pthighs);
                  sessionStorage.setItem('plength',plength);
                  sessionStorage.setItem('pbottom',pbottom);
                  sessionStorage.setItem('pknee',pknee);

                  sessionStorage.setItem('pstomach',pstomach);
                  // alert(chest);
                  // alert("age");
                  var alertText = new Array();
                  var i = 0;
                  // if (user == null) {
                  //   // alert("user null");
                  //   $('#exampleModal').modal('show');
                  //   $('#login_error').removeClass('d-none');
                  //   count--;
                  // } else {
                    // alert("else");

                    if (cus_cate_id == 1 || cus_cate_id == 2 || cus_cate_id == 9) {
                        // alert("hell to hell");
                      if ($.trim(chest) == '') {
                        correct = false;
                        alertText[i] = "Chest";
                        i++;
                      }
                      if ($.trim(waist) == '') {
                        correct = false;
                        alertText[i] = "Waist";
                        i++;
                      }
                      if ($.trim(hips) == '') {
                        correct = false;
                        alertText[i] = "Hips";
                        i++;
                      }
                      if ($.trim(shoulder) == '') {
                        correct = false;
                        alertText[i] = "Shoulder";
                        i++;
                      }
                      if ($.trim(sleeve) == '') {
                        correct = false;
                        alertText[i] = "Sleeve";
                        i++;
                      }
                      if ($.trim(front) == '') {
                        correct = false;
                        alertText[i] = "Front";
                        i++;
                      }
                      if ($.trim(back) == '') {
                        correct = false;
                        alertText[i] = "Back";
                        i++;
                      }
                      if ($.trim(neck) == '') {
                        correct = false;
                        alertText[i] = "Neck";
                        i++;
                      }
                      if ($.trim(jlength) == '') {
                        correct = false;
                        alertText[i] = "Jacket Length";
                        i++;
                      }

                    }
                    if (cus_cate_id == 3 || cus_cate_id == 9) {

                      if ($.trim(pcrotch) == '') {
                        correct = false;
                        alertText[i] = "Pant-Crotch";
                        i++;
                      }
                      if ($.trim(pthighs) == '') {
                        correct = false;
                        alertText[i] = "Pant-Thighs";
                        i++;
                      }
                      if ($.trim(plength) == '') {
                        correct = false;
                        alertText[i] = "Pant-Length";
                        i++;
                      }
                      if ($.trim(pbottom) == '') {
                        correct = false;
                        alertText[i] = "Pant-Bottom";
                        i++;
                      }
                      if ($.trim(pknee) == '') {
                        correct = false;
                        alertText[i] = "Pant-Knee";
                        i++;
                      }

                      if ($.trim(pstomach) == '') {
                        correct = false;
                        alertText[i] = "Pant-Stomach";
                        i++;
                      }
                    }
                    if(user == null && correct == true)
                    {
                        $('#exampleModal').modal('show');
                        $('#login_error').removeClass('d-none');
                        count--;
                    }
                    else
                    {
                      if ($.trim(age) == '') {
                        correct = false;
                        alertText[i] = "Age";
                        i++;
                      }
                      if ($.trim(height) == '') {
                        correct = false;
                        alertText[i] = "Height";
                        i++;
                      }
                      if ($.trim(height_type) == '') {
                        correct = false;
                        alertText[i] = "Height Type";
                        i++;
                      }
                      if ($.trim(weight) == '') {
                        correct = false;
                        alertText[i] = "Weight";
                        i++;
                      }
                    }
                    console.log(alertText.length);
                    if (alertText.length != 0) {
                      console.log("errrrrrrr");
                      $('#alertnone').removeClass('d-none');
                    }
                    var html = "";
                    html += alertText;
                    $('#need').html(html);
                    // swal({
                    //     title: "Error",
                    //     text : "Need to fill this field - " + alertText,
                    //     icon : "error",
                    // }).then(function() {
                    // });
                  // }
                  //check end
                  // alert(correct);
                  if (correct == true && user != null) {
                    store_measure();
                    store_order();
                    store_suit_code();
                  } else {
                    count--;
                  }


                }
              }
            }


          } else {
            var html = "";
            if (count == 1) {
              $('#vtext1').html("product");
              $('#vtext2').html("PRODUCT");
              $('#confirm').modal('show');
            }
          }

          // alert(count);
          if (count === 1) {
            $('#step_title').html('Choose the Product');

          }
          if(count === 2) {
            $('#next-unconfirm').hide();
            $('#step_title').html('Choose the package');
            $('#cus_cate_id').val(cus_cate_id);
            $('#next-unconfirm').hide();
          }
          if (count === 3) {

            $('#step_title').html('style recommendations');
            $('#next-arrow').hide();
            $('#next-unconfirm').show();
            $('#package_id').val(package_id);

          }
          if (count === 4) {
            $('#step_title').html('style customization');
            // $('#style_id').val(1);
            $('#next-arrow').show();
            $('#next-unconfirm').hide();

          }
          if (count === 5) {

            $('#step_title').html('get measurements');

          }
          if (count === 6) {
            // alert("st-6");

            // store_order();
            $('#step_title').html('Payment For Your Suit')
          }
          // if(count === 7) {
          //   $('#step_title').html('Order confirmed')
          // }

          var prev = count - 1;
          $('#step' + prev).addClass('d-none');
          $('#ind' + count).addClass('indicator-select')
          $('#step' + count).removeClass('d-none');
          $('#step' + count).addClass('d-block');
          $('#step_no').html(count);
          window.scrollTo(0, 0);
          var user = @json($user);
          if(sessionStorage.getItem('has_step') != null && sessionStorage.getItem('has_step') != '' && sessionStorage.getItem('has_step') != 'null')
          {
            if(user != null)
            {
              // alert("update temporary");
              update_temporary();
            }
          }
          else
          {
            if(user != null)
            {
              // alert("store temporary");
              store_temporary();
            }

          }
        }
      })

      $('#back').click(function () {
        $("#paypal-button-container").hide();
        $('#next-arrow').show();
        // alert(count);
        if (count != 1) {
          count--;
          if (count === 1) {
            $('#step_title').html('Choose the Product')
          }
          if(count === 2) {
            $('#next-unconfirm').hide();
            $('#step_title').html('Choose the package')
            $('#next-unconfirm').hide();
          }
          if (count === 3) {
            $('#next-arrow').hide();
            $('#next-unconfirm').show();
            $('#step_title').html('style recommendations');
            $('#package_id').val(package_id);
            step3_selected();
            }
            if(count === 4) {
            $('#next-unconfirm').hide();
            $('#step_title').html('style customization');
            $('#style_id').val(1);
            $('#next-unconfirm').hide();
          }
          if (count === 5) {

            $('#step_title').html('get measurements');
            show_measure_data();
          }
          if (count === 6) {
            // alert("st-6");
            if(user != null)
            {
              store_order();
              store_suit_code();
            }

            $('#step_title').html('Payment For Your Suit')
          }
          var next = count + 1;
          $('#step' + next).addClass('d-none');
          $('#ind' + (count + 1)).removeClass('indicator-select')
          $('#step' + count).removeClass('d-none');
          $('#step' + count).addClass('d-block');
          $('#step_no').html(count);
          // alert(count);
        }
      })
    });

    $(document).ready(function () {
      // alert(count);
      if(count != 6)
      {
        $('#step6').addClass('d-none');
      }
      if(count == 1)
      {
        $('#step1').removeClass('d-none');
      }
      // sessionStorage.setItem('measure_unit',"cm");
      // $('#style_nav_check_BUSINESS CONFERENCE').tab('show');
      step1_selected();
      step3_selected();
      step4_selected();
      step5_selected();

      // $('.type').select2({
      //   minimumResultsForSearch: Infinity
      // });
      // $('.htype').select2({
      //   minimumResultsForSearch: Infinity
      // });
    });
    $(document).ready(function () {
      $('.height-type').select2({
        minimumResultsForSearch: Infinity
      });
    });


    /*Dropdown Menu*/
    $('.dropdown').click(function () {
      $(this).attr('tabindex', 1).focus();
      $(this).toggleClass('active');
      // $(this).find('.dropdown-menu').slideToggle();
    });
    $('.dropdown').focusout(function () {
      $(this).removeClass('active');
      // $(this).find('.dropdown-menu').slideUp();
    });
    $('.dropdown .dropdown-menu li').click(function () {
      $(this).parents('.dropdown').find('span').text($(this).text());
      $(this).parents('.dropdown').find('input').attr('value', $(this).attr('id'));
    });
    /*End Dropdown Menu*/


    // $('.dropdown-menu li').click(function () {
    //     var input = '<strong>' + $(this).parents('.dropdown').find('input').val() + '</strong>',
    //         msg = '<span class="msg">Hidden input value: ';
    //     $('.msg').html(msg + input + '</span>');
    // });

    // scroll function
    let scrollBtn = document.getElementById("scrollBtn");
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        scrollBtn.style.display = "block";
        scrollBtn.style.opacity = "1";
        // scrollBtn.style.transform = "scale(1)";
        scrollBtn.style.pointerEvents = "all";
      } else {
        scrollBtn.style.display = "none";
        scrollBtn.style.opacity = "0";
        // scrollBtn.style.transform = "scale(1)";
        scrollBtn.style.pointerEvents = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

    // end scroll function

    // function radio(id) {
    //     $.ajax({
    //         method: "Get",
    //         url: "{{ route('ajex_package') }}",
    //         cache: false,
    //         dataType: "json",
    //         data: {
    //             id: id,
    //         },
    //         success: function (data) {
    //           console.log(data.title);
    //           document.getElementById("description").innerHTML = `<p class="mb-2 h5">`+data
    //             .title+`</p>
    //           <p class="text-white-50 mb-3">`+data.description+`</p>
    //           <div class="d-flex text-uppercase justify-content-evenly flex-column flex-lg-row
    //           mb-3">
    //             <p  class="mb-2">Price Start From : `+data.price+`</p>
    //             <p  class="mb-2">Made In : `+data.made_in+`</p>
    //             <p  class="mb-2">Suit By : `+data.tailor+`</p>
    //           </div>`;
    //         },
    //         error: function (err) {
    //             console.log(err);
    //         }

    //     })
    // }

    function cus2_option(id) {
      // alert("helllllll");
        $.ajax({
            method: "Get",
            url: "{{ route('get_filter_recomment_style') }}",
            cache: false,
            dataType: "json",
            data: {
                id: id,
            },
            success: function (data) {

              $(document).ready(function(){
                var style_n = '';
                var style_nav = '';
                // var j_data = JSON.parse(data);
                $.each(data, function(i,v){

                  var id = v.id;
                  // alert(id);
                  var name = v.name;
                  var photo = v.photo_one;
                  var category = v.category;
                  var type = v.type;
                  console.log(v.type);
                  style_n += `<div onclick="style_popup${v.id}" class="col-6 col-md-4">
                  <div for="style_nav_check_${v.category}" class="radio-group ">`;
                    if(v.id == sessionStorage.getItem('style_id'))
                    {
                      style_n+=`<input type="radio" name="test" id="style_check${v.id}" class="form-check-input"/>`
                    }
                    style_n+=`
                  <div class="cursor-pointer" data-bs-toggle="modal"
                      data-bs-target="#myCategory${id}">
                    <img src="{{'/assets/images/categories/style/${photo}'}}" alt=""
                        class="cus-img-res">
                    <p class="text-center mt-2" id="style_data${v.id}">${name}/${type}</p>
                  </div>
                  </div>
                </div>`

                })

                $('#style_card').html(style_n);
                   if(id == 1){
                    $('#cus1_jacket').show();
                    $('#cus2_option').hide();
                    $('.select2').hide();
                    $('#cus1_vest').hide();
                    $('#cus1_pant').hide();
                  }else if(id == 2){
                    $('#cus1_jacket').hide();
                    $('#cus2_option').hide();
                    $('.select2').hide();
                    $('#cus1_pant').hide();
                    $('#cus1_vest').show();
                  }else if(id == 3){
                    $('#cus1_jacket').hide();
                    $('#cus2_option').hide();
                    $('.select2').hide();
                    $('#cus1_pant').show();
                    $('#cus1_vest').hide();
                  }else {
                    $('#cus1_jacket').show();
                    $('#cus2_option').show();
                    $('.select2').show();
                    $('#cus1_pant').show();
                    $('#cus1_vest').show();

                  };
              });

            },
            error: function (err) {
                console.log(err);

            }

        })

    }

    function get_style_pop_up(id){
      $.ajax({
            method: "Get",
            url: "{{ route('get_style_pop_up') }}",
            cache: false,
            dataType: "json",
            data: {
                id: id,
            },
            success: function (data) {

              $(document).ready(function(){
                var style_n = '';
                var style_nav = '';
                // var j_data = JSON.parse(data);
                $.each(data, function(i,v){

                  var id = v.id;
                  // alert(id);
                  var name = v.name;
                  var photo = v.photo_one;
                  var category = v.category;
                  var type = v.type;
                  console.log(v.type);
                  style_photo += ``

                })

                $('#style_card').html(style_n);
              });

            },
            error: function (err) {
                console.log(err);

            }

        })
    }

    function jacket_button(style) {
      $.ajax({
        method: "Get",
        url: "{{ route('get_jacket_button') }}",
        cache: false,
        dataType: "json",
        data: {
          style: style,
        },
        success: function (data) {
          console.log(data.style);
          $(document).ready(function () {
            var style_n = '';
            // var j_data = JSON.parse(data);
            $.each(data, function (i, v) {


              var color = v.color;
              var style = v.style;
              var photo = v.photo_one;
              var description = v.description;
              console.log(name);
              style_n += `<label class="row cursor-pointer mb-5" for="sb1">
                                      <span class="col-md-6 mb-2 d-flex flex-column justify-content-center">
                                        <span class="row g-0 mb-2">
                                          <span class="col-1 mt-1">
                                            <input type="radio" name="jacket" id="sb1"
                                                    class="form-check-input me-2 mb-1"/>
                                          </span>
                                          <span class="col-11 ps-2">
                                            <span class="title">${color}</span>
                                          </span>
                                        </span>
                                        <span class="text-white-50 d-block">
                                         ${description}
                                        </span>
                                      </span>
                                  <span class="col-md-6 jacket">
                                      <span class="fit-img-container">
                                        <img src="{{'/assets/images/customize/top/${photo}'}}" alt="" class="">
                                      </span>
                                    </span>
                                </label>`

            })
            $('#jacket-style').html(style_n);
          });

        },
        error: function (err) {
          console.log(err);
        }

      })

    }

    function vest_lapel(style) {
      $.ajax({
        method: "Get",
        url: "{{ route('get_vest_lapel') }}",
        cache: false,
        dataType: "json",
        data: {
          style: style,
        },
        success: function (data) {
          console.log(data.style);
          $(document).ready(function () {
            var style_n = '';
            // var j_data = JSON.parse(data);
            $.each(data, function (i, v) {


              var color = v.color;
              var style = v.style;
              var photo = v.photo_one;
              var description = v.description;
              console.log(name);
              style_n += `<label class="row cursor-pointer mb-5" for="sb1">
                                      <span class="col-md-6 mb-2 d-flex flex-column justify-content-center">
                                        <span class="row g-0 mb-2">
                                          <span class="col-1 mt-1">
                                            <input type="radio" name="jacket" id="sb1"
                                                    class="form-check-input me-2 mb-1"/>
                                          </span>
                                          <span class="col-11 ps-2">
                                            <span class="title">${color}</span>
                                          </span>
                                        </span>
                                        <span class="text-white-50 d-block">
                                         ${description}
                                        </span>
                                      </span>
                                  <span class="col-md-6 jacket">
                                      <span class="fit-img-container">
                                        <img src="{{'/assets/images/customize/shirt_button/${photo}'}}" alt="" class="">
                                      </span>
                                    </span>
                                </label>`

            })
            $('#vest-lapel').html(style_n);
          });

        },
        error: function (err) {
          console.log(err);
        }

      })

    }

    function pant_pleat(style) {
      $.ajax({
        method: "Get",
        url: "{{ route('get_pant_pleat') }}",
        cache: false,
        dataType: "json",
        data: {
          style: style,
        },
        success: function (data) {
          console.log(data.style);
          $(document).ready(function () {
            var style_n = '';
            // var j_data = JSON.parse(data);
            $.each(data, function (i, v) {
              var color = v.color;
              var style = v.style;
              var photo = v.photo_one;
              var description = v.description;
              console.log(name);
              style_n += `<label class="row cursor-pointer mb-5" for="sb1">
                                      <span class="col-md-6 mb-2 d-flex flex-column justify-content-center">
                                        <span class="row g-0 mb-2">
                                          <span class="col-1 mt-1">
                                            <input type="radio" name="jacket" id="sb1"
                                                    class="form-check-input me-2 mb-1"/>
                                          </span>
                                          <span class="col-11 ps-2">
                                            <span class="title">${color}</span>
                                          </span>
                                        </span>
                                        <span class="text-white-50 d-block">
                                          ${description}
                                        </span>
                                      </span>
                                  <span class="col-md-6 jacket">
                                      <span class="fit-img-container">
                                        <img src="{{'/assets/images/customize/pant/${photo}'}}" alt="" class="">
                                      </span>
                                    </span>
                                </label>`

            })
            $('#pleat-selection').html(style_n);
          });

        },
        error: function (err) {
          console.log(err);
        }

      })

    }
    function style_filter_reload()
    {
      $.ajax({
        method: "Get",
        url: "{{ route('get_filter_recomment_style') }}",
        cache: false,
        dataType: "json",
        data: {
          name: sessionStorage.getItem('suit_piece'),

          cus_cate_id : sessionStorage.getItem('customize_category_id')
        },
        success: function (data) {
          console.log(data);
          $(document).ready(function () {
            var style_n = '';
            // var j_data = JSON.parse(data);
            $.each(data, function (i, v) {


              var name = v.name;
              var photo = v.photo_one;
              var pieces = v.pieces;
              console.log(pieces);
              style_n += `<div class="col-6 col-md-4">
              <div class="radio-group ">
              <input type="radio" name="test" id="style_check${v.id}" class="form-check-input"/>
                  <div class="cursor-pointer" data-bs-toggle="modal"
                      data-bs-target="#myCategory${v.id}" onclick="get_swiper(${v.id})">
                    <img src="{{'/assets/images/categories/style/${photo}'}}" alt=""
                        class="cus-img-res">
                    <p class="text-center mt-2" id="style_data${v.id}">${name}/${v.type_id}/${v.pieces}/${v.category}</p>
                  </div>
                  </div>
                </div>`

            })
            $('#style_card').html(style_n);
            if(name == 2){
              // alert("2two");
              $('#cus1_jacket').show();
              $('#cus1_vest').hide();
              $('#cus1_pant').show();
            }else if(name == 3)
            {
              // alert("3three");
              $('#cus1_jacket').show();
              $('#cus1_vest').show();
              $('#cus1_pant').show();
            }
          });

        },
        error: function (err) {
          console.log(err);
        }

      })
    }
    function style_filter(name) {
      // alert("style filter");
      if(count == 3)
      {
        sessionStorage.setItem('suit_piece',name);

      }
      $.ajax({
        method: "Get",
        url: "{{ route('get_filter_recomment_style') }}",
        cache: false,
        dataType: "json",
        data: {
          name: name,

          cus_cate_id : sessionStorage.getItem('customize_category_id')
        },
        success: function (data) {
          console.log(data);
          $(document).ready(function () {
            var style_n = '';
            // var j_data = JSON.parse(data);
            $.each(data, function (i, v) {


              var name = v.name;
              var photo = v.photo_one;
              var pieces = v.pieces;
              console.log(pieces);
              style_n += `<div class="col-6 col-md-4">
              <div class="radio-group ">
              <input type="radio" name="test" id="style_check${v.id}" class="form-check-input"/>
                  <div class="cursor-pointer" data-bs-toggle="modal"
                      data-bs-target="#myCategory${v.id}" onclick="get_swiper(${v.id})">
                    <img src="{{'/assets/images/categories/style/${photo}'}}" alt=""
                        class="cus-img-res">
                    <p class="text-center mt-2" id="style_data${v.id}">${name}/${v.type_id}/${v.pieces}/${v.category}</p>
                  </div>
                  </div>
                </div>`

            })
            $('#style_card').html(style_n);
            if(name == 2){
              // alert("2two");
              $('#cus1_jacket').show();
              $('#cus1_vest').hide();
              $('#cus1_pant').show();
            }else if(name == 3)
            {
              // alert("3three");
              $('#cus1_jacket').show();
              $('#cus1_vest').show();
              $('#cus1_pant').show();
            }
          });

        },
        error: function (err) {
          console.log(err);
        }

      })

    }
    function style_nav_reload()
    {
      // alert("style nav reload");

      // alert("hello");
      $.ajax({
        method: "Get",
        url: "{{ route('ajex_get_style') }}",
        cache: false,
        dataType: "json",
        data: {
          piece:sessionStorage.getItem('suit_piece'),
          id: sessionStorage.getItem('style_cate_id'),
          cus_cate_id: sessionStorage.getItem('customize_category_id'),
        },
        success: function (data) {
          console.log(data);
            var style_n = '';
            // var j_data = JSON.parse(data);
            $.each(data, function (i, v) {
              var name = v.name;
              var photo = v.photo_one;
              console.log(name);
              style_n += ` <div class="col-md-4">
              <div class="radio-group ">
              <input type="radio" name="test" id="style_check${v.id}" class="form-check-input"/>
                  <div class="cursor-pointer" data-bs-toggle="modal"
                      data-bs-target="#myCategory${v.id}" onclick="get_swiper(${v.id})">
                    <img src="{{'/assets/images/categories/style/${photo}'}}" alt=""
                        class="cus-img-res">
                    <p class="text-center mt-2" id="style_data${v.id}">${name}/${v.type_id}/${v.pieces}/${v.category}</p>
                  </div>
                  </div>
                </div>`
            })
            $('#style_card').html(style_n);


        },
        error: function (err) {
          console.log(err);
        }


        })
    }
    function style_nav(name,id) {
      // alert("style nav");
      $('#style_rec_cate_id').val(id);
      sessionStorage.setItem('style_cate_name',name);
      sessionStorage.setItem('style_cate_id',id);
      // alert("hello");
      $.ajax({
        method: "Get",
        url: "{{ route('ajex_get_style') }}",
        cache: false,
        dataType: "json",
        data: {
          name: name,
          piece:sessionStorage.getItem('suit_piece'),
          id: id,
          cus_cate_id: sessionStorage.getItem('customize_category_id'),
        },
        success: function (data) {
          $(document).ready(function () {
            var style_n = '';
            // var j_data = JSON.parse(data);
            $.each(data, function (i, v) {
              var name = v.name;
              var photo = v.photo_one;
              console.log(name);
              style_n += ` <div class="col-md-4">
              <div class="radio-group ">
              <input type="radio" name="test" id="style_check${v.id}" class="form-check-input"/>
                  <div class="cursor-pointer" data-bs-toggle="modal"
                      data-bs-target="#myCategory${v.id}" onclick="get_swiper(${v.id})">
                    <img src="{{'/assets/images/categories/style/${photo}'}}" alt=""
                        class="cus-img-res">
                    <p class="text-center mt-2" id="style_data${v.id}">${name}/${v.type_id}/${v.pieces}/${v.category}</p>
                  </div>
                  </div>
                </div>`
            })
            $('#style_card').html(style_n);
          });

        },
        error: function (err) {
          console.log(err);
        }


                      })
                    }





    function style_rec(id, name) {
      // alert("ooo"+name);
      $('#style_rec_name').val(name);
      // alert("successfully added style");
      $('#style_rec_id').val(id);
      sessionStorage.setItem('style_id',id);
      sessionStorage.setItem('style_name',name);
    }

    function get_style_st6() {
      var style_cate_id = $('#style_rec_cate_id').val();
      // alert(style_id);
      $.ajax({
        type: 'POST',
        url: '/get_style_ajax',
        data: {
          "_token": "{{csrf_token()}}",
          "style_cate_id": style_cate_id,
        },
        success: function (data) {
          console.log(data.styles.data);
          var html = "";
          $.each(data.styles.data, function (i, v) {
            html += `
            <div class="col-6 col-md-3">
              <div class="cursor-pointer" data-bs-toggle="modal"
                data-bs-target="#myCategory${v.name}">
                <div class="mb-1">
                  <img src="{{asset('/assets/images/categories/style/${v.photo_one}')}}"
                       alt="" class="">
                </div>
                <div class="text-center mt-4">
                  <p class="text-gold">${v.name}</p>
                </div>
              </div>
            </div>
            `;
          });
          $('#rec_style_space').html(html);
        }
      });
    }

    $('#view_more_style_to3').click(function () {
      var style_rec_name = $('#style_rec_name').val();
      // alert(style_rec_name);
      count = 3;
      var prev = count - 1;
      $('#step_title').html('Payment For Your Suit');
      $('#step6').addClass('d-none');
      $('#step3').removeClass('d-none');
      $('#step_no').html(count);
      $('#next-arrow').show();
      window.scrollTo(0, 0);
      // alert("view more");
      var style_cate_id = $('#style_rec_cate_id').val();
      // alert(style_cate_id);
      $.ajax({
        type: 'POST',
        url: '/get_style_view_more_ajax',
        data: {
          "_token": "{{csrf_token()}}",
          "style_cate_id": style_cate_id,
        },
        success: function (data) {
          console.log(data);
          $('#view_more_status').val(1);
          var style_n = '';
          // var j_data = JSON.parse(data);
          $.each(data, function (i, v) {


            var name = v.name;
            var photo = v.photo_one;
            console.log(name);
            style_n += ` <div class="col-md-4" onclick="style_rec(${v.id})">
            <div class="radio-group ">
              <input type="radio" name="test" id="style_check${v.id}" class="form-check-input"/>
          <div class="cursor-pointer" data-bs-toggle="modal"
              data-bs-target="#myCategory${style_rec_name}">
            <img src="{{'/assets/images/categories/style/${photo}'}}" alt=""
                class="cus-img-res">
            <p class="text-center mt-2" id="style_data${v.id}">${name}</p>
          </div>
          </div>
        </div>`

          })
          $('#style_card').html(style_n);
        }
      });
    })

    function store_measure() {
      // alert("store_measure");
      var cus_cate_id = sessionStorage.getItem('customize_category_id');
      var correct = true;

      var upperID = $('#upper_measure_id').val();
      var lowerID = $('#lower_measure_id').val();

      var user = @json($user);
      var age = $('#age').val();
      var weight = $('#weight').val();
      var weight_type = $('#weight_type').val();
      var height = $('#height_value').val();
      var height_type = $('#height_type').val();
      //jacket and vest
      var chest = $('#chest').val();
      var waist = $('#waist').val();
      var hips = $('#hips').val();
      var shoulder = $('#shoulder').val();
      var sleeve = $('#sleeve').val();
      var front = $('#front').val();
      var back = $('#back_back').val();
      var neck = $('#neck').val();
      var jlength = $('#jlength').val();
      sessionStorage.setItem('age',age);
      sessionStorage.setItem('weight',weight);
      sessionStorage.setItem('weight_type',weight_type);
      sessionStorage.setItem('height',height);
      sessionStorage.setItem('height_type',height_type);

      sessionStorage.setItem('chest',chest);
      sessionStorage.setItem('waist',waist);
      sessionStorage.setItem('hips',hips);
      sessionStorage.setItem('shoulder',shoulder);
      sessionStorage.setItem('sleeve',sleeve);
      sessionStorage.setItem('front',front);
      sessionStorage.setItem('back',back);
      sessionStorage.setItem('neck',neck);
      sessionStorage.setItem('jlength',jlength);
      //pant
      var pcrotch = $('#pcrotch').val();
      var pthighs = $('#pthighs').val();
      var plength = $('#plength').val();
      var pbottom = $('#pbottom').val();
      var pknee = $('#pknee').val();
      var pstomach = $('#pstomach').val();
      sessionStorage.setItem('pcrotch',pcrotch);
      sessionStorage.setItem('pthighs',pthighs);
      sessionStorage.setItem('plength',plength);
      sessionStorage.setItem('pbottom',pbottom);
      sessionStorage.setItem('pknee',pknee);

      sessionStorage.setItem('pstomach',pstomach);
      // alert(upperID);
      // alert(lowerID);

      $.ajax({
        type: 'POST',
        url: '/store_measure_ajax',
        data: {
          "_token": "{{csrf_token()}}",
          "cus_cate_id": cus_cate_id,
          "upper_id": upperID,
          "lower_id": lowerID,
          "age": sessionStorage.getItem('age'),
          "height": sessionStorage.getItem('height'),
          "height_type": sessionStorage.getItem('height_type'),
          "weight": sessionStorage.getItem('weight'),
          "weight_type": sessionStorage.getItem('weight_type'),

          "chest": sessionStorage.getItem('chest'),
          "waist": sessionStorage.getItem('waist'),
          "hips": sessionStorage.getItem('hips'),
          "shoulder": sessionStorage.getItem('shoulder'),
          "sleeve": sessionStorage.getItem('sleeve'),
          "front": sessionStorage.getItem('front'),
          "back": sessionStorage.getItem('back'),
          "neck": sessionStorage.getItem('neck'),
          "jlength": sessionStorage.getItem('jlength'),

          "measure_type" : sessionStorage.getItem('measure_unit'),

          "pcrotch": sessionStorage.getItem('pcrotch'),
          "pthighs": sessionStorage.getItem('pthighs'),
          "plength": sessionStorage.getItem('plength'),
          "pbottom": sessionStorage.getItem('pbottom'),
          "pknee": sessionStorage.getItem('pknee'),
          "pstomach": sessionStorage.getItem('pstomach'),
        },
        success: function (data) {
          console.log(data);
          if (data.msg == "success") {
            $('#upper_measure_id').val(data.upper_id);
            $('#lower_measure_id').val(data.lower_id);
            sessionStorage.setItem('upper_id',data.upper_id);
            sessionStorage.setItem('lower_id',data.lower_id);
            sessionStorage.getItem('measured',1);
            update_temporary();
            $('#measure_step_pass').val(1);
            // $('#alertnone').addClass('d-none');
            swal({
              title: "Success!",
              text: "Successfully Saved Measurement!",
              icon: "success",
            }).then(function () {

              // alert("st-6");
              if(user != null)
              {
                store_order();
                store_suit_code();
              }

              //   $('#step_title').html('Payment For Your Suit')
              //   var prev = 6 - 1;
              // $('#step' + prev).addClass('d-none');
              // $('#ind' + 6).addClass('indicator-select')
              // $('#step' + 6).removeClass('d-none');
              // $('#step' + 6).addClass('d-block');
              // $('#step_no').html(6);
              // window.scrollTo(0, 0);

              // $('#age').val("");
              // $('#height').val("");
              // $('#weight').val("");
              // // $('#we').val("");

              // $('#chest').val("");
              // $('#waist').val("");
              // $('#hips').val("");
              // $('#shoulder').val("");
              // $('#sleeve').val("");
              // $('#front').val("");
              // $('#back').val("");
              // $('#neck').val("");
              // $('#r_low').val("");
              // $('#l_low').val("");
              // $('#back_back').val("");

              // $('#pwaist').val("");
              // $('#phips').val("");
              // $('#pcrotch').val("");
              // $('#pthighs').val("");
              // $('#plength').val("");
              // $('#pbottom').val("");
              // $('#pknee').val("");
              // $('#pshorts').val("");
              // $('#pstomach').val("");
              $('#next-arrow').hide();
            });
          }
        }

      });
    }

    function change_text() {
      var user = @json($user);
      if(user == null)
      {
        $('#exampleModal').modal('show');
        $('#login_error').removeClass('d-none');
      }

      $('#alertnone').addClass('d-none');
    }

    function store_order() {
      // alert("do store order");
      // alert("store_order"+$('#order_id').val());
      var addr = $('#order_address').val();
      var user = @json($user);
      console.log("User = "+user);
      var cus_cate_id = sessionStorage.getItem('customize_category_id');
      var package_id = sessionStorage.getItem('package_id');
      var style_id = sessionStorage.getItem('style_id');
      var upper_id = $('#upper_measure_id').val();
      var lower_id = $('#lower_measure_id').val();
      var order_id = $('#order_id').val();
      // alert("Order ID = "+order_id);
      // if(sessionStorage.getItem('suit_piece') == null && sessionStorage.getItem('suit_piece') == '')
      // {
      //   var suit_piece = ''
      // }
      // else
      // {
      //   var suit_piece = sessionStorage.getItem('suit_piece')
      // }

      $.ajax({
        type: 'POST',
        url: 'ajax_store_order',
        dataType: 'json',
        data: {
          "_token": "{{ csrf_token() }}",
          "cus_cate_id": cus_cate_id,
          "package_id": package_id,
          "total_price":sessionStorage.getItem('cus_total_price'),
          "style_id": style_id,
          "upper_id": upper_id,
          "lower_id": lower_id,
          "order_id": order_id,
          "jacket_id":sessionStorage.getItem('jacket_id'),
          "pant_id":sessionStorage.getItem('pant_id'),
          "fitting":sessionStorage.getItem('fitting'),
          "texture_id" : sessionStorage.getItem('texture_id'),
          "user_id" : user,
          "address" : sessionStorage.getItem('address'),
          "suit_code":sessionStorage.getItem('suit_code'),
          "vest_id":sessionStorage.getItem('vest_id'),
          "suit_piece" : sessionStorage.getItem('suit_piece'),
          "jacket_in" : sessionStorage.getItem('jacket_in'),
          "vest_in" : sessionStorage.getItem('vest_in'),
          "pant_in" : sessionStorage.getItem('pants_in'),
          "measure_type" : sessionStorage.getItem('measure_unit'),
          "suit_piece" : sessionStorage.getItem('suit_piece')
        },
        success: function (data) {
          console.log("Order_id-"+data.order.id);
          $('#hidden_total').val(data.order.total);
          console.log(data);
          var html1 = "";
          var html2 = "";
          var html3 = "";

          html1 += data.order.order_code;
          html2 += data.order.suit_total;
          html3 += data.order.total;

          $('#order_id').val(data.order.id);
          sessionStorage.setItem('order_id',data.order.id);
          $('#orderCode').html(html1);
          $('#suitTotal').html(html2);
          $('#total').html(html3);
          update_temporary();
        }
      });
    }
    function store_suit_code()
    {
      // store suit code start
      // alert("sc"+$('#suit_code').val());
      var user_id = @json($user);
      $.ajax({
        type: 'POST',
        url: '/store_suit_code_step6_ajax',
        data: {
          "_token": "{{csrf_token()}}",
          "suit_code": $('#suit_code').val(),
          "user_id" : user_id
        },
        success: function (data) {
          console.log("ajax check do!!!");
          html="";
          html2 = "";
          html3 = "";
          html += data.suit_code;
          html2 += data.suit_total;
          html3 += data.suit_total;
          $('#suitCode').html(html);

          console.log(data);
          sessionStorage.setItem('suit_code',data.suit_code);
          $('#suit_code').val(sessionStorage.getItem('suit_code'));
        }
      });
      // store_suit code end
    }
    function show_measure_data() {
      // alert("show measure data");
      var cus_cate_id = sessionStorage.getItem('customize_category_id');
      if (cus_cate_id == 1 || cus_cate_id == 2) {
        $('#lower_measure_space').hide();
      } else if (cus_cate_id == 3) {
        $('#upper_measure_space').hide();
      }
      else if(cus_cate_id == 9)
      {
        $('#lower_measure_space').show();
        $('#upper_measure_space').show();
      }
    }

    // begin  infinite scroll
    var ENDPOINT = "{{ url('/') }}";
    var page = 1;
    var start = 0;
    var pageNo = 0;
    infinteLoadMore(page)
    $(window).scroll(function () {
      // console.log("work scroll function!!");
      if ($(window).scrollTop() + $(window).height() >= ($(document).height() - 200)) {
        console.log("work scroll function inside!!page = " + page);
        page++;
        start = (page * 6) - 6;
        // console.log('Page = ' + page);
        infinteLoadMore(page);
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
          "start": start
        },
        beforeSend: function () {
          $('.auto-load').show();
        }

      })
        .done(function (response) {
          console.log(response);
          // console.log("PAGE"+response.page_no);

          console.log(response.res.length);
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

    $('#view_more_additional_page').click(function () {
      sessionStorage.setItem('step6', '1');
      window.location.href = "additional";
    })
    $('#esf').click(function(){
      sessionStorage.setItem('fitting',1)
    })
    $('#sf').click(function(){
      sessionStorage.setItem('fitting',2)
    })
    $('#rf').click(function(){
      sessionStorage.setItem('fitting',3)
    })
    $('#lf').click(function(){
      sessionStorage.setItem('fitting',4)
    })
    function getvest(value)
    {
      // alert(value);
      sessionStorage.setItem('vest_id',value);
    }
    function getjacket(value)
    {
      // alert(value);
      sessionStorage.setItem('jacket_id',value);
    }
    function getpant(value)
    {
      // alert(value);
      sessionStorage.setItem('pant_id',value);
    }
    function update_temporary()
    {
      // sessionStorage.setItem('has_step',response.data.has_step);
      $.ajax({
        type: 'POST',
        url: '/update_customize_step_data',
        data: {
          "_token": "{{csrf_token()}}",
          "user_id":1,
          "cus_cate_id": sessionStorage.getItem('customize_category_id'),
          "package_id" : sessionStorage.getItem('package_id'),
          "style_id" : sessionStorage.getItem('style_id'),
          "style_name" : sessionStorage.getItem('style_name'),
          "style_cate_name" : sessionStorage.getItem('style_cate_name'),
          "style_cate_id" : sessionStorage.getItem('style_cate_id'),
          "fitting" : sessionStorage.getItem('fitting'),
          "texture_id" : sessionStorage.getItem('texture_id'),
          "jacket_id" : sessionStorage.getItem('jacket_id'),
          "vest_id" : sessionStorage.getItem('vest_id'),
          "pant_id" : sessionStorage.getItem('pant_id'),
          "upper_id" : sessionStorage.getItem('upper_id'),
          "lower_id" : sessionStorage.getItem('lower_id'),
          "order_id" : sessionStorage.getItem('order_id'),
          "step_no" : sessionStorage.getItem('step_no'),
          "has_step" : sessionStorage.getItem('has_step'),
          "measured" : sessionStorage.getItem('measure_step'),
          "suit_piece" : sessionStorage.getItem('suit_piece'),
          "jacket_in" : sessionStorage.getItem('jacket_in'),
          "vest_in" : sessionStorage.getItem('vest_in'),
          "pant_in" : sessionStorage.getItem('pants_in'),
          "cus_total_price" : sessionStorage.getItem('cus_total_price'),
          "package_price" : sessionStorage.getItem('package_price'),
          "texture_price" : sessionStorage.getItem('texture_price'),
          "measure_type" : sessionStorage.getItem('measure_unit'),
          "suit_code" : sessionStorage.getItem('suit_code')
        },
        success: function (data) {

        }
      });
    }
    function store_temporary()
    {
      var user = @json($user);
      $.ajax({
        type: 'POST',
        url: '/store_customize_step_data',
        data: {
          "_token": "{{csrf_token()}}",
          "user_id":user,
          "cus_cate_id": sessionStorage.getItem('customize_category_id'),
          "package_id" : sessionStorage.getItem('package_id'),
          "style_id" : sessionStorage.getItem('style_id'),
          "style_name" : sessionStorage.getItem('style_name'),
          "style_cate_name" : sessionStorage.getItem('style_cate_name'),
          "style_cate_id" : sessionStorage.getItem('style_cate_id'),
          "fitting" : sessionStorage.getItem('fitting'),
          "texture_id" : sessionStorage.getItem('texture_id'),
          "jacket_id" : sessionStorage.getItem('jacket_id'),
          "vest_id" : sessionStorage.getItem('vest_id'),
          "pant_id" : sessionStorage.getItem('pant_id'),
          "upper_id" : sessionStorage.getItem('upper_id'),
          "lower_id" : sessionStorage.getItem('lower_id'),
          "order_id" : sessionStorage.getItem('order_id'),
          "step_no" : sessionStorage.getItem('step_no'),
          "measured" : sessionStorage.getItem('measure_step'),
        },
        success: function (data) {
          sessionStorage.setItem('has_step',data.has_step);
        }
      });
    }
    function step1_selected()
    {
      // alert("work step1 selected");
      $("#cus_checked"+sessionStorage.getItem('customize_category_id')).click();
    }
    function step2_selected()
    {
      // alert("work step2 selected");
    }
    function step3_selected()
    {
      $('#style_nav_check_'+sessionStorage.getItem('style_cate_id')).addClass('active');
      // start

      //end
      // $('#style_modal_click'+parseInt(sessionStorage.getItem('style_id'))).trigger('click');
      // $('#style_check'+parseInt(sessionStorage.getItem('style_id'))).prop("checked",true).trigger("click");
      // alert("new click");
      // alert("work step3 selected"+sessionStorage.getItem('style_cate_id'));
      if(sessionStorage.getItem('suit_piece') != null && sessionStorage.getItem('suit_piece') != '')
      {
        // alert("customize category is 9 and do suit pieces");
        if(count == 3)
        {
        // style_filter(sessionStorage.getItem('suit_piece'));
        var suit_piece = sessionStorage.getItem('suit_piece');
        $('#myCategory'+sessionStorage.getItem('style_name')).modal('show');
        }

      }
      else
      {
        if(count == 3)
        {
        $('#myCategory'+sessionStorage.getItem('style_name')).modal('show');
        }
      }
      if(sessionStorage.getItem('style_cate_id') != null && sessionStorage.getItem('style_cate_id') != '')
      {
        style_nav_reload();
      }
      else
      {
        style_filter_reload();
      }
      // alert(sessionStorage.getItem('customize_category_id'));
      if(sessionStorage.getItem('customize_category_id') == 9)
      {
        // alert("kotin");
        if(sessionStorage.getItem('suit_piece') == 2)
        {
          $('.rec-type').val(2).change();
        }
        else if(sessionStorage.getItem('suit_piece') == 3)
        {
          $('.rec-type').val(3).change();
        }

      }
      // $("#cus2_option option[value=3]").attr('selected','selected');
      // id="style_check${v.id}"
      // alert("check");

    }
    function step4_selected()
    {
      // alert("work step4 selected");
      //step 4 sessiondata selected start
      if(sessionStorage.getItem('fitting') != '' && sessionStorage.getItem('fitting') != null)
      {
        // alert("4in");
        if(sessionStorage.getItem('fitting') == 1)
        {
          $('#esf').attr('checked',true);
        }
        else if(sessionStorage.getItem('fitting') == 2)
        {
          $('#sf').attr('checked',true);
        }
        else if(sessionStorage.getItem('fitting') == 3)
        {
          $('#rf').attr('checked',true);
        }
        else if(sessionStorage.getItem('fitting') == 4)
        {
          $('#lf').attr('checked',true);
        }
        if(sessionStorage.getItem('suit_piece') == 3)
        {
          $('.jacket_in').show();
          $('.pants_in').show();
          $('.vest_in').show();
        }
        else if(sessionStorage.getItem('suit_piece') == 2)
        {
            $('.vest_in').hide();
            $('.jacket_in').show();
          $('.pants_in').show();
        }
        else
        {
          $('.all_in').hide();
          $('.jacket_in').hide();
          $('.pants_in').hide();
          $('.vest_in').hide();
        }
        if(sessionStorage.getItem('jacket_in') == 'true')
        {
          $('#jacket'+sessionStorage.getItem('texture_id')).attr('checked',true);
        }
        if(sessionStorage.getItem('vest_in') == 'true')
        {
          $('#vest'+sessionStorage.getItem('texture_id')).attr('checked',true);
        }
        if(sessionStorage.getItem('pants_in') == 'true')
        {
          $('#pants'+sessionStorage.getItem('texture_id')).attr('checked',true);
        }


        if(sessionStorage.getItem('jacket_id') != '' && sessionStorage.getItem('jacket_id') != null)
        {
          // alert("choose jacket done");
          $('#choose_jacket'+sessionStorage.getItem('jacket_id')).attr('checked',true);
        }
        if(sessionStorage.getItem('vest_id') != '' && sessionStorage.getItem('vest_id') != null)
        {
          $('#choose_vest'+sessionStorage.getItem('vest_id')).attr('checked',true);
        }
        if(sessionStorage.getItem('pant_id') != '' && sessionStorage.getItem('pant_id') != null)
        {
          // alert("choose pant done");
          $('#choose_pant'+sessionStorage.getItem('pant_id')).attr('checked',true);
        }
      }

      if(sessionStorage.getItem('customize_category_id') == 9)
      {
        if(sessionStorage.getItem('suit_piece') == 2){
          // alert("2two");
          $('#cus1_jacket').show();
          $('#cus1_vest').hide();
          $('#cus1_pant').show();
        }else if(sessionStorage.getItem('suit_piece') == 3)
        {
          // alert("3three");
          $('#cus1_jacket').show();
          $('#cus1_vest').show();
          $('#cus1_pant').show();
        }
      }
      //step 4 sessiondata selected end
      // alert("count4four");
      if(count == 4)
      {
        // alert("count4modal pupup");
        $('#myFabric'+sessionStorage.getItem('texture_id')).modal('show');
      }
      if(sessionStorage.getItem('package_id') != null && sessionStorage.getItem('package_id') != '')
      {
        calculate_step4();
      }

    }
    function calculate_step4()
    {
      //start calculate step2 and if choose fabric
      var html_total = "";
      if(sessionStorage.getItem('texture_id') != null && sessionStorage.getItem('texture_id') != '')
      {
        // alert("wrong cal 4");
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


    }
    function step5_selected()
    {
      // alert("auto checked");
      if(sessionStorage.getItem('measure_unit') == 'cm')
      {
        // alert("cm");
        $("#cm").prop('checked', true);
        $("#in").prop('checked', false);

      }
      else if(sessionStorage.getItem('measure_unit') == 'in')
      {
        // alert("in");
        $("#in").prop('checked',true);
        $("#cm").prop('checked', false);
      }
    }
    function get_measure_unit(unit)
    {
      // alert(unit);
      sessionStorage.setItem('measure_unit',unit);
    }
    function set_measure_unit()
    {
      // alert("set m u");
      if(sessionStorage.getItem('measure_unit') === 'cm')
      {
        $('.unit').html("cm");
      }
      else if(sessionStorage.getItem('measure_unit') === 'in')
      {
        $('.unit').html("in");
      }
      else
      {
        $('.unit').html("cm");
      }
    }

    // function available_payment()
    // {
    //   if(sessionStorage.getItem('address') == null && sessionStorage.getItem('address') == '')
    //   {
    //       $('#paypal-button-container').hide();
    //   }
    //   else
    //   {
    //     $('#paypal-button-container').show();
    //   }
    // }



  </script>
@endsection
@push('whishlist-nav')
@if(isset(Auth::guard('web')->user()->id))
<script>
    $(document).ready(function(){
      getnavData();
      // whishlist();
      // deletedata();
    });
    function getnavData(){
        var loItem = window.localStorage.getItem('Item');
        var arrayFromStroage = JSON.parse(localStorage.getItem('Item'));
        var arrayLength = arrayFromStroage.length;
        // var count = localStorage.length('Item');
        //  alert(arrayLength);
        var html = "";
        if (loItem != null) {


          itemArr = JSON.parse(loItem);

          $.each(itemArr,function(i,v){
            user_id = `{{Auth::guard('web')->user()->id}}`;
            // alert( window.userID )
          if(v.user_id == user_id)
          {
            // alert("right");
            // html += `${arrayLength}`;
            $('#fav-space').html(arrayLength);
          }else{
            html += parse('0');
          }
        });



          // document.getElementById('fav-space').innerHTML = parseInt(document.getElementById('fav-space').innerHTML) + 1;

				}else{

				}
    }
</script>
@endif
@endpush

