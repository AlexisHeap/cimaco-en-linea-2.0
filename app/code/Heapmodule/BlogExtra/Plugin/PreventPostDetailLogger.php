<?php declare(strict_types=1);

namespace Heapmodule\BlogExtra\Plugin;

use Heapmodule\Blog\Observer\LogPostDetailView;

class PreventPostDetailLogger
{
    public function aroundExecute(
        LogPostDetailView $subject,
        callable $proceed,
    ){

    }
}
