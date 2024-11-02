<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\PortofolioModel; 

class PortofolioController extends ResourceController
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
        // Mengambil data berita dengan urutan terbaru di atas dan paginasi
        $portofoliocontroller = $this->portofolioModel->orderBy('id', 'DESC')->paginate(10, 'portofoliocontroller');
        
        $portofoliocrud = [
            "portofoliocontroller" => $portofoliocontroller,
            "pager" => $this->portofolioModel->pager
        ];

        echo view('/backoffice/portofoliocontroller/index', $portofoliocrud);
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
        echo view ('/backoffice/portofoliocontroller/new');
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $fileName = "";
        $fileName2 = "";
        $fileName3 = "";

        $photo = $this->request->getFile('photo');
        $photo2 = $this->request->getFile('photo2');
        $photo3 = $this->request->getFile('photo3');

        if ($photo->getSizeByUnit() > 0) {
            $fileName = $photo->getRandomName(); // Mendapatkan nama file baru secara acak
            $photo->move('photos', $fileName); // Memindahkan file ke public/photos dengan nama acak
        }
        if ($photo2->getSizeByUnit() > 0) {
            $fileName2 = $photo2->getRandomName(); // Mendapatkan nama file baru secara acak
            $photo2->move('photos2', $fileName2); // Memindahkan file ke public/photos dengan nama acak
        }
        if ($photo3->getSizeByUnit() > 0) {
            $fileName3 = $photo3->getRandomName(); // Mendapatkan nama file baru secara acak
            $photo3->move('photos3', $fileName3); // Memindahkan file ke public/photos dengan nama acak
        }

        $portofoliocrud = [
            "id" => uniqid(),
            "judul" => $this->request->getPost('judul'),
            "deskrisi" => $this->request->getPost('deskrisi'),
            "photo" => $fileName, // Kita simpan nama filenya saja
            "photo2" => $fileName2, // Kita simpan nama filenya saja
            "photo2" => $fileName3, // Kita simpan nama filenya saja
        ];

        $this->portofolioModel->insert($portofoliocrud);
        return redirect()->to('/portofoliocontroller');
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
        $portofoliocontroller = $this->portofolioModel->find($id);

        if (!$portofoliocontroller) {
            throw new \Exception("Data not found!");
        }
        
        echo view('/backoffice/portofoliocontroller/edit', ["data" => $portofoliocontroller]);
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
        $portofoliocontroller = $this->portofolioModel->find($id);

        $fileName = $portofoliocontroller['photo'];
        $photo = $this->request->getFile('photo');
        $fileName2 = $portofoliocontroller['photo2'];
        $photo2 = $this->request->getFile('photo2');
        $fileName3 = $portofoliocontroller['photo3'];
        $photo3 = $this->request->getFile('photo3');

        if ($photo->getSizeByUnit() > 0) {
            $fileName = $photo->getRandomName(); // Mendapatkan nama file baru secara acak
            $photo->move('photos', $fileName); // Memindahkan file ke public/photos dengan nama acak
        }
        if ($photo2->getSizeByUnit() > 0) {
            $fileName2 = $photo2->getRandomName(); // Mendapatkan nama file baru secara acak
            $photo2->move('photos2', $fileName2); // Memindahkan file ke public/photos dengan nama acak
        }
        if ($photo3->getSizeByUnit() > 0) {
            $fileName3 = $photo3->getRandomName(); // Mendapatkan nama file baru secara acak
            $photo3->move('photos3', $fileName3); // Memindahkan file ke public/photos dengan nama acak
        }

        $portofoliocrud = [
            "judul" => $this->request->getPost('judul'),
            "deskripsi" => $this->request->getPost('deskripsi'),
            "photo" => $fileName, // Kita simpan nama filenya saja
            "photo2" => $fileName2, // Kita simpan nama filenya saja
            "photo3" => $fileName3, // Kita simpan nama filenya saja
        ];

        $this->portofolioModel->update($id, $portofoliocrud);
        return redirect()->to('/portofoliocontroller');
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
        $this->portofolioModel->delete($id);
        return redirect()->to('/portofoliocontroller');
    }
}
