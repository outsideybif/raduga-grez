<?php echo $header; ?><?php echo $column_left;?>
<div id="content">
    <div class="page-header">
        <div class="container-fluid">
            <div class="pull-right">
                <button type="submit" form="form-ms_integration" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
                <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
            <h1><?php echo $heading_title; ?></h1>
            <ul class="breadcrumb">
                <?php foreach($breadcrumbs as $breadcrumb): ?>
                <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <?php if($error_warning): ?>
        <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        <?php endif; ?>
        <?php if($success): ?>
        <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        <?php endif; ?>
        <div class="panel panel-default">
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-setting" data-toggle="tab"><?php echo $tab_setting ?></a></li>
                    <?php if($ms):  ?>
                    <li><a href="#tab-products" data-toggle="tab"><?php echo $tab_products ?></a></li>
                    <li><a href="#tab-orders" data-toggle="tab"><?php echo $tab_orders ?></a></li>
                    <li><a href="#tab-import" data-toggle="tab"><?php echo $tab_import ?></a></li>
                    <?php endif; ?>
                    <li><a href="#tab-info" data-toggle="tab">Иформация</a></li>
                </ul>
                <form action="<?php echo $action ?>" method="post" enctype="multipart/form-data" id="form-ms_integration" class="form-horizontal">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-setting">
                            <?php if($check_licence!=''):  ?>
                            <div class="panel panel-danger">
                                <div class="panel-heading" style="background-color: #f5c1bb;border-color: #f3b5ad;"><h3 class="panel-title"><i class="fa fa-exclamation-triangle"></i> Ошибка</h3></div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <h4><?php echo $check_licence ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="panel panel-warning">
                                <div class="panel-heading" style="color: #f3a638; background-color: #fce7c8; border-color: #f9d5a2;"><h3 class="panel-title"><i class="fa fa-exclamation-triangle"></i> Вы используете бесплатную версию модуля</h3></div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-sm-12" style="font-weight: bold">
                                            Вы можете приобрести расщиренную версию модуля по <a href="http://ciframe.ru/moysklad-opencart-connector/" target="_blank">ссылке</a>.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-link"></i> Основные параметры</h3></div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-status"><?php echo $entry_status ?></label>
                                        <div class="col-sm-4">
                                            <select name="ms_integration_status" id="input-status" class="form-control">
                                                <?php if($settings["ms_integration_status"]):  ?>
                                                <option value="1" selected="selected"><?php echo $text_enabled ?></option>
                                                <option value="0"><?php echo $text_disabled ?></option>
                                                <?php else: ?>
                                                <option value="1"><?php echo $text_enabled ?></option>
                                                <option value="0" selected="selected"><?php echo $text_disabled ?></option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_status ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-ms-login"><?php echo $entry_ms_login ?></label>
                                        <div class="col-sm-4">
                                            <input type="text" name="ms_integration_ms_login" id="input-ms-login" class="form-control" value="<?php echo $settings['ms_integration_ms_login'] ?>">
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_ms_login ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-ms-password"><?php echo $entry_ms_password ?></label>
                                        <div class="col-sm-4">
                                            <input type="password" name="ms_integration_ms_password" id="input-ms-password" class="form-control" value="<?php echo $settings['ms_integration_ms_password'] ?>">
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_ms_password ?>
                                        </div>
                                    </div>

                                    <?php if($ms):  ?>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-cron-time"><?php echo $entry_cron_time ?></label>
                                        <div class="col-sm-4">
                                            <input type="number" name="ms_integration_cron_time" id="input-cron-time" class="form-control" value="<?php echo $settings['ms_integration_cron_time'] ?>">
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_cron_time ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php if($ms):  ?>
                        <div class="tab-pane" id="tab-products">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-link"></i> Настройки связки</h3></div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-ms-id"><?php echo $entry_ms_id ?></label>
                                        <div class="col-sm-4">
                                            <select  name="ms_integration_ms_id" id="input-ms-id" class="form-control">
                                                <?php foreach($setting_ms_select as $key=>$name):  ?>
                                                <?php if($key==$settings["ms_integration_ms_id"]):  ?>
                                                <option value="<?php echo $key ?>" selected="selected"><?php echo $name ?></option>
                                                <?php else: ?>
                                                <option value="<?php echo $key ?>"><?php echo $name ?></option>
                                                <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_ms_id ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-oc-id"><?php echo $entry_oc_id ?></label>
                                        <div class="col-sm-4">
                                            <select  name="ms_integration_oc_id" id="input-oc-id" class="form-control">
                                                <?php foreach($setting_oc_select as $key=>$name):  ?>
                                                <?php if($key==$settings["ms_integration_oc_id"]):  ?>
                                                <option value="<?php echo $key ?>" selected="selected"><?php echo $name ?></option>
                                                <?php else: ?>
                                                <option value="<?php echo $key ?>"><?php echo $name ?></option>
                                                <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_oc_id ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-language"><?php echo $entry_language ?></label>
                                        <div class="col-sm-4">
                                            <select  name="ms_integration_language" id="input-language" class="form-control">
                                                <?php foreach($setting_language_select as $key=>$name): ?>
                                                <?php if($key==$settings["ms_integration_language"]):  ?>
                                                <option value="<?php echo $key ?>" selected="selected"><?php echo $name ?></option>
                                                <?php else: ?>
                                                <option value="<?php echo $key ?>"><?php echo $name ?></option>
                                                <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_language ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" style="cursor: pointer" data-toggle="collapse" data-target="#product-create-panel"><h3 class="panel-title"><i class="fa fa-plus"></i>Настройки создания товаров</h3></div>
                                <div id="product-create-panel" class="panel-body collapse in">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-create-product"><?php echo $entry_create_product ?></label>
                                        <div class="col-sm-4">
                                            <select name="ms_integration_create_product" id="input-create-product" class="form-control">
                                                <?php if($settings["ms_integration_create_product"]):  ?>
                                                <option value="1" selected="selected"><?php echo $text_enabled ?></option>
                                                <option value="0"><?php echo $text_disabled ?></option>
                                                <?php else: ?>
                                                <option value="1"><?php echo $text_enabled ?></option>
                                                <option value="0" selected="selected"><?php echo $text_disabled ?></option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_create_product ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-subtract_create"><?php echo $entry_subtract_create ?></label>
                                        <div class="col-sm-4">
                                            <select disabled name="ms_integration_subtract_create" id="input-subtract_create" class="form-control">
                                                <option value="1" selected="selected"><?php echo $text_enabled ?></option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-shipping_create"><?php echo $entry_shipping_create ?></label>
                                        <div class="col-sm-4">
                                            <select disabled name="ms_integration_shipping_create" id="input-shipping_create" class="form-control">
                                                <option value="1" selected="selected"><?php echo $text_enabled ?></option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-status_create"><?php echo $entry_status_create ?></label>
                                        <div class="col-sm-4">
                                            <select disabled name="ms_integration_status_create" id="input-status_create" class="form-control">
                                                <option value="1" selected="selected"><?php echo $text_enabled ?></option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-stock_status_create"><?php echo $entry_stock_status_create ?></label>
                                        <div class="col-sm-4">
                                            <select disabled name="ms_integration_stock_status_create" id="input-stock_status_create" class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" style="cursor: pointer" data-toggle="collapse" data-target="#product-update-panel"><h3 class="panel-title"><i class="fa fa-repeat"></i> Настройки обновления товаров</h3></div>
                                <div id="product-update-panel" class="panel-body collapse in">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-stock"><?php echo $entry_stock ?></label>
                                        <div class="col-sm-4">
                                            <select name="ms_integration_stock" id="input-stock" class="form-control">
                                                <?php if($settings["ms_integration_stock"]):  ?>
                                                <option value="1" selected="selected"><?php echo $text_enabled ?></option>
                                                <option value="0"><?php echo $text_disabled ?></option>
                                                <?php else: ?>
                                                <option value="1"><?php echo $text_enabled ?></option>
                                                <option value="0" selected="selected"><?php echo $text_disabled ?></option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_stock ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-stock_out_status"><?php echo $entry_stock_out_status ?></label>
                                        <div class="col-sm-4">
                                            <select disabled name="ms_integration_stock_out_status" id="input-stock_out_status" class="form-control">
                                                <option value="2" selected="selected">Оставлять без изменений</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-in_stock_status"><?php echo $entry_in_stock_status ?></label>
                                        <div class="col-sm-4">
                                            <select disabled name="ms_integration_in_stock_status" id="input-in_stock_status" class="form-control">
                                                <option value="2" selected="selected">Оставлять без изменений</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"><?php echo $entry_stock_store ?></label>
                                        <div class="col-sm-4">
                                            <select disabled name="ms_integration_ms_store" id="input-ms-store" class="form-control">
                                                <option value="">По всем складам</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-name_update"><?php echo $entry_name_update ?></label>
                                        <div class="col-sm-4">
                                            <select name="ms_integration_name_update" id="input-name_update" class="form-control">
                                                <?php if($settings["ms_integration_name_update"]):  ?>
                                                <option value="1" selected="selected"><?php echo $text_enabled ?></option>
                                                <option value="0"><?php echo $text_disabled ?></option>
                                                <?php else: ?>
                                                <option value="1"><?php echo $text_enabled ?></option>
                                                <option value="0" selected="selected"><?php echo $text_disabled ?></option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_name_update ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-description_update"><?php echo $entry_description_update ?></label>
                                        <div class="col-sm-4">
                                            <select name="ms_integration_description_update" id="input-description_update" class="form-control">
                                                <?php if($settings["ms_integration_description_update"]):  ?>
                                                <option value="1" selected="selected"><?php echo $text_enabled ?></option>
                                                <option value="0"><?php echo $text_disabled ?></option>
                                                <?php else: ?>
                                                <option value="1"><?php echo $text_enabled ?></option>
                                                <option value="0" selected="selected"><?php echo $text_disabled ?></option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_description_update ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-price_update"><?php echo $entry_price_update ?></label>
                                        <div class="col-sm-4">
                                            <select name="ms_integration_price_update" id="input-price_update" class="form-control">
                                                <?php if($settings["ms_integration_price_update"]):  ?>
                                                <option value="1" selected="selected"><?php echo $text_enabled ?></option>
                                                <option value="0"><?php echo $text_disabled ?></option>
                                                <?php else: ?>
                                                <option value="1"><?php echo $text_enabled ?></option>
                                                <option value="0" selected="selected"><?php echo $text_disabled ?></option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_price_update ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-ms_price_type"><?php echo $entry_ms_price_type ?></label>
                                        <div class="col-sm-4">
                                            <select disabled name="ms_integration_ms_price_type" id="input-ms_price_type" class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-weight_update"><?php echo $entry_weight_update ?></label>
                                        <div class="col-sm-4">
                                            <select disabled name="ms_integration_weight_update" id="input-weight_update" class="form-control">
                                                <option value="0" selected="selected"><?php echo $text_disabled ?></option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-ean_update"><?php echo $entry_ean_update ?></label>
                                        <div class="col-sm-4">
                                            <select disabled name="ms_integration_ean_update" id="input-ean_update" class="form-control">
                                                <option value="0" selected="selected"><?php echo $text_disabled ?></option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-image_update"><?php echo $entry_image_update ?></label>
                                        <div class="col-sm-4">
                                            <select disabled name="ms_integration_image_update" id="input-image_update" class="form-control">
                                                <option value="0" selected="selected"><?php echo $text_disabled ?></option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" style="cursor: pointer" data-toggle="collapse" data-target="#product-modification-panel"><h3 class="panel-title"><i class="fa fa-check-circle"></i> Настройки работы с модификациями/опциями</h3></div>
                                <div id="product-modification-panel" class="panel-body collapse in">
                                    <div class="col-sm-12">
                                        <?php echo $help_disabled ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" style="cursor: pointer" data-toggle="collapse" data-target="#product-category-panel"><h3 class="panel-title"><i class="fa fa-object-group"></i> Настройки работы с категориями товаров</h3></div>
                                <div id="product-category-panel" class="panel-body collapse in">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-categories"><?php echo $entry_categories ?></label>
                                        <div class="col-sm-4">
                                            <select name="ms_integration_categories" id="input-categories" class="form-control">
                                                <?php if($settings["ms_integration_categories"]):  ?>
                                                <option value="1" selected="selected"><?php echo $text_enabled ?></option>
                                                <option value="0"><?php echo $text_disabled ?></option>
                                                <?php else: ?>
                                                <option value="1"><?php echo $text_enabled ?></option>
                                                <option value="0" selected="selected"><?php echo $text_disabled ?></option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_categories ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-category_link"><?php echo $entry_category_link ?></label>
                                        <div class="col-sm-4">
                                            <select name="ms_integration_category_link" id="input-category_link" class="form-control">
                                                <option value="">По именам категорий</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-create_category"><?php echo $entry_create_category ?></label>
                                        <div class="col-sm-4">
                                            <select name="ms_integration_create_category" id="input-create_category" class="form-control">
                                                <?php if($settings["ms_integration_create_category"]):  ?>
                                                <option value="1" selected="selected"><?php echo $text_enabled ?></option>
                                                <option value="0"><?php echo $text_disabled ?></option>
                                                <?php else: ?>
                                                <option value="1"><?php echo $text_enabled ?></option>
                                                <option value="0" selected="selected"><?php echo $text_disabled ?></option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_create_category ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-category_name_update"><?php echo $entry_category_name_update ?></label>
                                        <div class="col-sm-4">
                                            <select name="ms_integration_category_name_update" id="input-category_name_update" class="form-control">
                                                <?php if($settings["ms_integration_category_name_update"]):  ?>
                                                <option value="1" selected="selected"><?php echo $text_enabled ?></option>
                                                <option value="0"><?php echo $text_disabled ?></option>
                                                <?php else: ?>
                                                <option value="1"><?php echo $text_enabled ?></option>
                                                <option value="0" selected="selected"><?php echo $text_disabled ?></option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_category_name_update ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-orders">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-link"></i> Основные параметры</h3></div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-ms-organization"><?php echo $entry_ms_organization ?></label>
                                        <div class="col-sm-4">
                                            <select name="ms_integration_ms_organization" id="input-ms-organization" class="form-control">
                                                <option value=""></option>
                                                <?php foreach($setting_organization_select as $key=>$name):  ?>
                                                <?php if($key==$settings["ms_integration_ms_organization"]):  ?>
                                                <option value="<?php echo $key ?>" selected="selected"><?php echo $name ?></option>
                                                <?php else: ?>
                                                <option value="<?php echo $key ?>"><?php echo $name ?></option>
                                                <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_ms_organization ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-ms-agent"><?php echo $entry_ms_agent ?></label>
                                        <div class="col-sm-4">
                                            <select name="ms_integration_ms_agent" id="input-ms-agent" class="form-control">
                                                <option value=""></option>
                                                <option disabled value="99999999999">На основании данных заказа - <?php echo $help_disabled ?></option>
                                                <?php foreach($setting_agent_select as $key=>$name):  ?>
                                                <?php if($key==$settings["ms_integration_ms_agent"]):  ?>
                                                <option value="<?php echo $key ?>" selected="selected"><?php echo $name ?></option>
                                                <?php else: ?>
                                                <option value="<?php echo $key ?>"><?php echo $name ?></option>
                                                <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_ms_agent ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-agent-search"><?php echo $entry_agent_search ?></label>
                                        <div class="col-sm-4">
                                            <select disabled name="ms_integration_agent_search" id="input-agent-search" class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" style="cursor: pointer" data-toggle="collapse" data-target="#order-secondary-panel"><h3 class="panel-title"><i class="fa fa-link"></i> Дополнительные параметры</h3></div>
                                <div id="order-secondary-panel" class="panel-body collapse in">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-ms-store"><?php echo $entry_ms_store ?></label>
                                        <div class="col-sm-4">
                                            <select disabled name="ms_integration_ms_store" id="input-ms-store" class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-ms-state"><?php echo $entry_ms_state ?></label>
                                        <div class="col-sm-4">
                                            <select disabled name="ms_integration_ms_state" id="input-ms-state" class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-reserve"><?php echo $entry_reserve ?></label>
                                        <div class="col-sm-4">
                                            <select name="ms_integration_reserve" id="input-reserve" class="form-control">
                                                <option value="0" selected="selected"><?php echo $text_disabled ?></option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-vatE"><?php echo $entry_ms_vatE ?></label>
                                        <div class="col-sm-4">
                                            <input disabled type="number" name="ms_integration_ms_vatE" id="input-vatE" class="form-control" value="<?php echo $settings['ms_integration_ms_vatE'] ?>">
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-vatI"><?php echo $entry_ms_vatI ?></label>
                                        <div class="col-sm-4">
                                            <select disabled name="ms_integration_ms_vatI" id="input-vatI" class="form-control">
                                                <option value="0" selected="selected"><?php echo $text_disabled ?></option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-applicable"><?php echo $entry_ms_applicable ?></label>
                                        <div class="col-sm-4">
                                            <select disabled name="ms_integration_ms_applicable" id="input-applicable" class="form-control">
                                                <option value="1" selected="selected"><?php echo $text_enabled ?></option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-order_name"><?php echo $entry_order_name ?></label>
                                        <div class="col-sm-4">
                                            <select disabled name="ms_integration_order_name" id="input-order_name" class="form-control">
                                                <option value="1" selected="selected"><?php echo "Использовать нумерацию Моего склада" ?></option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-order-prefix"><?php echo $entry_order_prefix ?></label>
                                        <div class="col-sm-4">
                                            <input disabled type="text" name="ms_integration_order_prefix" id="input-order-prefix" class="form-control" value="<?php echo $settings['ms_integration_order_prefix'] ?>">
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-order-suffix"><?php echo $entry_order_suffix ?></label>
                                        <div class="col-sm-4">
                                            <input disabled type="text" name="ms_integration_order_suffix" id="input-order-suffix" class="form-control" value="<?php echo $settings['ms_integration_order_suffix'] ?>">
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-ms_shipping"><?php echo $entry_ms_shipping ?></label>
                                        <div class="col-sm-4">
                                            <select disabled name="ms_integration_ms_shipping" id="input-ms_shipping" class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php echo $help_disabled ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" style="cursor: pointer" data-toggle="collapse" data-target="#order-old-panel"><h3 class="panel-title"><i class="fa fa-link"></i> Параметры создания старых заказов</h3></div>
                                <div id="order-old-panel" class="panel-body collapse in">
                                    <div class="col-sm-12">
                                        <?php echo $help_disabled ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-import">
                            <div class="form-group">
                                <h3 class="col-sm-12">
                                    <?php echo $help_save_setting ?>
                                </h3>
                            </div>
                            <?php if($integrationOn):  ?>
                            <div class="panel panel-default">
                                <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-link"></i> Работа с категориями</h3></div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <a href="<?php echo $link_categories ?>"  style="width: 100%" id="category-link-btn" class="btn btn-primary" type="submit"><?php echo $category_text ?></a>
                                        </div>
                                        <div class="col-sm-9">
                                            <label class="control-label" style="text-align: left">Связать группы Моего склада с категрими магазина. Требуется для обновления категорий у товаров. <br>
                                                Функция не обновляет имена категорий. При включенном параметре "Создание категорий", создадутся недостающие.</label><br>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <a disabled href="" style="width: 100%" id="category-update-btn" class="btn btn-primary" type="submit">Обновить категоии</a>
                                        </div>
                                        <div class="col-sm-9">
                                            <label class="control-label" style="text-align: left"><?php echo $help_disabled?></label><br>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <a href="<?php echo $delete_categories ?>" style="width: 100%" id="category-delete-btn" class="btn btn-danger" onclick="if (confirm('Удалить?')) return true; else return false"><?php echo $delete_text ?></a>
                                        </div>
                                        <div class="col-sm-9">
                                            <label class="control-label" style="text-align: left">Удаление существующих связей категорий.</label><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <?php echo $category_count ?>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-link"></i> Работа с товарами</h3></div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <a href="<?php echo $link_products ?>" style="width: 100%" id="product-link-btn" class="btn btn-primary" type="submit"><?php echo $import_text ?></a>
                                        </div>
                                        <div class="col-sm-9">
                                            <label class="control-label" style="text-align: left">Связать товары Моего склада с товарами магазина. Требуется для работы остальных функций модуля. <br>
                                                Функция не обновляет товары. При включенном параметре "Создание товаров", создадутся недостающие.</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <a href="<?php echo $update_products ?>" style="width: 100%" id="product-update-btn" class="btn btn-primary" type="submit">Обновить товары</a>
                                        </div>
                                        <div class="col-sm-9">
                                            <label class="control-label" style="text-align: left">Обновление уже связанных товаров. Функция не создает недостающие товары.</label><br>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <a href="<?php echo $update_stock ?>" style="width: 100%" id="product-stock-btn" class="btn btn-primary" type="submit">Обновить остатки</a>
                                        </div>
                                        <div class="col-sm-9">
                                            <label class="control-label" style="text-align: left">Остатки обновятся только у связанных товаров.</label><br>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <a href="<?php echo $delete_products ?>" style="width: 100%" id="product-delete-btn" class="btn btn-danger" onclick="if (confirm('Удалить?')) return true; else return false"><?php echo $delete_text ?></a>
                                        </div>
                                        <div class="col-sm-9">
                                            <label class="control-label" style="text-align: left">Удаление существующих связей товаров.</label><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <?php echo $products_count ?><br>
                                    <?php echo $bundles_count ?>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-link"></i> Работа с модификациями</h3></div>
                                <div class="panel-body">
                                    <?php echo $help_disabled?>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-link"></i> Работа с заказами</h3></div>
                                <div class="panel-body">
                                    <?php echo $help_disabled?>
                                </div>
                                <div class="panel-footer">
                                    <?php echo $orders_count ?>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-link"></i> Работа с кронами</h3></div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <h4><?php echo $help_cron ?></h4>
                                            <?php echo $cron_link ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <h4><?php echo $help_cron_2 ?></h4>
                                            <?php echo $cron_link_2 ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-3">
                                    <a href="<?php echo $link_repair_db ?>" style="width: 100%" id="repair-btn" class="btn btn-primary" onclick="if (confirm('Уверены?')) return true; else return false"><?php echo $repair_text ?></a>
                                </div>
                                <div class="col-sm-9">
                                    <label class="control-label" style="text-align: left"><?php echo $help_repair_db ?></label>
                                </div>
                            </div>

                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                        <div class="tab-pane" id="tab-info">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <h3>Вы можете приобрести расщиренную версию модуля по <a href="http://ciframe.ru/moysklad-opencart-connector/" target="_blank">ссылке</a>.</h3>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-md-3">
                                    <label>Видео по настройке модуля</label>
                                </div>
                                <div class="col-sm-6 col-md-9">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pdZkyHQgokQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Если у вас возникли проблемы с работой модуля, можете ознакомится с <a href='https://<?php echo $ciframeDomain ?>/faq/46/' target="_blank">ответами на часто задаваемые вопросы</a>. Если проблема не решена или вы не нашли нужный вам вопрос - обратится к нам в поддержку, написав на почту <a href="mailto:info@ciframe.com?subject=Вопросы по работе модуля">info@ciframe.com</a>.<br>
                                    Ознакомится с регламентом поддержки можете по <a href='https://<?php echo $ciframeDomain ?>/support/' target="_blank">ссылке</a>.
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <h4>Также можете ознакомится с другими нашими решения по <a href="https://<?php echo $ciframeDomain ?>/products/opencart/" target="_blank">OpenCart</a>, <a href="https://<?php echo $ciframeDomain ?>/products/moysklad/" target="_blank">Мой Склад</a> и <a href="https://<?php echo $ciframeDomain ?>/ecommerce-integration/" target="_blank">другим продуктам</a>.</h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <a href="<?php echo $download_log ?>" style="width: 100%" id="download-btn" class="btn btn-primary">Скачать лог файл</a>
                                </div>
                                <div class="col-sm-9">
                                    <label class="control-label" style="text-align: left"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <h4 class="col-sm-12" style="text-align: center">
                    <?php echo $version ?>
                </h4>
            </div>
        </div>
    </div>
</div>
<?php echo $footer ?>