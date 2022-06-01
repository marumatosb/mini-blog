<?php $this->setLayoutVar('title','ホーム') ?>
<form action="<?php echo $base_url;?>/status/post" method="post">
  <input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>" />

  <?php if (isset($errors) && count($errors) > 0): ?>
   <?php echo $this->render('errors',array('errors' => $errors)); ?>
  <?php endif; ?>


  <textarea name="body" rows="2" cols="60" value="225文字まで書けます"><?php echo $this->escape($body); ?></textarea>

  <p>
    <input type="submit" value="Send a word" class="button" />
  </p>
</form>
  <h2>「いま」を記録する</h2>
<div class="top-m">
  <p>
255文字までの「いま」を記録できるMini Blogです。<br>
※アカウント作成・ログイン後に発言できます。
  </p>
    </div>
    <h2>SAMPLE RELEASE</h2>
<div class="top-m">
  <p>
    ポートフォリオ用に公開していますので、データベースをリセット(アカウント情報や投稿内容のリセット)をすることがあるかもしれませんが、よければ一言残してみてください。<br>
    現状投稿者本人と管理者のみが、投稿内容を確認できます。
  </p>
  </div>



<div id="statuses">
  <?php foreach ($statuses as $status): ?>
  <?php echo $this->render('status/status',array('status' => $status)); ?>
  <?php endforeach; ?>
</div>
