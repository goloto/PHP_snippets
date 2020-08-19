<div class="footer" itemscope itemtype="http://schema.org/Organization">

    <div class="copyright">
        1970 – <?=date("Y")?>&copy;
        <span itemprop="name" content="<?=$SITE_INFO["COPYRIGHT"]?>">
            <?=$SITE_INFO["COPYRIGHT"]?>
        </span>
    </div>

    <div class="address" itemprop="address"><?=$SITE_INFO["ADDRESS"]?></div>

    <div class="email">
        E-mail:
        <a href="mailto:<?=$SITE_INFO["EMAIL"]?>">
            <span itemprop="email"><?=$SITE_INFO["EMAIL"]?></span>
        </a>
    </div>

    <div class="phone">
        <a href="tel:<?=$SITE_INFO["PHONE"]?>">
            <span itemprop="telephone"><?=$SITE_INFO["PHONE"]?></span>
        </a>
    </div>

    <div class="worktime"><?=$SITE_INFO["WORKTIME"]?></div>

</div>