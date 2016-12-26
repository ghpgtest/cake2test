<?php
class UsersController extends AppController 
{
	public $helpers = array('Html', 'Form', 'Flash');
	public $components = array('Flash', 'Paginator');
	
    public $paginate = array(
        'limit' => 20,
        'order' => array(
            'User.id' => 'desc'
        )
    );
	
	public function index() 
	{
		$this->Paginator->settings = $this->paginate;
		
$user = $this->User->findById(2);
_applog( $user );
		
		$data = $this->Paginator->paginate('User');
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