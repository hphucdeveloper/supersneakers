<?php
    
    $html_dssp = "";
    $i = 1;
    foreach ($dssp as $item) {
      extract($item);
        $hinhanh = IMG_PATH_ADMIN.$img;
        $imgtag = "<img src='".$hinhanh."' width='100px'>";
        $linkedit = 'index.php?pg=products_update&id='.$id;
        $linkdel = 'index.php?pg=products&del='.$id;
        $html_dssp.='<tr>
                        <td>'.$i.'</td>
                        <td>'.$imgtag.'</td>
                        <td></td>
                        <td>'.$name.'</td>
                        <td>'.number_format($price,0,",",".").' VNĐ</td>
                        <td>
                          <a href="'.$linkedit.'" class="btn btn-warning"
                            ><i class="fa-solid fa-pen-to-square"></i> Sửa</a
                          >
                          <a href="'.$linkdel.'" onclick="return confirm(\'Bạn chắc chắn muốn xóa sản phẩm này?\')" class="btn btn-danger"
                            ><i class="fa-solid fa-trash"></i> Xóa</a
                          >
                        </td>
                        
                      </tr>';
                      $i++;
    }
?>
<div class="main-content">
          <h3 class="title-page">Sản phẩm</h3>
          <div class="d-flex justify-content-end">
            <a href="index.php?pg=products_add" class="btn btn-primary mb-2"
              >Thêm sản phẩm</a>
          </div>
          <div class="d-flex justify-content-start">
            <form action="index.php?pg=products" method="post">
              <input type="text" name="kyw" id="">
              <button type="submit" name="timkiem" class="btn btn-primary">Tìm kiếm</button>
            </form>
          </div>
          <br>
          <div class="phanpage">
                <?php
                    echo $hienthisotrang;
                ?>
          </div>
          <table id="example" class="table table-striped" style="width: 100%">
            <thead>
              <tr>
                <th>STT</th>
                <th>Hình ảnh</th>
                <th></th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Thao tác</th>
                
              </tr>
            </thead>
            <tbody>
              <?=$html_dssp;?>
                
            </tbody>
            <tfoot>
            </tfoot>
          </table>
          <div class="phanpage">
                <?php
                    echo $hienthisotrang;
                ?>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/main.js"></script>
    <script>
      new DataTable("#example");
    </script>