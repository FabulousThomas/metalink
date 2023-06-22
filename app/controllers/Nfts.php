<?php

class Nfts extends Controller
{
   public $data = [];
   private $pageModel = '';
   public function __construct()
   {
      $this->pageModel = $this->model('Page');
   }

   public function index()
   {
      if (isset($_GET['nft_id']) && $_GET['nft_id'] != '') {
         $nft_id = htmlentities($_GET['nft_id']);
         $_SESSION['nft_id'] = $nft_id;

         $results = $this->pageModel->selectWhere('nfts', 'nft_id', $nft_id, 'nft_id');

         $this->data = [
            'title' => 'NFTS',
            'nfts' => $results,
         ];

         $this->view('nfts', $this->data);

      } else if (isset($_GET['nft_id']) && $_GET['nft_id'] != $_SESSION['nft_id']) {
         redirect('explore');
      } else {
         redirect('explore');
      }

   }
}