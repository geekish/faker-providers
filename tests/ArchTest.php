<?php

it('does not use debugging functions 🐛')
    ->expect(['dd', 'dump', 'var_dump'])
    ->not->toBeUsed();
