<?php
/**
 * CakePHPの学習用コントロールクラス
 *
 * @category Camp
 * @package  Controller
 * @author   tiichat <tiichat@gmail.com>
 * @license  MIT License
 * @link     https://github.com/tiichat/Cake3Camp
 */
namespace App\Controller;

/**
 * CakePHPの学習用コントロールクラス
 *
 * @category Camp
 * @package  Controller
 * @author   tiichat <tiichat@gmail.com>
 * @license  MIT License
 * @link     https://github.com/tiichat/Cake3Camp
 */
class HelloController extends AppController
{

    /**
     * 初期化
     *
     * @return null
     */
    public function initialize()
    {
        $this->name = 'Hello';
        $this->viewBuilder()->autoLayout(true);
        $this->viewBuilder()->Layout('Hello');
    }

    /**
     * /hello を処理
     *
     * @return void
     */
    public function index()
    {
    }

    /**
     * /hello/other を処理
     *
     * @return void
     */
    public function other()
    {
        $this->viewBuilder()->autoLayout(false);
    }
}
