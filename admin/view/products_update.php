<?php
    $sp = get_sp_by_id($id);
    if(is_array($sp)&&(count($sp)>0)){
        
        extract($sp);
        $idupdate = $id;
        $img_path = IMG_PATH_ADMIN.$img;
        if(is_file($img_path)){
            $img = '<img src="'.$img_path.'" width="80px">';
        } else {
            $img = "";
        }
    };

    $dsdm = danhmuc_all();
    $html_dmlist = show_dm($dsdm, $id_category);
    // $html_dm = "";
    // foreach ($dsdm as $item) {
    //     extract($item);
    //     $html_dm.='<option value="'.$id.'">'.$name.'</option>';
    // };
?>
<div class="main-content">
                <h3 class="title-page">
                    Cập nhật sản phẩm
                </h3>
                
                <form class="addPro" action="index.php?pg=updateproduct" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh sản phẩm</label>
                        <div class="custom-file">
                            <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                            <?=$img;?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Tên sản phẩm:</label>
                        <input type="text" class="form-control" name="name" value="<?=($name!="")?$name:"";?>" id="name" placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="categories">Danh mục:</label>
                        <select class="form-select" aria-label="Default select example" name="id_category">
                            <option selected>Chọn danh mục</option>
                            <?=$html_dmlist;?>
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Giá gốc:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" name="price" id="price" value="<?=($price>0)?$price:0;?>" class="form-control" placeholder="Nhập giá gốc">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?=$idupdate?>">
                        <button type="submit" name="updateproduct" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
            </div>

            <script>
                new DataTable('#example');
            </script>