<?php 

	echo $this->Html->link('Saldo', '/reports/balance', array('class' => 'btnLink', 'target' => ''));
	echo $this->Html->link('Gastos mensal por conta', '/reports/accountMonthExpense', array('class' => 'btnLink', 'target' => ''));
	echo $this->Html->link('Gasto mensal por categoria', '/reports/expensesCategoryMonth', array('class' => 'btnLink', 'target' => ''));
	echo $this->Html->link('Extratificado por mes', '/reports/extratificadoMensal', array('class' => 'btnLink', 'target' => ''));

 ?>