{*
    これはコメントです。
    別ファイルで定義したヘッダを読み込み
    このページのタイトルを定数で指定
*}

{* 予約変数 *}
<dl>
    <dt> 現在のタイムスタンプ
    <dd> {$smarty.now}

    <dt> 現在処理中のテンプレートファイル名
    <dd> {$smarty.template}

    <dt> このテンプレートをコンパイルしたSmartyバージョン
    <dd> {$smarty.version}
</dl>

{*変数*}
<p> {$hello}

{*メソッド*}
<p> {$today -> format('Y-m-d (D)')}

<ul>
    {*配列 $animal のすべての値を逆順に表示*}
    {section name=i loop=$animal step=-1}
    <li> {$animal[i]}
    {/section}
</ul>

{*連想配列　$address の内容をループ*}
{section name=i loop=$address}
<ul>
    <li> name: {$address[i].name}
    <li> home: {$address[i].home}
    <li> call: {$address[i].call}
    <li> e-mail: {$address[i].e-mail}
</ul>
{/section}

{*テンプレートのインクルード*}
