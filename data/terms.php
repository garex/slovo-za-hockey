<?php

namespace Ontology;

require_once __DIR__.'/../vendor/autoload.php';

$allTerm = new Term(new Localized('All in one', 'Хоккей'));

$hockey = new Term(
    new Localized('Hockey', 'Хоккей', 'ˈХаки'),
    844,
    new Stringable('Ice hockey is a contact team sport played on ice, usually in a rink, in which two teams of skaters use their sticks to shoot a vulcanized rubber puck into their opponent`s net to score points.')
);

$team = new Term(
    new Localized('Team', 'Команда', 'Тим'),
    1226,
    new Stringable('Group of individuals working together to achieve their goal')
);
$sport = new Term(
    new Localized('Sport', 'Спорт', ''),
    74,
    new Stringable('All forms of competitive games which, through casual or organised participation, aim to use, maintain or improve physical ability and skills while providing enjoyment to participants, and in some cases, entertainment for spectators')
);
$ice = new Term(
    new Localized('Ice', 'Лёд', 'Айс'),
    3103,
    new Stringable('Water frozen into a solid state')
);
$rink = new Term(
    new Localized('Rink', 'Площадка', 'Ринк'),
    117,
    new Stringable('Frozen body of water where people can play hockey. It is a rectangle with rounded edges and surrounded by a wall approximately 1 metre high called the boards.')
);
$player = new Term(
    new Localized('Player', 'Игрок', "'Плейэр"),
    797,
    new Stringable('Sportsperson who plays sport game. Team member in role of goaltenders, defencemen and forwards.')
);
$stick = new Term(
    new Localized('Stick', 'Клюшка', 'Стик'),
    3547,
    new Stringable('Piece of equipment used in ice hockey to shoot, pass, and carry the puck across the ice.')
);
$puck = new Term(
    new Localized('Puck', 'Шайба', 'Пак'),
    9953,
    new Stringable('Game device, that should be moved to opponent`s goal net; hard disk of vulcanized rubber')
);
$opponent = new Term(
    new Localized('Opponent', 'Противник', 'Эˈпoунэнт'),
    31,
    new Stringable('One who opposes another physically, attempts to stop the progress of scoring.')
);
$goalNet = new Term(
    new Localized('Goal net', 'Ворота', 'Гoул нет'),
    7020,
    new Stringable('Structure in which goals are scored. Rectangular in shape; the front frame of the goal is made of steel tube painted red and consists of two vertical goalposts and a horizontal crossbar. A net is attached to the back of the frame to catch pucks that enter the goal and also to prevent pucks from entering it from behind. The entire goal net is considered an inbounds area of the playing surface, and it is legal to play the puck behind the goal net.')
);
$score = new Term(
    new Localized('Score', 'Счёт', 'Скор'),
    6975,
    new Stringable('Quantitative measure of the relative performance of opponents. Measured in points, which is given one for each goal.')
);
$goal = new Term(
    new Localized('Goal', 'Гол', 'Гoул'),
    8093,
    new Stringable('Scored when the ball or puck passes completely over the goal line under the crossbar and between the goal posts, after being shot. Awards one point to the team attacking the goal scored upon. Last player on the goal-scoring team to touch the puck before it goes into the net is credited with scoring that goal. Has few types.')
);
$point = new Term(
    new Localized('Point', 'Очко', 'Пойнт'),
    2766,
    new Stringable('Awarded to a player for each goal scored or assist earned. Awarded two to team for winning a game and one when a team ties.')
);
$shot = new Term(
    new Localized('Shot', 'Бросок', 'Шат'),
    13078,
    new Stringable('Attempt by a player to score a goal by striking or snapping the puck with their stick in the direction of the net.')
);
$flipShot = new Term(
    new Localized('Flip shot', 'Подкидка', 'Флип шат'),
    216,
    new Stringable('Shoveling motion to push the puck in the desired direction, or a flick of the puck (be it on the forehand, backhand, or in a spearing motion). Players typically resort to shovelling the puck to push loose pucks past a sprawling, or out-of-position goaltender.')
);
$wristShot = new Term(
    new Localized('Wrist shot', 'Кистевой', 'Рист шат'),
    767 + 312,
    new Stringable('Using arm muscles to propel a puck forward from the concave side of the stick`s blade.')
);
$slapShot = new Term(
    new Localized('Slapshot', 'Щелчок', 'Слэпшат'),
    144 + 37 + 25,
    new Stringable('The player draws stick back away from the puck, forcefully brings it forward to strike the ice just behind the puck. When the stick finally contacts the puck, the energy stored in the flexed stick is transferred to the puck, providing additional force.')
);
$snapShot = new Term(
    new Localized('Snap shot', 'Короткий щелчок', 'Снэп шат'),
    176 + 76 + 55,
    new Stringable('Combination of both the slap-shot and the wrist shot. The shooter begins by cocking the stick back like a slap-shot (however with not such an exaggerated motion), and finishes with a flicking of the wrist like a wrist shot.')
);
$backhandShot = new Term(
    new Localized('Backhand shot', 'С неудобной', 'ˈБэкˌхэнд шат'),
    1136 + 254,
    new Stringable('Wrist shot released from the back of the blade, and on the player`s backhand; often unexpected.')
);
$onetimer = new Term(
    new Localized('One-timer', 'В одно касание', 'Уан-ˈтаймэр'),
    609,
    new Stringable('Player meets a teammate`s pass with an immediate shot, without any attempt to control the puck on his stick')
);
