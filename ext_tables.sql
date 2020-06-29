#
# Table structure for table 'tx_hellocodepotemabranches_domain_model_potemaserviceprovider'
#
CREATE TABLE tx_hellocodepotemabranches_domain_model_potemaserviceprovider (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	provider_title varchar(255) DEFAULT '' NOT NULL,
	provider_subtitle varchar(255) DEFAULT '' NOT NULL,
	provider_street varchar(255) DEFAULT '' NOT NULL,
	provider_zip varchar(255) DEFAULT '' NOT NULL,
	provider_city varchar(255) DEFAULT '' NOT NULL,
	provider_country varchar(255) DEFAULT '' NOT NULL,
	provider_phone varchar(255) DEFAULT '' NOT NULL,
	provider_fax varchar(255) DEFAULT '' NOT NULL,
	provider_mobile varchar(255) DEFAULT '' NOT NULL,
	provider_email varchar(255) DEFAULT '' NOT NULL,
	provider_url varchar(255) DEFAULT '' NOT NULL,
	provider_lat varchar(255) DEFAULT '' NOT NULL,
	provider_lng varchar(255) DEFAULT '' NOT NULL,
    provider_generaldistributor tinyint(4) unsigned DEFAULT '0' NOT NULL,
    provider_premiumpartner tinyint(4) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);
