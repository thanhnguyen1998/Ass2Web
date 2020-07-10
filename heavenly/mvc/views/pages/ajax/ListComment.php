<?php
$listComment = $data['listComment'];
while ($comment = mysqli_fetch_array($listComment)) {
  ?>
  <div class="show-comment" id="item-comment">
    <div class="avatar">
      <img src="/heavenly/public/image/user.png" />
    </div>
    <div class="info-comment">
      <div class="name-stars">
        <div class="info-user">
          <p class="name">
            <?php echo $comment['fullname']; ?>
          </p>
          <p class="date">
            <?php echo $comment['time']; ?>
          </p>
        </div>

        <div class="stars">
          <?php
            for ($i = 0; $i < $comment['rate']; $i++) {
              ?>
            <i class="fas fa-star"></i>
          <?php
            }
            for ($i = 0; $i < 5 - $comment['rate']; $i++) {
              ?>
            <i class="far fa-star"></i>
          <?php
            }
            ?>
        </div>
      </div>

      <p class="content">
        <?php echo $comment['content']; ?>
      </p>
    </div>
  </div>
<?php
}
?>