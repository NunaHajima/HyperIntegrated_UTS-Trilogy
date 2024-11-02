<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\AboutusModel; 

class AboutusController extends ResourceController
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
        // Mengambil data berita dengan urutan terbaru di atas dan paginasi
        $aboutcontroller = $this->aboutModel->orderBy('id', 'DESC')->paginate(10, 'aboutcontroller');
        
        $aboutcrud = [
            "aboutcontroller" => $aboutcontroller,
            "pager" => $this->aboutModel->pager
        ];

        echo view('/backoffice/aboutuscontroller/index', $aboutcrud);
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
        echo view ('/backoffice/aboutuscontroller/new');
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

        $aboutcrud = [
            "id" => uniqid(),
            "name" => $this->request->getPost('name'),
            "job" => $this->request->getPost('job'),
            "photo" => $fileName, // Kita simpan nama filenya saja
        ];

        $this->aboutModel->insert($aboutcrud);
        return redirect()->to('/aboutuscontroller');
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
        $aboutcontroller = $this->aboutModel->find($id);

        if (!$aboutcontroller) {
            throw new \Exception("Data not found!");
        }
        
        echo view('/backoffice/aboutuscontroller/edit', ["data" => $aboutcontroller]);
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
        $aboutcontroller = $this->aboutModel->find($id);

        $fileName = $aboutcontroller['photo'];
        $photo = $this->request->getFile('photo');

        if ($photo->getSizeByUnit() > 0) {
            $fileName = $photo->getRandomName(); // Mendapatkan nama file baru secara acak
            $photo->move('photos', $fileName); // Memindahkan file ke public/photos dengan nama acak
        }

        $aboutcrud = [
            "name" => $this->request->getPost('name'),
            "job" => $this->request->getPost('job'),
            "photo" => $fileName, // Kita simpan nama filenya saja
        ];

        $this->aboutModel->update($id, $aboutcrud);
        return redirect()->to('/aboutuscontroller');
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
        $this->aboutModel->delete($id);
        return redirect()->to('/aboutuscontroller');
    }
}
