# lpdw

Récuperer le bundle Search Engine

> git clone https://github.com/lpdw/lpdw

Ajouter le bundle dans le Appkernel.php

> new lpdw\SearchEngineBundle\lpdwSearchEngineBundle(),

Ajouter le bundle dans le rooting.yml

> lpdw_search_engine:
    resource: "@lpdwSearchEngineBundle/Controller/"<br>
      type:     annotation<br>
      prefix:   /<br>
