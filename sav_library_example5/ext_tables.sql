
#
# Table structure for table 'tx_savlibraryexample5'
#
CREATE TABLE tx_savlibraryexample5 (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    title tinytext,
    field1 tinytext,
    field2 tinytext,

    PRIMARY KEY (uid),
    KEY parent (pid)
);


