<?php
namespace Ssa\HellocodePotemaBranches\Controller;

/***
 *
 * This file is part of the "Hellocode.de Provider Extension" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Stefan Sajok <stefansajok@hotmail.com>, hellocode.de
 *
 ***/

/**
 * PotemaServiceProviderController
 */
class PotemaServiceProviderController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * potemaServiceProviderRepository
     *
     * @var \Ssa\HellocodePotemaBranches\Domain\Repository\PotemaServiceProviderRepository
     * @inject
     */
    protected $potemaServiceProviderRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $country = "";
        $zip = -1;

        if (isset($_GET['country'])) {
            $country = addslashes($_GET['country']);
        }

        if (isset($_GET['zip'])) {
            $zip = intval($_GET['zip']);

            if ($country != "Deutschland") {
                $zip = -1;
            }
        }

        // Preset Deutschland.
        if (!isset($_GET['country'])) {
            $country = 'Deutschland';
        }

        $potemaServiceProviders = $this->potemaServiceProviderRepository->filterAll($country, $zip);
        $this->view->assign('potemaServiceProviders', $potemaServiceProviders);
        $this->view->assign('countries', $this->potemaServiceProviderRepository->findCountries());
        $this->view->assign('pid', $GLOBALS['TSFE']->id);
        $this->view->assign('filterCountry', $country);
        $this->view->assign('filterZip', $zip);
    }
}
