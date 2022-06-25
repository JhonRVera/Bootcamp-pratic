<?php
namespace Bootcamp\Mascotas\Controller\Index;

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
     * @param \Bootcamp\Mascotas\Model\MascotasFactory
     */
    private $_mascotasFactory;

    /**
     * @param \Magento\Framework\Message\ManagerInterface
     */
    private $_messageManager;

    /**
     * @param \Bootcamp\Mascotas\Model\MascotasRepository
     */
    private $_mascotasRepository;

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
        \Bootcamp\Mascotas\Api\Data\MascotasInterfaceFactory $_mascotasFactory,   
        \Magento\Framework\Message\ManagerInterface $_messageManager,
        \Bootcamp\Mascotas\Api\MascotasRepositoryInterface $_mascotasRepository,
        \Psr\Log\LoggerInterface $_logger
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_request = $_request;
        $this->_redirectFactory = $_redirectFactory;
        $this->_mascotasFactory = $_mascotasFactory; 
        $this->_messageManager = $_messageManager;
        $this->_mascotasRepository = $_mascotasRepository;
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
         * @var \Bootcamp\Mascotas\Model\Mascotas $mascota
         */
        $mascota = $this->_mascotasFactory->create();
        $mascota->setNombre($this->_request->getParam('nombre'));
        $mascota->setEspecie($this->_request->getParam('especie'));
        $mascota->setRaza($this->_request->getParam('raza'));
        $mascota->setEdad($this->_request->getParam('edad'));
        try {
            $this->_mascotasRepository->save($mascota);
            $this->_messageManager->addSuccessMessage(__("Mascota guardada exitosamente"));
        } catch (LocalizedException $e) {
            $this->_messageManager->addErrorMessage(__("Ha ocurrido un error guardando la mascota"));
            $this->_logger->critical($e->getMessage());
        }
        $resultRedirect = $this->_redirectFactory->create();
        return $resultRedirect->setPath('mascotas/index/index');
    }
}
