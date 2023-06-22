<?php

class Creator extends Controller
{

   private $data = [];
   private $pageModel = '';

   public function __construct()
   {
      $this->pageModel = $this->model('Page');
   }

   public function index()
   {
      if (isset($_GET['user'])) {
         $u_id = $_GET['user'];

         $results = $this->pageModel->selectWhere('nfts', 'user_id', $u_id, 'nft_id');
         $resultsLimit = $this->pageModel->selectLimit('users', 'user_id', $u_id, '1');
         $active = $this->pageModel->getActiveId('nfts', 'user_id', $u_id, 'nft_id');
         $inactive = $this->pageModel->getInactiveId('nfts', 'user_id', $u_id, 'nft_id');

         if (isset($results) && $results == $u_id) {
            $this->data = [
               'title' => 'ADMIN PANEL',
               'active' => $active,
               'inactive' => $inactive,
               'results' => $results,
               'resultsLimit' => $resultsLimit,
            ];
         } else {
            $this->data = [
               'title' => 'ADMIN PANEL',
               'active' => $active,
               'inactive' => $inactive,
               'results' => $results,
               'resultsLimit' => $resultsLimit,
            ];
         }
      } else {
         redirect('explore');
      }


      $this->view('creator', $this->data);
   }
}