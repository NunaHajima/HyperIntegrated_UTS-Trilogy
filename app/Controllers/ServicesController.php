<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\OurserviceModel; 

class ServicesController extends ResourceController
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
        // Mengambil data berita dengan urutan terbaru di atas dan paginasi
        $servicecontroller = $this->serviceModel->orderBy('id', 'DESC')->paginate(10, 'servicecontroller');
        
        $servicecrud = [
            "servicecontroller" => $servicecontroller,
            "pager" => $this->serviceModel->pager
        ];

        echo view('/backoffice/ourservicescontroller/index', $servicecrud);
    }
    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        echo view ('/backoffice/ourservicescontroller/new');
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $fileName = "";

        $photo = $this->request->getFile('photo');

        if ($photo->getSizeByUnit() > 0) {
            $fileName = $photo->getRandomName(); // Mendapatkan nama file baru secara acak

            $photo->move('photos', $fileName); // Memindahkan file ke public/photos dengan nama acak
        }

        $servicecrud = [
            "id" => uniqid(),
            "judul" => $this->request->getPost('judul'),
            "service" => $this->request->getPost('service'),
            "photo" => $fileName, // Kita simpan nama filenya saja
        ];

        $this->serviceModel->insert($servicecrud);
        return redirect()->to('/servicescontroller');
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        $servicecontroller = $this->serviceModel->find($id);

        if (!$servicecontroller) {
            throw new \Exception("Data not found!");
        }
        
        echo view('/backoffice/ourservicescontroller/edit', ["data" => $servicecontroller]);
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        $servicecontroller = $this->serviceModel->find($id);

        $fileName = $servicecontroller['photo'];
        $photo = $this->request->getFile('photo');

        if ($photo->getSizeByUnit() > 0) {
            $fileName = $photo->getRandomName(); // Mendapatkan nama file baru secara acak
            $photo->move('photos', $fileName); // Memindahkan file ke public/photos dengan nama acak
        }

        $servicecrud = [
            "judul" => $this->request->getPost('judul'),
            "service" => $this->request->getPost('service'),
            "photo" => $fileName, // Kita simpan nama filenya saja
        ];

        $this->serviceModel->update($id, $servicecrud);
        return redirect()->to('/servicescontroller');
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        $this->serviceModel->delete($id);
        return redirect()->to('/servicescontroller');
    }
}
