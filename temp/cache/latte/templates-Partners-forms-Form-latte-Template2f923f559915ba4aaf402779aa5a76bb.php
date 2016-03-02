<?php
// source: C:\Apache24\htdocs\company\app\presenters/templates/Partners/../../../forms/Form.latte

class Template2f923f559915ba4aaf402779aa5a76bb extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('5a4ada7a70', 'html')
;
// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $_control["form"], array()) ?>

        <div class="col-xs-12 col-md-12">
<?php $_l->tmp = $_control->getComponent("form"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render('errors') ?>
        </div>
        <div class="form-group col-xs-12 col-md-12">
            <label for="form-finance" class="required col-xs-12 col-md-4">
                Finančné zhodnotenie :
            </label>
            <div class="col-xs-10 col-md-6">
                <?php echo $_form["finance"]->getControl()->addAttributes(array('class' => "form-control")) ?>

            </div> 
            <div class="required col-xs-1 col-md-1"><span>€</span></div>
        </div>
            
    <fieldset>
        <legend>Partneri</legend>
            
        <div class="row">
            <span class="col-xs-6 col-md-6">Meno</span> 
            <span class="col-xs-6 col-md-6">Podiel</span> 
        </div>
        
<?php $iterations = 0; foreach ($form['partners']->components as $key => $partner) { ?>
            <div class="container-fluid partner">
                <div class="col-xs-5 col-sm-6 col-md-6">
                    <?php $_input = is_object($partner['name']) ? $partner['name'] : $_form[$partner['name']]; echo $_input->getControl()->addAttributes(array('class' => "form-control")) ?>

                </div>
                <div class="col-xs-7 col-sm-5 col-md-5">
                    <div class="col-xs-5 col-md-5">
                        <?php $_input = is_object($partner['count']) ? $partner['count'] : $_form[$partner['count']]; echo $_input->getControl()->addAttributes(array('class' => "form-control")) ?>

                    </div>
                    <span class="col-xs-2 col-md-2">/</span>
                    <div class="col-xs-5 col-md-5">
                        <?php $_input = is_object($partner['part']) ? $partner['part'] : $_form[$partner['part']]; echo $_input->getControl()->addAttributes(array('class' => "form-control")) ?>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-1 col-md-1">
                    <a class="btn btn-danger" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("deletePartner!", array($key)), ENT_COMPAT) ?>
">-</a> 
                </div>
            </div>
<?php $iterations++; } ?>
        
        <div class = "row">
            <a class="btn btn-success" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("addPartner!"), ENT_COMPAT) ?>
">Pridať partnera</a>
        </div>
            
    </fieldset>
        
<?php if (\count($form['partners']->components) > 0) { ?>        <div class = "form-group col-xs-12 col-md-12">
            <?php echo $_form["save"]->getControl()->addAttributes(array('class' => "col-xs-4 col-md-4 btn btn-default")) ?>

            <?php echo $_form["calc"]->getControl()->addAttributes(array('class' => "col-xs-4 col-md-4 btn btn-default")) ?>

        </div>
<?php } echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd($_form) ;
}}