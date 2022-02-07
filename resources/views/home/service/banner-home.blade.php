<div class="row row-collapse row-full-width" id="row-1594785445">
    <div id="col-287069036" class="col small-12 large-12">
      <div class="col-inner">
        <div id="gap-1363176295" class="gap-element clearfix" style="display:block; height:auto;">
        </div>
        <div id="text-404384872" class="text">
          <h3><strong><span style="color: #282828;"  data-cms="{{app()->getLocale()}}-service-home-1">NHỮNG DỊCH VỤ MÀ GENEX ĐANG CÓ </span></strong></h3>
        </div>
        <div class="text-center">
            <div class="is-divider divider clearfix" style="max-width:114px;background-color:rgb(208, 15, 15);">
            </div>
        </div>
        <div class="row row-collapse row-full-width align-center" id="row-250246419">
          @if ($catagoryPost)
            <?php 
              $arrIds = ['banner-775166436', 'banner-1702831144', 'banner-956890562', 'banner-1671117404'];
              $index = 0;
            ?>
            @foreach($catagoryPost as $key => $item)
            <div id="col-287909432" class="col medium-3 small-6 large-2">
              <div class="col-inner">
                  <div class="banner has-hover bg-grayscale bg-color" id="{{ isset($arrIds[$key]) ? $arrIds[$key] : (isset($arrIds[$index]) ? $arrIds[$index++] : $arrIds[$index++])  }}">
                      <div class="banner-inner fill">
                          <div class="banner-bg fill">
                              <div class="bg fill bg-fill "></div>
                              <div class="overlay"></div>
                          </div>
                          <div class="banner-layers container">
                              <div class="fill banner-link"></div>
                              <div id="text-box-656465645" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                  <div class="text-box-content text dark">
                                      <div class="text-inner text-center">
                                      <div id="text-491937592" class="text">
                                          <p class="uppercase"  data-cms="{{app()->getLocale()}}-service-home-{{ $item->id }}">{{ $item->parent->name }}</p>
                                          <h3 class="uppercase"  data-cms="{{app()->getLocale()}}-service-home-details{{ $item->id }}"><strong>{{ $item->name }}</strong></h3>
                                      </div>
  
                                      <a data-animate="fadeInUp" href="dich-vu-animation-2d/index.html" target="_self"
                                          class="button success is-gloss">
                                          <span>Xem giới thiệu</span>
                                          <i class="icon-angle-right"></i>
                                      </a>
                                      </div>
                                  </div>
                              </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            @endforeach
          @endif
        </div>
      </div>
    </div>
  </div>