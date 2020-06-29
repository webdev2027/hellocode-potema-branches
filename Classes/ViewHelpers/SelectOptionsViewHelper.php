<?php
namespace Ssa\HellocodePotemaBranches\ViewHelpers;

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Class SelectOptionsViewHelper
 */
class SelectOptionsViewHelper extends AbstractViewHelper
{

    /**
     * Initialize arguments
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('filterCountry', 'string', 'Value of filtered country', true);
        $this->registerArgument('country', 'string', 'Current country of foreach.', true);
    }

    /**
     * @return int
     */
    public function render()
    {
        $selected = '';
        $filterCountry = $this->arguments['filterCountry'];
        $country = $this->arguments['country'];
        if ($filterCountry == $country) {
            $selected = ' selected="selected"';
        }

        return "<option value=\"$country\"{$selected}>{$country}</option>";
    }

    /**
     * @return TypoScriptFrontendController
     */
    protected function getTypoScriptFrontendController()
    {
        return $GLOBALS['TSFE'];
    }
}