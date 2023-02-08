<?php if (!empty($_SESSION['is_admin'])) : ?>

  <a href="<?= ROOT_URL ?>admin_editPost_<?= $oPost->id ?>.html"><button class="btn orange waves-effect waves-light">Modifier</button></a>
  <a href="<?= ROOT_URL ?>admin_delete_<?= $oPost->id ?>.html"><button class="btn blue waves-effect waves-light">Supprimer</button></a>

<?php endif ?>