
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/smsPackage/Do/Add" class="btn btn-secondary"><i class="fa fa-plus"></i> <?php echo Yii::t("default","Add New")?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/smsPackage" class="btn btn-secondary"><i class="fa fa-list"></i> <?php echo Yii::t("default","List")?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/smsPackage/Do/Sort" class="btn btn-secondary"><i class="fa fa-sort-alpha-asc"></i> <?php echo Yii::t("default","Sort")?></a>


<?php 
if (isset($_GET['id'])){
	if (!$data=Yii::app()->functions->getSMSPackagesById($_GET['id'])){
		echo "<div class=\"alert alert-danger\">".
		Yii::t("default","Sorry but we cannot find what your are looking for.")."</div>";
		return ;
	}
}
?>                                   

<div class="spacer"></div>

<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-body">

<form class="row g-3 forms" id="forms">
<?php echo CHtml::hiddenField('action','smsPackageAdd')?>
<?php echo CHtml::hiddenField('id',isset($_GET['id'])?$_GET['id']:"");?>
<?php if (!isset($_GET['id'])):?>
<?php echo CHtml::hiddenField("redirect",Yii::app()->request->baseUrl."/admin/smsPackage/Do/Add")?>
<?php endif;?>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Title")?></label>
  <?php echo CHtml::textField('title',
  isset($data['title'])?$data['title']:""
  ,array(
  'class'=>'form-control',
  'data-validation'=>"required"
  ))?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Description")?>
  </label>
  <?php echo CHtml::textArea('description',
  isset($data['description'])?$data['description']:""
  ,array(
  'class'=>'form-control',
  'data-validation'=>"required"
  ))?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Price")?></label>
  <?php echo CHtml::textField('price',
  isset($data['price'])?standardPrettyFormat($data['price']):""
  ,array(
  'class'=>'form-control numeric_only',
  'data-validation'=>"required"
  ))?>
</div>

<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Promo Price")?></label>
  <?php echo CHtml::textField('promo_price',
  isset($data['promo_price'])?standardPrettyFormat($data['promo_price']):""
  ,array(
  'class'=>'form-control numeric_only'  
  ))?>
</div>


<div class="row">
  <label class="form-label"><?php echo Yii::t("default","SMS Credit Limit")?></label>
  <?php echo CHtml::textField('sms_limit',
  isset($data['sms_limit'])?$data['sms_limit']:""
  ,array(
  'class'=>'form-control numeric_only',
  'data-validation'=>"required"
  ))?>
</div>


<div class="row">
  <label class="form-label"><?php echo Yii::t("default","Status")?></label>
  <?php echo CHtml::dropDownList('status',
  isset($data['status'])?$data['status']:"",
  (array)statusList(),          
  array(
  'class'=>'p-1 border rounded',
  'data-validation'=>"required"
  ))?>
</div>

<div class="row mt-3">
  <input type="submit" value="<?php echo Yii::t("default","Save")?>" class="btn btn-sm btn-success">
</div>

</form>
  </div>
  </div>
  </div>
  </div>
