<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm Sản Phẩm</title>
  <style>
body {
  font-family: Arial, sans-serif;
  background-color: #f6ebe8;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.form-container {
  width: 400px;
  background: white;
  padding: 20px 30px;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  margin-bottom: 20px;
  color: #6e4e37;
}

label {
  font-size: 14px;
  color: #6e4e37;
  margin-bottom: 8px;
  display: block;
}

input[type="text"],
input[type="number"],
textarea,
input[type="file"],
button {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #dcdcdc;
  border-radius: 4px;
  box-sizing: border-box;
}

textarea {
  height: 80px;
}

button {
  background-color: #BDAB8C;
  color: white;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

button:hover {
  background-color: #c69d89;
}

.row {
  display: flex;
  gap: 10px;
}

.col {
  flex: 1;
}

input[type="file"] {
  padding: 5px;
}
select {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #dcdcdc;
  border-radius: 4px;
  box-sizing: border-box;
  background-color: white;
}
  </style>
</head>
<body>
  <div class="form-container">
    <h1>Sửa Sản Phẩm</h1>
    <form action="<?= $baseurl ?>/updateproduct/<?= $product['id'] ?? "" ?>" method="post" enctype="multipart/form-data">
      <label for="title">Title:</label>
      <input type="text" id="title" name="title" placeholder="Enter product title" value="<?= $product['title'] ?? "" ?>">

      <div class="row">
        <div class="col">
          <label for="price">Price:</label>
          <input type="number" id="price" name="price" placeholder="Enter product price" value="<?= $product['price'] ?? "" ?>">
        </div>
      </div>

      <label for="image">Image:</label>
      <input type="file" id="image" name="image">
      <img src="<?= $baseurl ?>/public/img/<?= $product['image'] ?? "" ?>" alt="Current Image" class="mt-3 img-thumbnail" width="150px">

      <label for="detail">Detail:</label>
      <textarea id="detail" name="detail" placeholder="Enter product detail"><?= $product['detail'] ?? "" ?></textarea>

        <label for="category">Category:</label>
        <select id="category" name="category">
          <?php foreach ($categories as $category) { ?>
              <option value="<?= $category['id'] ?>" <?= $category['id'] == $category ? "selected" : "" ?>>
                  <?= $category['name'] ?>
              </option>
          <?php } ?>
        </select>
        <?php if(isset($errors)): ?>
            <ul class="text-danger">
                <?php foreach ($errors as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

      <input type="hidden" name="oldImage" value="<?= $product['image'] ?>">
      <button type="submit">Edit Product</button>
    </form>
  </div>
</body>
</html>
