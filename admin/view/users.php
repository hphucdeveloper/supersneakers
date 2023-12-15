<?php
    $html_showuser ="";
    $i =1;
    foreach($dsuser as $item){
        extract($item);
        $html_showuser = '<tr>
                            <td>'.$i.'</td>
                            <td>'.$name.'</td>
                            <td>'.$username.'</td>
                            <td>'.$diachi.'</td>
                            <td>'.$dienthoai.'</td>
                            <td>'.$email.'</td>
                            <td>
                                <a href="" class="btn btn-warning"
                                ><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                                <a href="" onclick="return confirm(\'Bạn chắc chắn muốn xóa tài khoản này?\')" class="btn btn-danger"
                                ><i class="fa-solid fa-trash"></i> Xóa</a
                          ></td>
                        </tr>';
                        $i++;
    }
?>
<div class="main-content">
                <h3 class="title-page">
                    Thành viên
                </h3>
                <div class="d-flex justify-content-end">
                    <a href="index.php?pg=users_add" class="btn btn-primary mb-2">Thêm thành viên</a>
                </div>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Địa chỉ</th>
                            <th>Điện thoại</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?=$html_showuser?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        new DataTable('#example');
    </script>