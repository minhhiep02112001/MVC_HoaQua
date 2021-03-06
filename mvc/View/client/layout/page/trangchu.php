<section id="banner-index">

  <div class="banner-slider">
    <div class="banner-slider slider">
      <div>
        <div class="banner-item">
          <div class="img">
            <img class="d-block w-100" src="./public/client/image/cause-qua-bo.jpg" alt="First slide">
          </div>
        </div>
      </div>
      <div>
        <div class="banner-item">
          <div class="img">
            <img class="d-block w-100" src="./public/client/image/thanhchay.jpg" alt="Third slide">
          </div>

        </div>
      </div>
      <div>
        <div class="banner-item">
          <div class="img">
            <img class="d-block w-100 active" src="./public/client/image/causr-qua-nho.jpg" alt="Second slide">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!---------------------- Bạn nên mua hàng ở chỗ chúng tôi-------------------->
<div class="container ly-do-3">
  <h2 id="lydo-muahang">Lý do bạn nên mua hàng của chúng tôi</h2>
  <div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4 mh">
      <div class="box-muahang">
        <img src="./public/client/image/t1_3.png" alt="" id="img-muahang">
        <p class="tieude-muahang">HOA QUẢ TƯƠI SẠCH</p>
        <p class="noidung-muahang">Quy trình nhập hàng, vận chuyển, bảo quản chuyên nghiệp.</p>
      </div>
    </div>

    <div class="col-sm-12 col-md-4 col-lg-4 mh">
      <div class="box-muahang">
        <img src="./public/client/image/t1_4.png" alt="" id="img-muahang">
        <p class="tieude-muahang">ĐỔI TRẢ MIỄN PHÍ</p>
        <p class="noidung-muahang">Đổi trả miễn phí trong 24h khi khách hàng không hài lòng.</p>
      </div>
    </div>

    <div class="col-sm-12 col-md-4 col-lg-4 mh">
      <div class="box-muahang">
        <img src="./public/client/image/t1_5.png" alt="" id="img-muahang">
        <p class="tieude-muahang">GIÁ CẢ CẠNH TRANH</p>
        <p class="noidung-muahang">Chúng tôi luôn đặt lợi ích cho người tiêu dùng lên hàng đầu.</p>
      </div>
    </div>
  </div>
</div>





<?php if (isset($data["arrProduct"]) && sizeof($data["arrProduct"]) >0) : ?>
<div class="container san-pham-noi-bat">
  <div class="product">
    <h2>Sản Phẩm Nổi Bật</h2>
    <div class="product-slider">
      <div class="regular slider">
        <?php foreach ($data["arrProduct"] as $key ): ?>
          <div>
            <div class="product">
              <div class="img">
                <img src="./public/upload/images/<?=$key["AnhChinh"]?>" alt="Tủ quần &#225;o">
                <div class="information ">
                  <div class="view">
                    <a href="./sanpham/get/<?=$key['Slug']?>"><i class="fa fa-eye" style="font-size: 12px;"></i></i> Xem nhanh </a>
                    <a  class="listproduct " onclick="SweetAlterDetailProduct('<?=$key["MaSP"]?>')"><i class="fa fa-shopping-cart"></i> Giỏ Hàng </a>
                  </div>
                </div>
              </div>
              <div class="info">
                <p class="name text-center"><a href="./sanpham/get/<?=$key['Slug']?>"> <?=$key["TenSp"]?></a>  </p>

                <p class="price  text-center m-0">
                  ( <?=$key["XuatXu"]?> )
                </p>

              </div>

            </div>
          </div>

        <?php endforeach ?>

      </div>

    </div>
  </div>
</div>
<?php endif ?>

<?php if (isset($data["arrProductNew"]) && sizeof($data["arrProductNew"]) > 0):?>
<div class="container san-pham-ban-chay">
  <div class="product">
    <h2>Sản Phẩm Mới Nhất</h2>
    <div class="product-slider">
      <div class="regular slider">
        <?php foreach ($data["arrProductNew"] as $new ): ?>
        <div>
          <div class="product">
            <div class="img">
              <img src="./public/upload/images/<?=$new["AnhChinh"]?>" alt="Tủ quần &#225;o">
              <div class="information ">
                <div class="view">
                  <a href="./sanpham/get/<?=$new['Slug']?>"><i class="fa fa-eye" style="font-size: 12px;"></i></i> Xem nhanh </a>
                  <a href="javascript:;" onclick="SweetAlterDetailProduct('<?=$new["MaSP"]?>')" class="listproduct"><i class="fa fa-shopping-cart"></i> Giỏ Hàng </a>
                </div>
              </div>
            </div>
            <div class="info">
              <p class="name text-center"><a href="./sanpham/get/<?=$new['Slug']?>">   <?=$new["TenSp"]?> </a>  </p>

              <p class="price  text-center m-0">
                
                  ( <?=$new["XuatXu"]?> )
                
              </p>

            </div>

          </div>
        </div>
        <?php endforeach ?>
      </div>

    </div>
  </div>
