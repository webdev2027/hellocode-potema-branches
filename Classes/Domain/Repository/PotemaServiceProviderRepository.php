<?php
namespace Ssa\HellocodePotemaBranches\Domain\Repository;

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
 * The repository for PotemaServiceProviders
 */
class PotemaServiceProviderRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function filterAll($country, $zip, $queryOffset = 0, $itemsPerPage = 99999) {

        /*
         * https://stackoverflow.com/questions/25807394/typo3-extbase-how-to-sort-child-objects
         * https://www.typo3.net/forum/thematik/zeige/thema/114160/?show=1
         *
        $orderings = array(
            'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
        );
        $query->setOrderings($orderings);

        $query->getQuerySettings()->setRespectSysLanguage(FALSE);
        $query->getQuerySettings()->setSysLanguageUid(0);
        */



        $query = $this->createQuery();

        // Limits.
        $query->setOffset($queryOffset);
        $query->setLimit($itemsPerPage);

        $query->setOrderings(
            array(
                //'uid' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
                'providerZip' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
            )
        );


        if ($country != "") {
            $query->matching($query->equals('providerCountry', $country));
        }

        $result = $query->execute();


        // Filters.
        if ($zip != -1) {
            $array = [];


            foreach ($result as $row) {
                $curZip = intval($row->getProviderZip());


                if ($zip == 0 && $curZip < 9999) {
                    array_push($array, $row);
                    continue;
                }
                if ($zip == 1 && $curZip > 9999 && $curZip < 19999) {
                    array_push($array, $row);
                    continue;
                }
                if ($zip == 2 && $curZip > 19999 && $curZip < 29999) {
                    array_push($array, $row);
                    continue;
                }
                if ($zip == 3 && $curZip > 29999 && $curZip < 39999) {
                    array_push($array, $row);
                    continue;
                }
                if ($zip == 4 && $curZip > 39999 && $curZip < 49999) {
                    array_push($array, $row);
                    continue;
                }
                if ($zip == 5 && $curZip > 49999 && $curZip < 59999) {
                    array_push($array, $row);
                    continue;
                }
                if ($zip == 6 && $curZip > 59999 && $curZip < 69999) {
                    array_push($array, $row);
                    continue;
                }
                if ($zip == 7 && $curZip > 69999 && $curZip < 79999) {
                    array_push($array, $row);
                    continue;
                }
                if ($zip == 8 && $curZip > 79999 && $curZip < 89999) {
                    array_push($array, $row);
                    continue;
                }
                if ($zip == 9 && $curZip > 89999 && $curZip < 99999) {
                    array_push($array, $row);
                    continue;
                }
            }

            $result = $array;
        }


        return $result;
    }

    public function findCountries($queryOffset = 0, $itemsPerPage = 99999) {

        $query = $this->createQuery();

        // Limits.
        $query->setOffset($queryOffset);
        $query->setLimit($itemsPerPage);

        $query->setOrderings(
            array(
                'providerCountry' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
            )
        );

        $result = $query->execute();
        $array = [];
        $collectedCountry = [];


        foreach ($result as $row) {
            if (!in_array($row->getProviderCountry(), $collectedCountry)) {
                array_push($array, $row);
                array_push($collectedCountry, $row->getProviderCountry());
            }
        }

        return $array;
    }
}