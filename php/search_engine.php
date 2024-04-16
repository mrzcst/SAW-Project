<?php

    //Connect database
    require("../php/db.php");

    //Get keyword value
    if(isset($_GET['key'])){
        //Trim value
        $key = trim($_GET['key']);

        //Begin the SELECT query
        $query = "SELECT * FROM `search` WHERE ";

        //Separate the words and finish the query using any separate word
        $keywords = explode(' ', $key);
        foreach($keywords as $word) {
            $query .= "`keywords` LIKE '%".$word."%' OR ";
        }
        
        //Delete the last [OR] from the end
        $query = substr($query, 0, strlen($query) - 3);

        //Get the result and num of rows
        $result = mysqli_query($connect, $query);
        $row_num = mysqli_num_rows($result);

        //Check for no result
        if($row_num > 0) {
            echo '<h3 class="section-title">Here is what I found: </h3>';
            while($row = mysqli_fetch_assoc($result)){
                echo '
                    <div class="results">
                        <hr>
                        <h4 class="title"><a href="'.$row['url'].'">'.$row['title'].'</a></h4>
                        <p>'.$row['description'].'</p>
                    </div>
                ';
            }
        }else {
            echo '<h3 class="section-title">Nothing found, retry!</h3>';
        }
    }
    //Close connection to db
    mysqli_close($connect);
?>