<?php
class Explore extends Controller
{

   private $data = [];
   private $pageModel = '';

   public function __construct()
   {
      $this->pageModel = $this->model('Page');
   }

   public function index()
   {
      $this->data = [
         'active' => $this->pageModel->getAllActive('nfts', 'nft_id'),
         'title' => 'About this Framework',
         'description' => 'About Page'
      ];
      $this->view('explore', $this->data);
   }

}