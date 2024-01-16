<?php  

$games = [

[
    'team1'=>'Lakers',
    'team2'=>'Chicago Bulls',
    'team1_score'=>'90',
    'team2_score'=>'100'
],
[
    'team1'=>'Warriors',
    'team2'=>'Hawks',
    'team1_score'=>'90',
    'team2_score'=>'100'
],
[
    'team1'=>'Knicks',
    'team2'=>'Raptors',
    'team1_score'=>'90',
    'team2_score'=>'100'
],
[
    'team1'=>'Cavaliers',
    'team2'=>'Pistons',
    'team1_score'=>'90',
    'team2_score'=>'100'
],
[
    'team1'=>'Clippers',
    'team2'=>'Nuggets',
    'team1_score'=>'90',
    'team2_score'=>'100'
],
[
    'team1'=>'Jazz',
    'team2'=>'Kings',
    'team1_score'=>'90',
    'team2_score'=>'100'
],

];


?>

<ul>
<?php foreach($games as $game) { ?>
    <li>
        <?php echo $game['team1'] . '-' . $game['team2'] . ':' . $game['team1_score'] . '-' . $game['team2_score']; ?>
    </li>
<?php } ?>
</ul>