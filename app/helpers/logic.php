<?php

/**
 * Summary of getCount
 */
function getCount($col, $name, $table)
{
   global $conn;
   return $conn->query("SELECT COUNT($col) AS $name FROM $table");
}

/**
 * Summary of getSum
 */
function getSum($col, $name, $table, $cols, $col2, $param, $params)
{
   global $conn;
   return $conn->query("SELECT SUM($col) AS $name FROM $table WHERE $cols = '$param' AND $col2 =  '$params'");
}

/**
 * Summary of calculateBalance
 * @return mixed
 */
function calculateBalance()
{
   global $conn;
   return $conn->query('SELECT SUM(nft_price) AS total FROM nfts WHERE b_status = "sold" AND buyer_id = ' . $_SESSION['user_id'] . '');
}

function calculateTotal()
{
   global $conn;
   return $conn->query('SELECT SUM(nft_price) AS total FROM nfts');
}

// fUNCTIONS END //

global $conn;
if (isset($_POST['register'])) {

   $name = $_POST['name'];
   $user_name = $_POST['username'];
   $user_email = $_POST['email'];
   $user_password = md5($_POST['password']);
   $user_id = random_num(8);

   // ===QUERY TO CHECK IF USER DETAILS EXISTS===
   $stmt = $conn->query("SELECT * FROM users WHERE user_email = '$user_email'");
   $stmt0 = $conn->query("SELECT * FROM users WHERE user_name = '$user_name'");

   if (!mysqli_num_rows($stmt) > 0) {
      // ===REGISTER USERS IF CONDITION IS TRUE===
      if (!mysqli_num_rows($stmt0) > 0) {

         $stmt1 = $conn->query("INSERT INTO users (user_id, user_fname, user_name, user_email, user_password) VALUES('$user_id', '$name', '$user_name', '$user_email', '$user_password')");

         if ($stmt1) {
            $stmt2 = $conn->query("SELECT * FROM users WHERE user_email = '$user_email' AND user_password = '$user_password' LIMIT 1");
            if ($stmt2 && mysqli_num_rows($stmt2) > 0) {
               $row = mysqli_fetch_array($stmt2);
               $user_id = $row['user_id'];

               if ($row['user_email'] == $user_email && $row['user_password'] == $user_password) {

                  $_SESSION['user_id'] = $row['user_id'];
                  $_SESSION['user_bio'] = $row['user_bio'];
                  $_SESSION['user_name'] = $row['user_name'];
                  $_SESSION['user_fname'] = $row['user_fname'];
                  $_SESSION['user_image'] = $row['user_image'];
                  $_SESSION['user_email'] = $row['user_email'];
                  $_SESSION['user_access'] = $row['user_access'];
                  $_SESSION['isLoggedIn'] = true;

                  flashMsg('message', 'Welcome ' . '-' . $_SESSION['user_name'] . '-');
                  redirect('creator?user=' . $row['user_id']);
               } else {
                  flashmsg('error', 'Invalid Credentials', 'alert alert-danger');
                  redirect('404.php?error');
               }
            }
         }

      } else {
         flashmsg('error', 'Username already exists', 'alert alert-danger');
         redirect('404.php?error');
      }

   } else {
      flashmsg('error', 'Email already exists', 'alert alert-danger');
      redirect('404.php?error');
   }

}

if (isset($_POST['login'])) {
   $user_email = $_POST['email'];
   $user_password = md5($_POST['password']);

   $stmt = $conn->query("SELECT * FROM users WHERE user_email = '$user_email'");

   if ($stmt) {
      if ($stmt && mysqli_num_rows($stmt) > 0) {
         $row = mysqli_fetch_array($stmt);
         $user_id = $row['user_id'];

         if ($row['user_email'] == $user_email && $row['user_password'] == $user_password) {

            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_bio'] = $row['user_bio'];
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['user_fname'] = $row['user_fname'];
            $_SESSION['user_image'] = $row['user_image'];
            $_SESSION['user_email'] = $row['user_email'];
            $_SESSION['user_access'] = $row['user_access'];
            $_SESSION['isLoggedIn'] = true;

            if ($_SESSION['user_access'] == '1') {
               flashMsg('message', 'Welcome ' . '-' . $_SESSION['user_name'] . '-');
               redirect('access');
            } else {
               flashMsg('message', 'Welcome ' . '-' . $_SESSION['user_name'] . '-');
               redirect('creator?user=' . $row['user_id']);
            }


         } else {
            flashmsg('error', 'Invalid Credentials', 'alert alert-danger');
            redirect('404.php?error');
         }
      }
   }
}

