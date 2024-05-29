<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <?php
            // function myTest(){
            //     $x = 0;
            //     echo $x;
            //     $x++;
            // }
            // myTest();
            // echo"<br>";
            // myTest();
            // echo"<br>";
            // myTest();
            // echo"<br>";
            // //Tên biến = array(", , ,");
            // //nếu không muốn gán giá trị cho biến thì gán $x = null;
            // echo"hello";
            // print 'hello';
            // echo strlen ("hello world!");
            // str_worf-count : trả về số từ của 1 câu
            // strpos: trả về vị trí của xâu con trong xâu mẹ
            // strtuopper: Chuyển đổi tất cả các ký tự trong chuỗi thành chữ hoa.
            // strtolower:Chuyển đổi tất cả các ký tự trong chuỗi thành chữ thường.
            // str_replace:Thay thế tất cả các xuất hiện của một chuỗi con trong chuỗi khác bằng một chuỗi khác.
            // strrev:Đảo ngược chuỗi.
            // $name = "Nguyen Thanh An";
            // $lop = "KHMTK6B";
            // $name = strtoupper($name);
            // echo "</h1>Xin Chao \"$name\" hoc lop '$lop' </h1>";
            // PHP_INT_MAX(): chứa giá trị lớn nhất mà một số nguyên có thể có trên hệ thống
            // PHP_INT_MIN(): chứa giá trị nhỏ nhất mà một số nguyên có thể có trên hệ thống 
            // PHP_INT_SIZE():  chứa kích thước (số byte) của một số nguyên trên hệ thống
            // is_int(): một hàm kiểm tra xem một biến có phải là một số nguyên hay không
            // is_integer(): một tên bí danh cho hàm is_int(). Hai hàm này hoạt động giống nhau: kiểm tra xem một biến có phải là một số nguyên hay không
            // PHP_FLOAT_MAX(): chứa giá trị lớn nhất mà một số thực có thể có trên hệ thống 
            // PHP_FLOAT_MIN(): chứa giá trị nhỏ nhất mà một số thực có thể có trên hệ thống 
            // PHP_FLOAT_DIG(): chứa số chữ số chính xác tối đa mà một số thực có thể có trên hệ thống
            // PHP_FLOAT_EPSILON(): chứa khoảng cách giữa 1 và số thực lớn nhất nhỏ hơn 1 trên hệ thống
            // NaN:Là một giá trị đặc biệt trong số thực của PHP, biểu thị "không phải là một số". Nó xuất hiện khi một phép toán số không thể hoàn thành một cách hợp lý, như chia cho 0.
            // is_nan(): Đây là một hàm trong PHP được sử dụng để kiểm tra xem một giá trị có phải là NaN hay không. Nếu giá trị đưa vào là NaN, hàm này trả về true, ngược lại trả về false.
            // $x = 5985;
            // var_dump(is_numeric($x));
            // echo "<br>";
            // $x ="5985";
            // var_dump(is_numeric($x));
            // echo "<br>";
            // $x ="59.85" + 100;
            // var_dump(is_numeric($x));
            // define(name,value,case_insensitive);
            // define("GREETING", "xin chao dai hoc ha long");
            // echo GREETING ;
            // $Ho = "Nguyen Van";
            // $Ten = " Minh ";
            // $VN = $Ho.$Ten;
            // $EN = $Ten.$Ho;
            // echo ("<h1>$VN</h1>");
            // echo ("<h2>$EN</h2>");
            //if(condition){}
            //}elseif(condition)
            // Viết chương trình đưa ra lời chào khách hàng biết rằng: nếu tuổi nhỏ hơn hoặc bằng 20 thì ghi ra là : Chào em, nếu tuổi lớn hơn hoặc bằng 20 và nhỏ hơn 40 với nam thì là anh, nữ thì là chị, nếu tuổi lớn hơn 40, nhỏ hơn 60 thì ghi ra là chào bác, nếu tuổi nếu lơn hơn hoặc bằng 60 thì ghi ra nam là ông, nữ là bà. chỉ dùng if- else
            // $Hoten = "Nguyen An";
            // $Gioitinh = "Nữ";
            // $Tuoi = 25;
            // if ($Tuoi <= 20) {
            //     echo "Chào em!";
            // } elseif ($Tuoi >= 20) {
            //     if ($Tuoi < 40) {
            //         if ($Gioitinh == "Nam") {
            //             echo "Chào anh $Hoten ";
            //         } elseif ($Gioitinh == "Nữ") {
            //             echo "Chào chị $Hoten";
            //         }
            //     } elseif ($Tuoi >= 40) {
            //         if ($Tuoi < 60) {
            //             echo "Chào bác $Hoten";
            //         } else { 
            //             if ($Gioitinh == "Nam") {
            //                 echo "Chào ông $Hoten";
            //             } elseif ($Gioitinh == "Nữ") {
            //                 echo "Chào bà $Hoten";
            //             }
            //         }
            //     }
            // }
            //tạo 1 mảng gồm tên của 5 sinh viên tin tên ra màn hình, mỗi tên trên 1 dòng
            // $sinh_vien = array("Nguyễn Văn A", "Trần Thị B", "Lê Văn C", "Phạm Thị D", "Hoàng Văn E");
            // foreach ($sinh_vien as $ten) {
            // echo $ten . "<br>";
            // }
            // $khach_hang = array(
            //     "ten" => "Nguyễn Thị An",
            //     "dia_chi" => "123 Đường ABC, Quận XYZ, Thành phố HCM",
            //     "gioi_tinh" => "Nữ",
            //     "so_dien_thoai" => "0123456789"
            // );
            // foreach($khach_hang as $key => $element){
            //     echo $key . ":".$element;
            //     echo "</br>";
            // }
            // $Diem = 7.5;
            // function thangChu($Diem) {
            //     $bac = "F";
            //     if ($Diem >= 9) {
            //         $bac = "A";
            //     } elseif ($Diem >= 8) {
            //         $bac = "B";
            //     } elseif ($Diem >= 7) {
            //         $bac = "C";
            //     } elseif ($Diem >= 5) {
            //         $bac = "D";
            //     }
            //     return $bac;
            // }        
            // $Diem = 7.5;
            // $bac = thangChu($Diem);
            // echo "Điểm số $Diem chuyển thành điểm chữ là: $bac";
            // function familyName($fname){
            //     echo "$fname Refsnes.<br>";
            // }
            // familyName("Jani");
            // familyName("Hege");
            // familyName("Stale");
            // familyName("Kai Jim");
            // familyName("Borge");
            // function add_five(&$value){
            //     $value += 5;
            // }
            // $num = 2;
            // add_five($num);
            // echo $num;
            //sử dụng dấu 3 chấm trc biến khi ko biết số lượng của tham số khi truyền vào
            // function sumMyNumber(...$x){
            //     $n = 0 ;
            //     $len = count($x);
            //     for($i = 0; $i < $len; $i++){
            //         $n +=$$x[$i];
            //     }
            //     return $n;
            // $a = sumMyNumber(5,4,3,7,8,9,8,5);
            // echo $a;
            // }
            // $carA = array("Volvo","BMW","Toyota");
            // $carB = ["Volvo","BMW","Toyota"];
            // $carC = [
            //     "Volvo",
            //     "BMW",
            //     "Toyota"
            // ];
            // print_r($carA)
            // $cars = [
            //     0 => "Volvo",
            //     1 => "BMW",
            //     2 => "Toyota"
            // ];
            // $cars1 = [];
            // $cars1[0] = "Volvo";
            // $cars1[1] = "BMW";
            // $cars1[2] = "Toyota";
            // $myArr = [];
            // $myArr[0] = "apples";
            // $myArr[1] = "bananas";
            // $myArr["fruit"] = "cherries";
            // $fruit = array("Apple","Banana","Cherry");
            // $fruit[] = "Orange";
            // $cars = array("brand" => "Ford", "model"=> "Mustang");
            // $cars["color"] = "red"
            // $fruitA = array("Apple", "Banana", "Cherry");
            // array_push($fruitA,"Orange","Kiwi","Lemon");
            // $cars = array("brand" => "Ford", "model"=> "Mustang");
            // $cars += ["color"=> "red","year"=> 1964];
            // $cars = array("Volvo","BMW","Toyota");
            // array_splice($cars,1,1);
            // echo $cars[0],",",$cars[1];
            // $cars = array("Volvo","BMW","Toyota");
            // unset($cars[1]);
            // echo $cars[0],",",$cars[2],"\n";
            // echo $cars[0],",",$cars[1];
            $cars = array("Volvo","BMW","Toyota");
            array_shift($cars);
            array_pop($cars);
            echo $cars[0],$cars[1],$cars[2];
        ?>
    </body>
</html>
