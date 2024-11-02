<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TestimoniModel; 

class TestimoniController extends BaseController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    private $testimoniModel;
    
    public function __construct() {
        $this->testimoniModel = new TestimoniModel();
    }

    public function index()
    {
        // Mengambil data berita dengan urutan terbaru di atas dan paginasi
        $testimonicontroller = $this->testimoniModel->orderBy('id', 'DESC')->paginate(10, 'testimonicontroller');
        
        $testimonicrud = [
            "testimonicontroller" => $testimonicontroller,
            "pager" => $this->testimoniModel->pager
        ];

        echo view('/backoffice/testimonicontroller/index', $testimonicrud);
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
        echo view ('/backoffice/testimonicontroller/new');
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

        $testimonicrud = [
            "id" => uniqid(),
            "name" => $this->request->getPost('name'),
            "desc" => $this->request->getPost('desc'),
            "photo" => $fileName, // Kita simpan nama filenya saja
            "rating" => $this->request->getPost('rating'), // Menambahkan rating
        ];       

        $this->testimoniModel->insert($testimonicrud);
        return redirect()->to('/testimonicontroller');
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
        $testimonicontroller = $this->testimoniModel->find($id);

        if (!$testimonicontroller) {
            throw new \Exception("Data not found!");
        }
        
        echo view('/backoffice/testimonicontroller/edit', ["data" => $testimonicontroller]);
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
        $testimonicontroller = $this->testimoniModel->find($id);

        $fileName = $testimonicontroller['photo'];
        $photo = $this->request->getFile('photo');

        if ($photo->getSizeByUnit() > 0) {
            $fileName = $photo->getRandomName(); // Mendapatkan nama file baru secara acak
            $photo->move('photos', $fileName); // Memindahkan file ke public/photos dengan nama acak
        }

        $testimonicrud = [
            "name" => $this->request->getPost('name'),
            "desc" => $this->request->getPost('desc'),
            "photo" => $fileName, // Kita simpan nama filenya saja
            "rating" => $this->request->getPost('rating'), // Menambahkan rating
        ];

        $this->testimoniModel->update($id, $testimonicrud);
        return redirect()->to('/testimonicontroller');
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
        $this->testimoniModel->delete($id);
        return redirect()->to('/testimonicontroller');
    }
}
