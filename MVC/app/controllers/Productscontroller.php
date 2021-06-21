<?php
class Prodcutscontroller extends Controller{


public function viewcategory()
{
    $cat=$_REQUEST['cat'];
    $this->model->viewcategory($cat);
}

public function searchajax()
{
    $key=$_REQUEST['key'];
    $this->model->searchajax($cat);
}

public function viewproducts()
{
    $this->model->viewproducts();
}


}
?>