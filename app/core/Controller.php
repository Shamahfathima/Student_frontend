<?php 


Trait Controller
{

	public function view($dname, $fname, $data = [])
{
    $foldername = "../app/views/".$dname."/";
    if (file_exists($foldername)) {
        $filename = $foldername.$fname.".php";
        if(file_exists($filename)) {
            extract($data); // Extract $data array to variables in the view

            require $filename;
        } else {
            $filename = "../app/views/404.view.php";
            require $filename;
        }
    } else {
        $filename = "../app/views/404.view.php";
        require $filename;
    }
}

}