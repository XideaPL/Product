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
    public function getId();
    
    /**
     * Sets the sku.
     *
     * @param string $sku
     */
    public function setSku($sku);
    
    /**
     * Returns the sku.
     *
     * @return string
     */
    public function getSku();

    /**
     * Sets the name.
     *
     * @param string $name
     */
    public function setName($name);
    
    /**
     * Returns the name.
     *
     * @return string
     */
    public function getName();

    /**
     * Sets the description.
     *
     * @param string $description
     */
    public function setDescription($description);
    
    /**
     * Returns the description.
     *
     * @return string
     */
    public function getDescription();
    
    /**
     * Sets the author.
     * 
     * @param AuthorInterface $author
     */
    public function setAuthor(AuthorInterface $author);

    /**
     * Returns the author.
     *
     * @return AuthorInterface
     */
    public function getAuthor();
    
    /**
     * Sets the manufacturer.
     * 
     * @param ManufacturerInterface $manufacturer
     */
    public function setManufacturer(ManufacturerInterface $manufacturer);

    /**
     * Returns the manufacturer.
     *
     * @return ManufacturerInterface
     */
    public function getManufacturer();

    /**
     * @param datetime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt = null);

    /**
     * @return datetime
     */
    public function getCreatedAt();

    /**
     * @param datetime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt = null);

    /**
     * @return datetime
     */
    public function getUpdatedAt();
}
