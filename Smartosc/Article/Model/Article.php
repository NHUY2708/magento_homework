<?php

namespace Smartosc\Article\Model;

use Magento\Framework\Model\AbstractModel;
use Smartosc\Article\Api\Data\ArticleInterface;

class Article extends AbstractModel implements ArticleInterface
{
    const TITLE = 'title';
    const CONTENT = 'content';
    const CREATETION_TIME = 'createtion_time';
    const UPDATE_TIME = 'update_time';
    const IMAGE = 'image';
    const IS_ACTIVE = 'is_active';

    protected function _construct()
    {
        $this->_init(ResourceModel\DataArticle::class);
    }
    /**
     * Get title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->_getData(self::TITLE);
    }

    /**
     * Get content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->_getData(self::CONTENT);
    }

    /**
     * Get image
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->_getData(self::GET_IMAGE);
    }

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime()
    {
        return $this->_getData(self::CREATETION_TIME);
    }

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->_getData(self::UPDATE_TIME);
    }

    /**
     * Is active
     *
     * @return bool|null
     */
    public function isActive()
    {
        return $this->_getData(self::IS_ACTIVE);
    }

    /**
     * Set title
     *
     * @param string $title
     * @return ArticleInterface
     */
    public function setTitle($title)
    {
        $this->setData(self::TITLE, $title);
    }

    /**
     * Set content
     *
     * @param string $content
     * @return ArticleInterface
     */
    public function setContent($content)
    {
        $this->setData(self::CONTENT, $content);
    }

    /**
     * Set content
     *
     * @param string $image
     * @return ArticleInterface
     */
    public function setImage($image)
    {
        $this->setData(self::IMAGE, $image);
    }

    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return ArticleInterface
     */
    public function setCreationTime($creationTime)
    {
        $this->setData(self::CREATETION_TIME, $creationTime);
    }

    /**
     * Set update time
     *
     * @param string $updateTime
     * @return ArticleInterface
     */
    public function setUpdateTime($updateTime)
    {
        $this->setData(self::UPDATE_TIME, $updateTime);
    }

    /**
     * Set is active
     *
     * @param bool|int $isActive
     * @return ArticleInterface
     */
    public function setIsActive($isActive)
    {
        $this->setData(self::ISACTIVE, $isActive);
    }
}
