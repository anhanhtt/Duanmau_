<?php
if(is_array($tk)){
        extract($tk);
    }
?>
<div class="row">
            <div class="row formtitle">
                <h1>CẬP NHẬT TÀI KHOẢN</h1>
            </div>
            <div class="row formcontent"></div>
            <form action="index.php?act=updatetk" method="post" >
                <?php
                    
                    
                ?>
                <div class="row mb10">
                    Username<br>
                    <input type="text" name="product_name" value="<?=$username?>">
                </div>
                <div class="row mb10">
                    Email<br>
                    <input type="text" name="price" value="<?=$email?>">
                </div>
                <div class="row mb10">
                    Pass<br>
                    <input type="text" name="price" value="<?=$pass?>">
                </div>
                <div class="row mb10">
                    Address<br>
                    <input type="text" name="price" value="<?=$address?>">
                </div>
                <div class="row mb10">
                    Tel<br>
                    <input type="text" name="price" value="<?=$tel?>">
                </div>
                
                <div class="row mb10">
                    Role<br>
                    <textarea name="description"  cols="30" rows="10" ><?=$role?></textarea>
                </div>
              
                
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit"name="capnhat" value="CẬP NHẬT">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=listtk"><input type="button" value="DANH SÁCH"></a>
                    
                </div>
                <?php
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                ?>
            </form>
        </div>