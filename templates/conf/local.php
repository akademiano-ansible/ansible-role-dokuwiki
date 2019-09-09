<?php
/**
 * Dokuwiki's Main Configuration File - Local Settings
 */
$conf['title'] = '{{ dokuwiki_title }}';
$conf['savedir'] = '{{dokuwiki_data}}';

{% if dokuwiki_template is defined %}
$conf['template'] = '{{ dokuwiki_template}}';
{% endif %}
$conf['lang'] = '{{ dokuwiki_lang }}';
$conf['useacl'] = 1;
$conf['superuser'] = '@admin';
$conf['disableactions'] = '{{ dokuwiki_disableactions }}';
$conf['passcrypt'] = 'bcrypt';


$conf['license'] = '0';
$conf['breadcrumbs'] = 0;
$conf['youarehere'] = 1;
$conf['im_convert'] = '/usr/bin/convert';
$conf['useslash'] = 1;
$conf['canonical'] = 1;
$conf['send404'] = 1;
$conf['dnslookups'] = 0;

{% if dokuwiki_local is defined %}
{%   for conf in dokuwiki_local %}
$conf{{ conf.name }} = {{ conf.value }};
{%   endfor %}
{% endif %}

$conf['plugin']['tagging']['singleusermode'] = 1;
