<?php
// app/Helpers/html_title_helper.php
use CodeIgniter\CodeIgniter;

function website_title($page_name = null, ?array $options = null): string {
    $websiteName            = $options['WEBSITE_NAME'] ?? $_ENV['WEBSITE_NAME'];
    $websiteNameSeparator   = $options['WEBSITE_NAME_SEPARATOR'] ?? $_ENV['WEBSITE_NAME_SEPARATOR'];
    $websiteNamePosition    = strtoupper($options['WEBSITE_NAME_POSITION'] ?? $_ENV['WEBSITE_NAME_POSITION']);
    
    if(!is_null($page_name)){
        if(gettype($page_name) !== 'string'){
            if(gettype($page_name) == 'array'){
                switch($websiteNamePosition){
                    case 'L':
                        $page_name = implode(" $websiteNameSeparator ", $page_name);
                        break;
                    case 'R':
                        $page_name = implode(" $websiteNameSeparator ", array_reverse($page_name));
                        break;
                    default:
                        throw new \Exception('Invalid Website Name Position Type');
                }
            }else{
                throw new \Exception('Invalid Page Name Type');
            }
        }
        switch($websiteNamePosition){
            case 'L':
                return "$websiteName $websiteNameSeparator $page_name";
            case 'R':
                return "$page_name $websiteNameSeparator $websiteName";
            default:
                throw new \Exception('Invalid Website Name Position Type');
        }
    }else{
        return $websiteName;
    }
}
?>
