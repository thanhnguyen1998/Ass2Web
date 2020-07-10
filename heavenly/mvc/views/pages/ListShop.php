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
            <a class="photo" href="/heavenly/Shop/ShopDetail/<?php echo $shop["id"] ?>">
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