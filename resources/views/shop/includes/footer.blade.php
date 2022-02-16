<footer class="footer_area section_padding_100_0">
    <div class="container">
        <div class="row">
            <!-- Single Footer Area -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                <div class="single_footer_area mb-100">
                    <div class="footer_heading mb-4">
                        <h6>Contact Us</h6>
                    </div>
                    <ul class="footer_content">
                        <li><span>Address:</span> 
                            Ikeja, Lagos Nigeria.
                            West Africa.</li>
                        <li><span>Phone:</span> 
                            (+234) 909 917 5200</li>
                        {{-- <li><span>FAX:</span> 002 78965 369552</li> --}}
                        <li><span>Email:</span> support@scooterlux.com</li>
                    </ul>
                    <div class="footer_social_area mt-15">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Footer Area -->
            <div class="col-12 col-sm-6 col-md col-lg-4 col-xl-3">
                <div class="single_footer_area mb-100">
                    <div class="footer_heading mb-4">
                        <h6>Information</h6>
                    </div>
                    <ul class="footer_widget_menu">
                        <li><a href="#"><i class="icofont-rounded-right"></i> Your Account</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Free Shipping Policy</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Your Cart</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Return Policy</a></li>
                   
                    </ul>
                </div>
            </div>

            <!-- Single Footer Area -->
            <div class="col-12 col-sm-6 col-md col-lg-4 col-xl-3">
                <div class="single_footer_area mb-100">
                    <div class="footer_heading mb-4">
                        <h6>Account</h6>
                    </div>
                    <ul class="footer_widget_menu">
                        <li><a href="#"><i class="icofont-rounded-right"></i> Product Support</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Terms &amp; Conditions</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Help</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Payment Method</a></li>
                     
                    </ul>
                </div>
            </div>

            <!-- Single Footer Area -->
            <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                <div class="single_footer_area mb-100">
                    <div class="footer_heading mb-4">
                        <h6>Support</h6>
                    </div>
                    <ul class="footer_widget_menu">
                        <li><a href="#"><i class="icofont-rounded-right"></i> Payment Method</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Help</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Terms &amp; Conditions</a></li>
                        <li><a href="#"><i class="icofont-rounded-right"></i> Privacy Policy</a></li>
                 
                    </ul>
                </div>
            </div>

        
        </div>
    </div>
