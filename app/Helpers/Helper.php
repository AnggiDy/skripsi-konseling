<?php 
use App\Dosen;
use App\Kategori;

function urlHasPrefix(string $prefix) {
    $url = url()->current();
    $url = explode('/', $url);
   
    if ($url[5] == $prefix) {
        return true;
    }

    return false;
}


function generateBreadcrumb(){
    
    $crumbs = explode("/",$_SERVER["REQUEST_URI"]);
    //dd((is_numeric($crumbs[2]) == true) ? 'benar' : 'salah');
    foreach($crumbs as $key=>$crumb){
        
        if($key == 0 || is_numeric($crumbs[$key])) {
            continue;
        } else {      
            if($key == count($crumbs) - 1) {
                $breadcrumb = $crumbs[$key];
                if(strpos($breadcrumb, '?') !== false){
                    $breadcrumb = explode("?", $breadcrumb);
                    $crumb = $breadcrumb[0];
                }
              
                echo  '<li class="breadcrumb-item active">' . ucfirst(str_replace('-', ' ',$crumb) . ' ') . '</li>';
            } else {
                echo '<li class="breadcrumb-item"><a href="'.url($crumb).'">' . ucfirst(str_replace('-', ' ',$crumb) . ' ') . '</a></li>';
            }
            
        }
        
    }
}

function splitName($name)
{
    $name = explode(' ', $name);
    return $name[0];
}


function menuCategories()
{
    return Kategori::orderBy('nama_kategori')->get();
}



?>