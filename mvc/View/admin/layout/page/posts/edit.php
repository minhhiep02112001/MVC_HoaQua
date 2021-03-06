<?php if (isset($data["posts"])&& count($data["posts"]) > 0) {
	$posts = $data["posts"]; 
} 
 ?>

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Thêm Sản Phẩm </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form elements</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sửa Tin Tức Mã : <span id="posts_id"><?=(isset($posts))?$posts["ID"]:"";?></span></h4>

                    <form class="forms-sample" method="post" action="./admin/posts/update/<?=(isset($posts))?$posts["ID"]:"";?>" onsubmit="return ValidateData()" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-7">
                                <div class="form-group">
                                    <label for="tieu-de">Tiêu Đề :</label>
                                    <input type="text" class="form-control" id="tieu-de" value="<?=(isset($posts))?$posts["TieuDe"]:"";?>" name="tieu-de" placeholder="Tiêu đề . . . . . . . . ">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug :</label>
                                    <input type="text" class="form-control" value="<?=(isset($posts))?$posts["slug"]:"";?>" id="slug" name="slug" placeholder="" readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label for="mota" class="text-primary">Mô Tả :</label>
                                    <textarea class="form-control" id="mota" name="mota" rows="5"><?=(isset($posts))?$posts["MoTa"]:"";?></textarea> 
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label>File upload</label>
                                    <input type="file" name="file-upload-image" id="file-upload-image" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled=""  placeholder="Upload Image">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                        </span>
                                    </div>
                                    <div class="show-image">
                                    	<img src="./public/upload/images/<?=(isset($posts))?$posts["image"]:"";?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="noi-dung">Nội Dung : </label>
                            <textarea class="form-control noi-dung" id="noi-dung"  name="noi-dung" rows="9"><?=(isset($posts))?$posts["NoiDung"]:"";?></textarea>
                        </div>
                        <button type="submit" name="update_posts" class="btn btn-success mr-2">Sửa</button>
                        <button type="reset" class="btn btn-light mr-2">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>