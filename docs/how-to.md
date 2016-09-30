# Module.Twitter-Timeline

# Instalation 

Add the following to the require part of your `composer.json`

```
"jamesanderson9182/rhubarb-leaf-twitter-timeline" : "dev-master"
```
Then `composer update`
If that doesn't work try `composer update --ignore-platform-reqs`
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