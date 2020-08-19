<?php

class Debugger
{
    private $testing_var = [];

    public function Record($var)
    {
        $this->testing_var[] = $var;
    }

    public function Display()
    {
        global $USER;

        if ($USER->IsAdmin() && count($this->testing_var) != 0):?>

            <div class="debug">

                <style>
                    body .debug {
                        color: white;
                        background-color: #63009c;
                        padding: 10px;
                    }

                    body .debug ul {
                        padding: 20px;
                    }

                    body .debug .name {
                        padding: 10px 10px 10px 0;
                        text-decoration: underline;
                    }

                    body .debug .variable {
                        color: black;
                        background-color: aliceblue;
                        margin: 0px 60px 0px 60px;
                        font-size: 13px;
                        padding: 10px;
                        border-radius: 7px;
                    }
                </style>

                <ul>
                    <? foreach ($this->testing_var as $key => $item): ?>
                        <li class="items">
                            <div class="name">
                                <?='#' . ++$key . ', ' . gettype($item) . ':'?>
                            </div>

                            <div class="variable">
                                <? if (is_array($item)): ?>

                                    <pre><? print_r($item) ?></pre>

                                <? else: ?>

                                    <? echo $item; ?>

                                <? endif; ?>
                            </div>
                        </li>
                    <? endforeach; ?>
                </ul>

            </div>

        <?endif;
    }
}