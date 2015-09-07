<div class="bg-serie">
    <?php echo $html->image(('show/' . $show['Show']['menu'] . '_w.jpg'), array('alt' => $show['Show']['name'], 'align' => 'left')); ?>
    <table>
        <tr>
            <td class="td-genres" colspan="2"><strong>Genre<?php if (count($show['Genre']) > 1) echo 's'; ?></strong> :
                <br />
                <?php foreach($show['Genre'] as $j=> $genre) { if ($j != 0) echo ', ' . $genre['name']; else echo $genre['name']; } ?>
            </td>
        </tr>
        <tr>
            <td class="td-nat" colspan="2">Série
                <?php echo strtolower($show[ 'Show'][ 'nationalite']); ?>
            </td>
        </tr>
        <tr>
            <td class="td-annee" colspan="2">Année :
                <?php echo $show[ 'Show'][ 'annee']; ?>
            </td>
        </tr>
        <tr>
            <td class="td-format" colspan="2">Format :
                <?php echo $show[ 'Show'][ 'format']; ?> min</td>
        </tr>
        <tr>
            <td class="td-chaineus" width="30">
                <?php echo $show[ 'Show'][ 'chaineus']; ?>
            </td>
            <td class="td-chainefr" width="70">
                <?php echo $show[ 'Show'][ 'chainefr']; ?>
            </td>
        </tr>
    </table>
</div>