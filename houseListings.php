<?php
include 'database.php';
session_start();
?>
<!DOCTYPE html>
<html>

    <?php include 'header.php'; ?>   

    <TITLE>Search Results</TITLE>
    <body>

        <div class="container-fluid">
            <div class="row py-5">
                <div class="col-lg-9 mx-auto text-center">
                    <h1 class="display-4">Search Results</h1>
                </div>
            </div>
            <div class="houseList">
                <div class="row mb-5">
                    <div class="col-lg-8 mx-auto bg-white p-5 rounded shadow">
                        <?php require_once 'searchForm.php'; ?>
                    </div>
                </div>


                <?php
                require 'filterOptions.php';

                if (filter_input(INPUT_POST, 'submit-search') !== null) {
                    $search = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'search'));

                    $where = "WHERE (address = '$search' OR state = '$search' OR zipcode = '$search' OR city = '$search')";

                    //append 'and' conditions to sql statement
                    if (count($conditions) === 1) {
                        $where .= ' AND ' . $conditions[0];
                    } else if (count($conditions) > 1) {
                        $where .= ' AND ' . implode(' AND ', $conditions);
                    }


                    if ($inputOrder !== 'Any') {
                        $order = "ORDER BY ";
                        switch ($inputOrder) {
                            case "address":
                                $order .= "address";
                                break;
                            case "city":
                                $order .= "city";
                                break;
                            case "zipcode":
                                $order .= "zipcode";
                                break;
                            case "state":
                                $order .= "state";
                                break;
                            case "beds":
                                $order .= "numbed";
                                break;
                            case "baths":
                                $order .= "numbath";
                                break;
                            case "price":
                                $order .= "price";
                                break;
                            case "squarefootage":
                                $order .= "squarefootage";
                                break;
                        }
                        $orderby = "";
                        switch ($orderType) {
                            case "ascend":
                                $orderby = " ASC";
                                ;
                                break;
                            case "descend":
                                $orderby = " DESC";
                                ;
                                break;
                        }
                    }
                    if ($inputOrder !== null && $inputOrder !== 'Any' && $orderType !== null && $orderType !== 'Any') {
                        $sql = "SELECT * FROM combinedhomes $where $order $orderby";
                    } else {
                        $sql = "SELECT * FROM combinedhomes $where";
                    }
                    $result = mysqli_query($conn, $sql);
                    $connectsqli = $conn->query($sql);
                    //display sort message
                    if ($inputOrder !== null && $inputOrder !== 'Any' && $orderType !== null && $orderType !== 'Any') {
                        ?>
                        <p style="color: white">Sorting by <?php echo $inputOrder . " " . $orderType . "ing"; ?></p>  
        <?php
    }
    ?>
                    <div class="container mt-2">
                        <div class="row">
    <?php
    if (!empty($connectsqli) && $connectsqli->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="card card-block">
                                            <a href="detailsPage.php?id=<?php echo $row['id'] ?>" style="text-decoration: none; color: black;">
                                                <img class='card-img-top' src="<?php echo $row['image-src'] ?>" alt='Not Found' onerror=this.src="https://d3bmimpiifbojs.cloudfront.net/wp-content/uploads/2017/04/no-image-image-1.png?x83809">
                                                <div class="card-body">
                                                    <h3 class="card-title"><?php echo $row['address'] ?></h3>
                                                    <p><?php echo $row['city'] . ", " . $row['state'] . " " . $row['zipcode'] ?></p>
                                                    <p><?php echo $row['price'] ?></p>
                                                    <p><?php echo $row['numbed'] . " bd " . $row['numbath'] . " bth " . $row['squarefootage'] . " SqFt" ?></p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                        } else {
                            echo "There are no results matching your search!";
                        }
                        $conn->close();
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
