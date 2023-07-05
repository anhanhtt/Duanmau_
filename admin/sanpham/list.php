<div class="row">
            <div class="row formtitle">
                <h1>DANH SÁCH SẢN PHẨM</h1>
            </div>
            <div class="row formcontent mb">
                <form action="index.php?act=listsp" method="post">
                    <input type="text" name="kyw">
                    <select name="id_type" >
                        <option value="0" selected>Tất cả</option>
                        <?php
                            foreach($listdanhmuc as $types){
                                extract($types);
                                echo '<option value="'.$type_id.'">'.$type_name.'</option>';
                            }
                        ?>
                    
                    </select>
                    <input type="submit" name="listok" value="GO">
                </form>
                <div class="row mb10 formdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ SẢN PHẨM</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>GIÁ SẢN PHẨM</th>
                            <th>HÌNH ẢNH</th>
                            <th>LƯỢT XEM</th>
                            <th></th>

                        </tr>
                        <?php
                            foreach($listsanpham as $products){
                                extract($products);
                                $suasp="index.php?act=suasp&product_ID=".$product_ID;
                                $xoasp="index.php?act=xoasp&product_ID=".$product_ID;
                                $hinhpath="../upload/".$image;
                                if(is_file($hinhpath)){
                                    $hinh="<img src='".$hinhpath."' height='80'>";
                                }else{
                                    $hinh="no photo";
                                }
                                
                                echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$product_ID.'</td>
                                        <td>'.$product_name.'</td>
                                        <td>'.$price.'</td>
                                        <td>'.$hinh.'</td>
                                        <td>'.$views.'</td>
                                        <td>
                                            <a href="'.$suasp.'">
                                                <input type="button" value="Sửa">
                                            </a>
                                            <a href="'.$xoasp.'">
                                                <input type="button" value="Xóa">
                                            </a>
                                        </td>

                                    </tr>';
                            }

                        ?>
                        
                       
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>

                </div>
            </div>

        </div>