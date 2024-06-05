<?php
namespace App\Controllers;
//use App\Controllers\BaseController;

class Home extends BaseController{
	
    public function index(): string {
        $data = [
            'title' => 'Home',
            /*'title_options' => [
                'website_name' => 'Website Name',
                'seperator' => '||',
                'website_name_position' => 'R'
            ]*/
        ];
        return view('basic-page-template-1', $data);
    }
}
?>
