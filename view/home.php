<main class="catalog  mb ">
    <div class="boxleft">
        <div class="banner">
            <img id="banner" src="./img/anh0.jpg" alt="">
            <button class="pre" onclick="pre()">&#10094;</button>
            <button class="next" onclick="next()">&#10095;</button>
        </div>
        <div class="items">
            <?php
            $i = 0;
            foreach ($spnew as $sp) {
                extract($sp);
                $hinh =  $img_path . $img;
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                $linksp = "index.php?act=sanphamct&idsp=" . $id;

                echo '<div class="box_items ' . $mr . '">
                    <div class="box_items_img">
                <img src="' . $hinh . '" alt="">
               <form action="index.php?act=addtocart" method="post">
               <input type="hidden" name="id" value"'.$id.'">
               <input type="hidden" name="id" value"'.$name.'">
               <input type="hidden" name="id" value"'.$img.'">
               <input type="hidden" name="id" value"'.$price.'">
               <div class="add" href="">ADD TO CART</div>
               </form>
             </div>
              <a class="item_name" href="' . $linksp . '">' . $name . '</a>
              <p class="price">$' . $price . '</p>
              
           </div>';
                $i += 1;
            }
            ?>

            <!--           <div class="box_items">-->
            <!--             <div class="box_items_img">-->
            <!--                <img src="img/iphoneX.jpg" alt="">-->
            <!--                <div class="add" href="">ADD TO CART</div>-->
            <!--             </div>-->
            <!--              <a class="item_name" href="">SamSung J4</a>-->
            <!--              <p class="price">$4000</p>-->
            <!--              -->
            <!--           </div>-->
            <!--           <div class="box_items">-->
            <!--             <div class="box_items_img">-->
            <!--                <img src="img/iphoneX.jpg" alt="">-->
            <!--                <div class="add" href="">ADD TO CART</div>-->
            <!--             </div>-->
            <!--              <a class="item_name" href="">SamSung J4</a>-->
            <!--              <p class="price">$4000</p>-->
            <!--              -->
            <!--           </div>-->
            <!--           <div class="box_items">-->
            <!--             <div class="box_items_img">-->
            <!--                <img src="./img/item1.jpg" alt="">-->
            <!--                <div class="add" href="">ADD TO CART</div>-->
            <!--             </div>-->
            <!--              <a class="item_name" href="">SamSung J4</a>-->
            <!--              <p class="price">$4000</p>-->
            <!--              -->
            <!--           </div>-->
            <!--           <div class="box_items">-->
            <!--             <div class="box_items_img">-->
            <!--                <img src="./img/item0.jfif" alt="">-->
            <!--                <div class="add" href="">ADD TO CART</div>-->
            <!--             </div>-->
            <!--              <a class="item_name" href="">SamSung J4</a>-->
            <!--              <p class="price">$4000</p>-->
            <!--              -->
            <!--           </div>-->
            <!--           <div class="box_items">-->
            <!--             <div class="box_items_img">-->
            <!--                <img src="./img/galaxyJ4.jfif" alt="">-->
            <!--                <div class="add" href="">ADD TO CART</div>-->
            <!--             </div>-->
            <!--              <a class="item_name" href="">SamSung J4</a>-->
            <!--              <p class="price">$4000</p>-->
            <!--              -->
            <!--           </div>-->
            <!--           <div class="box_items">-->
            <!--             <div class="box_items_img">-->
            <!--                <img src="./img/iphoneX.jpg" alt="">-->
            <!--                <a class="add" href="">ADD TO CART</a>-->
            <!--             </div>-->
            <!--              <a class="item_name" href="">SamSung J4</a>-->
            <!--              <p class="price">$4000</p>-->
            <!--              -->
            <!--           </div>-->
            <!--           <div class="box_items">-->
            <!--             <div class="box_items_img">-->
            <!--                <img src="./img/item0.jfif" alt="">-->
            <!--                <div class="add" href="">ADD TO CART</div>-->
            <!--             </div>-->
            <!--              <a class="item_name" href="">SamSung J4</a>-->
            <!--              <p class="price">$4000</p>-->
            <!--              -->
            <!--           </div>-->
            <!--           <div class="box_items">-->
            <!--             <div class="box_items_img">-->
            <!--                <img src="./img/anh5.jpg" alt="">-->
            <!--                <div class="add" ><a href="danhsach.html">ADD TO CART</a></div>-->
            <!--             </div>-->
            <!--              <a class="item_name" href="">SamSung J4</a>-->
            <!--              <p class="price">$4000</p>-->
            <!--           </div>-->
        </div>
    </div>
    <?php
    include_once "view/boxright.php";
    ?>

</main>
<!-- BANNER 2 -->