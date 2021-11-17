<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management</title>
    <link rel="stylesheet" href="css/management.css">
    <script src="js/management.js"></script>
</head>
<body>
    <div id="wrapper">
        <div class="radio-container">
            <div class="add-radio">
                <input type="submit" name="radio" checked id="" onclick="choice(0)" class="radio-change-function">
                <p class="radio-title">Add products</p>
            </div>
            <div class="update-radio">
                <input type="submit" name="radio" id="" onclick="choice(1)" class="radio-change-function">
                <p class="radio-title">Update products</p>
            </div>
            <div class="delete-radio">
                <input type="submit" name="radio" id="" onclick="choice(2)" class="radio-change-function">
                <p class="radio-title">Delete products</p>
            </div>
            <div class="add-pub-radio">
                <input type="submit" name="radio" id="" onclick="choice(3)" class="radio-change-function">
                <p class="radio-title">Add Publisher</p>
            </div>
            <div class="add-cate-radio">
                <input type="submit" name="radio" id="" onclick="choice(4)" class="radio-change-function">
                <p class="radio-title">Add Category</p>
            </div>
            <div class="add-shop-radio">
                <input type="submit" name="radio" id="" onclick="choice(5)" class="radio-change-function">
                <p class="radio-title">Add Shop</p>
            </div>
            <div class="statistic">
                <input type="submit" name="radio" id="" onclick="choice(6)" class="radio-change-function">
                <p class="radio-title">Statistic</p>
            </div>
        </div>
        <div id="add" class="add">
            <h1 style="text-align: center;">Add Product</h1>
            <ul class="list-info">
                <li class="item-info">
                    <p>Product ID:</p>
                    <input type="text" placeholder="Product ID" name="" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Product Name:</p>
                    <input type="text" name="" placeholder="Product Name" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Warehouse ID:</p>
                    <input type="text" name="" placeholder="Warehouse ID" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Publisher ID:</p>
                    <input type="text" name="" placeholder="Publisher ID" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Image:</p>
                    <input type="file" name="" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Category ID:</p>
                    <input type="text" name="" placeholder="Cateory ID" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Price:</p>
                    <input type="text" name="" placeholder="Price" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Quantity:</p>
                    <input type="text" name="" placeholder="Quantity" id="" class="input-info">
                </li>
            </ul>
            
            <button class="sm-btn" type="submit">Add

            </button>
        </div>

        <div id="add-pub" class="add-pub">
            <h1 style="text-align: center;">Add Publisher</h1>
            <ul class="list-info">
                <li class="item-info">
                    <p>Publisher ID:</p>
                    <input type="text" placeholder="Publisher ID" name="" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Publisher Name:</p>
                    <input type="text" name="" placeholder="Product Name" id="" class="input-info">
                </li>
            </ul>
            
            <button class="sm-btn" type="submit">Add

            </button>
        </div>

        <div id="add-cate" class="add-cate">
            <h1 style="text-align: center;">Add Category</h1>
            <ul class="list-info">
                <li class="item-info">
                    <p>Category ID:</p>
                    <input type="text" placeholder="Category ID" name="" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Category Name:</p>
                    <input type="text" name="" placeholder="Category Name" id="" class="input-info">
                </li>
            </ul>
            
            <button class="sm-btn" type="submit">Add

            </button>
        </div>

        <div id="add-shop" class="add-shop">
            <h1 style="text-align: center;">Add Shop</h1>
            <ul class="list-info">
                <li class="item-info">
                    <p>Shop ID:</p>
                    <input type="text" placeholder="Shop ID" name="" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Shop Name:</p>
                    <input type="text" name="" placeholder="Shop Name" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>City:</p>
                    <input type="text" name="" placeholder="City" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>District:</p>
                    <input type="text" name="" placeholder="District" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Ward:</p>
                    <input type="text" name="" placeholder="Ward" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Description:</p>
                    <input type="text" name="" placeholder="Description" id="" class="input-info">
                </li>
            </ul>
            
            <button class="sm-btn" type="submit">Add

            </button>
        </div>

        <div id="update" class="update">
            <h1 style="text-align: center;">Update Products</h1>
            <ul class="list-info">
                <li class="item-info">
                    <p>Product ID:</p>
                    <input type="text" name="" placeholder="" readonly  id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Product Name:</p>
                    <input type="text" name="" placeholder="Product Name" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Warehouse ID:</p>
                    <input type="text" name="" placeholder="Warehouse ID" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Publisher ID:</p>
                    <input type="text" name="" placeholder="Publisher ID" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Image:</p>
                    <input type="file" name="" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Category ID:</p>
                    <input type="text" name="" placeholder="Cateory ID" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Price:</p>
                    <input type="text" name="" placeholder="Price" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Quantity:</p>
                    <input type="text" name="" placeholder="Quantity" id="" class="input-info">
                </li>
            </ul>
            
            <button class="sm-btn" type="submit">Update

            </button>
        </div>

        <div id="delete" class="delete">
            <h1 style="text-align: center;">Delete Product</h1>
            <ul class="list-info">
                <li class="item-info">
                    <p>Product ID:</p>
                    <input type="text" name="" placeholder="Product ID" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Product Name:</p>
                    <input type="text" name="" placeholder="Product Name" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Warehouse ID:</p>
                    <input type="text" name="" placeholder="Warehouse ID" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Publisher ID:</p>
                    <input type="text" name="" placeholder="Publisher ID" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Category ID:</p>
                    <input type="text" name="" placeholder="Cateory ID" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Price:</p>
                    <input type="text" name="" placeholder="Price" id="" class="input-info">
                </li>
                <li class="item-info">
                    <p>Quantity:</p>
                    <input type="text" name="" readonly placeholder="Quantity" id="" class="input-info">
                </li>
            </ul>
            
            <button class="sm-btn" type="submit">Delete

            </button>
        </div>

        <div id="sta" class="sta">
            Total Statistics of Shops
        </div>
    </div>
</body>
</html>
