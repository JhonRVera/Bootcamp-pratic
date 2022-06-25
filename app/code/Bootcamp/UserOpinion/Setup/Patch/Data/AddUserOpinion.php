<?php
namespace Bootcamp\UserOpinion\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class AddUserOpinion implements DataPatchInterface
{
     /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * @var \Bootcamp\UserOpinion\Api\Data\UserOpinionInterfaceFactory
     */
    private $_userOpinionInterfaceFactory;

    /**
     * @var \Bootcamp\UserOpinion\Model\UserOpinionRepository
     */
    private $_userOpinionRepository;

    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        \Bootcamp\UserOpinion\Api\Data\UserOpinionInterfaceFactory $_userOpinionInterfaceFactory,
        \Bootcamp\UserOpinion\Model\UserOpinionRepository $_userOpinionRepository
    )
    {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->_userOpinionInterfaceFactory = $_userOpinionInterfaceFactory;
        $this->_userOpinionRepository = $_userOpinionRepository;
    }

    /**
     * @inheritdoc
     */
    public function apply()
    {
        $this->moduleDataSetup->getConnection()->startSetup();

        $sampleData = [
            [
                'sku' => '1a2b3c',
                'user_email' => 'sebasa@gmail.com',
                'puntuacion' => '3',
                'opinion' => 'Buenisimo'
            ],
            [
                'sku' => '1a2b3c',
                'user_email' => 'sebasa@omni.pro',
                'puntuacion' => '3',
                'opinion' => 'Buen producto'
            ],
            [
                'sku' => '1a2b3c',
                'user_email' => 'hola@gmail.com',
                'puntuacion' => '3',
                'opinion' => 'Podria mejorar'
            ]
        ];
        foreach ($sampleData as $userOpinion){
            $opinion = $this->_userOpinionInterfaceFactory->create()->setData($userOpinion);
            $this->_userOpinionRepository->save($opinion);
        }
        $this->moduleDataSetup->getConnection()->endSetup();
    }

    /**
     * @inheritdoc
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function getAliases()
    {
        return [];
    }
}