<?php
/**
 * Created by PhpStorm.
 * User: clinton
 * Date: 9/5/18
 * Time: 10:11 AM
 */
namespace Mageplaza\HelloWorld\Block;
use Magento\Framework\View\Element\Template;

class Display extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }

    public function sayhello()
    {
        return __('Hello World');
    }
}