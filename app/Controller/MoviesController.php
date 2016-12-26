<?php
class MoviesController extends AppController 
{
	public $helpers = array('Html', 'Form', 'Flash');
	public $components = array('Flash', 'Paginator');
	
	public $uses = array('Movie', 'Actor');
	
    public $paginate = array(
        'limit' => 20,
        'order' => array(
            'Movie.id' => 'desc'
        )
    );
	
	public function index() 
	{
		$this->Paginator->settings = $this->paginate;
		
//$movie = $this->Movie->findById(3);
//_applog( $movie );

// $actor = $this->Actor->findById(3);
// _applog($actor);

		$pulldownList = $this->Movie->find('list', [
				'fields' => array('Movie.id', 'Movie.title'),
				//'conditions' => array('Movie.status =' => 'public'),
		]);

		
		$data = $this->Paginator->paginate('Movie');
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