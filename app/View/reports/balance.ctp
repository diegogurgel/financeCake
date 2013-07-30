<div class="expenses sum">
	<h2><?php echo __('Saldo Mensal'); ?></h2>
	

<div class="expenses saldo">

	<select name="anos">
		<option value="2013">2013</option>
		<option value="2012">2012</option>
	</select>
	<select name="meses">
		<option value="01">Janeiro</option>
		<option value="02">Fevereiro</option>
		<option value="03">Março</option>
		<option value="04">Abril</option>
		<option value="05">Maio</option>
		<option value="06">Junho</option>
		<option value="07">Julho</option>
		<option value="08">Agosto</option>
		<option value="09">Setembro</option>
		<option value="10">Outubro</option>
		<option value="11">Novembro</option>
		<option value="12">Dezembro</option>
	</select>
	<button type="" id="btnSomaMes">Saldo</button>
	</br></br>
	<span> <?php echo $balance["saldo"]?></span> 


</div>
<script type="text/javascript" charset="utf-8">
	var selectAno = document.getElementsByName("anos")[0];
	var selectMes = document.getElementsByName("meses")[0];
	var btn = document.getElementById("btnSomaMes");
		btn.onclick = function(){
		window.location.href  = "http://localhost/financecake/reports/balance/"+selectAno.value+"-"+selectMes.value;
		console.log(window.location.href);
	}
</script>
		


</div>