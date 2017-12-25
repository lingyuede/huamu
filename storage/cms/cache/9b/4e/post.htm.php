<?php 
class Cms5a3a06481047d867568532_0792f2b0dc97c9e02cafb359433b4e76Class extends \Cms\Classes\PageCode
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