</footer>


 <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('shop/js/jquery.min.js')}}"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script src="{{asset('shop/js/popper.min.js')}}"></script>
    <script src="{{asset('shop/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('shop/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('shop/js/default/classy-nav.min.js')}}"></script>
    <script src="{{asset('shop/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('shop/js/default/scrollup.js')}}"></script>
    <script src="{{asset('shop/js/waypoints.min.js')}}"></script>
    <script src="{{asset('shop/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('shop/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('shop/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('shop/js/jarallax.min.js')}}"></script>
    <script src="{{asset('shop/js/jarallax-video.min.js')}}"></script>
    <script src="{{asset('shop/js/jquery.magnific-popup.min.js')}}"></script>
    {{-- <script src="{{asset('shop/js/jquery.nice-select.min.js')}}"></script> --}}
    {{-- <script src="{{asset('shop/js/wow.min.js')}}"></script> --}}
    <script src="{{asset('shop/js/default/active.js')}}"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
    
    {{-- custom toastr script --}}
    <script>
    @if (Session::has('message'))
        let type = "{{ Session::get('alert-type', 'info') }}";
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}")
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}")
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}")
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}")
                break;
            default:
                break;
        }
    @endif
    </script>
    <script type="text/javascript">
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      })
      // start product view with Modal
      function productView(id){
          $.ajax({
              type: 'GET',
              url: '/product/view/modal/'+id,
              dataType: 'json',
              success: function(data){
                  $('#pname').text(data.product.product_name_en);
                  $('#pcode').text(data.product.product_code);
                  $('#category').text(data.product.category.category_name_en);
                  $('#brand').text(data.product.brand.brand_name_en);
                  $('#pimage').attr('src', '/'+data.product.product_thumbnail);
  
                  $('#product_id').val(id);
                  $('#product_qty').val(1);
  
                  //product price
                  if(data.product.discount_price == null){
                      $('#price').text(data.product.selling_price);
                      $('#oldprice').text('');
                  }else{
                      $('#price').text(data.product.discount_price);
                      $('#oldprice').text(data.product.selling_price);
                  }
  
                  // product stock
                  if(data.product.product_qty > 0)
                  {
                      $('#Outofstock').text('');
                      $('#Instock').text('In Stock');
                  }else{
                      $('#Instock').text('');
                      $('#Outofstock').text('OUT of Stock');
                  }
  
                  // color and size
                  $('select[name="color"]').empty();
                  $.each(data.colors_en, function(key,value){
                      $('select[name="color"]').append('<option value=" '+value+' ">'+value+'</option>')
                      if(data.colors_en == ""){
                          $('#colorArea').hide()
                      }else{
                          $('#colorArea').show()
                      }
                  })
                  $('select[name="size"]').empty();
                  $.each(data.size_en, function(key,value){
                      $('select[name="size"]').append('<option value=" '+value+' ">'+value+'</option>')
                      if(data.size_en == ""){
                          $('#sizeArea').hide()
                      }else{
                          $('#sizeArea').show()
                      }
                  })
              }
          })
      }

  
      // Add to Cart Product
      function addToCart(){
          var product_name = $('#pname').text();
          var id = $('#product_id').val();
          var color = $('#color option:selected').text();
          var size = $('#size option:selected').text();
          var qty = $('#product_qty').val();
  
          $.ajax({
              type: 'POST',
              dataType: 'json',
              data:{
                  color: color,
                  size:size,
                  qty: qty,
                  product_name: product_name,
              },
              url: '/cart/data/store/'+id,
              success: function(data){
                  miniCart()
                  $('#closeModal').click();
                  // console.log(data)
  
                  const Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          icon: 'success',
                          showConfirmButton: false,
                          timer: 3000
                  })
                  if($.isEmptyObject(data.error)){
                      Toast.fire({
                          type:'success',
                          title: data.success,
                      })
                  }else{
                      Toast.fire({
                          type: 'error',
                          title:data.error,
                      })
                  }
              }
          })
      }
      // End to Cart Product
  </script>
  <script type="text/javascript">
      function miniCart(){
          $.ajax({
              type: 'GET',
              dataType: 'json',
              url: '/product/mini/cart',
              success: function(response){
                  $('b[id="cartSubTotal"]').text(response.cart_total);
                  $('span[id="cartQty"]').text(response.cart_qty);
                  var miniCart = "";
                  $.each(response.carts, function(key,value){
                      miniCart += `
                      <li>
                        <div class="cart-item-desc">
                            <a href="#" class="image">
                                <img src="/${value.options.image}" class="cart-thumb" alt="">
                            </a>
                            <div>
                                <a href="#">${value.name}</a>
                                <p>${value.qty}x - &#8358; ${value.price}<span class="price"></span></p>
                            </div>
                        </div>
                        <button type="submit" class="dropdown-product-remove"  id="${value.rowId}" onclick="miniCartRemove(this.id)"><i class="icofont-bin"></i></button>
                    </li>
                      `;
                  });
                  $('#miniCart').html(miniCart);
              }
          })
      }
      miniCart();
  
      // mini cart remove start
      function miniCartRemove(rowId){
          $.ajax({
              type:'GET',
              dataType: 'json',
              url:'/minicart/product-remove/'+rowId,
              success: function(data){
                  miniCart();
                  //start message
                  const Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          icon: 'success',
                          showConfirmButton: false,
                          timer: 3000
                  })
                  if($.isEmptyObject(data.error)){
                      Toast.fire({
                          type:'success',
                          title: data.success,
                      })
                  }else{
                      Toast.fire({
                          type: 'error',
                          title:data.error,
                      })
                  }
                  //end message
              }
          });
      }
      // mini cart remove end
  </script>
  <script type="text/javascript">
      // Start Add to Wishlist
      function addToWishlist(id){
          $.ajax({
              type:'POST',
              dataType: 'json',
              url:'/user/add/product/to-wishlist/'+id,
              success: function(data){
                  //start message
                  const Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 3000
                  })
                  if($.isEmptyObject(data.error)){
                      Toast.fire({
                          type:'success',
                          icon: 'success',
                          title: data.success,
                      })
                  }else{
                      Toast.fire({
                          type: 'error',
                          icon: 'error',
                          title:data.error,
                      })
                  }
                  //end message
              }
          });
      }
      // End Add to Wishlist
      // Start remove from wishlist
      function removeWishlist(wish_id){
          $.ajax({
              type:'GET',
              dataType: 'json',
              url:'/user/remove/from-wishlist/'+wish_id,
              success: function(data){
                  //location.reload();
                  //start message
                  const Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          icon: 'success',
                          showConfirmButton: false,
                          timer: 3000
                  })
                  if($.isEmptyObject(data.error)){
                      Toast.fire({
                          type:'success',
                          title: data.success,
                      })
                  }else{
                      Toast.fire({
                          type: 'error',
                          title:data.error,
                      })
                  }
                  //end message
              }
          });
      }
      // End remove from wishlist
  </script>