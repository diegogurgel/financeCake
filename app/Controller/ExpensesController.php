<?php
App::uses('AppController', 'Controller');
/**
 * Expenses Controller
 *
 * @property Expense $Expense
 */
class ExpensesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Expense->recursive = 0;
		$this->set('expenses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Expense->exists($id)) {
			throw new NotFoundException(__('Invalid expense'));
		}
		$options = array('conditions' => array('Expense.' . $this->Expense->primaryKey => $id));
		$this->set('expense', $this->Expense->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Expense->create();
			if ($this->Expense->save($this->request->data)) {
				$this->Session->setFlash(__('The expense has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The expense could not be saved. Please, try again.'));
			}
		}
		$subCategories = $this->Expense->SubCategory->find('list');
		$accounts = $this->Expense->Account->find('list');
		$this->set(compact('subCategories', 'accounts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Expense->exists($id)) {
			throw new NotFoundException(__('Invalid expense'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Expense->save($this->request->data)) {
				$this->Session->setFlash(__('The expense has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The expense could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Expense.' . $this->Expense->primaryKey => $id));
			$this->request->data = $this->Expense->find('first', $options);
		}
		$subCategories = $this->Expense->SubCategory->find('list');
		$accounts = $this->Expense->Account->find('list');
		$this->set(compact('subCategories', 'accounts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Expense->id = $id;
		if (!$this->Expense->exists()) {
			throw new NotFoundException(__('Invalid expense'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Expense->delete()) {
			$this->Session->setFlash(__('Expense deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Expense was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


	public function sum() {
		$total = $this->Expense->find('first', array('fields' => 'SUM(Expense.ammount) as total'));
		 $this->set("total", $total[0]["total"]);
	}
	public function gastos_mes($mes){
			$gastoMes= $this->Expense->query("SELECT SUM( ammount ) as 'totalMes' FROM  expenses WHERE DATE LIKE  '".$mes."%'");
			 $this->set("gastosMesTotal", $gastoMes);
				$this->set("gastoMes", $gastoMes[0][0]);
	}
}
