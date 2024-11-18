# practiceSmarty

## 参考文献
- [MacでSmartyを試す](https://qiita.com/B73W56H84/items/e78ce37ca38839d914d2)
  - `composer`を使用してインストールする
  - 以下のコマンドにより、サーバを立てることができる
  - `public`ディレクトリで実行すること
  ```bash
    php -S localhost:8001    
  ```
- [これだけは知っておきたい! Smartyの使い方](https://qiita.com/sano1202/items/1f49f407f310f2e493ff)
  - ディレクトリ構造について書かれている
  - 上記のpublicディレクトリで仮想環境をビルドするコマンドをうつ
  - templatesディレクトリは、.tplファイルが集まっている

## Smartyとは
- PHPのテンプレートエンジン
- PHPの中にロジックとHTMLを混ぜて書くこともできるが、これを分離することが目的
