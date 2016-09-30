# Module.Twitter-Timeline

# Instalation 

```
composer require rhubarbphp/module-twitter-timeline
```

# Usage

```
<?php
use Rhubarb\Leaf\Views\View;

namespace Your\WebApp\Leaves;

class IndexView extends View
{
    protected function createSubLeaves()
        {
            parent::createSubLeaves();
            $this->registerSubLeaf(
              $twitter = new TwitterFeed("Twitter", "yourTwitterUsernameHere")
            );
            
            //Optional Settings
            $twitter->setLinkColor("#19CF86");
            $twitter->setHeight("250px");
            $twitter->setWidth("250px");
        }
        
        protected function printViewContent()
        {
            parent::printViewContent();
            print $this->leaves["Twitter"];
        }
}   
```