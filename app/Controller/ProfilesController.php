<?php
class ProfilesController extends AppController 
{
	public $helpers = array('Html', 'Form', 'Flash');
	public $components = array('Flash', 'Paginator');
	
    public $paginate = array(
        'limit' => 20,
        'order' => array(
            'Profile.id' => 'desc'
        )
    );
	
	public function index() 
	{
		$this->Paginator->settings = $this->paginate;
		
$profile = $this->Profile->findById(2);
_applog( $profile );
		
		$data = $this->Paginator->paginate('Profile');
		$this->set('data', $data);
	}

	public function view($id = null, $param2)
	{

	}
	
	public function add()
	{
		
	}
	
	public function edit($id = null)
	{

	}
}