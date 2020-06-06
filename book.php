<?php
include('db_conn.php');
$title = $_POST['booktitle'];

echo $title;
$sql = "SELECT * FROM `book` WHERE `title` = '$title';";
$result = mysqli_query($link, $sql);
$row_nums = mysqli_num_rows($result);

echo $row_nums;
if ( $row_nums > 0 ) {
    echo "
    <table border=1>
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>ISBN</th>
            <th>Price</th>
            <th>Create time</th>
        </tr>";
    for($i = 0;$i<$row_nums;$i++){
        $row = $result->fetch_row();
        echo "<tr>
                <td>". $i ."</td>
                <td>". $row[1] ."</td>
                <td>". $row[2] ."</td>
                <td>". $row[3] ."</td>
                <td>". $row[4] ."</td>
                <td>". $row[5] ."</td>
                <td>". $row[6] ."</td>
            </tr>";
    }
    echo"</table>";
}