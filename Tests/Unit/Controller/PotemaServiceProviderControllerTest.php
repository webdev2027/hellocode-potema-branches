<?php
namespace Ssa\HellocodePotemaBranches\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Stefan Sajok <stefansajok@hotmail.com>
 */
class PotemaServiceProviderControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Ssa\HellocodePotemaBranches\Controller\PotemaServiceProviderController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Ssa\HellocodePotemaBranches\Controller\PotemaServiceProviderController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllPotemaServiceProvidersFromRepositoryAndAssignsThemToView()
    {

        $allPotemaServiceProviders = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $potemaServiceProviderRepository = $this->getMockBuilder(\Ssa\HellocodePotemaBranches\Domain\Repository\PotemaServiceProviderRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $potemaServiceProviderRepository->expects(self::once())->method('findAll')->will(self::returnValue($allPotemaServiceProviders));
        $this->inject($this->subject, 'potemaServiceProviderRepository', $potemaServiceProviderRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('potemaServiceProviders', $allPotemaServiceProviders);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
