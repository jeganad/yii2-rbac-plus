<?php

namespace johnitvn\rbacplus\models;

use Yii;
use yii\rbac\Item;
use johnitvn\rbacplus\AuthItemManager;

/**
 * Description of Permistion
 *
 * @author John Martin <john.itvn@gmail.com>
 * @since 1.0.0
 */
class Role extends AuthItem {

    protected function getType() {
        return Item::TYPE_ROLE;
    }
    
    public function attributeLabels() {
        $labels = parent::attributeLabels();
        $labels['name'] = Yii::t('rbac', 'Role name');
        return $labels;
    }

    public static function find($name) {
        return new self(AuthItemManager::getItem($name, Item::TYPE_ROLE));
    }

}
