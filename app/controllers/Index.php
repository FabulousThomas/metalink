<?php
class Index extends Controller
{
   private $pageModel = '';
   private $data = [];
   public function __construct()
   {
      $this->pageModel = $this->model('Page');
   }

   public function index()
   {
      $this->data = [
         'title' => 'METALINK',
         'activeLimit' => $this->pageModel->getAllActiveLimit('nfts', 'nft_id', '8'),
      ];

      $this->view('index', $this->data);
   }
}
