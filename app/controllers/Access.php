<?php

class Access extends Controller
{

   private $data = [];
   private $adminModel = '';

   public function __construct()
   {
      if (!isLoggedin()) {
         unset($_SESSION['isLoggedIn']);
         $this->view('access/index');
      }
   }

   public function index()
   {
      if (isset($_SESSION['user_id'])) {
         global $conn;
         $u_id = $_SESSION['user_id'];
         $u_access = $_SESSION['user_access'];
         $result = $conn->query("SELECT * FROM users WHERE user_id = '$u_id' AND user_access = '1'");
      }

      // if (isLoggedin()) {
         $row = mysqli_fetch_assoc($result);
         if (isset($row) && $row['user_access'] === $u_access) {
            $this->data = [
               'title' => 'ADMIN PANEL',
               'user_bio' => $row['user_bio'],
               'user_name' => $row['user_name'],
               'user_fname' => $row['user_fname'],
               'user_image' => $row['user_image'],
               'user_access' => $u_access,
            ];
         }
      // }

      $this->view('/access/index', $this->data);
   }
}