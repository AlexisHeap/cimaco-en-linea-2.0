<?php declare(strict_types=1);

namespace Heapmodule\Blog\Model\ResourceModel\Post;

use Heapmodule\Blog\Model\Post;
use Heapmodule\Blog\Model\ResourceModel\Post as PostResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

Class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Post::class, PostResourceModel::class);
    }
}
