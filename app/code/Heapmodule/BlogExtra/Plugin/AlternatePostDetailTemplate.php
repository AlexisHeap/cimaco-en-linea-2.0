<?php declare(strict_types=1);

namespace Heapmodule\BlogExtra\Plugin;

use Heapmodule\Blog\Controller\Post\Detail;
use Magento\Framework\App\RequestInterface;

class AlternatePostDetailTemplate
{
    public function __construct(
        private RequestInterface $request,
    ) {}

    public function afterExecute(
        Detail $subject,
               $result,
    ) {
        if ($this->request->getParam('alternate')) {
            $result->getLayout()
                ->getBlock('blog.post.detail')
                ->setTemplate('Heapmodule_BlogExtra::post/detail.phtml');
        }

        return $result;
    }
}
