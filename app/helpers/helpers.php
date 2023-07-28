<?php

// FLASH MESSAGE
/**
 * Summary of flashmsg
 * @param mixed $name
 * @param mixed $message
 * @param mixed $class
 * @return void
 */
function flashmsg($name = '', $message = '', $class = 'alert alert-success')
{
   if (!empty($name)) {
      if (!empty($message) && empty($_SESSION[$name])) {
         if (!empty($_SESSION[$name])) {
            unset($_SESSION[$name]);
         }

         if (!empty($_SESSION[$name . '_class'])) {
            unset($_SESSION[$name . '_class']);
         }

         $_SESSION[$name] = $message;
         $_SESSION[$name . '_class'] = $class;
      } elseif (empty($message) && !empty($_SESSION[$name])) {
         $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : '';
         echo '<div class="' . $class . '" id="msg-flash">' . $_SESSION[$name] . '</div>';
         unset($_SESSION[$name]);
         unset($_SESSION[$name . '_class']);
      }
   }
}

/**
 * Summary of redirect
 * @param mixed $page
 * @return void
 */
function redirect($page)
{
   header("Location: " . URLROOT . "/" . $page);
}

/**
 * Summary of random_num
 * @param mixed $length
 * @return string
 */
function random_num($length)
{
   $text = "";
   $len = rand($length, $length);

   for ($i = 0; $i < $len; $i++) {
      $text .= rand(2, 9);
   }
   return $text;
}

/**
 * Summary of isLoggedin
 * @return bool
 */
function isLoggedin()
{
   if (isset($_SESSION['isLoggedIn'])) {
      return true;
   } else {
      return false;
   }
}

/**
 * Summary of isUrl
 * @return bool
 */
function isUrl()
{
   if ($_SERVER['PHP_SELF'] == URLROOT . '/admin' || $_SERVER['PHP_SELF'] == URLROOT . '/admin/index.php') {
      return true;
   } else {
      return false;
   }
}

if (isset($_GET['logout'])) {
   if (isset($_SESSION['isLoggedIn'])) {
      unset($_SESSION['isLoggedIn']);
      unset($_SESSION['user_email']);
      unset($_SESSION['user_name']);
      unset($_SESSION['user_id']);
      // unset($_SESSION['nft_id']);

      redirect('explore');
   }
}

function isLoggedInUser()
{
   if (isset($_SESSION['email'])) {
      return true;
   } else {
      return false;
   }
}
