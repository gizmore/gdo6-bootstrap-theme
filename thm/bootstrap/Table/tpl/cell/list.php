<?php
use GDO\Table\GDT_List;
use GDO\Form\GDT_Form;
use GDO\UI\GDT_SearchField;
use GDO\UI\GDT_Menu;
use GDO\UI\GDT_Link;

/** @var $field GDT_List **/

###################
### Search Form ###
###################
if ($field->searchable)
{
    $formSearch = GDT_Form::make('s')->slim()->methodGET();
    $formSearch->addField(GDT_SearchField::make('search'));
    echo $formSearch->render();
}

##################
### Order Form ###
##################
if ($field->orderable)
{
    if ($field->headers)
    {
        $menu = GDT_Menu::make('order');
        foreach ($field->headers->fields as $gdt)
        {
            if ($gdt->orderable)
            {
                $link = GDT_Link::make()->rawLabel($gdt->displayLabel());
                $o = $field->headers->name;
                $href = $field->replacedHREF("{$o}[order_by]", $gdt->name);
                $href = $field->replacedHREF("{$o}[order_dir]", $gdt->orderDefaultAsc ? 'ASC' : 'DESC', $href);
                $link->href($href);
                $menu->addField($link);
            }
        }
        echo $menu->render();
    }
}

############
### List ###
############
$pagemenu = $field->getPageMenu();
$pagemenu = $pagemenu ? $pagemenu->render() : '';

$result = $field->getResult();
$template = $field->getItemTemplate();

echo $pagemenu;
?>
<!-- Begin List -->
<div class="list-group">
<?php if ($field->title) : ?>
  <h3><?=$field->title?></h3>
<?php endif; ?>
<?php
while ($gdo = $result->fetchObject()) :
	echo $template->gdo($gdo)->renderList();
endwhile;
?>
</div>
<!-- End of List -->
<?php
echo $pagemenu;