</div>
<?php endif ?>

<?php if (isset($data["arrProductBanChay"]) && sizeof($data["arrProductBanChay"]) >0) : ?>
<div class="container san-pham-ban-chay">
  <div class="product">
    <h2>Sản Phẩm Bán Chạy</h2>
    <div class="product-slider">
      <div class="regular slider">
        <?php foreach ($data["arrProductBanChay"] as $banchay ): ?>
        <div>
          <div class="product">
            <div class="img">
              <img src="./public/upload/images/<?=$banchay["AnhChinh"]?>" alt="Tủ quần &#225;o">
              <div class="information ">
                <div class="view">
                  <a href="./sanpham/get/<?=$banchay['Slug']?>"><i class="fa fa-eye" style="font-size: 12px;"></i></i> Xem nhanh </a>
                  <a href="javascript:;" onclick="SweetAlterDetailProduct('<?=$new["MaSP"]?>')" class="listproduct"><i class="fa fa-shopping-cart"></i> Giỏ Hàng </a>
                </div>
              </div>
            </div>
            <div class="info">
              <p class="name text-center"><a href="./sanpham/get/<?=$banchay['Slug']?>"><?=$banchay["TenSp"]?></a> </p>

              <p class="price  text-center m-0">
                ( <?=$banchay["XuatXu"]?> )
              </p>

            </div>

          </div>
        </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</div>
<?php endif ?>
<?php if (isset($data["arrPostsNew"]) && sizeof($data["arrPostsNew"]) > 0) : ?>
<div class="container tin-tuc">
  <h2> Tin tức </h2>
  <div class="row">
    <div class="col-12 col-sm-12 col-md-7">
      <?php $post = $data["arrPostsNew"][0];
        unset($data["arrPostsNew"][0]);
      ?>

      <div class="box">
        <div class="img">
          <img src="./public/upload/images/<?=$keyposts["image"]?>" alt="<?= $post["TieuDe"] ?>" class="w-100">
        </div>
        <div class="main-content">
          <p class="title">
            <a href="#">
              <?= $post["TieuDe"] ?>
            </a>
          </p>
          <div class="desc">
            <p><?= $post["MoTa"] ?></p>

          </div>
        </div>
      </div>

    </div>
    <div class="col-12 col-sm-12 col-md-5">
      <ul>
        <?php foreach ($data["arrPostsNew"] as $keyposts): ?>
        <li class="d-flex">
          <div class="img">
            <img src="./public/upload/images/<?=$keyposts["image"]?>" style="width: 190px; height: 130px;" alt="Hộp trái cây cao cấp">
          </div>
          <div class="content">
            <p class="title">
              <a href="#">
                <?= $keyposts["TieuDe"] ?>
              </a>
            </p>
            <div class="desc sub-news-content"><?php $keyposts["MoTa"] ?></div>
          </div>
        </li>
        <?php endforeach ?>
      </ul>
      <div>
        <a href="/tin-tuc" class="see-more"> Xem thêm <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>
</div>
<?php endif ?>
<!-- <script type="text/javascript">
  
  function SweetAlter() {
    // body...
    var ob =  {
      '1': 'Tier 1',
      '2': 'Tier 2',
      '3': 'Tier 3'
    }
    Swal.fire({
  title: 'Select Outage Tier',
  input: 'select',
  inputOptions: ob,
  inputPlaceholder: 'required',
  showCancelButton: true,
  inputValidator: function (value) {
    return new Promise(function (resolve, reject) {
      if (value !== '') {
        resolve();
      } else {
        resolve('You need to select a Tier');
      }
    });
  }
}).then(function (result) {
  if (result.isConfirmed) {
    Swal.fire({
      icon: 'success',
      html: 'You selected: ' + result.value
    });
  }
});
  }
</script> -->