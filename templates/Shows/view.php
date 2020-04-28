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
        text-align: center;
        border: 2px solid black;
    }

    td {
        text-align: center;
    }
</style>

<?php

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
