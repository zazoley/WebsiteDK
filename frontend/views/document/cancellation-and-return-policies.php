<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'Cancellation Policy';
$this->params['breadcrumbs'][] = $this->title;

$this->params["top_banner"] = '<img src="' . Url::to("@web/assets/images/cancellation-policy.jpg", true) . '" class="document-img" />';
?>
<div class="document">
	<div class="section-header">
    	<h2 class="dark-text"><?= Html::encode($this->title) ?></h2>
    </div>
	<div class="document-content">
   		<?= $model->get('https://docs.google.com/document/d/1DR8doSbtIumsWswQ17wzWvQg-L4W2jd7AxeyzYbZDDg/pub?embedded=true') ?>
    </div>
</div>
