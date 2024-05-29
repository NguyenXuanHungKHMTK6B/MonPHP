<?php 
require_once'./MVC/processing/Controller.php';

class ProductController extends Controller
{
    public $productModel;
    public function __construct()
    {
        $this -> productModel = $this -> model ("ProductModel");
    }
    function displayIntroduction()
    {
        $this -> view("master",[
            "Page" => "home"
        ]);
    }
    function getProductsbyBand(){
        $this ->view ("master", [
            "Page" => "getProductsbyBand"
        ]);
    }
    public function displayProductsbyBand() {
        if(isset ($_POST["btSearch"])){
            $band = $_POST["selectBand"];
            $tblname ='tblproduct';
            $field = "band";
            $products = $this -> productModel -> getRecordsbyField($tblname,$field,$band);
            $this -> view(
                "master",
                [
                    "Page" => "getProductsbyBand",
                    "Products" => $products
                ]
                );
        }
    }
    function getProductsbyYear(){
        $this ->view ("master", [
            "Page" => "getProductsbyYear"
        ]);
    }
    public function displayProductsbyYear() {
        if(isset ($_POST["btSearch"])){
            $band = $_POST["selectYear"];
            $tblname ='tblproduct';
            $field = "year";
            $products = $this -> productModel -> getRecordsbyField($tblname,$field,$band);
            $this -> view(
                "master",
                [
                    "Page" => "getProductsbyYear",
                    "Products" => $products
                ]
                );
        }
    }
    function impInsertProduct() {
        $this -> view ("master",[
            "Page" => "insertProduct"
        ]);
    }
    public function insertProduct() {
        if(isset ($_POST["btInsert"])){
            $id = $_POST["id"];
            $pname = $_POST["pname"];
            $company = $_POST["company"];
            $year = $_POST["year"];
            $band = $_POST["band"];
            if(isset($_FILES['imageFile']) && $_FILES['imageFile']['error'] === UPLOAD_ERR_OK){
                $pimage = 'data:image/png;base64,' . base64_encode(file_get_contents($_FILES['imageFile']['tmp_name']));
            }
        }
        $result = $this -> productModel -> insertProduct($id,$pname,$company,$year,$band,$pimage);
        $this -> view(
            "master",[
                "Page" => "insertProduct",
                "result" => $result
            ]);
    }
}
?>
public function Insert_tbWorker($name, $age, $position) {
        $sql = "INSERT INTO tbWorker (name, age, position) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sis", $name, $age, $position);

        if ($stmt->execute()) {
            echo "Worker inserted successfully.";
        } else {
            echo "Error inserting worker: " . $stmt->error;
        }
        $stmt->close();
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>