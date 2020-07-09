
  <!-- Sidebar & banner -->

  <div class="container my-4">
    <div class="row">
      <div class="col-md-3">
        <div class="sidebar-top">
          <a href="/muzzy/Home" class="item">
            <div class="icon">
              <i class="fas fa-home"></i>
            </div>
            <div class="label">
              Trang chủ
            </div>
          </a>
          <a href="/muzzy/Shop" class="item">
            <div class="icon">
              <i class="fas fa-percent"></i>
            </div>
            <div class="label">
              Khuyến mãi
            </div>
          </a>
          <a href="#" class="item">
            <div class="icon">
              <i class="fas fa-store"></i>
            </div>
            <div class="label">
              Quán cafe mới
            </div>
          </a>
          <a href="#" class="item">
            <div class="icon" style="color: red">
              <i class="fab fa-hotjar"></i>
            </div>
            <div class="label">
              Địa điểm HOT
            </div>
          </a>
          <a href="/muzzy/Contact" class="item">
            <div class="icon">
              <i class="far fa-paper-plane"></i>
            </div>
            <div class="label">
              Phản hồi
            </div>
          </a>
          <a href="/muzzy/About" class="item">
            <div class="icon">
              <i class="fas fa-users-cog"></i>
            </div>
            <div class="label">
              Về chúng tôi
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-9">
        <div class="wraper-top-car">
          <div id="top-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#top-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#top-carousel" data-slide-to="1"></li>
              <li data-target="#top-carousel" data-slide-to="2"></li>
              <li data-target="#top-carousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img src="/muzzy/public/image/banner3.jpeg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img src="/muzzy/public/image/banner1.jpeg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img src="/muzzy/public/image/banner2.jpeg" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img src="/muzzy/public/image/banner3.jpeg" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img src="/muzzy/public/image/banner4.jpeg" alt="Third slide">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- List-Discount_Shop-box -->
  <div class="container padding">
    <div class="box-title">
      <p><i class="fas fa-star"></i>Ưu đãi nổi bật</p>
      <a href="/muzzy/Shop">Xem tất cả</a>
    </div>
    <hr class="my-1 hr-cus">
    <div class="wraper-slider">
      <section class="slider-area slider">
        <?php
        while ($row = mysqli_fetch_array($data['listShopDiscount'])) {
        ?>
          <div class="disable-current">
            <div class="wraper-item">
              <div class="deal-item">
                <a href="/muzzy/Shop/ShopDetail/<?php echo $row["idshop"] ?>" class="avatar">
                  <img width="400" height="180" src=<?php $listurl = ProcessUrlInamge($row['url_image']);
                                                    echo $listurl[0];  ?> alt="">
                </a>

                <div class="percent">
                  <span class="discount-val"><?php echo $row["discount"] ?></span>%
                </div>

                <div class="brand">
                  <p class="text-center"><?php echo $row['name'] ?></p>
                </div>
                <hr>
                <a href=<?php echo "https://www.google.com/maps/search/" . ProcessUrlMap($row['address']); ?> class="address">
                  <p class="text-address"> <i class="fas fa-map-marker-alt"></i> <?php echo $row['address'] ?> </p>
                </a>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </section>
    </div>
  </div>

  <!-- List-Shop-box -->
  <div class="container padding">
    <div class="box-title">
        <p><i class="fas fa-star"></i>Danh sách quán</p>
        <hr class="my-1 hr-cus">
    </div>
  </div>
  <div class="body container ">
    <hr class="my-1 hr-cus">
    <div class="tab-content" id="pills-tabContent">
      <!-- HOT -->
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="list">
          <?php
          while ($shop = mysqli_fetch_array($data['listShop'])) {
          ?>
            <div class="item">
              <a class="photo" href="/muzzy/Shop/ShopDetail/<?php echo $shop["id"] ?>">
                <img  src=<?php $listurl = ProcessUrlInamge($shop['url_image']);
                                                      echo $listurl[0];  ?> alt="">
              </a>
              <div class="name-stars">
                <p class="name"><?php echo $shop["name"] ?></p>
                <div class="stars">
                  <?php
                  for ($i = 0; $i < $shop['rate']; $i++) {
                  ?>
                    <i class="fas fa-star"></i>
                  <?php
                  }
                  for ($i = 0; $i < 5 - $shop['rate']; $i++) {
                  ?>
                    <i class="far fa-star"></i>
                  <?php
                  }
                  ?>
                </div>
              </div>
              <p class="address"><?php echo $shop["address"] ?></p>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
    <hr class="my-1 hr-cus">
</div>
