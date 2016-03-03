ExemploViews/index<br>


<?=$this->element('item'); ?>

<a href="exemplos-views/outra-action">Link Para outra Action</a>

<form method="post">

	<?=$this->Form->input('title'); ?>
	<input type="text" name="nome">

	<input type="checkbox" name="valor[]" value="check1"> 1
	<input type="checkbox" name="valor[]" value="check2"> 2

	<input type="submit">
</form>

<?=$this->MeuTexto->digitaNomeDaTurma(2016);?>