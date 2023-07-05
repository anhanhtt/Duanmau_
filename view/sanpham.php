<div class="row mb ">
            <div class="boxtrai mr ">
                <div class="row mb">
                    
                    <div class="boxtitle">Sản phẩm <strong><?=$tendm?></strong></div>
                    <div class=" row boxcontent">
                        <?php  
                             $i=0;
                             foreach($dssp as $sp){
                                 extract($sp);
                                 $hinh=$image_path.$image; 
                                 if(($i==2)||($i==5)||($i==8)||($i==11)){
                                     $mr="";
                                 }else{
                                     $mr="mr";
                                 }
                                 $linksp="index.php?act=sanphamct&idsp=".$product_ID;
                                 echo '<div class="boxsp '.$mr.'">
                                             <div class=" row img">
                                             <a href="'.$linksp.'"><img src="'.$hinh.'" alt="" style="width:100%"></a>
                                             </div>
                                             <p>'.$price.'</p>
                                             <a href="'.$linksp.'">'.$product_name.'</a>

                                             <div class="btnaddtocart">
                                                <form action="index.php?act=addtocart" method="post">
                                                    <input type="hidden" name="product_ID" value="'.$product_ID.'">
                                                    <input type="hidden" name=""product_name" value="'.$product_name.'">
                                                    <input type="hidden" name="image" value="'.$image.'">
                                                    <input type="hidden" name="price" value="'.$price.'">
                                                    <input type="submit" value="addtocart" value="Thêm vào giỏ hàng">
                                                </form>
                                            </div>
                                         </div>';
                                         $i+=1;
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
