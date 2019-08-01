
#
# Table structure for table 'tx_savlibraryexample10'
#
CREATE TABLE tx_savlibraryexample10 (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    image int(11) unsigned DEFAULT '0',
    poi int(11) DEFAULT '0' NOT NULL,
    description text,

    PRIMARY KEY (uid),
    KEY parent (pid)
);

#
# Table structure for table 'tx_savlibraryexample10_poi_mm'
#
CREATE TABLE tx_savlibraryexample10_poi_mm (
    uid_local int(11) unsigned DEFAULT '0' NOT NULL,
    uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
    tablenames varchar(30) DEFAULT '' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,
    KEY uid_local (uid_local),
    KEY uid_foreign (uid_foreign)
);



