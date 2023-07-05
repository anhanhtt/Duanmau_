<div class="row">
            <div class="row formtitle">
                <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th></th>

                        </tr>
                        <?php
                            foreach($listdanhmuc as $types){
                                extract($types);
                                $suadm="index.php?act=suadm&type_id=".$type_id;
                                $xoadm="index.php?act=xoadm&type_id=".$type_id;
                                
                                echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$type_id.'</td>
                                        <td>'.$type_name.'</td>
                                        <td>
                                            <a href="'.$suadm.'">
                                                <input type="button" value="Sửa">
                                            </a>
                                            <a href="'.$xoadm.'">
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
                    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>

                </div>
            </div>

        </div>