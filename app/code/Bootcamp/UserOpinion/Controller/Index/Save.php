<<<<<<< HEAD
<?php
namespace Bootcamp\UserOpinion\Controller\Index;

use Magento\Framework\Exception\LocalizedException;

class Save implements \Magento\Framework\App\Action\HttpPostActionInterface
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_pageFactory;

    /**
     * @param \Magento\Framework\App\RequestInterface
     */
    private $_request;

    /**
     * @param \Magento\Framework\Controller\Result\RedirectFactory
     */
    private $_redirectFactory;

    /**
     * @param \Bootcamp\UserOpinion\Model\UserOpinionFactory
     */
    private $_userOpinionFactory;

    /**
     * @param \Magento\Framework\Message\ManagerInterface
     */
    private $_messageManager;

    /**
     * @param \Bootcamp\UserOpinion\Model\UserOpinionRepository
     */
    private $_userOpinionRepository;

    /**
     * @param \Psr\Log\LoggerInterface
     */
    private $_logger;

    /**
     * @param \Magento\Framework\App\Action\Context $context
     */
    public function __construct(
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Magento\Framework\App\RequestInterface $_request,
        \Magento\Framework\Controller\Result\RedirectFactory $_redirectFactory,
        \Bootcamp\UserOpinion\Model\UserOpinionFactory $_userOpinionFactory,
        \Magento\Framework\Message\ManagerInterface $_messageManager,
        \Bootcamp\UserOpinion\Model\UserOpinionRepository $_userOpinionRepository,
        \Psr\Log\LoggerInterface $_logger
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_request = $_request;
        $this->_redirectFactory = $_redirectFactory;
        $this->_userOpinionFactory = $_userOpinionFactory;
        $this->_messageManager = $_messageManager;
        $this->_userOpinionRepository = $_userOpinionRepository;
        $this->_logger = $_logger;
    }

    /**
     * View page action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /**
         * @var \Bootcamp\UserOpinion\Model\UserOpinion $useropinion
         */
        $useropinion = $this->_userOpinionFactory->create();
        $useropinion->setSku($this->_request->getParam('sku'));
        $useropinion->setUser_email($this->_request->getParam('user_email'));
        $useropinion->setPuntuacion($this->_request->getParam('puntuacion'));
        $useropinion->setOpinion($this->_request->getParam('opinion'));
        try {
            $this->_userOpinionRepository->save($useropinion);
            $this->_messageManager->addSuccessMessage(__("UserOpinion guardada exitosamente"));
        } catch (LocalizedException $e) {
            $this->_messageManager->addErrorMessage(__("Ha ocurrido un error guardando la UserOpinion"));
            $this->_logger->critical($e->getMessage());
        }
        $resultRedirect = $this->_redirectFactory->create();
        return $resultRedirect->setPath('useropinion/index/index');
    }
}
=======
<?php
namespace Bootcamp\UserOpinion\Controller\Index;

use Magento\Framework\Exception\LocalizedException;

class Save implements \Magento\Framework\App\Action\HttpPostActionInterface
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_pageFactory;

    /**
     * @param \Magento\Framework\App\RequestInterface
     */
    private $_request;

    /**
     * @param \Magento\Framework\Controller\Result\RedirectFactory
     */
    private $_redirectFactory;

    /**
     * @param \Bootcamp\UserOpinion\Model\UserOpinionFactory
     */
    private $_userOpinionFactory;

    /**
     * @param \Magento\Framework\Message\ManagerInterface
     */
    private $_messageManager;

    /**
     * @param \Bootcamp\UserOpinion\Model\UserOpinionRepository
     */
    private $_userOpinionRepository;

    /**
     * @param \Psr\Log\LoggerInterface
     */
    private $_logger;

    /**
     * @param \Magento\Framework\App\Action\Context $context
     */
    public function __construct(
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Magento\Framework\App\RequestInterface $_request,
        \Magento\Framework\Controller\Result\RedirectFactory $_redirectFactory,
        \Bootcamp\UserOpinion\Model\UserOpinionFactory $_userOpinionFactory,
        \Magento\Framework\Message\ManagerInterface $_messageManager,
        \Bootcamp\UserOpinion\Model\UserOpinionRepository $_userOpinionRepository,
        \Psr\Log\LoggerInterface $_logger
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_request = $_request;
        $this->_redirectFactory = $_redirectFactory;
        $this->_userOpinionFactory = $_userOpinionFactory;
        $this->_messageManager = $_messageManager;
        $this->_userOpinionRepository = $_userOpinionRepository;
        $this->_logger = $_logger;
    }

    /**
     * View page action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /**
         * @var \Bootcamp\UserOpinion\Model\UserOpinion $useropinion
         */
        $useropinion = $this->_userOpinionFactory->create();
        $useropinion->setSku($this->_request->getParam('sku'));
        $useropinion->setUser_email($this->_request->getParam('user_email'));
        $useropinion->setPuntuacion($this->_request->getParam('puntuacion'));
        $useropinion->setOpinion($this->_request->getParam('opinion'));
        try {
            $this->_userOpinionRepository->save($useropinion);
            $this->_messageManager->addSuccessMessage(__("UserOpinion guardada exitosamente"));
        } catch (LocalizedException $e) {
            $this->_messageManager->addErrorMessage(__("Ha ocurrido un error guardando la UserOpinion"));
            $this->_logger->critical($e->getMessage());
        }
        $resultRedirect = $this->_redirectFactory->create();
        return $resultRedirect->setPath('useropinion/index/index');
    }
}
>>>>>>> 0076efc0cb4a3cc2adda505b9857017ff428095e
