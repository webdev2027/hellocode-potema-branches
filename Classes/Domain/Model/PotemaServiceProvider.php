<?php
namespace Ssa\HellocodePotemaBranches\Domain\Model;

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
 * PotemaServiceProvider
 */
class PotemaServiceProvider extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * providerTitle
     *
     * @var string
     * @validate NotEmpty
     */
    protected $providerTitle = '';

    /**
     * providerSubtitle
     *
     * @var string
     * @validate NotEmpty
     */
    protected $providerSubtitle = '';

    /**
     * providerGeneraldistributor
     *
     * @var string
     * @validate NotEmpty
     */
    protected $providerGeneraldistributor = '';

    /**
     * providerPremiumpartner
     *
     * @var string
     * @validate NotEmpty
     */
    protected $providerPremiumpartner = '';

    /**
     * providerStreet
     *
     * @var string
     * @validate NotEmpty
     */
    protected $providerStreet = '';

    /**
     * providerZip
     *
     * @var string
     * @validate NotEmpty
     */
    protected $providerZip = '';

    /**
     * providerCity
     *
     * @var string
     * @validate NotEmpty
     */
    protected $providerCity = '';

    /**
     * providerCountry
     *
     * @var string
     * @validate NotEmpty
     */
    protected $providerCountry = '';

    /**
     * providerPhone
     *
     * @var string
     */
    protected $providerPhone = '';

    /**
     * providerFax
     *
     * @var string
     */
    protected $providerFax = '';

    /**
     * providerMobile
     *
     * @var string
     */
    protected $providerMobile = '';

    /**
     * providerEmail
     *
     * @var string
     * @validate NotEmpty
     */
    protected $providerEmail = '';

    /**
     * providerUrl
     *
     * @var string
     */
    protected $providerUrl = '';

    /**
     * providerLat
     *
     * @var float
     */
    protected $providerLat = '';

    /**
     * providerLng
     *
     * @var float
     */
    protected $providerLng = '';

    /**
     * Returns the providerTitle
     *
     * @return string $providerTitle
     */
    public function getProviderTitle()
    {
        return $this->providerTitle;
    }

    /**
     * Sets the providerTitle
     *
     * @param string $providerTitle
     * @return void
     */
    public function setProviderTitle($providerTitle)
    {
        $this->providerTitle = $providerTitle;
    }

    /**
     * Returns the providerSubtitle
     *
     * @return string $providerSubtitle
     */
    public function getProviderSubtitle()
    {
        return $this->providerSubtitle;
    }

    /**
     * Sets the providerSubtitle
     *
     * @param string $providerSubtitle
     * @return void
     */
    public function setProviderSubtitle($providerSubtitle)
    {
        $this->providerSubtitle = $providerSubtitle;
    }

    /**
     * Returns the providerGeneraldistributor
     *
     * @return string $providerGeneraldistributor
     */
    public function getProviderGeneraldistributor()
    {
        return $this->providerGeneraldistributor;
    }

    /**
     * Sets the providerGeneraldistributor
     *
     * @param string $providerGeneraldistributor
     * @return void
     */
    public function setProviderGeneraldistributor($providerGeneraldistributor)
    {
        $this->providerGeneraldistributor = $providerGeneraldistributor;
    }

    /**
     * Returns the providerPremiumpartner
     *
     * @return string $providerPremiumpartner
     */
    public function getProviderPremiumpartner()
    {
        return $this->providerPremiumpartner;
    }

    /**
     * Sets the providerPremiumpartner
     *
     * @param string $providerPremiumpartner
     * @return void
     */
    public function setProviderPremiumpartner($providerPremiumpartner)
    {
        $this->providerPremiumpartner = $providerPremiumpartner;
    }

    /**
     * Returns the providerStreet
     *
     * @return string $providerStreet
     */
    public function getProviderStreet()
    {
        return $this->providerStreet;
    }

    /**
     * Sets the providerStreet
     *
     * @param string $providerStreet
     * @return void
     */
    public function setProviderStreet($providerStreet)
    {
        $this->providerStreet = $providerStreet;
    }

    /**
     * Returns the providerZip
     *
     * @return string $providerZip
     */
    public function getProviderZip()
    {
        return $this->providerZip;
    }

    /**
     * Sets the providerZip
     *
     * @param string $providerZip
     * @return void
     */
    public function setProviderZip($providerZip)
    {
        $this->providerZip = $providerZip;
    }

    /**
     * Returns the providerCity
     *
     * @return string $providerCity
     */
    public function getProviderCity()
    {
        return $this->providerCity;
    }

    /**
     * Sets the providerCity
     *
     * @param string $providerCity
     * @return void
     */
    public function setProviderCity($providerCity)
    {
        $this->providerCity = $providerCity;
    }

    /**
     * Returns the providerCountry
     *
     * @return string $providerCountry
     */
    public function getProviderCountry()
    {
        return $this->providerCountry;
    }

    /**
     * Sets the providerCountry
     *
     * @param string $providerCountry
     * @return void
     */
    public function setProviderCountry($providerCountry)
    {
        $this->providerCountry = $providerCountry;
    }

    /**
     * Returns the providerPhone
     *
     * @return string $providerPhone
     */
    public function getProviderPhone()
    {
        return $this->providerPhone;
    }

    /**
     * Sets the providerPhone
     *
     * @param string $providerPhone
     * @return void
     */
    public function setProviderPhone($providerPhone)
    {
        $this->providerPhone = $providerPhone;
    }

    /**
     * Returns the providerFax
     *
     * @return string $providerFax
     */
    public function getProviderFax()
    {
        return $this->providerFax;
    }

    /**
     * Sets the providerFax
     *
     * @param string $providerFax
     * @return void
     */
    public function setProviderFax($providerFax)
    {
        $this->providerFax = $providerFax;
    }

    /**
     * Returns the providerMobile
     *
     * @return string $providerMobile
     */
    public function getProviderMobile()
    {
        return $this->providerMobile;
    }

    /**
     * Sets the providerMobile
     *
     * @param string $providerMobile
     * @return void
     */
    public function setProviderMobile($providerMobile)
    {
        $this->providerMobile = $providerMobile;
    }

    /**
     * Returns the providerEmail
     *
     * @return string $providerEmail
     */
    public function getProviderEmail()
    {
        return $this->providerEmail;
    }

    /**
     * Sets the providerEmail
     *
     * @param string $providerEmail
     * @return void
     */
    public function setProviderEmail($providerEmail)
    {
        $this->providerEmail = $providerEmail;
    }

    /**
     * Returns the providerUrl
     *
     * @return string $providerUrl
     */
    public function getProviderUrl()
    {
        return $this->providerUrl;
    }

    /**
     * Sets the providerUrl
     *
     * @param string $providerUrl
     * @return void
     */
    public function setProviderUrl($providerUrl)
    {
        $this->providerUrl = $providerUrl;
    }

    /**
     * Returns the providerLat
     *
     * @return float providerLat
     */
    public function getProviderLat()
    {
        return $this->providerLat;
    }

    /**
     * Sets the providerLat
     *
     * @param string $providerLat
     * @return void
     */
    public function setProviderLat($providerLat)
    {
        $this->providerLat = $providerLat;
    }

    /**
     * Returns the providerLng
     *
     * @return float providerLng
     */
    public function getProviderLng()
    {
        return $this->providerLng;
    }

    /**
     * Sets the providerLng
     *
     * @param string $providerLng
     * @return void
     */
    public function setProviderLng($providerLng)
    {
        $this->providerLng = $providerLng;
    }
}
