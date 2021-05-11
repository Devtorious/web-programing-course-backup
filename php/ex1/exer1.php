<?php
  session_start();
  if (isset($_POST['act'])) {
    // there is a submission
    if ($_POST['password'] == 'p4ssw0rd') {
      $_SESSION['loggedin'] = true;
      header('location: add_product.php');
    } else {
      $status = 'Invalid password';
    }
  }

//   if($_POST['act']){
//       $product = [
//           'name' => $_POST['product_name'],
//           'price' => $_POST['price'],
//           'size' => $_POST['size'],
//           'created time' => date('Y-m-d G:i:s')
//       ];
//       $_SESSION['product'][] = $product;
//   }
?>
<?php
  if (isset($status)) {
    echo $status;
  }
?>
<form method="post" action="login.php">
  Username <input type="text" name="username"><br>
  Password <input type="password" name="password"><br>
  <input type="submit" name="act" value="Login">
</form>





<?php
  session_start();
  if (!isset($_SESSION['loggedin'])) {
    header('location: login.php');
  }
?>

<form method="post" action="add_product.php">
  Product name <input type="text" name="product_name"><br>
  Price <input type="text" name="price"><br>
  Sizes <input type="checkbox" name="sizes[]" value="XS"> XS
    <input type="checkbox" name="sizes[]" value="S"> S
    <input type="checkbox" name="sizes[]" value="M"> M
    <input type="checkbox" name="sizes[]" value="L"> L
    <input type="checkbox" name="sizes[]" value="XL"> XL<br>
  <input type="submit" name="act" value="Add Product">
</form>



<?php
  session_start();
  if (isset($_POST['act'])) {
    // there is a submission
    if ($_POST['password'] == 'p4ssw0rd') {
      $_SESSION['loggedin'] = true;
      header('location: add_product.php');
    } else {
      $status = 'Invalid password';
    }
  }
  
?>
<?php
  if (isset($status)) {
    echo $status;
  }
?>
<form method="post" action="login.php">
  Username <input type="text" name="username"><br>
  Password <input type="password" name="password"><br>
  <input type="submit" name="act" value="Login">
</form>