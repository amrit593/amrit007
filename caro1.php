
    <?PHP   
        $sql="SELECT * FROM innr WHERE category='women'";
        $rus= $conn->query($sql);
        if ($rus->num_rows>0) {
        ?>

    <section class="vertical-center-4 slider ">
        <?PHP   while ($row= $rus->fetch_assoc() ){
            $i=0;
            ?>

        <div class="qh1">
            <div class="qh2" id="k1">
                <div class="img1"><img src="img/<?PHP echo $row["img"]?>"></div>
                <div class="img2"><img src="img/<?PHP echo $row["img2"]?>"></div>
                <div class="nn1">
                <div class="cz1"><i class="fa-solid fa-heart"></i></div>
                <div class="cz1"><i class="fa-solid fa-code-compare"></i></div>
                <div class="cz1"><i class="fa-solid fa-eye"></i></div></div>
                
            <button type="button">Add to Cart</button>
            </div>


            <div class="qh3" id="t1">
                <h2>
                    <?PHP echo $row["name"]?>
                </h2>
                <P>
                    <?PHP echo $row["price"]?>
                </P>
            </div>

        </div>
        <?PHP   }?>
    </section>
    <?PHP   }?>
    <script>
         $(document).ready(function() {
            $(".img2").css("display", "none");
            $(".qh2").mouseenter(function () {
                jQuery(this).find(".img1").hide();
                jQuery(this).find(".img2").show();
             
            });
            $(".qh2").mouseleave(function () {
                jQuery(this).find(".img2").hide();
                jQuery(this).find(".img1").show();
            });
         });
    </script>