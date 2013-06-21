
<?php
if (!empty($pages))
    foreach ($pages as $pg) {

        echo '<article>';
        echo '<header>';
        echo '<h3><a href="' . url::site('show/page/' . $pg->short_title) . '">' . $pg->title . '</a></h3>';
        echo '</header>';
        //echo '<h3>'.date('d-m-Y',$pg->date).'</h3>';
        if ($pg->news != 1) {
            echo '<p>' . $pg->content . '</p>
		';

//            echo '<h3>' . __('Komentarze') . '</h3>';
            echo '<p>';
            if (!empty($comments))
                foreach ($comments as $comment)
                    echo '<h3>' . $comment->author_username . '</h3>
					<h4>' . date('G:i d-m-Y', $comment->date) . '</h4>
					<p>' . $comment->content . '</p>';
            echo '</p>';

            if (($pg->comments == 1) && Auth::instance()->logged_in())
                echo '<h3>' . __('Dodaj komentarz') . '</h3>
				<form action="' . url::site('show/page/' . $pg->short_title) . '" METHOD="POST">
				' . __('Treść') . ': <input name="comment_content" />
				<input type="submit" value="' . __('OK') . '" />
				</form>';

        } else
            echo '<p class="post">'
                . text::limit_chars($pg->content, 500, '<br /><a href="' . url::site('show/page/' . $pg->short_title) . '">' . __('Czytaj dalej') . '</a>', TRUE) . '</p>
		';
        echo '</article>';

    }

if (count($pages) == 0)
    echo '<h1>' . __('Brak wyników.') . '</h1>';


// Show pagination elements for news display
if ($page_total > 1) {
    echo __('Strona');
    echo ' (' . $page_number . ' ' . __('z') . ' ' . $page_total . ')';

    // left arrow - previous page
    if ($page_number > 1) {
        echo '<a href="' . url::site('show/news/' . ($page_number - 1)) . '=' . $month . '=' . $year . (!empty($search) ? '?search=' . $search : '') . '" id="arrow">&larr;</a>';
    }

    // right arrow - next page
    if ($page_number < $page_total) {
        echo '<a href="' . url::site('show/news/' . ($page_number + 1)) . '=' . $month . '=' . $year . (!empty($search) ? '?search=' . $search : '') . '" id="arrow">&rarr;</a>';
    }
}


?>
