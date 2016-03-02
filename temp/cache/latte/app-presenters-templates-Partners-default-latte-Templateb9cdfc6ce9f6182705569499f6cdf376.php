<?php
// source: C:\Apache24\htdocs\company\app\presenters/templates/Partners/default.latte

class Templateb9cdfc6ce9f6182705569499f6cdf376 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('d17c00f730', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb54c7a7b009_content')) { function _lb54c7a7b009_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <div class="row">
<?php $_b->templates['d17c00f730']->renderChildTemplate('../../../forms/Form.latte', $template->getParameters()) ?>
    </div>
        
<?php if ($finStat) { ?>    <div class="row"> 
        <table class="table table-bordered">
            <th>Meno</th>
            <th>Podiel</th>
            <th>Suma</th>
<?php $iterations = 0; foreach ($banknotes as $banknote) { ?>
                <th><?php echo Latte\Runtime\Filters::escapeHtml($banknote->tag, ENT_NOQUOTES) ?></th>
<?php $iterations++; } $iterations = 0; foreach ($iterator = $_l->its[] = new Latte\Runtime\CachingIterator($finStat) as $partner) { ?>
                <tr>
                    <td><?php echo Latte\Runtime\Filters::escapeHtml($partner['name'], ENT_NOQUOTES) ?></td>
                    <td><?php echo Latte\Runtime\Filters::escapeHtml($partner['count'], ENT_NOQUOTES) ?>
/<?php echo Latte\Runtime\Filters::escapeHtml($partner['part'], ENT_NOQUOTES) ?></td>
                    <td><?php echo Latte\Runtime\Filters::escapeHtml($partner['sum'], ENT_NOQUOTES) ?> €</td>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Latte\Runtime\CachingIterator($partner['banknotes']) as $useBanknote) { ?>
                        <td><?php echo Latte\Runtime\Filters::escapeHtml($useBanknote[$iterator->getCounter()], ENT_NOQUOTES) ?></td>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
                </tr>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
        </table>    
    </div>
<?php } 
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
?>
     
<?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}