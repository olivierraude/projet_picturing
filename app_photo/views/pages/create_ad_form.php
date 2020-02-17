<?php
/**
 * formulaire creation annonce
 * 
 *  - titre
 *  - category
 *  - type
 *  - description
 *  - prix
 *  - photo
 *  - location
 */

 var_dump($title);
?>

<h2><?= $page_title ?></h2>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("pages/create_ad_form");?>

      <p>
            <?php echo form_label($title['name']);?> <br />
            <?php echo form_input($title);?>
      </p>

      
    <p>
      <?php echo form_label($type['name']); ?>
      <?php foreach($type['option'] as $option)
        {
            $opt[] = $option->category; 
        } 
        echo form_dropdown($type['name'], $opt); ?>
    </p>


      <p>
            <?php echo form_label($category['name']);?> <br />
            <?php echo form_dropdown($category['name'],$category['option']);?>
      </p>


      <p>
            <?php echo form_label($description['name']);?> <br />
            <?php echo form_input($description);?>
      </p>
    

      <p>
            <?php echo form_label($price['name']);?> <br />
            <?php echo form_input($price);?>
      </p>

      <p>
             <?php echo form_label($photo['name']);?> <br />
             <?php echo form_input($photo);?>
      </p>

      <p>
            <?php echo form_label($location['name']);?> <br />
            <?php echo form_input($location);?>
      </p>  


      <p><?php echo form_submit('submit', 'ajouter');?></p>

<?php echo form_close();?>



