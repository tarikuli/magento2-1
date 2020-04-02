<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Born\VendorGrid\Model;
use Born\VendorGrid\Api\Data\GridInterface;


/**
 * Description of Grid
 *
 * @author musman-intern
 */
class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
 /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'born_vencor_tbl';

    /**
     * @var string
     */
    protected $_cacheTag = 'born_vencor_tbl';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'born_vencor_tbl';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Born\VendorGrid\Model\ResourceModel\Grid');
    }
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * Set EntityId.
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * Get Position.
     *
     * @return varchar
     */
    public function getPosition()
    {
        return $this->getData(self::POSITION);
    }

    /**
     * Set Position.
     */
    public function setPostion($position)
    {
        return $this->setData(self::POSITION, $position);
    }

    /**
     * Get VendorName.
     *
     * @return varchar
     */
    public function getVendorName()
    {
        return $this->getData(self::VENDOR_NAME);
    }

    /**
     * Set VendorName
     */
    public function setVendorName($vendorName)
    {
        return $this->setData(self::VENDOR_NAME, $vendorName);
    }

    /**
     * Get VendorAddress
     *
     * @return varchar
     */
    public function getVendorAddress()
    {
        return $this->getData(self::VENDOR_ADDRESS);
    }

    /**
     * Set VendorAddress.
     */
    public function setVendorAddress($vendorAddress)
    {
        return $this->setData(self::VENDOR_ADDRESS, $vendorAddress);
    }


    /**
     * Get getCode.
     *
     * @return varchar
     */
    public function getCode()
    {
        return $this->getData(self::CODE);
    }
    /**
     * Set Code.
     */
    public function setCode($code)
    {
        return $this->setData(self::CODE, $code);
    }
    /**
     * Get PublishDate.
     *
     * @return varchar
     */
    public function getPublishDate()
    {
        return $this->getData(self::PUBLISH_DATE);
    }

    /**
     * Set PublishDate.
     */
    public function setPublishDate($publishDate)
    {
        return $this->setData(self::PUBLISH_DATE, $publishDate);
    }

    /**
     * Get IsActive.
     *
     * @return varchar
     */
    public function getIsActive()
    {
        return $this->getData(self::IS_ACTIVE);
    }

    /**
     * Set IsActive.
     */
    public function setIsActive($isActive)
    {
        return $this->setData(self::IS_ACTIVE, $isActive);
    }

    /**
     * Get PurchaseStatus.
     *
     * @return varchar
     */
    public function getPurchaseStatus()
    {
        return $this->getData(self::PURCHASE_STATUS);
    }

    /**
     * Set PurchaseStatus.
     */
    public function setPurchaseStatus($purchaseStatus)
    {
        return $this->setData(self::PURCHASE_STATUS, $purchaseStatus);
    }


    /**
     * Get UpdateTime.
     *
     * @return varchar
     */
    public function getUpdateTime()
    {
        return $this->getData(self::UPDATE_TIME);
    }

    /**
     * Set UpdateTime.
     */
    public function setUpdateTime($updateTime)
    {
        return $this->setData(self::UPDATE_TIME, $updateTime);
    }

    /**
     * Get CreatedAt.
     *
     * @return varchar
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Set CreatedAt.
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    public function setPosition($position) {
        
    }

}