<?php
class prodcuts extends Model{
    public $id;
    public $name;
    public $price;
    public $image;
    public $category;
    function __construct($id=""){
      parent::__construct();
      if ($id!="") {
        $sql="select * from prodcuts where name=$name";
        $result = $this->db->query($sql);
        $row = $this->db->fetchRow();
        $this->name = $row['name'];
        $this->price = $row['price'];
        $this->image = $row['image'];
    }
  }
     function viewproducts(){
        $products = array();
        $sql = "SELECT id FROM products";
        $result = $this->db->query($sql);
        if ($result->num_rows > 0){
          while($row = $this->db->fetchRow()){
            array_push($products,new product($row['id']));
          }
          return $products;
        }
        else {
          return null;
        }
      }

      function viewcategory($cat)
  {
    
    $sql="SELECT * from products where category = '$cat'";
    $result = $this->db->query($sql); 
    return $result;

  }

  function searchAjax($key)
    {
      $sql="SELECT * FROM products where Name LIKE '%". $key ."%'"; 
      $result = $this->db->query($sql);
      return $result;
    }
    

}
?>