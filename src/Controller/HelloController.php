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
        $this->set('msg', 'Hello/index');
        $this->set('footer', 'Hello\footer2');
    }

    /**
     * CAKE3APP プロジェクトの HelloController なので、
     *   localhost:8765/hello  -> bin\cake server時
     *   http://cake3app/hello  -> apacheにデプロイ時
     * にリクエストを投げると、当メソッドが呼び出される。
     *
     * $autoLayout が trueの場合、レイアウトにフォワードする。
     * initialize()で Layout('Hello') を指定しているので、
     * hello.ctp がレイアウトとして使用される。
     * Layoutを設定しない場合、default.ctp が使用される。
     *
     * @return void
     */
    public function index()
    {
        $this->set('msg', 'ヘッダエレメント');
        $n = rand(1, 2);
        $this->set('footer', 'Hello\footer' . $n);
    }

    /**
     * フォームの値を受け取り、次画面に情報を引き渡すサンプル
     *
     * @return void
     */
    public function sendForm()
    {
        $str = $this->request->query['text1'];
        $result = "";
        if ($str != "") {
            $result = "you type: " . $str;
        } else {
            $result = "empty.";
        }
        $this->set("result", h($result));
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
