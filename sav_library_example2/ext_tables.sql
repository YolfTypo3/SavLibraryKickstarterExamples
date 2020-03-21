
#
# Table structure for table 'tx_savlibraryexample2_cds'
#
CREATE TABLE tx_savlibraryexample2_cds (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    artist tinytext,
    album_title tinytext,
    date_of_purchase int(11) DEFAULT '0' NOT NULL,
    link_to_website tinytext,
    coverimage int(11) unsigned DEFAULT '0',
    category int(11) DEFAULT '0' NOT NULL,
    description text,

    PRIMARY KEY (uid),
    KEY parent (pid)
);

#
# Table structure for table 'tx_savlibraryexample2_cat'
#
CREATE TABLE tx_savlibraryexample2_cat (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    title tinytext,

    PRIMARY KEY (uid),
    KEY parent (pid)
);


