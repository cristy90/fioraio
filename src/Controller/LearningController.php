<?php

declare(strict_types=1);


namespace App\Controller;

use Cake\ORM\TableRegistry;

class LearningController extends AppController{
    public function mostra(){
        $flowers = TableRegistry::getTableLocator()->get('flowers');
        $query = $flowers -> find('all',
        [
         'contain' => ['occasions'],
            ]);
     $this->set('query', $query);
    }
}