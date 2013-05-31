<?php

if (is_array($menus)) {
    echo __('<p>Poniżej przedstawiona jest struktura menu wraz z możliwością zmiany położeń wpisów, ich usuwania i edycji.</p>');
    echo __('<p>Przy użyciu formularza można dodawać nowe wpisy, bądź też aktualizować istniejące.</p>');
    echo '<div class="dd" id="nestable">';
    echo '<ol class="dd-list" id="nestable-menu">';

    foreach ($menus as $tab) {
        $last_level = 0;
        $first = true;
        foreach ($tab as $tb) {


            if ($tb[1] > $last_level)
                echo '<ol class="dd-list">
					';
            if ($tb[1] < $last_level)
                echo '</li></ol>
					';
            if (($tb[1] == $last_level) && (!$first)) {
                '</li>';
            }


            echo '<li class="dd-item dd3-item" data-id="' . $tb[0]->id . '">
					<div class="dd-handle dd3-handle">

					</div>
					<div class="dd3-content">
					    <a href="' . $tb[0]->link . '">' . $tb[0]->text . '</a> |
					    <a href="' . url::site('menu/admin/index/' . $tb[0]->id) . '">' . __('Edytuj') . '</a>
				        <a href="' . url::site('menu/admin/delete/' . $tb[0]->id) . '">' . __('Usuń') . '</a>
                    </div>

					';

            if ($first) $first = false;
            $last_level = $tb[1];

        }
        while (($last_level--) > 0)
            echo '</ol>
				';
    }
    echo '</ol>';


    echo '</div>
<br>
<br>
<br>';
}

if (isset($entry))
    echo '<h2>' . __('Edycja istniejącej pozycji') . '</h2>';
else
    echo '<h2>' . __('Dodawanie nowej pozycji') . '</h2>';

echo'
	<table>
		<form action="' . url::site() . '/menu/admin/save' . (isset($entry) ? '/' . $entry->id : '') . '" method="POST">
			<tr><td class="col">' . __('Podepnij do') . '</td>
			<td>
			<select name="parent_id">
								<option value="">{{' . __("Nowe menu") . '}}</option>';
foreach ($all_menus as $gru) {
    if (isset($entry) && ($gru->id == $entry->parent_id))
        echo '<option value="' . $gru->id . '" selected="selected">' . $gru->text . '</option>';
    else
        echo '<option value="' . $gru->id . '">' . $gru->text . '</option>';

}

echo '</select>
			</td></tr>
			<tr><td class="col">' . __('Nazwa') . '</td><td><input type="text" name="text" ' . (isset($entry) ? 'value="' . $entry->text . '"' : '') . ' /></td></tr>
			<tr><td class="col">' . __('Adres URL') . '</td><td><input type="text" name="link" ' . (isset($entry) ? 'value="' . $entry->link . '"' : '') . '/>
			<select name="page_selected">
								<option value="*">{{' . __("Adres URL") . '}}</option>
								<option value="0">{{' . __("Archiwum") . '}}</option>';
foreach ($all_pages as $gru) {
    echo '<option value="' . $gru->id . '">' . $gru->id . '. ' . $gru->title . '</option>';
}

echo '</select>
			</td>
			</tr>
			<tr><td class="col"></td><td><input type="submit" value="' . __('OK') . '"></td></tr>
		</form>
	</table>
		';

echo "
<script>
$(document).ready(function()
{

    var updateOutput = function(e)
    {
        var list   = e.length ? e : $(e.target);
            $.ajax({
                type: \"POST\",
                url: '" . url::site() . '/menu/admin/order/' . "',
                data: JSON.stringify(list.nestable('serialize')),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function(e) { location.reload(); }
                });

    };

    $('.dd').nestable().on('change', updateOutput);


});






</script>
";

?>
