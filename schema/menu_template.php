<div class="menu" itemscope itemtype="https://schema.org/SiteNavigationElement">

    <?foreach($arResult as $ITEM):?>

        <a class="menu__item" href="<?=$ITEM["LINK"]?>" itemprop="url">
            <span itemprop="name"><?=$ITEM["TEXT"]?></span>
        </a>

    <?endforeach;?>

</div>