
<div class="uk-width-1">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/tags_add" class="btn btn-secondary"><i class="fa fa-plus"></i> <?php echo Yii::t("default","Add New")?></a>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/tags" class="btn btn-secondary"><i class="fa fa-list"></i> <?php echo Yii::t("default","List")?></a>
</div>
<div class="spacer"></div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <form id="frm_table_list" method="POST" >
                    <input type="hidden" name="action" id="action" value="TagsList">
                    <input type="hidden" name="tbl" id="tbl" value="tags">
                    <input type="hidden" name="clear_tbl"  id="clear_tbl" value="clear_tbl">
                    <input type="hidden" name="whereid"  id="whereid" value="tag_id">
                    <input type="hidden" name="slug" id="slug" value="tags">
                    <table id="table_list" class="table table-hover table-striped table-condensed datatable-basic">
                    <caption><?php echo Yii::t("default","Currency List")?></caption>
                    <thead>
                            <tr>
                                <th width="3%"><?php echo Yii::t("default","ID")?></th>
                                <th width="7%"><?php echo Yii::t("default","Name")?></th>
                                <th width="7%"><?php echo Yii::t("default","Description")?></th>
                                <th width="7%"><?php echo Yii::t("default","Slug")?></th>
                                <th width="7%"><?php echo Yii::t("default","Date Created")?></th>            
                            </tr>
                        </thead>
                        <tbody>    
                        </tbody>
                    </table>
                    <div class="clear"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
