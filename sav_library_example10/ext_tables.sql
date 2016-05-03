
#
# Table structure for table 'tx_savlibraryexample10'
#
CREATE TABLE tx_savlibraryexample10 (
    uid int(11) DEFAULT '0' NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    tstamp int(11) DEFAULT '0' NOT NULL,
    crdate int(11) DEFAULT '0' NOT NULL,
    cruser_id int(11) DEFAULT '0' NOT NULL,
    deleted tinyint(4) DEFAULT '0' NOT NULL,
    hidden tinyint(4) DEFAULT '0' NOT NULL,
    image text,
    title tinytext,
    description text,
    address tinytext,
    zip tinytext,
    city tinytext,
    country tinytext,

    PRIMARY KEY (uid),
    KEY parent (pid)
);


