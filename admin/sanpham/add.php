<div class="row">
            <div class="row formtitle">
                <h1>THÊM MỚI SẢN PHẨM</h1>
            </div>
            <div class="row formcontent"></div>
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    Loại <br>
                    <select name="id_type" >
                        
                            <?php
                                foreach($listdanhmuc as $types){
                                    extract($types);
                                    echo '<option value="'.$type_id.'">'.$type_name.'</option>';
                                }
                            ?>
                        
                    </select>
                </div>
                <div class="row mb10">
                    Tên sản phẩm<br>
                    <input type="text" name="product_name">
                </div>
                <div class="row mb10">
                    Giá<br>
                    <input type="text" name="price">
                </div>
                <div class="row mb10">
                    Hình<br>
                   <input type="file" name="hinh">
                </div>
                <div class="row mb10">
                    Mô tả<br>
                    <textarea name="description"  cols="30" rows="10"></textarea>
                </div>
              
                
                <div class="row mb10">
                    <input type="submit"name="themmoi" value="THÊM MỚI">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                    
                </div>
                <?php
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                ?>
            </form>
        </div>