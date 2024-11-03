<?php

namespace App\Controllers;
use App\Models\OurserviceModel;

class OurServices extends BaseController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    private $serviceModel;
    
    public function __construct() {
        $this->serviceModel = new OurserviceModel();
    }

    public function index()
    {
        // Buat instance model
        $serviceModel = new OurserviceModel();
        $service = $serviceModel->orderBy('id', 'DESC')->findAll();

        return view('services', ['service' => $service,]);
    }
    public function detail($id)
    {
        $serviceModel = new OurserviceModel();
        $serviceItem = $serviceModel->find($id);

        if (!$serviceItem) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("News with ID $id not found.");
        }

        return view('services2', ['serviceItem' => $serviceItem]);
    }

}