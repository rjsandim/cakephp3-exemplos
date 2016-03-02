ExemploViews/index<br>


<?=$this->element('item', ['valores' => $item]); ?>


<form method="post">


	<input type="text" name="nome">

	<input type="checkbox" name="valor[]" value="check1"> 1
	<input type="checkbox" name="valor[]" value="check2"> 2

	<input type="submit">
</form>