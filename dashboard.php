<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Style.css-->
    <link rel="stylesheet" href="./frontend/assets/styles/style.css">
    <!--JQueery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <!-- ====== Fontawesome CDN Link ====== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />


    <title>Product Dashboard - MEGAPARTS</title>
</head>

<body>
    <div class="dashboard">
        <div class="dashboard__header">
            <h1>Megaparts Product Dashboard</h1>
            <div class="btn" id="add-btn">Аdd Product</div>
        </div>

        <form id="add-product-form" novalidate>
            <div class="product-info">
                <div class="form-item name">
                    <label for="product-name">Product Name</label>
                    <input type="text" name="product-name" id="product-name" required>
                </div>
                <div class="form-item image">
                    <label for="product-image">Product Image</label>
                    <input type="file" name="product-image" id="product-image" required>
                </div>
                <div class="icon-x" id="close-btn">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="form-item decription">
                <label for="product-description">Product Description</label>
                <textarea name="product-description" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="info">
                <div class="form-item price">
                    <label for="product-price">Product Price</label>
                    <input type="text" name="product-price" id="product-price" required>
                </div>
                <div class="type">
                    <label for="type">Prodcut Type</label>
                    <div class="types">
                        <input type="radio" name="type" value="sell" checked> КУПУВАЕМ<br>
                        <input type="radio" name="type" value="buy"> ПРОДАВАН<br>
                    </div>
                </div>
            </div>
            <div class="buttons">
                <button type="reset" id="reset-btn">Reset</button>
                <button type="submit" id="submit-btn">Submit</button>
            </div>
        </form>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img src="./frontend/assets/images/autoparts-section-images/image 2.png" alt="sdf"></td>
                        <td>Car</td>
                        <td>Carr</td>
                        <td>3.18 лв</td>
                        <td id="sell">КУПУВАЕМ</td>
                        <td>
                            <i class="fa-solid fa-pencil" id="edit-btn"></i>
                            <i class="fa-solid fa-trash-can" id="delete-btn"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><img src="./frontend/assets/images/autoparts-section-images/image 2.png" alt="sdf"></td>
                        <td>Car</td>
                        <td>Carr</td>
                        <td>3.18 лв</td>
                        <td id="buy">ПРОДАВАН</td>
                        <td>
                            <i class="fa-solid fa-pencil" id="edit-btn"></i>
                            <i class="fa-solid fa-trash-can" id="delete-btn"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><img src="./frontend/assets/images/autoparts-section-images/image 2.png" alt="sdf"></td>
                        <td>Car</td>
                        <td>Carr</td>
                        <td>3.18 лв</td>
                        <td id="sell">КУПУВАЕМ</td>
                        <td>
                            <i class="fa-solid fa-pencil" id="edit-btn"></i>
                            <i class="fa-solid fa-trash-can" id="delete-btn"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><img src="./frontend/assets/images/autoparts-section-images/image 2.png" alt="sdf"></td>
                        <td>Car</td>
                        <td>Carr</td>
                        <td>3.18 лв</td>
                        <td id="buy">ПРОДАВАН</td>
                        <td>
                            <i class="fa-solid fa-pencil" id="edit-btn"></i>
                            <i class="fa-solid fa-trash-can" id="delete-btn"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </table>
    </div>

    <script src="./frontend/assets/js/dashboar-page.js"></script>
</body>

</html>