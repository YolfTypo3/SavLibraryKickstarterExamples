
#
# Table structure for table 'tx_savlibrarymvcexample0_domain_model_table1'
#
CREATE TABLE tx_savlibrarymvcexample0_domain_model_table1 (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id_frontend int(11) DEFAULT '0' NOT NULL,
    field2 tinyint(3) DEFAULT '0' NOT NULL,
    field1 tinytext,
    field8 text,
    field9 text,
    field4 int(11) unsigned DEFAULT '0' NOT NULL,
    field5 int(11) unsigned DEFAULT '0' NOT NULL,
    field10 int(11) DEFAULT '0' NOT NULL,
    field7 int(11) DEFAULT '0' NOT NULL,
    field6 int(11) DEFAULT '0' NOT NULL,
    field12 tinytext,
    field13 int(11) unsigned DEFAULT '0',
    field14 tinytext,
    field15 tinytext,
    field17 text,
    field18 int(11) DEFAULT '0' NOT NULL,
    field19 int(11) DEFAULT '0' NOT NULL,
    field20 int(11) DEFAULT '0' NOT NULL,
    field3 int(11) DEFAULT '0' NOT NULL,
    field11 varchar(255) DEFAULT '' NOT NULL,
    field21 varchar(255) DEFAULT '' NOT NULL,
    field23 int(11) DEFAULT '0' NOT NULL,
    field24 decimal(11,2) DEFAULT '0.00' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid)
);

#
# Table structure for table 'tx_savlibrarymvcexample0_domain_model_table1_field18_mm'
#
CREATE TABLE tx_savlibrarymvcexample0_domain_model_table1_field18_mm (
    uid_local int(11) unsigned DEFAULT '0' NOT NULL,
    uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
    tablenames varchar(30) DEFAULT '' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,
    KEY uid_local (uid_local),
    KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_savlibrarymvcexample0_domain_model_table1_field19_mm'
#
CREATE TABLE tx_savlibrarymvcexample0_domain_model_table1_field19_mm (
    uid_local int(11) unsigned DEFAULT '0' NOT NULL,
    uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
    tablenames varchar(30) DEFAULT '' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,
    KEY uid_local (uid_local),
    KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_savlibrarymvcexample0_domain_model_table1_field20_mm'
#
CREATE TABLE tx_savlibrarymvcexample0_domain_model_table1_field20_mm (
    uid_local int(11) unsigned DEFAULT '0' NOT NULL,
    uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
    tablenames varchar(30) DEFAULT '' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,
    KEY uid_local (uid_local),
    KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_savlibrarymvcexample0_domain_model_table1_field23_mm'
#
CREATE TABLE tx_savlibrarymvcexample0_domain_model_table1_field23_mm (
    uid_local int(11) unsigned DEFAULT '0' NOT NULL,
    uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
    tablenames varchar(30) DEFAULT '' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,
    KEY uid_local (uid_local),
    KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_savlibrarymvcexample0_domain_model_table2'
#
CREATE TABLE tx_savlibrarymvcexample0_domain_model_table2 (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    cruser_id_frontend int(11) DEFAULT '0' NOT NULL,
    field1 tinytext,

    PRIMARY KEY (uid),
    KEY parent (pid)
);

#
# Table structure for table 'tx_savlibrarymvcexample0_domain_model_table3'
#
CREATE TABLE tx_savlibrarymvcexample0_domain_model_table3 (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    cruser_id_frontend int(11) DEFAULT '0' NOT NULL,
    field1 tinytext,
    field2 int(11) unsigned DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid)
);

#
# Table structure for table 'tx_savlibrarymvcexample0_domain_model_table4'
#
CREATE TABLE tx_savlibrarymvcexample0_domain_model_table4 (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    cruser_id_frontend int(11) DEFAULT '0' NOT NULL,
    field1 tinytext,

    PRIMARY KEY (uid),
    KEY parent (pid)
);

#
# Table structure for table 'tx_savlibrarymvcexample0_domain_model_table5'
#
CREATE TABLE tx_savlibrarymvcexample0_domain_model_table5 (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    cruser_id_frontend int(11) DEFAULT '0' NOT NULL,
    field1 tinytext,
    field2 int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid)
);

#
# Table structure for table 'tx_savlibrarymvcexample0_domain_model_table5_field1_mm'
#
CREATE TABLE tx_savlibrarymvcexample0_domain_model_table5_field1_mm (
    uid_local int(11) unsigned DEFAULT '0' NOT NULL,
    uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
    tablenames varchar(30) DEFAULT '' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,
    KEY uid_local (uid_local),
    KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_savlibrarymvcexample0_domain_model_table5_field2_mm'
#
CREATE TABLE tx_savlibrarymvcexample0_domain_model_table5_field2_mm (
    uid_local int(11) unsigned DEFAULT '0' NOT NULL,
    uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
    tablenames varchar(30) DEFAULT '' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,
    KEY uid_local (uid_local),
    KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_savlibrarymvcexample0_domain_model_table6'
#
CREATE TABLE tx_savlibrarymvcexample0_domain_model_table6 (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) unsigned DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    cruser_id_frontend int(11) DEFAULT '0' NOT NULL,
    field1 tinytext,
    field2 int(11) unsigned DEFAULT '0',

    PRIMARY KEY (uid),
    KEY parent (pid)
);


