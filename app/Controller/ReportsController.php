<?php
class ReportsController extends AppController {
	public function index()
	{
		# code...
	}
	public function balance($mes =null)
	{

		@Controller::loadModel('Expenses'); 

		$balance = $this->Expenses->query("SELECT SUM( budget_records.ammount ) - (SELECT SUM( expenses.ammount )FROM expenses WHERE date LIKE'".$mes."%') saldo FROM budget_records");
		$this->set("balance",$balance[0][0]);

	}
	public function expensesCategoryMonth($categoria='', $mes='')
	{
		@Controller::loadModel('Expenses'); 
		@Controller::loadModel('Categories'); 
		$cat =$this->Categories->find('list');
		$this->set('categorias', $cat);


		$expenses=null;
		if($categoria=="" || $mes==""){
			$this->set("valor", "");
			$this->set("categoria","");
		}else
		{

			$expenses = $this->Expenses->query(
				"SELECT cat.name, SUM(ex.ammount) total FROM expenses ex, sub_categories scat, categories cat 
				WHERE ex.sub_category_id = scat.id 
				AND cat.id = scat.category_id 
				AND cat.id=".$categoria."
				AND ex.date LIKE '".$mes."%' group by cat.name");
			if($expenses==null){
				$this->set("valor", "0");
				$this->set("categoria",$this->Categories->findById($categoria)["Categories"]["name"]) ;
			}
			else
			{
				$this->set("valor", $expenses[0][0]["total"]);
				$this->set("categoria", $expenses[0]["cat"]["name"]);

			}
		}
				// echo "<pre>";
				// print_r($expenses);
				// echo "</pre>";
	}
	public function accountMonthExpense($conta='', $mes='')
	{
		@Controller::loadModel('Expenses'); 
		@Controller::loadModel('Account'); 
		$acct =$this->Account->find('list');
		$this->set('contas', $acct);

		$expenses=null;
		 if($conta=="" || $mes==""){
		 	$this->set("valor", "");
		 	$this->set("conta","");
		 }
		 else
		{
				$expenses = $this->Expenses->query(
				"SELECT acct.name, SUM(ex.ammount) total FROM expenses ex, accounts acct
				WHERE ex.account_id = acct.id
				AND 
				ex.account_id =".$conta."
				AND ex.date LIKE '".$mes."%' group by acct.name");
			if($expenses==null){
				$this->set("valor", "0");
				$this->set("conta",$this->Account->findById($conta)["Account"]["name"]) ;
			}
			else
			{
				$this->set("valor", $expenses[0][0]["total"]);
				$this->set("conta", $expenses[0]["acct"]["name"]);

			}
		}
	}
	public function extratificadoMensal($mesInicial='', $mesFinal='')
	{
		@Controller::loadModel('Expenses'); 
		$expenses=null;
		 if($mesInicial=="x" || $mesFinal=="x"){
		 	$this->set("valor", "");
		 }
		 else
		{
				$expenses = $this->Expenses->query("select MONTHNAME(e.date) mes,
sum(e.ammount) total
from expenses e
WHERE
MONTH(e.date)>=1
AND
MONTH(e.date)<=12
group by MONTH(e.date)");
			if($expenses==null){
				$this->set("valor", "0");
			}
			else
			{
				 echo "<pre>";
				print_r($expenses);
				echo "</pre>";
				//$this->set("valor", $expenses[0][0]["total"]);
				//$this->set("conta", $expenses[0]["acct"]["name"]);

			}
		}
			
	}

}
?>