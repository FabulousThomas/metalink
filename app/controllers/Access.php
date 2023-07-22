<?php
class Access extends Controller
{
   private $data = [];
   private $pageModel = '';

   public function __construct()
   {
      if (!isLoggedin()) {
         unset($_SESSION['isLoggedIn']);
         $this->view('access/index');
      }
      $this->pageModel = $this->model('Page');
   }

   public function index()
   {
      if (isLoggedin()) {
         $u_id = $_SESSION['user_id'];

         $singleResult = $this->pageModel->selectWhereAnd('users', 'user_id', $u_id, 'user_access', '1');
         $result = $this->pageModel->getAll('nfts', 'nft_id');

         $this->data = [
            'results' => $result,
            'singleResult' => $singleResult,
         ];
      }

      $this->view('/access/index', $this->data);
   }


   public function orders()
   {
      if (isLoggedin()) {
         $u_id = $_SESSION['user_id'];

         $singleResult = $this->pageModel->selectWhereAnd('users', 'user_id', $u_id, 'user_access', '1');
         // $result = $this->pageModel->getAll('orders', 'id');
         $result = $this->pageModel->getAllNfts();

         $this->data = [
            'results' => $result,
            'singleResult' => $singleResult,
         ];
      }

      $this->view('/access/orders', $this->data);
   }
}
