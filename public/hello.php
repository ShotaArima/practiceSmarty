<?php

// Smartyクラスを呼び込む
require_once("../vendor/autoload.php");

// Smartyのインスタンスを生成
$smarty = new Smarty();

// テンプレートディレクトリとコンパイルディレクトリを読み込む
$smarty->template_dir = "../smarty/templates";
$smarty->compile_dir = "../smarty/templates_c";

// assignメソッドを使用し、テンプレートに値を渡す
$smarty->assign("name", "World");

// テンプレートを表示する
$smarty->display("hello.tpl");
