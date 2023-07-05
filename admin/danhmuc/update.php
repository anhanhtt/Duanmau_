<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row">
            <div class="row formtitle">
                <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row formcontent"></div>
            <form action="index.php?act=updatedm" method="post">
                <div class="row mb10">
                    Mã loại<br>
                    <input type="text" name="type_id" disabled>
                </div>
                <div class="row mb10">
                    Tên loại<br>
                    <input type="text" name="type_name" value="<?php if(isset($type_name)&&($type_name!="")) echo $type_name;?>">
                </div>
                <div class="row mb10">
                    <input type="hidden" name="type_id" value="<?php if(isset($type_id)&&($type_id>0)) echo $type_id;?>">
                    <input type="submit"name="capnhat" value="CẬP NHẬT">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                    
                </div>
                <?php
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                ?>
            </form>
        </div>