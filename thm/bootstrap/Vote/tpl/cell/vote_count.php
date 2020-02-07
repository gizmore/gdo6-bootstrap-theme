<?php
use GDO\UI\GDT_Badge;
use GDO\UI\GDT_Tooltip;
use GDO\Vote\GDT_VoteCount;
/** @var $field GDT_VoteCount **/
$field instanceof GDT_VoteCount;
$gdo = $field->getVoteObject();
$voteTable = $gdo->gdoVoteTable();
?>
<span class="<?=$field->name;?>-vote-count-<?= $gdo->getID(); ?>">
<?php
$votesNeeded = $voteTable->gdoVotesBeforeOutcome();
$votesHave = $gdo->getVoteCount();
if ($votesHave >= $votesNeeded)
{
	echo GDT_Badge::make()->value($field->getVar())->renderCell();
}
else 
{
	echo GDT_Tooltip::make()->tooltip(t('tt_gdo_vote_open', [$votesHave, $votesNeeded]))->render();
}
?>
</span>