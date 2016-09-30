<?php

namespace Rhubarb\Leaf\TwitterFeed;

use Rhubarb\Leaf\Leaves\Leaf;

class TwitterFeed extends Leaf
{
    /**
    * @var TwitterFeedModel
    */
    protected $model;
    
    protected function getViewClass()
    {
        return TwitterFeedView::class;
    }
    
    protected function createModel()
    {
        $model = new TwitterFeedModel();
        return $model;
    }

    public function setLinkColor($linkColor)
    {
        $this->model->linkColor = $linkColor;
    }

    public function setHeight($height){
        $this->model->height = $height;
    }

    public function setWidth($width){
        $this->model->width = $width;
    }

    public function __construct($name, $userName)
    {
        parent::__construct($name);
        $this->model->username = $userName;
    }
}