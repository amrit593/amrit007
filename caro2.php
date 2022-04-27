<?PHP   
        $sql="SELECT * FROM innr WHERE category='men'";
        $rus= $conn->query($sql);
        if ($rus->num_rows>0) {
        ?>

    <section class="vertical-center-4 slider ">
        <?PHP   while ($row= $rus->fetch_assoc() ){?>
        <div class="rk1">
            <div class="rk2" id="k8">
                <img src="img/<?PHP echo $row["img"]?>">
            </div>
            <div class="ml2" id="g8">
            </div>
            <div class="rk3" id="t8">
                <h3>
                    <?PHP echo $row["name"]?>
                </h3>
                <P>
                    <?PHP echo $row["price"]?>
                </P>
            </div>
        </div>

        <?PHP   }?>
    </section>
    <?PHP   }?>