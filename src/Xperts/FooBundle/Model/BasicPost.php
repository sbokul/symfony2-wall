<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 8/4/12
 * Time: 1:22 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Xperts\FooBundle\Model;

class BasicPost
{
   /**
     *
     * @var string
     */
    private $author;

    /**
     * @var string;
     */
    private $message;

    public function __construct($author, $message)
    {

        $this->author = $author;
        $this->message = $message;

    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getAuthor()
    {
        return $this->author;
    }
}