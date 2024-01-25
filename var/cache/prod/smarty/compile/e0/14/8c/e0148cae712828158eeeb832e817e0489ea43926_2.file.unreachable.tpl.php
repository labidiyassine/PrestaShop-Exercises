<?php
/* Smarty version 3.1.33, created on 2024-01-24 20:15:03
  from 'C:\xampp\htdocs\exercice\themes\classic\templates\checkout\_partials\steps\unreachable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_65b161b7cdcf44_37020045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0148cae712828158eeeb832e817e0489ea43926' => 
    array (
      0 => 'C:\\xampp\\htdocs\\exercice\\themes\\classic\\templates\\checkout\\_partials\\steps\\unreachable.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b161b7cdcf44_37020045 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35395671565b161b7cdc356_59123521', 'step');
?>

<?php }
/* {block 'step'} */
class Block_35395671565b161b7cdc356_59123521 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_35395671565b161b7cdc356_59123521',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>
<?php
}
}
/* {/block 'step'} */
}