if (isset($_POST['list-nft'])) {
   $nft_name = $_POST['nft_name'];
   $nft_price = $_POST['nft_price'];
   $nft_tag = $_POST['nft_tag'];
   $nft_description = $_POST['nft_description'];
   $user_id = $_SESSION['user_id'];
   $user_name = $_SESSION['user_name'];
   $user_fname = $_SESSION['user_fname'];
   $user_image1 = $_SESSION['user_image'];
   $user_bio1 = $_SESSION['user_bio'];

   $rand_number1 = random_num(5);
   $product_image1 = $_FILES['nft_image']['name'];
   $image_ext1 = pathinfo($product_image1, PATHINFO_EXTENSION);
   $image_name1 = $rand_number1 . '.' . $image_ext1;

   $image_path = "uploads/";

   $stmt = $conn->query("INSERT INTO nfts (user_id, nft_name, nft_price, nft_image, user_name, user_fname, nft_tag, nft_description, user_image, user_bio) VALUES('$user_id', '$nft_name', '$nft_price', '$image_name1', '$user_name', '$user_fname', '$nft_tag', '$nft_description', '$user_image1', '$user_bio1')");

   if ($stmt) {
      //  Save uploaded images to img folder
      if (!move_uploaded_file($_FILES['nft_image']['tmp_name'], $image_path . $image_name1)) {
         echo "<script>alert('Unable to add image');</script>";
      }
      if ($_SESSION['user_access'] == '1') {
         flashMsg('message', 'Welcome ' . '-' . $_SESSION['user_name'] . '-');
         redirect('access');
      } else {
         flashMsg('message', 'Welcome ' . '-' . $_SESSION['user_name'] . '-');
         redirect('creator?user=' . $row['user_id']);
      }
   }
}

if (isset($_POST['update-nft'])) {
   $nft_id = $_POST['nft_id'];
   $nft_name = $_POST['nft_name'];
   $nft_price = $_POST['nft_price'];
   $nft_tag = $_POST['nft_tag'];
   $nft_description = $_POST['nft_description'];

   $conn->query("UPDATE nfts SET nft_name = '$nft_name', nft_price = '$nft_price', nft_tag = '$nft_tag', nft_description = '$nft_description'  WHERE nft_id = '$nft_id'");

   if ($_SESSION['user_access'] == '1') {
      flashMsg('message', 'Welcome ' . '-' . $_SESSION['user_name'] . '-');
      redirect('access');
   } else {
      flashMsg('message', 'Welcome ' . '-' . $_SESSION['user_name'] . '-');
      redirect('creator?user=' . $row['user_id']);
   }
}

if (isset($_POST['btn-edit-profile'])) {
   $user_id = $_SESSION['user_id'];
   $name = $_POST['name'];
   $bio = $_POST['bio'];

   $conn->query("UPDATE nfts SET user_fname = '$name', user_bio = '$bio' WHERE user_id = '$user_id'");
   $conn->query("UPDATE users SET user_fname = '$name', user_bio = '$bio' WHERE user_id = '$user_id'");

   redirect("creator?user=$user_id");

}

if (isset($_POST['btn-upload-image'])) {
   $user_id = $_SESSION['user_id'];

   $rand_number3 = random_num(5);
   $product_image3 = $_FILES['image']['name'];
   $image_ext3 = pathinfo($product_image3, PATHINFO_EXTENSION);
   $image_name3 = $rand_number3 . '.' . $image_ext3;

   $image_path = "uploads/";

   $conn->query("UPDATE nfts SET user_image = '$image_name3' WHERE user_id = '$user_id'");
   $conn->query("UPDATE users SET user_image = '$image_name3' WHERE user_id = '$user_id'");

   $stmt1 = $conn->query("SELECT * FROM users WHERE user_id = '$user_id'");
   // $stmt2 = $conn->query("SELECT * FROM nfts WHERE user_id = '$user_id'");

   $row1 = mysqli_fetch_array($stmt1);
   $_nft_image1 = $row1['user_image'];
   $_nft_user_bio = $row1['user_bio'];

   // $row2 = mysqli_fetch_array($stmt2);
   // $_user_image1 = $row2['user_image'];
   // $_user_user_bio = $row2['user_bio'];

   //  Save uploaded images to img folder
   move_uploaded_file($_FILES['image']['tmp_name'], $image_path . $image_name3);
   flashmsg('message', 'Profile updated successfully!');
   redirect("creator?user=$user_id");

   // if (file_exists($image_path . $_nft_image1)) {
   //    unlink($image_path . $_nft_image1);
   // }

   // if (file_exists($image_path . $_user_image1)) {
   //    unlink($image_path . $_user_image1);
   // }

}

if (isset($_POST['btn-delete-nft'])) {
   $nft_id = $_POST['nft_id'];

   $sql = $conn->query("SELECT * FROM nfts WHERE nft_id = '$nft_id' LIMIT 1");
   $row = mysqli_fetch_array($sql);
   $nft_image = $row['nft_image'];

   $stmt = $conn->query("DELETE FROM nfts WHERE nft_id = '$nft_id' LIMIT 1");

   if ($stmt) {
      if (file_exists("uploads/" . $nft_image)) {
         unlink("uploads/" . $nft_image);
      }
      redirect("creator?user=" . $_SESSION['user_id']);
   } else {
      die('Something went wrong');
   }
}


if (isset($_POST['btn-hide-item'])) {

   $nft_id = $_POST['nft_id'];

   $conn->query("UPDATE nfts SET visibility = '1' WHERE nft_id = '$nft_id'");

} else if (isset($_POST['btn-show-item'])) {

   $nft_id = $_POST['nft_id'];

   $conn->query("UPDATE nfts SET visibility = '0' WHERE nft_id = '$nft_id'");

}