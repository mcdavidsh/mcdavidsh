<?php
namespace Darkpirate\controllers;
session_start();
error_reporting( E_ALL);
set_time_limit(0);
ini_set("memory_limit",-1);


class controllers
{

    public  $dnsbl_lookup = [
        "all.s5h.net",
        "b.barracudacentral.org",
        "bl.spamcop.net",
        "blacklist.woody.ch",
        "bogons.cymru.com",
        "cbl.abuseat.org",
        "cdl.anti-spam.org.cn",
        "combined.abuse.ch",
        "db.wpbl.info",
        "dnsbl-1.uceprotect.net",
        "dnsbl-2.uceprotect.net",
        "dnsbl-3.uceprotect.net",
        "dnsbl.anticaptcha.net",
        "dnsbl.dronebl.org",
        "dnsbl.inps.de",
        "dnsbl.sorbs.net",
        "drone.abuse.ch",
        "duinv.aupads.org",
        "dul.dnsbl.sorbs.net",
        "dyna.spamrats.com",
        "dynip.rothen.com",
        "http.dnsbl.sorbs.net",
        "ips.backscatterer.org",
        "ix.dnsbl.manitu.net",
        "korea.services.net",
        "misc.dnsbl.sorbs.net",
        "noptr.spamrats.com",
        "orvedb.aupads.org",
        "pbl.spamhaus.org",
        "proxy.bl.gweep.ca",
        "psbl.surriel.com",
        "relays.bl.gweep.ca",
        "relays.nether.net",
        "sbl.spamhaus.org",
        "short.rbl.jp",
        "singular.ttk.pte.hu",
        "smtp.dnsbl.sorbs.net",
        "socks.dnsbl.sorbs.net",
        "spam.abuse.ch",
        "spam.dnsbl.anonmails.de",
        "spam.dnsbl.sorbs.net",
        "spam.spamrats.com",
        "spambot.bls.digibase.ca",
        "spamrbl.imp.ch",
        "spamsources.fabel.dk",
        "ubl.lashback.com",
        "ubl.unsubscore.com",
        "virus.rbl.jp",
        "web.dnsbl.sorbs.net",
        "wormrbl.imp.ch",
        "xbl.spamhaus.org",
        "z.mailspike.net",
        "zen.spamhaus.org",
        "zombie.dnsbl.sorbs.net",
    ];
    function leafClear($text,$email){
        $e = explode('@', $email);
        $emailuser=$e[0];
        $emaildomain=$e[1];
        $text = str_replace("[-time-]", date("m/d/Y h:i:s a", time()), $text);
        $text = str_replace("[-email-]", $email, $text);
        $text = str_replace("[-emailuser-]", $emailuser, $text);
        $text = str_replace("[-emaildomain-]", $emaildomain, $text);
        $text = str_replace("[-randomletters-]", $this->randString('abcdefghijklmnopqrstuvwxyz'), $text);
        $text = str_replace("[-randomstring-]", $this->randString('abcdefghijklmnopqrstuvwxyz0123456789'), $text);
        $text = str_replace("[-randomnumber-]", $this->randString('0123456789'), $text);
        $text = str_replace("[-randommd5-]", md5($this->randString('abcdefghijklmnopqrstuvwxyz0123456789')), $text);
        return $text;
    }
    function leafTrim($string){
        $string=urldecode($string);
        return stripslashes(trim($string));
    }
    function randString($consonants) {
        $length=rand(12,25);
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password .= $consonants[(rand() % strlen($consonants))];
        }
        return $password;
    }
    function leafMailChec($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) return true;
        else return false;
    }
    function leafheader() {
        echo '
<head lang="en">
    <title>'.str_replace("www.", "", $_SERVER['HTTP_HOST']).' - Leaf PHPMailer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.4.1/cosmo/bootstrap.min.css" rel="stylesheet" >
    <script src="https://leafmailer.pw/style2.js"></script>
</head>';
    }
}