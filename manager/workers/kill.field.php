<?php echo $messages; ?>
<form class="form-kill form-field" id="form-kill" action="<?php echo $config->url_current; ?>" method="post">
  <table class="table-bordered table-full-width">
    <thead>
      <tr>
        <th><?php echo $speak->title; ?></th>
        <th><?php echo $speak->key; ?></th>
        <th><?php echo $speak->type; ?></th>
        <th><?php echo $speak->scope; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $file->title; ?></td>
        <td><?php echo $the_key; ?></td>
        <?php

        $s = Mecha::alter($file->type[0], array(
            't' => 'Text',
            'b' => 'Boolean',
            'o' => 'Option',
            'f' => 'File',
            'c' => 'Composer',
            'e' => 'Editor'
        ), 'Summary');

        ?>
        <td><?php echo Jot::em('info', $s); ?></td>
        <td><?php echo isset($file->scope) ? str_replace(',', '/', $file->scope) : strtolower($speak->article . '/' . $speak->page); ?></td>
      </tr>
    </tbody>
  </table>
  <p>
  <?php echo Jot::button('action', $speak->yes); ?>
  <?php echo Jot::btn('reject', $speak->no, $config->manager->slug . '/field/repair/key:' . $the_key); ?>
  </p>
  <?php echo Form::hidden('token', $token); ?>
</form>