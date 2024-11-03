<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Slider; 

class SliderController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    private $sliderModel;
    
    public function __construct() {
        $this->sliderModel = new Slider();
    }

    public function index()
    {
        // Mengambil data berita dengan urutan terbaru di atas dan paginasi
        $slidercontroller = $this->sliderModel->orderBy('id', 'DESC')->paginate(10, 'slidercontroller');
        
        $slidercrud = [
            "slidercontroller" => $slidercontroller,
            "pager" => $this->sliderModel->pager
        ];

        echo view('/backoffice/slidercontroller/index', $slidercrud);
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
        echo view ('/backoffice/slidercontroller/new');
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

        $slidercrud = [
            "id" => uniqid(),
            "photo" => $fileName, // Kita simpan nama filenya saja
        ];       

        $this->sliderModel->insert($slidercrud);
        return redirect()->to('/slidercontroller');
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
        $slidercontroller = $this->sliderModel->find($id);

        if (!$slidercontroller) {
            throw new \Exception("Data not found!");
        }
        
        echo view('/backoffice/slidercontroller/edit', ["data" => $slidercontroller]);
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
        $slidercontroller = $this->sliderModel->find($id);

        $fileName = $slidercontroller['photo'];
        $photo = $this->request->getFile('photo');

        if ($photo->getSizeByUnit() > 0) {
            $fileName = $photo->getRandomName(); // Mendapatkan nama file baru secara acak
            $photo->move('photos', $fileName); // Memindahkan file ke public/photos dengan nama acak
        }

        $slidercrud = [
            "photo" => $fileName, // Kita simpan nama filenya saja
        ];

        $this->sliderModel->update($id, $slidercrud);
        return redirect()->to('/slidercontroller');
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
        $this->sliderModel->delete($id);
        return redirect()->to('/slidercontroller');
    }
}
