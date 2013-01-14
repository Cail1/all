
<table class="toolbar">
	<tr>
    	<td><h1 class="green">Les utilisateurs</h1></td>
    	<td width="50" class="center">
		<?php echo $html->link($html->image('icons/add.png') . '<br />Ajouter', array('controller' => 'users', 'action' => 'add', 'prefix' => 'admin'), array('escape' => false)); ?>
        </td>
        <!-- <td width="40" class="center">
		<?php // echo $html->link($html->image('icons/categories.png') . 'Metiers', array('controller' => 'users', 'action' => 'ajoutmetier', 'prefix' => 'admin'), array('escape' => false)); ?> 
        </td> -->
    </tr>
</table>
<br />

<!-- Affiche les liens des pages précédentes et suivantes -->
<?php
	echo $paginator->numbers();
?> 

 

<table class="data">
	<tr>
    	<th width="15%">Login</td>
        <th>Nom</td>
        <th width="17%">Créé le</td>
        <th width="35">Edit</td>
        <th width="35">Supr</td>
	</tr>
    
    <?php foreach($users as $i => $user): ?>
    <tr <?php if ($i&1) echo 'class="pair"'; ?>>
    	<td><?php if ($user['User']['role'] < 2) echo '<span class="green">' . $user['User']['login'] . ' </span>'; else echo $user['User']['login']; ?></td>
        <td><?php if ($user['User']['role'] < 2) echo '<span class="green">' . $user['User']['name'] . ' </span>'; else echo $user['User']['name']; ?></td>
       

        <td><?php
        	$timestamp = strtotime($user['User']['created']);
			e(strftime("%d %B %Y", $timestamp));
		?></td>
        
        <td><?php echo $html->link($html->image('icons/edit.png'), array('controller' => 'users', 'action' => 'edit', 'prefix' => 'admin', $user['User']['id']), array('escape' => false, 'title' => 'Modifier l\'utilisateur')); ?>
        </td>
        <td><?php if ($user['User']['role'] != 'admin') {
			echo $html->link($html->image('icons/delete.png'), array('controller' => 'users', 'action' => 'delete', 'prefix' => 'admin', $user['User']['id']), array('escape' => false, 'title' => 'Supprimer l\'utilisateur'), "Etes-vous sûr de vouloir supprimer cet utilisateur ?"); 
			} ?>
        </td>
        
    </tr>
    <?php endforeach; ?>    
    
</table>