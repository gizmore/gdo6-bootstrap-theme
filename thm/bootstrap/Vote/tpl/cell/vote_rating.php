<?php
use GDO\UI\GDT_Badge;
use GDO\UI\GDT_Tooltip;
use GDO\Vote\GDT_VoteRating;
/** @var $field GDT_VoteRating **/
$field instanceof GDT_VoteRating;
$gdo = $field->getVoteObject();
$table = $gdo->gdoVoteTable();
?>
<span class="<?=$field->name;?>-vote-rating-<?= $gdo->getID(); ?>">
<?php
$votesNeeded = $table->gdoVotesBeforeOutcome();
$votesHave = $gdo->getVoteCount();
if ($votesHave >= $votesNeeded)
{
	$value = sprintf('%.01f', $field->getVar());
	echo GDT_Badge::make()->value($value)->renderCell();
}
else 
{
	echo GDT_Tooltip::make()->tooltip(t('tt_gdo_vote_open', [$votesHave, $votesNeeded]))->renderCell();
}
?>
</span>
