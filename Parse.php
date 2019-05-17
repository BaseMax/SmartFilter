<?php
/**
*
* @Name : SmartFiltering/Parse.php
* @Version : 1.0
* @Programmer : Max
* @Date : 2019-05-17
* @Released under : https://github.com/BaseMax/SmartFiltering/blob/master/LICENSE
* @Repository : https://github.com/BaseMax/SmartFiltering
*
**/
?>
<!-- <?php
if(isset($_POST['submit'])) {
	$input=$_POST['input'];
}
else {
?>
 -->
<form action="" method="POST">
	<div>
		<h3>Input #0</h3>
		<textarea name="input" cols="80" rows="20"></textarea>
		<br>
	</div>
	<hr>
	<div>
		<h3>Filter #1</h3>
		<input id="trim_none" type="radio" name="trim" value="none" checked="true">
		<label for="trim_none">
			Not Remove whitespace from whole of input
		</label>
		<br>
		<input id="trim_both" type="radio" name="trim" value="both">
		<label for="trim_both">
			Remove whitespace from both sides of whole of input
		</label>
		<br>
		<input id="trim_left" type="radio" name="trim" value="left">
		<label for="trim_left">
			Remove whitespace from left side of whole of input
		</label>
		<br>
		<input id="trim_right" type="radio" name="trim" value="right">
		<label for="trim_right">
			Remove whitespace from right side of whole of input
		</label>
		<br>
	</div>
	<hr>
	<div>
		<h3>Filter #2</h3>
		<input id="trim_line_none" type="radio" name="trim_line" value="none" checked="true">
		<label for="trim_line_none">
			Not Remove whitespace of per lines
		</label>
		<br>
		<input id="trim_line" type="radio" name="trim_line" value="both">
		<label for="trim_line">
			Remove whitespace from both sides of per lines
		</label>
		<br>
		<input id="trim_line_left" type="radio" name="trim_line" value="left">
		<label for="trim_line_left">
			Remove whitespace from left side of per lines
		</label>
		<br>
		<input id="trim_line_right" type="radio" name="trim_line" value="right">
		<label for="trim_line_right">
			Remove whitespace from right side of per lines
		</label>
		<br>
	</div>
	<hr>
	<div>
		<h3>Filter #3</h3>
		<input id="skip_line_none" type="radio" name="skip_line" value="none" checked="true">
		<label for="skip_line_none">
			Not Remove some character's from the line
		</label>
		<br>
		<input id="skip_line_left" type="radio" name="skip_line" value="left">
		<label for="skip_line_left">
			Remove some character's from the left side of the line
			<input type="number" value="30" name="skip_line_left_number">
		</label>
		<br>
		<input id="skip_line_right" type="radio" name="skip_line" value="right">
		<label for="skip_line_right">
			Remove some character's from the right side of the line
			<input type="number" value="30" name="skip_line_right_number">
		</label>
		<br>
	</div>
	<hr>
	<div>
		<h3>Filter #4</h3>
		<input id="remove_line_none" type="radio" name="remove_line_number" value="none" checked="true">
		<label for="remove_line_none">
			Not Remove any number character's from the line
		</label>
		<br>
		<input id="remove_line_number_decimal_whole" type="radio" name="remove_line_number" value="number_decimal_whole">
		<label for="remove_line_number_decimal_whole">
			Remove number(decimal) character's from the whole of the line
		</label>
		<br>
		<input id="remove_line_number_float_whole" type="radio" name="remove_line_number" value="number_float_whole">
		<label for="remove_line_number_float_whole">
			Remove number(float) character's from the whole of the line
		</label>
		<br>
		<input id="remove_line_number_decimalfloat_whole" type="radio" name="remove_line_number" value="number_decimalfloat_whole">
		<label for="remove_line_number_decimalfloat_whole">
			Remove number(decimal and float) character's from the whole of the line
		</label>
		<br>
	</div>
	<hr>
	<button>Check</button>
</form>
<!-- <?php } ?> -->
