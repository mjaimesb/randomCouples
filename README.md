# randomCouples
Couples generator

# Features

# Usages
```
$players = array('member1','member2','member3','...');
$fixture = new Fixture($players);
```
Get simple couples not sorted
```
$fixture->getListCouples();
```

Generate couples by fixture algorithm
```
$planning = $fixture->Generate();
$fixture->displayMeetings($planning, $players);
```

Create 'n' membres groups
```
$groups =  $fixture->getGroups($players,$n);
```
