<?php 
class Cms5a3a0f99029c4182011666_1e7254a44a4eba023394d0cd97e9acaeClass extends \Cms\Classes\PageCode
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
