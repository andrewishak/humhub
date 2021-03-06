<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\search\widgets;

use yii\base\Widget;

/**
 * SearchMenu Widget for TopMenu
 */
class SearchMenu extends Widget
{

    /**
     * @inheritdoc
     */
    public function run()
    {
        return $this->render('searchMenu', []);
    }

}
