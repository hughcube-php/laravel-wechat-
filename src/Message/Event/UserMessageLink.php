<?php
/**
 * Created by PhpStorm.
 * User: hugh.li
 * Date: 2022/2/24
 * Time: 17:35
 */

namespace HughCube\Laravel\WeChat\Message\Event;

use HughCube\Laravel\WeChat\Contracts\Message\Event\UserMessageLink as Contract;
use HughCube\PUrl\Url;

class UserMessageLink extends Event implements Contract
{
    public function getTitle(): ?string
    {
        return $this->getMessage('Title');
    }

    public function getDescription(): ?string
    {
        return $this->getMessage('Description');
    }

    public function getUrl(): ?Url
    {
        return Url::parse($this->getMessage('Url'));
    }
}
