<?php
function getDynamicPath()
{
    return str_replace(base_url(), "", current_url());
}