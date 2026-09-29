<?php

class ProductController
{
    public function index()
    {
        $db = new product();
        $products = $db->getAllProducts();
        $data['products'] = $products;
        $data['title'] = "products";
        $data['products_number'] = count($products);
        View::load('products/index', $data);
    }

    public function add()
    {
        View::load("products/add");
    }

    public function store()
    {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $qty = $_POST['qty'];
            $data = array(
                "name" => $name,
                "price" => $price,
                "description" => $description,
                "qty" => $qty,
            );
            $db = new product();
            if ($db->insertProduct($data)) {
                View::load('products/add', ["success" => "data inserted successfully !!"]);
            } else {

                View::load('products/add', ["error" => "inserting data error !!"]);
            }
        }


    }

    public function edit($id)
    {
        $db = new product();
        if ($db->getProduct($id)) {
            $data['row'] = $db->getProduct($id);
            View::load('products/edit', $data);
            // echo "<pre>";
            // print_r($db -> getProduct($id));
            // echo "</pre>";
        }
    }

    public function update($id)
    {

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $qty = $_POST['qty'];
            $updated_data = array(
                "name" => $name,
                "price" => $price,
                "description" => $description,
                "qty" => $qty,
            );
            $db = new product();
            if ($db->updateProduct($id, $updated_data)) {
                View::load('products/edit', ["success" => "data updated successfully !!", "row" => $db->getProduct($id)]);
            } else {

                View::load('products/edit', ["error" => "updating data error !!", "row" => $db->getProduct($id)]);
            }
        }
    }

    public function delete($id)
    {

        $db = new product();
        if ($db->deleteProduct($id)) {
            View::load("products/delete");
        }
    }
}