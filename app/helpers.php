<?php

function categoryLabelColor($name)
{
    switch ($name) {
        case $name == 'Food':
            return '#F8AC3A';
        case $name == 'Water Delivery':
            return '#49C2DF';
        case $name == 'Medicine':
            return '#F36F8F';
        case $name == 'Education':
            return '#2EC774';
        case $name == 'Health':
            return '#A8E4A0';
        default : return 'red';
    }
}
