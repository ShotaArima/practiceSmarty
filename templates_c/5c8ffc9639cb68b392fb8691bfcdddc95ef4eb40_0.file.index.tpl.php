<?php
/* Smarty version 3.1.46, created on 2024-11-18 14:02:19
  from '/Users/shota.arima/practice/smarty/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_673aca5b3aa613_22567611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c8ffc9639cb68b392fb8691bfcdddc95ef4eb40' => 
    array (
      0 => '/Users/shota.arima/practice/smarty/index.tpl',
      1 => 1731905700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673aca5b3aa613_22567611 (Smarty_Internal_Template $_smarty_tpl) {
?>
<dl>
    <dt> 現在のタイムスタンプ
    <dd> <?php echo time();?>


    <dt> 現在処理中のテンプレートファイル名
    <dd> <?php echo basename($_smarty_tpl->source->filepath);?>


    <dt> このテンプレートをコンパイルしたSmartyバージョン
    <dd> <?php echo Smarty::SMARTY_VERSION;?>

</dl>

<p> <?php echo $_smarty_tpl->tpl_vars['hello']->value;?>


<p> <?php echo $_smarty_tpl->tpl_vars['today']->value->format('Y-m-d (D)');?>


<ul>
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['animal']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_start = $__section_i_0_loop - 1;
$__section_i_0_total = min(($__section_i_0_start+ 1), $__section_i_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = $__section_i_0_start; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] -= 1){
?>
    <li> <?php echo $_smarty_tpl->tpl_vars['animal']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>

    <?php
}
}
?>
</ul>

<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['address']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
<ul>
    <li> name: <?php echo $_smarty_tpl->tpl_vars['address']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>

    <li> home: <?php echo $_smarty_tpl->tpl_vars['address']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['home'];?>

    <li> call: <?php echo $_smarty_tpl->tpl_vars['address']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['call'];?>

    <li> e-mail: <?php echo $_smarty_tpl->tpl_vars['address']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['e']-'mail';?>

</ul>
<?php
}
}
?>

<?php }
}
