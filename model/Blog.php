<?php


namespace model;
class Blog
{
    private $id;
    private $title;
    private $teaser;
    private $content;
    private $createa;

    public function __construct($title, $teaser, $content, $createa)
    {
        $this->title = $title;
        $this->teaser = $teaser;
        $this->content = $content;
        $this->created = $createa;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCreatea()
    {
        return $this->createa;
    }

    /**
     * @return mixed
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}