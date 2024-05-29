<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $newAction = "";
}else{
    $newAction = "displayProductsByYear";
}
?>
<form method="post" action="<?php echo $newAction; ?>"> 
    <div class="mb-3">
        <label for="" class="form-label">Select Year</label> <br>
        <select
            class="form-select form-select-lg"
            name="selectYear"
            id=""
        >
        <?php
            for ($year = 2015; $year <= 2030; $year++) {
            echo "<option value=\"$year\">$year</option>";
            }
            ?>
        </select>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary" name="btSearch">Bấm</button>
        </div>
    </div>  
</form>
<?php
    if(isset($data["Products"])) {
        echo "<table>";
        echo "<tbody>";
        echo "<thead>";
        echo "<tr>";
        $fieldNames = $data["Products"]->fetch_fields();
        foreach ($fieldNames as $field) {
            echo "<th class = \"text-center\">" . strtoupper($field->name) ."</th>";
        }
        echo "</tr>";
        echo "</thead>";
        while ($row = mysqli_fetch_array($data["Products"])){
            echo "<tr>";
            echo "<td class= \"text-left\">". $row["id"] ."</td>";
            echo "<td class= \"text-left\">". $row["pid"] ."</td>";
            echo "<td class= \"text-left\">". $row["pname"] ."</td>";
            echo "<td class= \"text-left\">". $row["company"] ."</td>";
            echo "<td class= \"text-left\">". $row["year"] ."</td>";
            echo "<td class= \"text-left\">". $row["band"] ."</td>";
            echo "<td class= \"text-left\">". '<img src="' . $row["pimage"] . '" alt="Image">' . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
?>