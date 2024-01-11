<?php
require_once "vendor\autoload.php";

use Php2\Oop\Controller\BaseController;
use Php2\Oop\Core\BaseCore;
use Php2\Oop\Model\BaseModel;
$MaSoSv = new BaseController();
$HoTen = new BaseModel();
$MonHoc = new BaseCore();
echo $MaSoSv->Hello();
echo $HoTen->Ten();
echo $MonHoc->monhoc();