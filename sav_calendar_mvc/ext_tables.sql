
#
# Table structure for table 'tx_savcalendarmvc_domain_model_event'
#
CREATE TABLE tx_savcalendarmvc_domain_model_event (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    cruser_id_frontend int(11) DEFAULT '0' NOT NULL,
    category int(11) DEFAULT '0' NOT NULL,
    title tinytext,
    date_begin int(11) unsigned DEFAULT '0' NOT NULL,
    date_end int(11) unsigned DEFAULT '0' NOT NULL,
    location tinytext,
    description text,
    link tinytext,
    organized_by tinytext,
    email tinytext,

    PRIMARY KEY (uid),
    KEY parent (pid)
);

#
# Table structure for table 'tx_savcalendarmvc_domain_model_category'
#
CREATE TABLE tx_savcalendarmvc_domain_model_category (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    sorting int(10) DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    cruser_id_frontend int(11) DEFAULT '0' NOT NULL,
    title tinytext,

    PRIMARY KEY (uid),
    KEY parent (pid)
);


