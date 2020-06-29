<?php
namespace Ssa\HellocodePotemaBranches\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Stefan Sajok <stefansajok@hotmail.com>
 */
class PotemaServiceProviderTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Ssa\HellocodePotemaBranches\Domain\Model\PotemaServiceProvider
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Ssa\HellocodePotemaBranches\Domain\Model\PotemaServiceProvider();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getProviderTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getProviderTitle()
        );

    }

    /**
     * @test
     */
    public function setProviderTitleForStringSetsProviderTitle()
    {
        $this->subject->setProviderTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'providerTitle',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getProviderSubtitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getProviderSubtitle()
        );

    }

    /**
     * @test
     */
    public function setProviderSubtitleForStringSetsProviderSubtitle()
    {
        $this->subject->setProviderSubtitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'providerSubtitle',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getProviderStreetReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getProviderStreet()
        );

    }

    /**
     * @test
     */
    public function setProviderStreetForStringSetsProviderStreet()
    {
        $this->subject->setProviderStreet('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'providerStreet',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getProviderZipReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getProviderZip()
        );

    }

    /**
     * @test
     */
    public function setProviderZipForStringSetsProviderZip()
    {
        $this->subject->setProviderZip('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'providerZip',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getProviderCityReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getProviderCity()
        );

    }

    /**
     * @test
     */
    public function setProviderCityForStringSetsProviderCity()
    {
        $this->subject->setProviderCity('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'providerCity',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getProviderCountryReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getProviderCountry()
        );

    }

    /**
     * @test
     */
    public function setProviderCountryForStringSetsProviderCountry()
    {
        $this->subject->setProviderCountry('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'providerCountry',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getProviderPhoneReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getProviderPhone()
        );

    }

    /**
     * @test
     */
    public function setProviderPhoneForStringSetsProviderPhone()
    {
        $this->subject->setProviderPhone('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'providerPhone',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getProviderFaxReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getProviderFax()
        );

    }

    /**
     * @test
     */
    public function setProviderFaxForStringSetsProviderFax()
    {
        $this->subject->setProviderFax('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'providerFax',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getProviderMobileReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getProviderMobile()
        );

    }

    /**
     * @test
     */
    public function setProviderMobileForStringSetsProviderMobile()
    {
        $this->subject->setProviderMobile('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'providerMobile',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getProviderEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getProviderEmail()
        );

    }

    /**
     * @test
     */
    public function setProviderEmailForStringSetsProviderEmail()
    {
        $this->subject->setProviderEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'providerEmail',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getProviderUrlReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getProviderUrl()
        );

    }

    /**
     * @test
     */
    public function setProviderUrlForStringSetsProviderUrl()
    {
        $this->subject->setProviderUrl('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'providerUrl',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getProviderLatReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getProviderLat()
        );

    }

    /**
     * @test
     */
    public function setProviderLatForFloatSetsProviderLat()
    {
        $this->subject->setProviderLat(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'providerLat',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getProviderLngReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getProviderLng()
        );

    }

    /**
     * @test
     */
    public function setProviderLngForFloatSetsProviderLng()
    {
        $this->subject->setProviderLng(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'providerLng',
            $this->subject,
            '',
            0.000000001
        );

    }
}
