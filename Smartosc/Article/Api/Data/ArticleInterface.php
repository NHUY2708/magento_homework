<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Smartosc\Article\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

/**
 * CMS block interface.
 * @api
 * @since 100.0.2
 */
interface ArticleInterface extends ExtensibleDataInterface
{
    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get title
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Get content
     *
     * @return string|null
     */
    public function getContent();

    /**
     * Get image
     *
     * @return string|null
     */
    public function getImage();

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime();

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime();

    /**
     * Is active
     *
     * @return bool|null
     */
    public function isActive();

    /**
     * Set ID
     *
     * @param int $id
     * @return ArticleInterface
     */
    public function setId($id);

    /**
     * Set title
     *
     * @param string $title
     * @return ArticleInterface
     */
    public function setTitle($title);

    /**
     * Set content
     *
     * @param string $content
     * @return ArticleInterface
     */
    public function setContent($content);

    /**
     * Set content
     *
     * @param string $image
     * @return ArticleInterface
     */
    public function setImage($image);

    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return ArticleInterface
     */
    public function setCreationTime($creationTime);

    /**
     * Set update time
     *
     * @param string $updateTime
     * @return ArticleInterface
     */
    public function setUpdateTime($updateTime);

    /**
     * Set is active
     *
     * @param bool|int $isActive
     * @return ArticleInterface
     */
    public function setIsActive($isActive);
}