<?php
return array(
    // Array-ul contine:
    // 1) Cheia (ce va introduce utilizatorul in bara de adresa(www...)).
    // 2) Locatia fisierului (de unde se prelucreaza cererea).

    'news/([0-9]+)' => 'news/view',

    'news' => 'news/index',     //se apeleaza
    //  (method) actionIndex  in  (controller) NewsController
    'products' => 'product/list'    //se apeleaza
    //  (method) actionList in (controller) ProductController
);