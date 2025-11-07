## Description:
Write an algorithm that will identify valid IPv4 addresses in dot-decimal format. IPs should be considered valid if they consist of four octets, with values between 0 and 255, inclusive.

## Valid inputs examples:
1.2.3.4

123.45.67.89


## Invalid input examples:
1.2.3

1.2.3.4.5

123.456.78.90

123.045.067.089

## IPv4 Validation Rules

An IPv4 address has exactly four octets separated by dots (.).

Each octet must be a number between 0 and 255.

Leading zeros are generally not allowed (e.g., 01 is invalid, 1 is valid)

## Solution 
function isValidIPv4($ip) {
    // Split string into parts by dot
    $parts = explode('.', $ip);

    // Must have exactly 4 parts
    if (count($parts) !== 4) {
        return false;
    }

    foreach ($parts as $part) {
        // Must be numeric
        if (!ctype_digit($part)) {
            return false;
        }

        // Convert to integer
        $num = (int)$part;

        // Must be in range 0-255
        if ($num < 0 || $num > 255) {
            return false;
        }

        // No leading zeros allowed (except '0')
        if (strlen($part) > 1 && $part[0] === '0') {
            return false;
        }
    }

    return true;
}


