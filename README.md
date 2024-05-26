# Getting Started
Follow the instructions below on how to add the starter files to your CodeIgniter 4 project.

## Environment File
Add the following variables `.env` file.

    WEBSITE_NAME = 'My Website'
    WEBSITE_NAME_SEPARATOR = '—'
    WEBSITE_NAME_POSITION = 'L'
## Autoloading `html_title` Helper
Add `html_title` to  your `Config/Autoload.php` to the `$helpers` array.

    public $helpers = ['html_title'];
## The Rest Of It
Copy the file into your `app` and `public` folders into the respective directorys.
## Extra - View Example

    public function index(): string {
		$data = [
			'title' => 'Home',
			'title_options' => [
				'website_name' => 'Website Name',
				'seperator' => '||',
				'website_name_position' => 'R'
			]
		];
		return view('basic-page-template-1', $data);
	}


 
