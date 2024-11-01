<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\NewsModel; 

class NewsController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    private $newsModel;
    
    public function __construct() {
        $this->newsModel = new NewsModel();
    }

    public function index()
    {
        $newscontroller = $this->newsModel->paginate(10, 'newscontroller');
        
        $newscrud = [
            "newscontroller" => $newscontroller,
            "pager" => $this->newsModel->pager
        ];

        echo view('/backoffice/newscontroller/index', $newscrud);
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
        echo view ('/backoffice/newscontroller/new');
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

        $newscrud = [
            "id" => uniqid(),
            "judul" => $this->request->getPost('judul'),
            "berita" => $this->request->getPost('berita'),
            "photo" => $fileName, // Kita simpan nama filenya saja
        ];

        $this->newsModel->insert($newscrud);
        return redirect()->to('/newscontroller');
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
        $newscontroller = $this->newsModel->find($id);

        if (!$newscontroller) {
            throw new \Exception("Data not found!");
        }
        
        echo view('/backoffice/newscontroller/edit', ["data" => $newscontroller]);
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
        $newscontroller = $this->newsModel->find($id);

        $fileName = $newscontroller['photo'];
        $photo = $this->request->getFile('photo');

        if ($photo->getSizeByUnit() > 0) {
            $fileName = $photo->getRandomName(); // Mendapatkan nama file baru secara acak
            $photo->move('photos', $fileName); // Memindahkan file ke public/photos dengan nama acak
        }

        $newscrud = [
            "judul" => $this->request->getPost('judul'),
            "berita" => $this->request->getPost('berita'),
            "photo" => $fileName, // Kita simpan nama filenya saja
        ];

        $this->newsModel->update($id, $newscrud);
        return redirect()->to('/newscontroller');
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
        $this->newsModel->delete($id);
        return redirect()->to('/newscontroller');
    }
}
