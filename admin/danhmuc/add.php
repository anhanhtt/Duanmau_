<div class="row">
            <div class="row formtitle">
                <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row formcontent"></div>
            <form action="index.php?act=adddm" method="post">
                <div class="row mb10">
                    Mã loại<br>
                    <input type="text" name="type_id" disabled>
                </div>
                <div class="row mb10">
                    Tên loại<br>
                    <input type="text" name="type_name">
                </div>
                <div class="row mb10">
                    <input type="submit"name="themmoi" value="THÊM MỚI">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                    
                </div>
                <?php
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                ?>
            </form>
        </div>