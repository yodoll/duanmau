
<div class="row2">
         <div class="row2 font_title">
          <h1>giỏ hàng</h1>
         </div>
         <div class="row2 form_content ">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
               
                <th>hình</th>
                <th>sản phẩm/th>
                <th>đơn giá</th>
                <th>số lượng</th>
                <th>thành tiền</th>
                <th>thao tác</th>
              
            </tr>
            <?php
            $tong=0;
                foreach($_SESSION['mycart'] as $cart){
                  $hinh=$img_path.$cart[2];
                  $sotien=$cart[3]*$cart[4];
                  $tong=$tong+$sotien;
                  echo 
                  '<tr>
                  <td> <img src="'.$hinh.'" alt="" height=80px></td>
                  <td>'.$cart[1].'</td>
                  <td>'.$cart[3].'</td>
                  <td>'.$cart[4].'</td>
                  <td>'.$sotien.'</td>
                  <td> <input type="button" VALUES="xoa"></td>
                  </tr>';
                }
                echo '<tr>
                <td colspan="4">tông don hàng</td>
                <td>'.$tong.'</td>
                </tr>';
                
            ?>
           </table>
           </div>
    
         </div>
        </div>



       
    </div>