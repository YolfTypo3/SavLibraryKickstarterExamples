
#
# Table structure for table 'tx_savlibraryexample7_guests'
#
CREATE TABLE tx_savlibraryexample7_guests (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    firstname tinytext,
    lastname tinytext,
    email tinytext,
    website tinytext,
    message text,
    comment text,
    _submitted_data_ blob NOT NULL,
    _validated_ tinyint(4) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid)
);


