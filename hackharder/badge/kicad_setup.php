<?php
  // frank the tank
?>
<!DOCTYPE html>
<html>
<head>
<meta name="generator" content="Bluefish 2.2.5" >
<meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
</head>
<body>
So I'm on kicad "4.0.4-stable, release build". Win 7 SP1. Cloned down a
copy of my repo and it opened with no issues.<br />

Since it's just the board file you are having trouble with, to create it
from a blank file in pcbnew:
<br />
File->Import->DXF File<br />
File: Z:\code\HackHarderBadge\image\cleaver-outline.dxf(different location for you)<br />
Select "User defined position"<br />
X Position: 19.8551<br />
Y Position: 72.0565<br />
Units: mm<br />
Layer: Edge.Cuts<br />
Hit OK<br />
Preferences->Footprint Libraries Manager<br />
Project Specific Libraries tab<br />
Hit "Append with Wizard"<br />
Files on my computer<br />
Hit Next<br />
Browse to library folder, for me "Z:\code\HackHarderBadge\kicad\cleaver.pretty"<br />
Next<br />
Next<br />
To current project only<br />
Finish<br />
Ok<br />
Add Footprints button, right hand side, looks like a white chip with green pins<br />
Click anywhere on the board<br />
Select by browser<br />
Select "cleaver" from the list on the left, should be at the bottom<br />
Double click "cleaver" again in the list on the right<br />
My position settings are mm, if yours are too<br />
Right click cleaver artwork<br />
Footprint on F.Cu->Edit Parameters<br />
Position:<br />
X: 104.8<br />
Y: 45.8<br />
Ok<br />
Alternative is to set the grid drop down at the top to a fairly fine setting, hover over the artwork, hit "m" to move it, click to drop
it in a decently centered position within the board outline.
</body>
</html>
