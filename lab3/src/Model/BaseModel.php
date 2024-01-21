<?php
namespace Php2\Oop\Model;
// Tạo interface
interface PaymentInterface {
    public function tratien();
    public function hinhthuc_chung();
}

// Tạo abstract class
abstract class BaseModel implements PaymentInterface {
    abstract public function tratien();
    public function hinhthuc_chung() {
        $this->tratien();
    }
}

// Tạo class Paypal kế thừa từ abstract class BaseModel và implement interface PaymentInterface
class Paypal extends BaseModel {
    public function tratien() {
        echo "pa thanh toan bang Paypal";
    }
}

// Sử dụng class Paypal
$paypal = new Paypal();
$paypal->hinhthuc_chung();
