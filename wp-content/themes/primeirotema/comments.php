<?php
  if(post_password_required()) {
    return;
  }

  if(have_comments()) {
    foreach($comments as $comment) {

      ?>
        <div class="comentario">
          <div class="comentario_foto">
            <?php echo get_avatar($comment, 60); ?>
          </div>
          <div class="comentario_area">
            <strong><?php comment_author(); ?></strong> - <?php comment_date(); ?> <br>

            <?php comment_text(); ?>
          </div>
        </div>

      <?php
    }

    the_comments_pagination();
  }

  comment_form(array(
    'comment_field' => 'Comentário: <br /><textarea name="comment"></textarea> <br /><br />',
    'fields' => array(
      'author' =>  'Nome: <input type="text" placeholder="Digite seu nome" name="author" /> <br /><br />',
      'email' =>  'Email: <input type="email" placeholder="Digite seu email" name="email" /> <br /><br />',
      'url' =>  'Url: <input type="url" placeholder="Digite seu site" name="url" /> <br /><br />',
    ),
    'class_submit' => 'botao',
    'label_submit' => 'Envie seu comentário',
    'title_reply' => 'Deixe o seu comentário'
  ));
?>
