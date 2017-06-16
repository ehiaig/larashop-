@extends('layouts.app')
@section('content')
        <div class="index-banner">
          <div class="wmuSlider example1" style="height: 560px;">
              <div class="wmuSliderWrapper">
                  <article style="position: relative; width: 100%; opacity: 1;"> 
                    <div class="banner-wrap">
                        <div class="slider-left">
                            <img src="images/banner1.jpg" alt=""/> 
                        </div>
                         <div class="slider-right">
                            <h1>Classic</h1>
                            <h2>White</h2>
                            <p>Lorem ipsum dolor sit amet</p>
                            <div class="btn"><a href="shop.html">Shop Now</a></div>
                         </div>
                         <div class="clear"></div>
                     </div>
                    </article>
                   <article style="position: absolute; width: 100%; opacity: 0;"> 
                     <div class="banner-wrap">
                        <div class="slider-left">
                            <img src="images/banner2.jpg" alt=""/> 
                        </div>
                         <div class="slider-right">
                            <h1>Classic</h1>
                            <h2>White</h2>
                            <p>Lorem ipsum dolor sit amet</p>
                            <div class="btn"><a href="shop.html">Shop Now</a></div>
                         </div>
                         <div class="clear"></div>
                     </div>
                   </article>
                   <article style="position: absolute; width: 100%; opacity: 0;">
                    <div class="banner-wrap">
                        <div class="slider-left">
                            <img src="images/banner1.jpg" alt=""/> 
                        </div>
                         <div class="slider-right">
                            <h1>Classic</h1>
                            <h2>White</h2>
                            <p>Lorem ipsum dolor sit amet</p>
                            <div class="btn"><a href="shop.html">Shop Now</a></div>
                         </div>
                         <div class="clear"></div>
                     </div>
                   </article>
                   <article style="position: absolute; width: 100%; opacity: 0;">
                    <div class="banner-wrap">
                        <div class="slider-left">
                            <img src="images/banner2.jpg" alt=""/> 
                        </div>
                         <div class="slider-right">
                            <h1>Classic</h1>
                            <h2>White</h2>
                            <p>Lorem ipsum dolor sit amet</p>
                            <div class="btn"><a href="shop.html">Shop Now</a></div>
                         </div>
                         <div class="clear"></div>
                     </div>
                   </article>
                   <article style="position: absolute; width: 100%; opacity: 0;"> 
                     <div class="banner-wrap">
                        <div class="slider-left">
                            <img src="images/banner1.jpg" alt=""/> 
                        </div>
                         <div class="slider-right">
                            <h1>Classic</h1>
                            <h2>White</h2>
                            <p>Lorem ipsum dolor sit amet</p>
                            <div class="btn"><a href="shop.html">Shop Now</a></div>
                         </div>
                         <div class="clear"></div>
                     </div>
                  </article>
              </div>
                <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a>
                <ul class="wmuSliderPagination">
                    <li><a href="#" class="">0</a></li>
                    <li><a href="#" class="">1</a></li>
                    <li><a href="#" class="wmuActive">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                  </ul>
                 <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a><ul class="wmuSliderPagination"><li><a href="#" class="wmuActive">0</a></li><li><a href="#" class="">1</a></li><li><a href="#" class="">2</a></li><li><a href="#" class="">3</a></li><li><a href="#" class="">4</a></li></ul></div>
                 <script src="js/jquery.wmuSlider.js"></script> 
                 <script type="text/javascript" src="js/modernizr.custom.min.js"></script> 
                        <script>
                             $('.example1').wmuSlider();         
                        </script>                     
        </div>
       <div class="main">
          <div class="wrap">
            <div class="content-top">
              <div class="lsidebar span_1_of_c1">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
              </div>
              <div class="cont span_2_of_c1">
                <div class="social">  
                   <ul>   
                    <li class="facebook"><a href="#"><span> </span></a><div class="radius"> <img src="images/radius.png"><a href="#"> </a></div><div class="border hide"><p class="num">1.51K</p></div></li>
                   </ul>
                 </div>
                 <div class="social"> 
                     <ul> 
                        <li class="twitter"><a href="#"><span> </span></a><div class="radius"> <img src="images/radius.png"></div><div class="border hide"><p class="num">1.51K</p></div></li>
                    </ul>
                  </div>
                   <div class="social">   
                     <ul> 
                        <li class="google"><a href="#"><span> </span></a><div class="radius"> <img src="images/radius.png"></div><div class="border hide"><p class="num">1.51K</p></div></li>
                     </ul>
                   </div>
                   <div class="social">   
                     <ul> 
                        <li class="dot"><a href="#"><span> </span></a><div class="radius"> <img src="images/radius.png"></div><div class="border hide"><p class="num">1.51K</p></div></li>
                    </ul>
                  </div>
                  <div class="clear"> </div>
                </div>
                <div class="clear"></div>         
             </div>
            <div class="content-bottom">  
              <div class="box1">
              @foreach ($products as $product)
                <div class="col_1_of_3 span_1_of_3"><a href="{{ url($product->id) }}">
                     <div class="view view-fifth">
                      <div class="top_box">
                        <h3 class="m_1">{{$product->title}}</h3>
                        <p class="m_2">{{$product->description}}</p>
                         <div class="grid_img">
                           <div class="css3"><img src="{{ asset("/images/uploads/$product->preview_photo") }}"></div>
                              <div class="mask">
                                <div class="info">Quick View</div>
                              </div>
                        </div>
                       <div class="price">₦{{$product->price}}</div>
                       </div>
                        </div>
                       <span class="rating">
                        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                        <label for="rating-input-1-5" class="rating-star1"></label>
                        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                        <label for="rating-input-1-4" class="rating-star1"></label>
                        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                        <label for="rating-input-1-3" class="rating-star1"></label>
                        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                        <label for="rating-input-1-2" class="rating-star"></label>
                        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
                      (45)
                      </span>
                         <ul class="list">
                          <li>
                            <img src="images/plus.png" alt=""/>
                            <ul class="icon1 sub-icon1 profile_img">
                              <li><a class="active-icon c1" href="#">Add To Bag </a>
                                <ul class="sub-icon1 list">
                                    <li><h3>sed diam nonummy</h3><a href=""></a></li>
                                    <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
                                </ul>
                              </li>
                             </ul>
                           </li>
                         </ul>
                        <div class="clear"></div>
                    </a>
                  </div>
                @endforeach
                    
                  <div class="clear"></div>
                </div>
              </div>
             </div>
        </div>
@endsection