<<<<<<< HEAD
<?php
namespace Omnipro\RetoOmni\Controller\Index;

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
     * @param \Omnipro\RetoOmni\Model\RetoOmniFactory
     */
    private $_retoOmniFactory;

    /**
     * @param \Magento\Framework\Message\ManagerInterface
     */
    private $_messageManager;

    /**
     * @param \Omnipro\RetoOmni\Model\RetoOmniRepository
     */
    private $_retoOmniRepository;

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
        \Omnipro\RetoOmni\Model\RetoOmniFactory $_retoOmniFactory,
        \Magento\Framework\Message\ManagerInterface $_messageManager,
        \Omnipro\RetoOmni\Model\RetoOmniRepository $_retoOmniRepository,
        \Psr\Log\LoggerInterface $_logger
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_request = $_request;
        $this->_redirectFactory = $_redirectFactory;
        $this->_retoOmniFactory = $_retoOmniFactory;
        $this->_messageManager = $_messageManager;
        $this->_retoOmniRepository = $_retoOmniRepository;
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
         * @var \Omnipro\RetoOmni\Model\RetoOmni $retoomni
         */
        $retoomni = $this->_retoOmniFactory->create();
        $retoomni->setTitulo($this->_request->getParam('titulo'));
        $retoomni->setStatus($this->_request->getParam('status'));
        $retoomni->setContenido($this->_request->getParam('contenido'));
        $retoomni->setCategoria($this->_request->getParam('categoria'));
        try {
            $this->_retoOmniRepository->save($retoomni);
            $this->_messageManager->addSuccessMessage(__("Blog guardada exitosamente"));
        } catch (LocalizedException $e) {
            $this->_messageManager->addErrorMessage(__("Ha ocurrido un error guardando la Blog"));
            $this->_logger->critical($e->getMessage());
        }
        $resultRedirect = $this->_redirectFactory->create();
        return $resultRedirect->setPath('retoomni/index/index');
    }
}
=======
<?php
namespace Omnipro\RetoOmni\Controller\Index;

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
     * @param \Omnipro\RetoOmni\Model\RetoOmniFactory
     */
    private $_retoOmniFactory;

    /**
     * @param \Magento\Framework\Message\ManagerInterface
     */
    private $_messageManager;

    /**
     * @param \Omnipro\RetoOmni\Model\RetoOmniRepository
     */
    private $_retoOmniRepository;

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
        \Omnipro\RetoOmni\Model\RetoOmniFactory $_retoOmniFactory,
        \Magento\Framework\Message\ManagerInterface $_messageManager,
        \Omnipro\RetoOmni\Model\RetoOmniRepository $_retoOmniRepository,
        \Psr\Log\LoggerInterface $_logger
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_request = $_request;
        $this->_redirectFactory = $_redirectFactory;
        $this->_retoOmniFactory = $_retoOmniFactory;
        $this->_messageManager = $_messageManager;
        $this->_retoOmniRepository = $_retoOmniRepository;
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
         * @var \Omnipro\RetoOmni\Model\RetoOmni $retoomni
         */
        $retoomni = $this->_retoOmniFactory->create();
        $retoomni->setTitulo($this->_request->getParam('titulo'));
        $retoomni->setStatus($this->_request->getParam('status'));
        $retoomni->setContenido($this->_request->getParam('contenido'));
        $retoomni->setCategoria($this->_request->getParam('categoria'));
        try {
            $this->_retoOmniRepository->save($retoomni);
            $this->_messageManager->addSuccessMessage(__("Blog guardada exitosamente"));
        } catch (LocalizedException $e) {
            $this->_messageManager->addErrorMessage(__("Ha ocurrido un error guardando la Blog"));
            $this->_logger->critical($e->getMessage());
        }
        $resultRedirect = $this->_redirectFactory->create();
        return $resultRedirect->setPath('retoomni/index/index');
    }
}
>>>>>>> 0076efc0cb4a3cc2adda505b9857017ff428095e
