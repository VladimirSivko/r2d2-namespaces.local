<?php

namespace models;

use \core\models\Main;

class Articles extends Main{

    public function getAll($news) {
	$news = array(
	    1 => 'Dnepr relax',
	    2 => 'Novomoskovsk work',
	    3 => 'Kamenskoe picking his nose'
	);
	return $news;
    }

}
