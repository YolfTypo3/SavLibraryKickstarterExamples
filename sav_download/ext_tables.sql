
#
# Table structure for table 'tx_savdownload'
#
CREATE TABLE tx_savdownload (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    title tinytext,
    category int(11) DEFAULT '0' NOT NULL,
    date int(11) unsigned DEFAULT '0' NOT NULL,
    file int(11) unsigned DEFAULT '0',

    PRIMARY KEY (uid),
    KEY parent (pid)
);

#
# Table structure for table 'tx_savdownload_category'
#
CREATE TABLE tx_savdownload_category (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    name tinytext,

    PRIMARY KEY (uid),
    KEY parent (pid)
);


