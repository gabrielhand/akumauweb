<?php

namespace App\Helpers;

class StatusHelper
{
    function getStatusBadgeColor($status)
    {
        switch ($status) {
            case 'Batal':
                return 'red-500';
            case 'Pending':
                return 'yellow-500';
            case 'Success':
                return 'green-500';
            default:
                return 'blue-500';
        }
    }
}
