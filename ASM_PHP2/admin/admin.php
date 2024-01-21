<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Blog</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php
    include "../model/taikhoan.php";
    include "include/header.php";
    include "include/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/binhluan.php";
    include "../model/thongke.php";
    
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "adddm":
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $tenloai = $_POST['tenloai'];
                    adddm($tenloai);
                    $thongbao = "Thêm thành công";
                }  
                include "categories/add.php";
                break;
            case "listdm":
                $listdanhmuc = listdm();
                include "categories/list.php";
                break;  
            case "xoadm":
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    xoadm($_GET['id']);
                }
                $sql = "select * FROM danhmuc ORDER BY name";
                $listdanhmuc = listdm();
                include "categories/list.php";
                break;
            case "suadm":
                if(isset($_GET['id']) && ($_GET['id']>0)){
                $dm=suadm($_GET['id']);
                }
                include "categories/update.php";
                break;
            case "updatedm":
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    updatedm($id,$tenloai);
                    $thongbao = "cập nhật thành công";
                }  
                $sql = "select * FROM danhmuc ORDER BY id desc";
                $listdanhmuc = listdm();
                include "categories/list.php";
                break;
            case "addsp":
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                    $mota = $_POST['mota'];
                    addsp($tensp, $giasp, $hinh, $mota, $iddm);
                    $thongbao = "Thêm thành công";
                } 
                $listdanhmuc = listdm(); 
                include "products/add.php";
                break;
            case "listsp":
                if(isset($_POST['listok']) && ($_POST['listok'])){
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                }else{
                    $kyw = "";
                    $iddm = 0;
                }
                $listdanhmuc = listdm(); 
                $listsanpham = listsp($kyw,$iddm);
                include "products/list.php";
                break;  
            case "xoasp":
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    xoasp($_GET['id']);
                }
                $sql = "select * FROM sanpham ORDER BY name";
                $listsanpham = listsp("",0);
                include "products/list.php";
                break;
            case "suasp":
                if(isset($_GET['id']) && ($_GET['id']>0)){
                $sp=suasp($_GET['id']);
                }
                include "products/update.php";
                break;
            case "updatesp":
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id = $_POST['id'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                    $mota = $_POST['mota'];
                    updatesp($id,$tensp,$giasp,$hinh,$mota);
                    $thongbao = "cập nhật thành công";
                }  
                $sql = "select * FROM sanpham ORDER BY id desc";
                $listsanpham = listsp("",0);
                include "products/list.php";
                break;
            case "addtk":
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['phone'];
                    $role = $_POST['role'];
                    addtk($user, $pass, $email, $address, $tel, $role);
                    $thongbao = "Thêm thành công";
                } 
                $listtaikhoan = listtk(); 
                include "users/add.php";
                break;
            case "listtk":
                $listtaikhoan = listtk();
                include "users/list.php";
                break;
            case "xoatk":
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    xoatk($_GET['id']);
                }
                $sql = "select * FROM taikhoan ORDER BY name";
                $listtaikhoan = listtk();
                include "users/list.php";
                break;
            case "suatk":
                if(isset($_GET['id']) && ($_GET['id']>0)){
                $tk=suatk($_GET['id']);
                }
                include "users/update.php";
                break;
            case "updatetk":
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id = $_POST['id'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['phone'];
                    $role = $_POST['role'];
                    updatetk($id,$user);
                    $thongbao = "cập nhật thành công";
                }  
                $sql = "select * FROM taikhoan ORDER BY id desc";
                $listtaikhoan = listtk();
                include "users/list.php";
                break;
            case "addbl":
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $noidung = $_POST['noidung'];
                    $iduser = $_POST['iduser'];
                    $idpro = $_POST['idpro'];
                    $ngaybinhluan = $_POST['ngaybinhluan'];
                    addbl($noidung, $iduser, $idpro, $ngaybinhluan);
                    $thongbao = "Thêm thành công";
                } 
                $listbinhluan = listbl(); 
                include "comment/add.php";
                break;
            case "listbl":
                $listbinhluan = listbl();
                include "comment/list.php";
                break;
            case "xoabl":
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    xoabl($_GET['id']);
                }
                $sql = "select * FROM binhluan ORDER BY id";
                $listbinhluan = listbl();
                include "comment/list.php";
                break;
            case "login":
                $sql ="";
                include "include/login.php";
                break;
            case "thongke":
                $listthongke = loadall_thongke();
                include "thongke/list.php";
                break;
            case "bieudo":
                $listthongke = loadall_thongke();
                include "thongke/bieudo.php";
                break;
        }
    }else{
        include "include/home.php";
    }
    include "include/footer.php";
        ?>
    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>