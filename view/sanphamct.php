<div class="row mb ">
            <div class="boxtrai mr ">
                <div class="row mb">
                    <?php
                        extract($onesp);
                    ?>
                    <div class="boxtitle"><?=$product_name?></div>
                    <div class=" row boxcontent">
                        <?php  
                            $image=$image_path.$image;
                            echo '<div class="row mb spct">
                            <img src="'.$image.'" style="width:100%"></div>';
                            echo '<div class ="giasp">'.$price.' VNĐ</div><br>';

                            echo '<div class ="mota">'.$description.'</div> <br>';
                            echo'
                                    <div class="btnaddtocart">
                                        <form action="index.php?act=addtocart" method="post">
                                            <input type="hidden" name="product_ID" value="'.$product_ID.'">
                                            <input type="hidden" name=""product_name" value="'.$product_name.'">
                                            <input type="hidden" name="image" value="'.$image.'">
                                            <input type="hidden" name="price" value="'.$price.'">
                                            <input type="submit" value="addtocart" value="Thêm vào giỏ hàng">
                                        </form>
                                    </div>';
                        ?>
                    </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$product_ID?>});
                    });
                </script>

                <div class="row" id="binhluan">
                    
                </div>
                <div class="row mb">
                    <div class="boxtitle">Sản phẩm cung loại</div>
                    <div class=" row boxcontent">
                        <?php
                            foreach ($sp_cung_loai as $sp_cung_loai) {
                                extract($sp_cung_loai);
                                $linksp="index.php?act=sanphamct&idsp=".$product_ID;
                                echo'<li><a href="'.$linksp.'">'.$product_name.'</a></li>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="boxphai ">
                <?php
                    include "boxright.php";
                ?>

            </div>
</div>
