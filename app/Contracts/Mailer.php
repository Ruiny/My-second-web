<?php
/**
 * Created by PhpStorm.
 * User: zeno
 * Date: 15/11/11
 * Time: 上午8:25
 */
namespace App\Contracts;

interface Mailer {

    function send($append);

    function receive($append);

}