<?php

declare(strict_types=1);


namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
?>

<style>
    table {
        border-collapse: collapse;
    }

    div {
        display: flex;
        justify-content: center;
    }

    th,
    td {
        border: 2px solid black;
    }

    td {
        text-align: center;
    }

    #desc {
        width: 500px
    }
</style>
<?php
class ListController extends AppController
{


    public function mostra()
    {

        $flowers = TableRegistry::getTableLocator()->get('flowers');
        $query = $flowers->find('all', [
            'contain' => ['opportunities']

        ]);

        echo "<div>";
        echo "<table>";
        echo '<th>Nome</th>';
        echo '<th>Occasione</th>';
        echo '<th>Descrizione</th>';


        foreach ($query as $row) {

            echo '<tr>
        <td>' . $row->name . '</td>';
            echo '<td>' . $row->Opportunities['name'] . '</td>';
            echo "<td id='desc'>" . $row->Opportunities['description'] . '</td>';
        }

        echo '</table>';
        echo '</div>';

        die();
    }
}
