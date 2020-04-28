<?php

declare(strict_types=1);


namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
?>


<?php
class ShowsController extends AppController
{


    public function view()
    {

        $flowers = TableRegistry::getTableLocator()->get('flowers');
        $query = $flowers->find('all', [
            'contain' => ['opportunities']

        ]);
        $this->set('query', $query);
    }
}
