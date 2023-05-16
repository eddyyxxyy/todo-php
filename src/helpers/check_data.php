<?php

declare(strict_types=1);

/**
 * Checks if all the data needed to render views was properly passed.
 *
 * @param array $data View's data.
 *
 * @return boolean
 */
function check_data(array $data): bool
{
    if (
        !isset($data['data']) ||
        !isset($data['data']['title']) ||
        !isset($data['view']) ||
        !isset($data['css']) ||
        !file_exists(VIEWS_PATH . "\\{$data['view']}")
    ) {
        return false;
    }

    return true;
}
