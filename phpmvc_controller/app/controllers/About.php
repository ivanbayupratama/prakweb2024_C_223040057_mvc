<?php
//@author : ivanbayupratama
class About
{
    public function index($nama = 'Ivan', $pekerjaan = 'Database-Administrator')
    {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}
