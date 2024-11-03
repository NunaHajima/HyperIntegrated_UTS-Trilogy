<?php

namespace App\Controllers;

use App\Models\Slider;
use App\Models\NewsModel;
use App\Models\TestimoniModel;

class Home extends BaseController
{
    public function index(): string
    {
        // Buat instance model Slider
        $sliderModel = new Slider();
        $sliders = $sliderModel->orderBy('id', 'DESC')->findAll();

        // Inisialisasi NewsModel
        $newsModel = new NewsModel();
        $newsData = $newsModel->select('id, photo, judul, berita')->orderBy('id', 'DESC')->findAll(6);

        // Inisialisasi TestimoniModel
        $testimoniModel = new TestimoniModel();
        $testimoniData = $testimoniModel->select('name, desc, photo, rating')->orderBy('id', 'DESC')->findAll(4);

        // Kirim data ke view home
        return view('home', [
            'sliders' => $sliders,
            'news' => $newsData,
            'testimonis' => $testimoniData
        ]);
    }
}