<?php $this->pageTitle = 'Les nouvelles séries tv de la saison 2016 - 2017'; 
	echo $html->meta('description', "Repérez dès maintenant les nouvelles séries de la saison 2016 - 2017 qui risquent de vous plaire. ", array('type'=>'description'), false); 
?>

<?php
	echo $javascript->link('jquery.expander', false); 
	//echo $javascript->link('perso.rentree2013', false); 
?>

<div id="event">
    <div class="padl15">
	<?php echo $this->element('partage-reseau-sociaux'); ?>
    <h1 class="title">Les nouvelles séries de 2016-2017</h1><br /><br />
	
    <span class="chapo">
		C'est la rentrée série ! Et comme chaque année, le sériephile averti se pose toujours la même question : qu'est ce que je vais bien pouvoir regarder cette année ? 
		À serieall, nous avons bien compris ce soucis et c'est pourquoi nous vous proposons cette page recensant les nouveautés de la saison 2016-2017. <br/>
		Et comme on sait que le temps d'un sériephile est précieux, toutes les séries que nous avons analysées sont présentées grâce à notre indice infaillible, 
		le taux érectile, qui vous permettra à coup-sûr de sélectionner les perles des navets (50% de chance que l'on se plante).
		<br/>
		Bonne saison !
	</span>
    <br /><br /><br />
    
    <h2 class="title dblue">Filtrer les nouveautés</h2><br /><br />
    <table width="100%" style="" class="event-tab">
    <tr>
    <td width="30%">
      <h3 class="dblue">Les catégories Série-All :</h3> <br /><br />
      <ul class="playe lblue">
        <li><?php echo $ajax->link('Les séries les plus prometteuses', array('controller' => 'shows', 'action' => 'rentree2016', 'tePositif'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li>
        <li><?php echo $ajax->link('Les séries dont on attend pas grand chose', array('controller' => 'shows', 'action' => 'rentree2016', 'teNeutre'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li>
        <li><?php echo $ajax->link('On vous conseille vivement d\'éviter de les croiser', array('controller' => 'shows', 'action' => 'rentree2016', 'teNegatif'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li>
        <li><?php echo $ajax->link('On ne se prononce pas', array('controller' => 'shows', 'action' => 'rentree2016', 'teNone'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li>
        <li><?php echo $ajax->link('Toutes les séries par ordre de diffusion', array('controller' => 'shows', 'action' => 'rentree2016', 'all'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li>
      </ul>
    </td>
    <td width="20%">
      <h3 class="dblue">Par genre :</h3> <br /><br />
      <ul class="playe lblue">
        <li><?php echo $ajax->link('Les nouveaux drama', array('controller' => 'shows', 'action' => 'rentree2016', 'drama'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li>
        <li><?php echo $ajax->link('Les nouvelles comédies', array('controller' => 'shows', 'action' => 'rentree2016', 'comic'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li>
          <li><?php echo $ajax->link('Les nouvelles séries policières', array('controller' => 'shows', 'action' => 'rentree2016', 'police'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li>
          <li><?php echo $ajax->link('Les nouvelles séries fantastiques', array('controller' => 'shows', 'action' => 'rentree2016', 'fantas'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li>
		  <li><?php echo $ajax->link('Les nouveaux animés', array('controller' => 'shows', 'action' => 'rentree2016', 'anime'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li>
		  <li><?php echo $ajax->link('Les nouvelles séries d\'horreur', array('controller' => 'shows', 'action' => 'rentree2016', 'horreur'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li>
		  <li><?php echo $ajax->link('Les nouvelles séries de science-fiction', array('controller' => 'shows', 'action' => 'rentree2016', 'sf'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li>

		<ul>
    </td>
    <td width="17%">
      <h3 class="dblue">Par nationalité :</h3> <br /><br />
      <ul class="playe lblue">
        <li><?php echo $ajax->link('Les séries américaines', array('controller' => 'shows', 'action' => 'rentree2016', 'us'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li> 
        <li><?php echo $ajax->link('Les séries françaises', array('controller' => 'shows', 'action' => 'rentree2016', 'fr'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li> 
        <li><?php echo $ajax->link('Les séries anglaises', array('controller' => 'shows', 'action' => 'rentree2016', 'uk'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li> 
        <li><?php echo $ajax->link('Les séries canadiennes', array('controller' => 'shows', 'action' => 'rentree2016', 'ca'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li> 
      </ul>
    </td>
    <td width="33%">
      <h3 class="dblue">Par chaîne :</h3> <br /><br />
      <ul class="playe lblue">
        <li><?php echo $ajax->link('Les séries d\'ABC (Lost, Desperate H., Grey\'s)', array('controller' => 'shows', 'action' => 'rentree2016', 'abc'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li> 
        <li><?php echo $ajax->link('Les séries de HBO (Six Feet Under, True Blood)', array('controller' => 'shows', 'action' => 'rentree2016', 'hbo'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li> 
        <li><?php echo $ajax->link('Les séries de NBC (Scrubs, Chuck, Community)', array('controller' => 'shows', 'action' => 'rentree2016', 'nbc'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li> 
        <li><?php echo $ajax->link('Les séries de CW (Gossip Girl, Vampire Diaries)', array('controller' => 'shows', 'action' => 'rentree2016', 'cw'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li> 
        <li><?php echo $ajax->link('Les séries de CBS (NCIS, Mentalist, HIMYM)', array('controller' => 'shows', 'action' => 'rentree2016', 'cbs'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li> 
        <li><?php echo $ajax->link('Les séries de FOX (Fringe, Bones)', array('controller' => 'shows', 'action' => 'rentree2016', 'fox'), array('class' => 'decoblue', 'update' => 'listeSerieRentree')); ?></li> 
      </ul>
    </td>
    </tr>
    </table>
    
    <div id="listeSerieRentree">
    	<?php echo $this->element('event-rentree2012'); ?>
    </div>
    
    </div>
</div>

