<?php declare(strict_types=1);
use Hybula\LookingGlass;

// Define the HTML title;
const LG_TITLE = 'Limda.Net';

// Define a logo, this can be HTML too, see the other example for an image;
const LG_LOGO = '<h2 style="color: #000000;">Limda.Net</h2>';
const LG_LOGO_DARK = '<h2 style="color: #ffffff;">Limda.Net</h2>';

// Define the URL where the logo points to;
const LG_LOGO_URL = 'https://www.limda.net/';

// Theme mode;
const LG_THEME = 'auto';

// Enable the latency check feature;
const LG_CHECK_LATENCY = true;

// Define a custom CSS file which can be used to style the LG, set false to disable, else point to the CSS file;
const LG_CSS_OVERRIDES = false;
// Define <head> content, this could be JS, CSS or meta tags;
const LG_CUSTOM_HEAD = false;

// Enable or disable blocks/parts of the LG, pass these environment variables with any value to disable them;
define('LG_BLOCK_NETWORK', !isset($_ENV['DISABLE_BLOCK_NETWORK']));
define('LG_BLOCK_LOOKINGGLASS', !isset($_ENV['DISABLE_BLOCK_LOOKINGGLASS']));
define('LG_BLOCK_SPEEDTEST', !isset($_ENV['DISABLE_BLOCK_SPEEDTEST']));
// This enables the custom block, which you can use to add something custom to the LG;
define('LG_BLOCK_CUSTOM', isset($_ENV['ENABLE_CUSTOM_BLOCK']));

// Define a file here which will be used to display the custom block, can be PHP too which outputs HTML;
const LG_CUSTOM_HTML = __DIR__.'/custom.html.php';
// Define a file here which will be loaded on top of the index file, this can be used to do some post logic;
const LG_CUSTOM_PHP = __DIR__.'/custom.post.php';

// Define a file here which will be used to display the custom header. Will be at the top of file;
const LG_CUSTOM_HEADER_PHP = __DIR__.'/custom.header.php';
// Define a file here which will be used to display the custom footer. Will be at the bottom of file;
const LG_CUSTOM_FOOTER_PHP = __DIR__.'/custom.footer.php';

// Define the location of this network, usually a city and a country;
define('LG_LOCATION', getenv('LOCATION'));
// Define a query location for the link to openstreetmap (eg: Amsterdam, Netherlands will be https://www.openstreetmap.org/search?query=Amsterdam, Netherlands)
define('LG_MAPS_QUERY', getenv('MAPS_QUERY'));
// Define the facility where the network is located, usually a data center;
define('LG_FACILITY', getenv('FACILITY'));
// Define a direct link to more information about the facility, this should be a link to PeeringDB;
define('LG_FACILITY_URL', getenv('FACILITY_URL'));
// Define an IPv4 for testing;
define('LG_IPV4', getenv('IPV4_ADDRESS'));
// Define an IPv6 for testing;
define('LG_IPV6', getenv('IPV6_ADDRESS'));

// Define the methods that can be used by visitors to test it out;
const LG_METHODS = [
    LookingGlass::METHOD_PING,
    LookingGlass::METHOD_PING6,
    LookingGlass::METHOD_MTR,
    LookingGlass::METHOD_MTR6,
    LookingGlass::METHOD_TRACEROUTE,
    LookingGlass::METHOD_TRACEROUTE6,
];

// Define other looking glasses, this is useful if you have multiple networks and looking glasses;
const LG_LOCATIONS = [
    'BD2 | Dhaka,Bangladesh' => 'https://github.com/hybula/lookingglass/',
    'US1 | Phonix,United States' => 'https://github.com/hybula/lookingglass/',
];

// Enable the iPerf info inside the speedtest block, set to false to disable;
const LG_SPEEDTEST_IPERF = true;
// Define the label of an incoming iPerf test;
const LG_SPEEDTEST_LABEL_INCOMING = 'iPerf3 Incoming';
// Define the command to use to test incoming speed using iPerf, preferable iPerf3;
const LG_SPEEDTEST_CMD_INCOMING = 'iperf3 -4 -c hostname -p 5201 -P 4';
// Define the label of an outgoing iPerf test;
const LG_SPEEDTEST_LABEL_OUTGOING = 'iPerf3 Outgoing';
// Define the command to use to test outgoing speed using iPerf, preferable iPerf3;
const LG_SPEEDTEST_CMD_OUTGOING = 'iperf3 -4 -c hostname -p 5201 -P 4 -R';
// Define speedtest files with URLs to the actual files;
const LG_SPEEDTEST_FILES = [
    '100M' => 'https://github.com/hybula/lookingglass/',
    '1G' => 'https://github.com/hybula/lookingglass/',
    '10G' => 'https://github.com/hybula/lookingglass/'
];

// Define if you require visitors to agree with the Terms of Use. The value should be a link to the terms, or false to disable it completely.
define('LG_TERMS', getenv('LG_TERMS') ?: false);
