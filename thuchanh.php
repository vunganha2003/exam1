<?php
/*Bài 1: Viết một chương trình PHP để kiểm tra xem một số nguyên dương nào đó có phải là số nguyên tố hay không. Yêu cầu:
- Tạo một hàm isPrime nhận một số nguyên dương và trả về true nếu nó là số nguyên tố, ngược lại trả về false.
- Sử dụng hàm để hiển thị danh sách các số nguyên tố từ 1 đến 100.
*/
//Hàm kiểm tra số nguyên tố
echo "<br><b> Câu 1: </b>";
function isPrime($n){ 
    if (is_numeric($n) && is_int($n) && $n >= 2) {
        for ($i = 2; $i * $i <= $n; $i++) {
            if ($n % $i == 0) {
                return false;
            }  
        }
        return true; 
    } else {
        return false;
    }
}
//Hàm hiển thị số nguyên tố
function displayPrimeNumbers($start, $end) {
    echo "Các số nguyên tố từ $start đến $end là: ";
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            echo $i . "  ";
        }
    }
}
displayPrimeNumbers(1, 100);


/*Bài 2: Viết một ứng dụng PHP để quản lý thông tin về sản phẩm trong một cửa hàng sử dụng mảng kết hợp. Yêu cầu:
- Tạo một mảng kết hợp chứa thông tin về sản phẩm với các khóa như name, price, và quantity.
- Hiển thị thông tin của tất cả sản phẩm trong mảng.
- Viết hàm để tính tổng giá trị của tất cả sản phẩm (price * quantity).
*/
echo "<br><br><b> Câu 2: </b>";
// Tạo mảng kết hợp chứa thông tin về sản phẩm
$products = array(
    array("name" => "Áo thun", "price" => 10000, "quantity" => 5),
    array("name" => "Áo khoắc bò", "price" => 20000, "quantity" => 3),
    array("name" => "Áo len", "price" => 15000, "quantity" => 7)
);

// Hiển thị thông tin của tất cả sản phẩm trong mảng
function displayProductInfo($products) {
    echo "Thông tin của các sản phẩm trong cửa hàng:<br>";
    foreach ($products as $product) {
        echo "- Tên sản phẩm: " . $product['name'] . ", Giá: " . $product['price'] . "VND, Số lượng: " . $product['quantity'] . "<br>";
    }
}
displayProductInfo($products);

// Viết hàm để tính tổng giá trị của tất cả sản phẩm (price * quantity)
function calculateTotalValue($products) {
    $totalValue = 0;
    foreach ($products as $product) {
        $totalValue += $product['price'] * $product['quantity'];
    }
    return $totalValue;
}
$totalValue = calculateTotalValue($products);
echo "=> Tổng giá trị của tất cả sản phẩm là: " . $totalValue . "VND";

?>
