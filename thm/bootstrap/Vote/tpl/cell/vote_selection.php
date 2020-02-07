<div class="gdo-rating-stars">
<?php /** @var $field \GDO\Vote\GDT_VoteSelection **/
use GDO\UI\GDT_Icon;
use GDO\User\GDO_User;
$vt = $field->voteTable();
$user = GDO_User::current();
if ($own = $field->gdo->getVote($user))
{
	$own = $own->getVar('vote_value');
}
$max = $vt->gdoVoteMax();
?>
<?php for ($i = 1; $i <= $max; $i++) : ?>
<?php $color = $own < $i ? '#999' : '#ffd700'; ?>
<a
 onclick="return GDO.Vote.vote(this)"
 href="<?=$field->hrefVoteScore($i)?>"><?=GDT_Icon::make()->icon('star')->color($color)->render()?></a>
<?php endfor; ?>
</div>
