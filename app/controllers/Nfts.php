<?php

class Nfts extends Controller
{
   private $data = [];
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

         $singleSet = $this->pageModel->selectLimit('nfts', 'nft_id', $nft_id, '1');
         $results = $this->pageModel->selectWhere('nfts', 'nft_id', $nft_id, 'nft_id');

         $this->data = [
            'title' => 'NFTS',
            'nfts' => $results,
            'singleSet' => $singleSet,
         ];

         $this->view('nfts', $this->data);
         
      } else {
         redirect('explore');
      }

   }
}