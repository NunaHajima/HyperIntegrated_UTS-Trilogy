<?php

namespace App\Controllers;
use App\Models\AboutusModel; 

class AboutUs extends BaseController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    private $aboutModel;
    
    public function __construct() {
        $this->aboutModel = new AboutusModel();
    }

    public function index()
    {
        $about = $this->aboutModel->paginate(10, 'about');

        $aboutcrud = [
            "about" => $about,
            "pager" => $this->aboutModel->pager
        ];

        echo view('/aboutus', $aboutcrud);
    }
}
