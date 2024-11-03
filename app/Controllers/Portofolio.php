<?php

namespace App\Controllers;
use App\Models\PortofolioModel; 

class Portofolio extends BaseController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    private $portofolioModel;
    
    public function __construct() {
        $this->portofolioModel = new PortofolioModel();
    }

    public function index()
    {
        $portofolio = $this->portofolioModel->paginate(10, 'portofolio');

        $portofoliocrud = [
            "portofolio" => $portofolio,
            "pager" => $this->portofolioModel->pager
        ];

        echo view('/portofolio', $portofoliocrud);
    }
    public function detail($id)
    {
        $portofolioModel = new PortofolioModel();
        $portofolioItem = $portofolioModel->find($id);

        if (!$portofolioItem) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("News with ID $id not found.");
        }

        return view('portofolio2', ['portofolioItem' => $portofolioItem]);
    }
}