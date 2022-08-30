#
# Add SQL definition of database tables
#
CREATE TABLE tt_content (
    -- Pokemon Element Fields
    selected_pokemon VARCHAR(255) DEFAULT '0' NOT NULL,
    type_pokemon VARCHAR(255) DEFAULT '0' NOT NULL,
    image_pokemon int(11) unsigned DEFAULT '0' NOT NULL,
    -- Inheritance Fields
    mse_list_item int(11) unsigned DEFAULT '0' NOT NULL,
);
CREATE TABLE mse_tb_my_list (
    parent_uid int(11) DEFAULT '0' NOT NULL,
    parent_table varchar(255) DEFAULT '' NOT NULL,
    title varchar(255) DEFAULT '' NOT NULL
);
CREATE TABLE tx_sitepackage_domain_model_product (
    uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    
    name varchar(255) DEFAULT '' NOT NULL,
    description text NOT NULL,
    quantity int(11) DEFAULT '0' NOT NULL,
    
    PRIMARY KEY (uid),
    KEY parent (pid)
);