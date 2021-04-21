<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class MainLayout extends Component
{
    public $post;

    public string $title;

    public string $page;

    public string $description;
    

    public function __construct($post = null, $title = null, $page = '', $description = null)
    {
        $this->post = $post;
        $this->title = $title ? $title.' - Salonpas' : 'Salonpas&reg; Pain Relief Patches &amp; Sprays for Powerful Pain Relief When and Where You Need It.';
        $this->page = $page;
        $this->description = $description ? $description : 'Be Pain Free. Topical Pain Relief Patches, Sprays and Remedies by Salonpas&reg; for Powerful Arthritis, Joint, Hip &amp; Back Pain Relief When and Where You Need It.';
   
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('layouts.main');
    }
}
