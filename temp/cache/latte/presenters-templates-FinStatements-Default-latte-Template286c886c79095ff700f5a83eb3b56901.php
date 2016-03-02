<?php
// source: C:\Apache24\htdocs\company\app\presenters/templates/FinStatements/Default.latte

class Template286c886c79095ff700f5a83eb3b56901 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('84724448bb', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbf35c960cbb_content')) { function _lbf35c960cbb_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <div class="row">
<?php $_b->templates['84724448bb']->renderChildTemplate('../../../forms/Form.latte', $template->getParameters()) ?>
    </div>
    
<?php if ($finStat) { ?>    <div class="row"> 
        
        <p>
            <small>
                Vygenerované : <?php echo Latte\Runtime\Filters::escapeHtml($template->date($finStat->getTimeStamp(), 'd.m.Y, H:i'), ENT_NOQUOTES) ?>

            </small>
        </p>
    
    <div class="row"> 
        <table class="table table-bordered">
            <th>Meno</th>
            <th>Podiel</th>
            <th>Suma</th>
<?php if ($finStat->getBanknotes()) { $iterations = 0; foreach ($banknotes as $banknote) { ?>
                    <th><?php echo Latte\Runtime\Filters::escapeHtml($banknote->tag, ENT_NOQUOTES) ?></th>
<?php $iterations++; } } $iterations = 0; foreach ($iterator = $_l->its[] = new Latte\Runtime\CachingIterator($finStat->getPartners()) as $id => $partner) { ?>
                <tr>
                    <td><?php echo Latte\Runtime\Filters::escapeHtml($partner->name, ENT_NOQUOTES) ?></td>
                    <td><?php echo Latte\Runtime\Filters::escapeHtml($partner->count, ENT_NOQUOTES) ?>
/<?php echo Latte\Runtime\Filters::escapeHtml($partner->part, ENT_NOQUOTES) ?></td>
                    <td><?php echo Latte\Runtime\Filters::escapeHtml($finStat->getParts()[$id], ENT_NOQUOTES) ?> €</td> 
<?php if ($finStat->getBanknotes()) { $usesBanknotes = $finStat->getBanknotes()[$id] ;$iterations = 0; foreach ($iterator = $_l->its[] = new Latte\Runtime\CachingIterator($usesBanknotes) as $useBanknote) { ?>
                            <td><?php echo Latte\Runtime\Filters::escapeHtml($useBanknote[$iterator->getCounter()], ENT_NOQUOTES) ?></td>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ;} ?>
                </tr>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
        </table>    
    </div>
        
        
<?php if ($finStat->getBanknotes()) { ?>    <div class="row"> 
<?php $checkSum = $finStat->getChecksum() ?>
        <table class="table table-bordered">
            <th>Bankovky</th>
<?php $iterations = 0; foreach ($checkSum['banknote'] as $id => $value) { ?>
                <th><?php echo Latte\Runtime\Filters::escapeHtml($banknotes[$id]->tag, ENT_NOQUOTES) ?></th>
<?php $iterations++; } ?>
            <tr>
                <td>Počet (ks)</td>
<?php $iterations = 0; foreach ($checkSum['banknote'] as $value) { ?>
                    <td><?php echo Latte\Runtime\Filters::escapeHtml($value['count'], ENT_NOQUOTES) ?></td>
<?php $iterations++; } ?>
            </tr>
            <tr>
                <td>Suma (€)</td>
<?php $iterations = 0; foreach ($checkSum['banknote'] as $value) { ?>
                    <td><?php echo Latte\Runtime\Filters::escapeHtml($value['value'], ENT_NOQUOTES) ?></td>
<?php $iterations++; } ?>
            </tr>
        </table>
            
        <table class="table table-bordered">
            <th>Mince</th>
<?php $iterations = 0; foreach ($checkSum['coin'] as $id => $value) { ?>
                <th><?php echo Latte\Runtime\Filters::escapeHtml($banknotes[$id]->tag, ENT_NOQUOTES) ?></th>
<?php $iterations++; } ?>
            <tr>
                <td>Počet (ks)</td>
<?php $iterations = 0; foreach ($checkSum['coin'] as $value) { ?>
                    <td><?php echo Latte\Runtime\Filters::escapeHtml($value['count'], ENT_NOQUOTES) ?></td>
<?php $iterations++; } ?>
            </tr>
            <tr>
                <td>Suma (€)</td>
<?php $iterations = 0; foreach ($checkSum['coin'] as $value) { ?>
                    <td><?php echo Latte\Runtime\Filters::escapeHtml($value['value'], ENT_NOQUOTES) ?></td>
<?php $iterations++; } ?>
            </tr>
        </table> 
            
        <p class="text-info">
            Hodnota vyplatených bankoviek a mincí : <strong><?php echo Latte\Runtime\Filters::escapeHtml($checkSum['sum'], ENT_NOQUOTES) ?></strong> €
        </p> 
            
    </div>
<?php } ?>
            
        <p>
            <a class="btn btn-default" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link(":Export:Excel"), ENT_COMPAT) ?>
">Excel</a>
        </p>
        
    </div>
<?php } ?>
    
<?php
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