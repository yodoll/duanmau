
<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH BÌNH LUẬN</h1>
         </div>
         <div class="row2 form_content ">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
               
                <th>Id</th>
                <th>IdUser</th>
                <th>Nội dung bình luận</th>
                <th>IdPro</th>
                <th>Ngày Bình Luận</th>
                <th>Chức năng</th>
            </tr>
            <?php
                foreach($listbinhluan as $binhluan){
                    extract($binhluan);
                    $suabl="index.php?act=suabl&id=".$id;
                    $xoabl="index.php?act=xoabl&id=".$id;
                    echo '
                    <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$iduser.'</td>
                    <td>'.$noidung.'</td>
                    <td>'.$idpro.'</td>
                    <td>'.$ngaybinhluan.'</td>
                    <td><a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
                </tr>
                    ';
                }
            ?>
           </table>
           </div>
            <div class="row mb10 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
           </div>
         </div>
        </div>



       
    </div>