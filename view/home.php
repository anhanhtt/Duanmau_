<div class="row mb ">
            <div class="boxtrai mr ">
                <div class="row">
                    <div class="banner">
                        <!-- Slideshow container -->
                        <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                            <div class="mySlides fade">
                                <img src="view/images/banner_chinh.jpg" style="width:100%">
                            </div>

                            <div class="mySlides fade">
                                <img src="view/images/banner_af1.jpg" style="width:100%">
                            </div>

                            <div class="mySlides fade">    
                                <img src="view/images/banner_giay.jpg" style="width:100%">
                            </div>

                        <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $i=0;
                        foreach($spnew as $sp){
                            extract($sp);
                            $hinh=$image_path.$image; 
                            if(($i==2)||($i==5)||($i==8)){
                                $mr="";
                            }else{
                                $mr="mr";
                            }
                            $linksp="index.php?act=sanphamct&idsp=".$product_ID;
                            echo '<div class="boxsp '.$mr.'">
                                        <div class=" row img">
                                        <a href="'.$linksp.'"><img src="'.$hinh.'" alt="" style="width:100%"></a>
                                        </div>
                                        <p>'.$price.' VNĐ</p>
                                        
                                        <a href="'.$linksp.'">'.$product_name.'</a>
                                        <br>
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
                    <!-- <div class="boxsp mr">
                        <div class=" row img">
                            <img src="view/images/Giày-Vans-Ward.jpg" alt="">
                        </div>

                        <p>$30</p>
                        <a href="#">Vans Ward</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="view/images/Giày-Vans-Ward.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Vans Ward</a>
                    </div>
                    <div class="boxsp ">
                        <div class=" row img">
                            <img src="view/images/Giày-Vans-Ward.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Vans Ward</a>
                    </div>
                    <div class="boxsp mr">
                        <div class=" row img">
                            <img src="view/images/Giày-Vans-Ward.jpg" alt="">
                        </div>

                        <p>$30</p>
                        <a href="#">Vans Ward</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="view/images/Giày-Vans-Ward.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Vans Ward</a>
                    </div>
                    <div class="boxsp ">
                        <div class=" row img">
                            <img src="view/images/Giày-Vans-Ward.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Vans Ward</a>
                    </div>
                    <div class="boxsp mr">
                        <div class=" row img">
                            <img src="view/images/Giày-Vans-Ward.jpg" alt="">
                        </div>

                        <p>$30</p>
                        <a href="#">Vans Ward</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="view/images/Giày-Vans-Ward.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Vans Ward</a>
                    </div>
                    <div class="boxsp ">
                        <div class=" row img">
                            <img src="view/images/Giày-Vans-Ward.jpg" alt="">
                        </div>
                        <p>$30</p>
                        <a href="#">Vans Ward</a>
                    </div> -->


                </div>
            </div>
            <div class="boxphai ">
               <?php
                include "boxright.php";
               ?>

            </div>
</div>
