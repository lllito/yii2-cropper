<?php
/**
 * @var \yii\db\ActiveRecord $model
 * @var \budyaga\cropper\Widget $widget
 *
 */

use yii\helpers\Html;

?>

<div class="cropper-widget">
    <?= Html::activeHiddenInput($model, $widget->attribute, ['class' => 'photo-field']); ?>
    <?= Html::hiddenInput('width', $widget->width, ['class' => 'width-input']); ?>
    <?= Html::hiddenInput('height', $widget->height, ['class' => 'height-input']); ?>

    <div style="width: 100%;">
        <?php if($model->{$widget->attribute} == ''):?>
        <div style="width: 50%;">
            <div class="new-photo-area"
                 style="height: <?= $widget->cropAreaHeight; ?>px; width: <?= $widget->cropAreaWidth; ?>px;">
                <div class="cropper-label">
                    <span><?= $widget->label; ?></span>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="new-photo-area"
             style="height: <?= $widget->cropAreaHeight; ?>px; width: <?= $widget->cropAreaWidth; ?>px;">
            <?= Html::img(
                $model->{$widget->attribute} != ''
                    ? $model->{$widget->attribute}
                    : $widget->noPhotoImage,
                [
                    'style' => 'height: ' . $widget->thumbnailHeight . 'px; width: ' . $widget->thumbnailWidth . 'px',
                    'class' => 'thumbnail',
                    'data-no-photo' => $widget->noPhotoImage
                ]
            ); ?>
        </div>
        <?endif;?>

    </div>


    <div class="cropper-buttons">
        <button type="button" class="btn btn-sm btn-danger delete-photo"
                aria-label="<?= Yii::t('cropper', 'DELETE_PHOTO'); ?>">
            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> <?= Yii::t('cropper', 'DELETE_PHOTO'); ?>
        </button>
        <button type="button" class="btn btn-sm btn-success crop-photo hidden"
                aria-label="<?= Yii::t('cropper', 'CROP_PHOTO'); ?>">
            <span class="glyphicon glyphicon-scissors"
                  aria-hidden="true"></span> <?= Yii::t('cropper', 'CROP_PHOTO'); ?>
        </button>
        <button type="button" class="btn btn-sm btn-info upload-new-photo "
                aria-label="<?= Yii::t('cropper', 'UPLOAD_ANOTHER_PHOTO'); ?>">
            <span class="glyphicon glyphicon-picture"
                  aria-hidden="true"></span> <?= Yii::t('cropper', 'UPLOAD_ANOTHER_PHOTO'); ?>
        </button>
    </div>


    <div class="progress hidden" style="margin-top:5px;width: <?= $widget->cropAreaWidth; ?>px;">
        <div class="progress-bar progress-bar-striped progress-bar-success active" role="progressbar" style="width: 0%">
            <span class="sr-only"></span>
        </div>
    </div>
</div>