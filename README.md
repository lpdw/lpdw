# lpdw

Récuperer le bundle Search Engine

> git clone https://github.com/lpdw/lpdw

Ajouter le bundle dans le Appkernel.php
<pre><code>
new lpdw\SearchEngineBundle\lpdwSearchEngineBundle(),
</pre></code>

Ajouter le bundle dans le rooting.yml

<pre><code>lpdw_search_engine:
    resource: "@lpdwSearchEngineBundle/Controller/"<br>
    type:     annotation<br>
    prefix:   /<br>
</pre></code>

Mettre a jours les dépendance :
> composer install

Mettre a jours la base de donnée :
>php bin/console doctrine:schema:update --force
