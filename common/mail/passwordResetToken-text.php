<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
Добрый день, <?= $user->username ?>,

Чтобы сбросить пароль, перейдите по ссылке ниже:

<?= $resetLink ?>
