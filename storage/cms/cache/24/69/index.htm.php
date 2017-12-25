<?php 
class Cms5a3a1df123632473210192_cb10ff01692f56c9a650000435cd3c29Class extends \Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
     return Redirect::to($this->pageUrl('404'));
    }
}
}
