<?php

class About {
    public function index($nama = 'Dono', $pekerjaan = 'pelawak')
    {
        echo 'Halo, nama saya '.$nama.', saya adalah seorang '.$pekerjaan.'';
    }

    public function page()
    {
        echo 'About/page';
    }
}