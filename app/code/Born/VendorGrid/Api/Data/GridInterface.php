<?php

namespace Born\VendorGrid\Api\Data;

interface GridInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const ENTITY_ID = 'entity_id';
    const POSITION = 'position';
    const VENDOR_NAME = 'vendor_name';
    const VENDOR_ADDRESS = 'vendor_address';
    const PURCHASE_STATUS = 'purchase_status';
    const CODE = 'code';
    const PUBLISH_DATE = 'publish_date';
    const IS_ACTIVE = 'is_active';
    const UPDATE_TIME = 'update_time';
    const CREATED_AT = 'created_at';

   /**
    * Get EntityId.
    *
    * @return int
    */
    public function getEntityId();

   /**
    * Set EntityId.
    */
    public function setEntityId($entityId);

   /**
    * Get Title.
    *
    * @return varchar
    */
    public function getPosition();

   /**
    * Set Title.
    */
    public function setPosition($position);

    /**
     * Get VendorName.
     *
     * @return varchar
     */
    public function getVendorName();

    /**
     * Set VendorName.
     */
    public function setVendorName($vendorName);

    /**
     * Get VendorAddress.
     *
     * @return varchar
     */
    public function getVendorAddress();

    /**
     * Set VendorAddress.
     */
    public function setVendorAddress($vendorAddress);

    /**
    * Get Content.
    *
    * @return varchar
    */
    public function getCode();

   /**
    * Set Content.
    */
    public function setCode($code);
   /**
    * Get Publish Date.
    *
    * @return varchar
    */
    public function getPublishDate();

   /**
    * Set PublishDate.
    */
    public function setPublishDate($publishDate);

   /**
    * Get IsActive.
    *
    * @return varchar
    */
    public function getIsActive();

   /**
    * Set IsActive.
    */
    public function setIsActive($isActive);


    /**
     * Get Purchase Status.
     *
     * @return varchar
     */
    public function getPurchaseStatus();

    /**
     * Set Purchase Status.
     */
    public function setPurchaseStatus($purchaseStatus);


    /**
    * Get UpdateTime.
    *
    * @return varchar
    */
    public function getUpdateTime();

   /**
    * Set UpdateTime.
    */
    public function setUpdateTime($updateTime);

   /**
    * Get CreatedAt.
    *
    * @return varchar
    */
    public function getCreatedAt();

   /**
    * Set CreatedAt.
    */
    public function setCreatedAt($createdAt);
}
