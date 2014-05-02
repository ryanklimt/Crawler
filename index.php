<?php
	include_once('simple_html_dom.php');
	$target_url = 'http://www.taylor.edu';
	$html = new simple_html_dom();
	$html->load_file($target_url);
?>

<table>
	<tr>
		<th>Charset</th>
		<th>Property</th>
		<th>Name</th>
		<th>Content</th>
	</tr>

	<?php
		foreach($html->find('meta') as $link) {
			echo '<tr>';
				echo '<td>'.$link->charset.'</td>';
				echo '<td>'.$link->property.'</td>';
				echo '<td>'.$link->name.'</td>';
				echo '<td>'.$link->content.'</td>';
			echo '</tr>';
		}
	?>

</table>