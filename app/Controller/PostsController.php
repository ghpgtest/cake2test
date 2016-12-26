<?php
class PostsController extends AppController 
{
	public $helpers = array('Html', 'Form', 'Flash');
	public $components = array('Flash', 'Paginator');
	
    public $paginate = array(
        'limit' => 20,
        'order' => array(
            'Post.id' => 'desc'
        )
    );
	
	public function index() 
	{
		$this->Paginator->settings = $this->paginate;
		
		// findAll() に似ていますが、ページ制御された結果を返します。
		$data = $this->Paginator->paginate('Post');
		$this->set('data', $data);
	}
	
	public function view($id = null, $param2)
	{		
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}
		
		$post = $this->Post->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->set('post', $post);
	}
	
	public function add() 
	{
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Flash->success(__('Your post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Flash->error(__('Unable to add your post.'));
		}
	}
	
	public function edit($id = null) 
	{
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}
	
		$post = $this->Post->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid post'));
		}
		
		_applog($this->request->data);
		$conditions = $this->postConditions($this->request->data, ['title' => 'ILIKE', 'body' => 'ILIKE']);
		_applog($conditions);
	
		if ($this->request->is(array('post', 'put'))) {
			$this->Post->id = $id;
			if ($this->Post->save($this->request->data)) {
				$this->Flash->success(__('Your post has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Flash->error(__('Unable to update your post.'));
		}
	
		if (!$this->request->data) {
			$this->request->data = $post;
		}
	}
	
	public function delete($id) 
	{
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Post->delete($id)) {
			$this->Flash->success(
					__('The post with id: %s has been deleted.', h($id))
					);
		} else {
			$this->Flash->error(
					__('The post with id: %s could not be deleted.', h($id))
					);
		}
	
		return $this->redirect(array('action' => 'index'));
	}
}