
#
# Table structure for table 'tx_savlibraryexample6'
#
CREATE TABLE tx_savlibraryexample6 (
    uid int(11) DEFAULT '0' NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    tstamp int(11) DEFAULT '0' NOT NULL,
    crdate int(11) DEFAULT '0' NOT NULL,
    cruser_id int(11) DEFAULT '0' NOT NULL,
    deleted tinyint(4) DEFAULT '0' NOT NULL,
    hidden tinyint(4) DEFAULT '0' NOT NULL,
    name tinytext,
    address text,
    registration int(11) DEFAULT '0' NOT NULL,
    email tinytext,
    email_flag tinyint(3) DEFAULT '0' NOT NULL,
    email_language varchar(255) DEFAULT '' NOT NULL,
    invoice tinytext,

    PRIMARY KEY (uid),
    KEY parent (pid)
);


