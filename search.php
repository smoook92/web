<?php require "include/header.php"; ?>



<div class="clear"> </div>
</div>

    <div class="wrap">
        <div class="bloder-content">
            <h1>Результаты поиска: </h1>
            <div class="clear"> </div>
            <?php
            function search($words){
                $words = htmlspecialchars($words);
                if ($words === "") return false;
                $query_search = "";

                $arraywords = explode(" ", $words);

                    $query_search .= '`title` LIKE "%'.$words.'%" OR `text` LIKE "%'.$words.'%"';


                $query = "SELECT * FROM singles WHERE $query_search";
                $mysqli = new mysqli("localhost", "root", "", "test_saneto");
                $result_set = $mysqli->query($query);
                $mysqli->close();

                $i = 0;
                while($row = $result_set->fetch_assoc()){
                    $results[$i] = $row;
                    $i++;
                }
                $result_set->close();
                return $results;
            }

            if (isset($_POST['bsearch'])){
                $words = $_POST['words'];
                $results = search($words);
            }
            ?>
            <div class="clear"> </div>
            <?php
                if (isset($_POST['bsearch'])){
                    if ($results === false) echo "Вы задали пустой запрос";
                    if (count($results) == 0) echo "Ничего не найдено";
                    else
                        for ($i = 0; $i < count($results); $i++)
                            echo $results[$i]["title"]."<br />";
                }
            ?>
        </div>
    </div>
    <div class="clear"> </div>
    <!-- End-content-gallery-->
    <!-- DC Pagination:C9 Start -->
    <div class="wrap">
        <div class="clear"> </div>
        <!-- DC Pagination:C9 End -->
    </div>
<?php require "include/footer.php"; ?>