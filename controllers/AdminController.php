<?php

class AdminController {

    public static function actionEnter() {
        if (isset($_POST['buttonenter'])) {
            $email = trim($_POST['inputEmail']);
            $password = md5(trim($_POST['inputPassword']));

            $texterror = "";
            $result = ValidateUser::Validate($password, $email, $texterror);

            if ($result) {
                $_SESSION['email'] = $email;
                $texterror = "Вы успешно вошли!";
            }
        } else
            $texterror = "Неверный контекст входа";

        header("Location: /admin/section");
        die();
    }

    public static function actionSection() {
        if (ValidateUser::isValidate())
            AdminView::SectionAdmin();
        else {
            header("Location: /admin/index");
            die();
        }
    }

    public static function actionProduct() {
        if (ValidateUser::isValidate())
            AdminView::ProductAdmin();
        else {
            header("Location: /admin/index");
            die();
        }
    }

    public static function actionIndex() {
        AdminView::EterForm();
    }

    public static function actionExit() {
        unset($_SESSION['email']);
        header("Location: /admin/index");
        die();
    }

    public static function actionSectionComand($comand) {
        if (!ValidateUser::isValidate()) {
            header("Location: /admin/index");
            die();
        }

        switch ($comand) {
            
              case "getsections":
              echo json_encode(Admin::getArraySection());
              break;
             
            case "delsection":
                $id = intval($_POST["id"]);
                echo Admin::delSection($id);
                break;
            case "addsection":
                $obj = json_decode($_POST["obj"]);
                $newId = Admin::addSection($obj->name, $obj->sort, $obj->status);
                echo json_encode(["id" => $newId, "result" => "Ok"]);
                break;
            case "redact":
                $obj = json_decode($_POST["obj"]);
                //$newId = Admin::addSection($obj->name, $obj->sort, $obj->status);
                echo Admin::redactSection($obj);
                break;
            default:
                break;
        }
    }

    public static function actionCategoryComand($comand) {
        if (!ValidateUser::isValidate()) {
            echo ValidateUser::isValidate();
            //header("Location: /admin/index");
            die();
        }

        switch ($comand) {
            case "getcategories":
                echo json_encode(Admin::getArrayCategory());
                break;
            case "getcategoriesforsection":
                $id = intval($_POST["id"]);
                echo json_encode(Admin::getArrayCategoryForSection($id));
                break;
            case "getproductforcategory":
                $id = intval($_POST["id"]);
                echo json_encode(Admin::getArrayProductForCategory($id));
                break;
            case "delcategory":
                $id = intval($_POST["id"]);
                echo Admin::delcategory($id);
                break;
            case "addcategeoty":
                $obj = json_decode($_POST["obj"]);
                $newId = Admin::addCategory($obj->name, $obj->sort, $obj->status, $obj->section);
                echo json_encode(["id" => $newId, "result" => "Ok"]);
                break;
            case "redact":
                $obj = json_decode($_POST["obj"]);
                //$newId = Admin::addSection($obj->name, $obj->sort, $obj->status);
                echo Admin::redactCategory($obj);
                break;
            default:
                break;
        }
    }

    public static function actionProductComand($comand) {
        if (!ValidateUser::isValidate()) {
            echo ValidateUser::isValidate();
            //header("Location: /admin/index");
            die();
        }

        switch ($comand) {
            case "getproductinfo":
                $id = intval($_POST["id"]);
                echo json_encode(Admin::getProductForReduct($id));
                break;
            
            case "saveorredact":                
                $obj = json_decode($_POST["obj"]);
                if ($obj->id === 0 )
                {
                    $result = Admin::insertNewProduct($obj);
                }
                else {
                    $result = Admin::reductProduct($obj);
                }                
                echo json_encode($result);
                
                break;
                
            case "savecolorproduct":
                $idprod = $_POST["id"];
                $colors = json_decode($_POST["colors"]);                
                $result = Admin::saveColorForProduct($idprod, $colors);                
                echo json_encode($result);
                
            case "savefoto":
                echo json_encode(Admin::savePictureForProduct());
                break;

            default : break;
        }
    }

    public static function actionGetAllForProducts() {
        if (!ValidateUser::isValidate()) {
            echo ValidateUser::isValidate();
            //header("Location: /admin/index");
            die();
        }
        echo json_encode(Admin::getInforForAllProduct());
    }

}
