<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Product\Model;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface ProductInterface
{
    /**
     * Returns the id.
     * 
     * @return string The id
     */
    function getId();
    
    /**
     * Sets the sku.
     *
     * @param string $sku
     */
    function setSku($sku);
    
    /**
     * Returns the sku.
     *
     * @return string
     */
    function getSku();

    /**
     * Sets the name.
     *
     * @param string $name
     */
    function setName($name);
    
    /**
     * Returns the name.
     *
     * @return string
     */
    function getName();

    /**
     * Sets the description.
     *
     * @param string $description
     */
    function setDescription($description);
    
    /**
     * Returns the description.
     *
     * @return string
     */
    function getDescription();
    
    /**
     * Sets the manufacturer.
     * 
     * @param ManufacturerInterface $manufacturer
     */
    function setManufacturer(ManufacturerInterface $manufacturer);

    /**
     * Returns the manufacturer.
     *
     * @return ManufacturerInterface
     */
    function getManufacturer();

    /**
     * @param datetime $createdAt
     */
    function setCreatedAt(\DateTime $createdAt = null);

    /**
     * @return datetime
     */
    function getCreatedAt();

    /**
     * @param datetime $updatedAt
     */
    function setUpdatedAt(\DateTime $updatedAt = null);

    /**
     * @return datetime
     */
    function getUpdatedAt();
}
