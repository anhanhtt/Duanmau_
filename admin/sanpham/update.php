<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="../upload/".$image;
    if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' height='80'>";
    }else{
        $hinh="no photo";
    }
?>
<div class="row">
            <div class="row formtitle">
                <h1>CẬP NHẬT SẢN PHẨM</h1>
            </div>
            <div class="row formcontent"></div>
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    <select name="id_type" >
                            <option value="0" selected>Tất cả</option>
                            <?php
                                foreach($listdanhmuc as $types){
                                    extract($types);
                                    if($id_type==$type_id) $s="selected"; else $s="";
                                    echo '<option value="'.$type_id.'" '.$s.'>'.$type_name.'</option>';
                                    
                                }
                            ?>
                        
                    </select>
                </div>
                <div class="row mb10">
                    Tên sản phẩm<br>
                    <input type="text" name="product_name" value="<?=$product_name?>">
                </div>
                <div class="row mb10">
                    Giá<br>
                    <input type="text" name="price" value="<?=$price?>">
                </div>
                <div class="row mb10">
                    Hình<br>
                   <input type="file" name="image">
                   <?=$hinh?>
                </div>
                <div class="row mb10">
                    Mô tả<br>
                    <textarea name="description"  cols="30" rows="10" ><?=$description?></textarea>
                </div>
              
                
                <div class="row mb10">
                    <input type="hidden" name="product_ID" value="<?=$product_ID?>">
                    <input type="submit"name="capnhat" value="CẬP NHẬT">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                    
                </div>
                <?php
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                ?>
            </form>
        </div>