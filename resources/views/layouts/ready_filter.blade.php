<div class="ready__filter--items" id="style-filter">
  <p class="ready__filter--title mb-3 text-uppercase">style</p>
  <div class="ready__filter--item">
    @foreach($style_cates as $style_cate)
    <div class="ready__input--group">
      <input type="checkbox" name="style_check" id="" value="{{$style_cate->id}}" class="form-check-input me-3" onclick="getstyle(this.value,0)">
      <label for="business">{{$style_cate->name}}</label>
    </div>
    @endforeach
    {{-- <div class="ready__input--group mb-2">
      <input type="checkbox" id="wedding" class="form-check-input me-3">
      <label for="wedding">Wedding</label>
    </div> --}}
    {{-- <div class="ready__input--group mb-2">
      <input type="checkbox" id="graduation" class="form-check-input me-3">
      <label for="graduation">Graduation</label>
    </div>
    <div class="ready__input--group mb-2">
      <input type="checkbox" id="casual" class="form-check-input me-3">
      <label for="casual">Casual</label>

    </div> --}}


  </div>
  <a id="see-more">See More...</a>
</div>
<div class="ready__filter--items" id="fabric-filter">
  <p class="ready__filter--title mb-3 text-uppercase">Fabric</p>
  <div class="ready__filter--item">
    @foreach($main_textures as $main_texture)
    <div class="ready__input--group">
      <input type="checkbox" id="wool" value="{{$main_texture->id}}" class="form-check-input me-3" onclick="getstyle(0,this.value,0)">
      <label for="wool">{{$main_texture->name}}</label>
    </div>
    @endforeach
    {{-- <div class="ready__input--group mb-2">
      <input type="checkbox" id="cotton" class="form-check-input me-3">
      <label for="cotton">Cotton</label>
    </div>
    <div class="ready__input--group mb-2">
      <input type="checkbox" id="linen" class="form-check-input me-3">
      <label for="linen">Linen</label>
    </div>
    <div class="ready__input--group mb-2">
      <input type="checkbox" id="cashmere" class="form-check-input me-3">
      <label for="cashmere">Cashmere</label>
    </div> --}}

  </div>
  <a id="see-more">See More...</a>
</div>
<div class="ready__filter--items" id="price-filter">
  <p class="ready__filter--title mb-3 text-uppercase">Price</p>
  <div class="ready__filter--item">
    @foreach($packages as $package)
    <div class="ready__input--group">
      <div class="row g-0">
        <div class="col-1">
          <input type="checkbox" id="classic" value="{{$package->id}}" class="form-check-input me-3" onclick="getstyle(0,0,this.value)">
        </div>
        <div class="col-11 ps-4">
          <label for="classic">{{$package->title}} ($300 - $500)</label>
        </div>
      </div>
    </div>
    @endforeach
    {{-- <div class="ready__input--group mb-2">
      <div class="row g-0">
        <div class="col-1">
          <input type="checkbox" id="legacy" class="form-check-input me-3">
        </div>
        <div class="col-11 ps-4">
          <label for="legacy">Legacy ( $600 - $900 )</label>
        </div>
      </div>
    </div>
    <div class="ready__input--group mb-2">
      <div class="row g-0">
        <div class="col-1">
          <input type="checkbox" id="premium" class="form-check-input me-3">
        </div>
        <div class="col-11 ps-4">
          <label for="premium">Premium ($1000 - $1500)</label>
        </div>
      </div>
    </div> --}}
  </div>
</div>

<script>
$(document).ready(function(){
  console.log("ready to wear page");
})
var style_arr = [];
var texture_arr = [];
var package_arr = [];
function getstyle(value,value2,value3)
{
  // var style_check = $('input[name="style_check"]:checked').val();
  var status = style_arr.includes(value);
  var tstatus = texture_arr.includes(value2);
  var pstatus = package_arr.includes(value3);
  // alert(status)
  if(status == true)
  {
    let index_style = style_arr.indexOf(value);
    // alert(index_style)
    style_arr.splice(index_style,1)
  }
  else
  {
    if(value != 0)
    {
      style_arr.push(value);
    }
  }
  if(tstatus == true)
  {
    let index_texture = texture_arr.indexOf(value2);
    texture_arr.splice(index_texture,1)
  }
  else
  {
    if(value2 != 0)
    {
      texture_arr.push(value2);
    }
  }
  if(pstatus == true)
  {
    let index_package = package_arr.indexOf(value3);
    // alert(index_style)
    package_arr.splice(index_package,1)
  }
  else
  {
    if(value3 != 0)
    {
      package_arr.push(value3);
    }
  }

  console.log(texture_arr);
  console.log(style_arr);
  console.log(package_arr);
  if(style_arr.length != 0 || texture_arr.length != 0 || package_arr.length != 0)
  {
  $.ajax({
    type: 'POST',
    url: '/get_style_for_ready_ajax',
    data: {
      "_token": "{{csrf_token()}}",
      "style_cate_name" : style_arr,
      "texture_id" : texture_arr,
      "package_id" : package_arr
    },
  success: function (data) {
      console.log(data.qty);
      var html = "";
      var i,j=0;
      // for(i=0;i<data.readys.length;i++)
      // {
      //   html +=`
      //       <div class="col-6 col-lg-4 ready__item">
      //         <div class="ready__item--img-group">
      //           <img src="{{asset('/assets/images/categories/ready/${data.readys[i].photo_one}')}}" alt="">
      //           <i class='bx bx-heart'></i>
      //         </div>
      //         <div class="ready__item--info">
      //           <p>${data.readys[i].name}</p>
      //           <p><strong>$ ${data.readys[i].price}</strong></p>
      //         </div>
      //       </div>
      //       `;
      // }
      //old start
      if(data.qty == 1)
      {
        for(i=0;i<data.readys.length;i++)
        {
          for(j=0;j<data.readys[i].length;j++)
          {
            html +=`
            <div class="col-6 col-lg-4 ready__item" data-bs-toggle="modal"
               data-bs-target="#myready${data.readys[i][j].id}" onclick="get_swiper(${data.readys[i][j].id})">
              <div class="ready__item--img-group">
                <img src="{{asset('/assets/images/categories/ready/${data.readys[i][j].photo_one}')}}" alt="">
                <i class='bx bx-heart'></i>
              </div>
              <div class="ready__item--info">
                <p>${data.readys[i][j].name}</p>
                <p><strong>$ ${data.readys[i][j].price}</strong></p>
              </div>
            </div>
            `;
          }
        }
      }
      else if(data.qty == 2)
      {
        for(i=0;i<data.readys.length;i++)
        {
          html +=`
          <div class="col-6 col-lg-4 ready__item" data-bs-toggle="modal"
             data-bs-target="#myready${data.readys[i].id}" onclick="get_swiper(${data.readys[i].id})">
            <div class="ready__item--img-group">
              <img src="{{asset('/assets/images/categories/ready/${data.readys[i].photo_one}')}}" alt="">
              <i class='bx bx-heart'></i>
            </div>
            <div class="ready__item--info">
              <p>${data.readys[i].name}</p>
              <p><strong>$ ${data.readys[i].price}</strong></p>
            </div>
          </div>
          `;
        }
      }

      // end start
      $('#ready_space').html(html);
  }
});
  }
  else
  {
    window.location.reload();
  }
}

</script>
