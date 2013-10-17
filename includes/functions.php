<?php

function pageFooter()
{
    echo '
<div class="container">
<footer class="footer">
<ul class="nav nav-pills">
<li class="pull-left">
<a>Overcast Network Wiki</a>
</li>
<li class="note">
<a>NOTE: This wiki is unofficial and is not affiliated or endorsed by Overcast Network</a>
</li>
<li class ="pull-right" >
<a href="http://oc.tc">OCN website</a>
</li>
<li class ="pull-right" >
<a href="https://github.com/MasterEjay/Overcast-Wiki">GitHub Repo</a>
</li>
<li class ="pull-right" >
<a href="contributers.php">Contributors</a>
</li>
<li class ="pull-right" >
<a href="http://ocnblog.com">Blog</a>
</li>
</ul>
</footer>
</div>';
}

function pageHeader($selected)
{
    ########################################
    #This is the bit you edit for new links#
    ########################################
    $links = array(
        "Home" => array(
            "href" => "index.php",
            "icon" => "icon-home",
            "type" => "main",
        ),
        "Gamemodes" => array(
            "href" => "gamemodes.php",
            "icon" => "icon-play",
            "type" => "main",
        ),
        "Rules" => array(
            "href" => "rules.php",
            "icon" => "icon-exclamation-sign",
            "type" => "main",
        ),
        "Commands" => array(
            "href" => "commands.php",
            "icon" => "icon-cog",
            "type" => "main",
        ),
        "PvP Tips" => array(
            "href" => "tips.php",
            "icon" => "icon-ok",
            "type" => "main",
        ),
        "Tournaments" => array(
            "href" => "tourney.php",
            "icon" => "icon-bullhorn",
            "type" => "main",
        ),
        "Ranks" => array(
            "href" => "ranks.php",
            "icon" => "icon-star-empty",
            "type" => "dropdown",
        ),
    );
    ########################################
    #You don't need to edit past this point#
    ########################################
    echo '
<div class = "mnavbar">
  <div class="navbar navbar-static-top">
    
  <div class="navbar-inner">
      <div class = "container">
        <a class="brand" href="index.php"><img src="small.png"> Overcast Network Wiki</a>
        <ul class="nav">
';

    foreach($links as $l => $i)
    {
        if($i['type'] == "main")
        {
            if($selected == $l)
            {
                $section = "            <li class=\"active\"><a href=\"".$i['href']."\"><i class=\"".$i['icon']."\"></i>  ".$l."</a></li>\n";
            }
            else
            {
                $section = "            <li><a href=\"".$i['href']."\"><i class=\"".$i['icon']."\"></i>  ".$l."</a></li>\n";
            }
            echo $section;
        }
    }

    echo '
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th-list"></i>   More <b class="caret"></b></a>
        <ul class="dropdown-menu">
    ';
    foreach($links as $l => $i)
    {
        if($i['type'] == "dropdown")
        {
            $section = "         <li class=\"active\"><a href=\"".$i['href']."\"><i class=\"".$i['icon']."\"></i>  ".$l."</a></li>\n";
            echo $section;
        }       
    }

    echo '
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
    ';

    echo '
    ';
}


?>
