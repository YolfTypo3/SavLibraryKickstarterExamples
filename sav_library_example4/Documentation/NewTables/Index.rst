.. include:: ../Includes.txt

.. _newTables:
.. role:: red

==========
New Tables
==========

This extension contains the following new tables.

Table: ``tx_savlibraryexample4_cds``
====================================

**Label:** ``CD Collection (Improved)``

Fields
------

**Field:** ``artist``

**Label:** Artist

**Type:** :ref:`String <savlibrarykickstarter:string>`

**Used in:**

- :ref:`ListView List <listView.92691674.82717130.222419149.tx_savlibraryexample4_cds.artist>` 
- :ref:`SingleView Single <singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.artist>` 
- :ref:`EditView Edit <editView.92691674.131916066.14366585.tx_savlibraryexample4_cds.artist>`

**Field:** ``album_title``

**Label:** Title of CD

**Type:** :ref:`String <savlibrarykickstarter:string>`

**Used in:**

- :ref:`ListView List <listView.92691674.82717130.222419149.tx_savlibraryexample4_cds.album_title>` 
- :ref:`SingleView Single <singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.album_title>` 
- :ref:`EditView Edit <editView.92691674.131916066.14366585.tx_savlibraryexample4_cds.album_title>`

**Field:** ``date_of_purchase``

**Label:** When did I buy the CD ?

**Type:** :ref:`Date <savlibrarykickstarter:date>`

**Used in:**

- :ref:`ListView List <listView.92691674.82717130.222419149.tx_savlibraryexample4_cds.date_of_purchase>` 
- :ref:`SingleView Single <singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.date_of_purchase>` 
- :ref:`EditView Edit <editView.92691674.131916066.14366585.tx_savlibraryexample4_cds.date_of_purchase>`

**Field:** ``link_to_website``

**Label:** Does the band have a website ?

**Type:** :ref:`Link <savlibrarykickstarter:link>`

**Used in:**

- :ref:`SingleView Single <singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.link_to_website>` 
- :ref:`EditView Edit <editView.92691674.131916066.14366585.tx_savlibraryexample4_cds.link_to_website>`

**Field:** ``coverimage``

**Label:** Cover image (JPG)

**Type:** :ref:`Files <savlibrarykickstarter:filesAndImages>`

**Used in:**

- :ref:`ListView List <listView.92691674.82717130.222419149.tx_savlibraryexample4_cds.coverimage>` 
- :ref:`SingleView Single <singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.coverimage>` 
- :ref:`EditView Edit <editView.92691674.131916066.14366585.tx_savlibraryexample4_cds.coverimage>`

**Field:** ``category``

**Label:** CD Category

**Type:** :ref:`RelationOneToManyAsSelectorbox <savlibrarykickstarter:relation_1_n>`

**Used in:**

- :ref:`ListView List <listView.92691674.82717130.222419149.tx_savlibraryexample4_cds.category>` 
- :ref:`SingleView Single <singleView.92691674.107716962.14366585.tx_savlibraryexample4_cds.category>` 
- :ref:`EditView Edit <editView.92691674.131916066.14366585.tx_savlibraryexample4_cds.category>`

**Field:** ``description``

**Label:** Description / Band story

**Type:** :ref:`RichTextEditor <savlibrarykickstarter:richTextEditor>`

**Used in:**

- :ref:`SingleView Single <singleView.92691674.107716962.138493032.tx_savlibraryexample4_cds.description>` 
- :ref:`EditView Edit <editView.92691674.131916066.138493032.tx_savlibraryexample4_cds.description>`

**Field:** ``rel_lending``

**Label:** Lendings

**Type:** :ref:`RelationManyToManyAsSubform <savlibrarykickstarter:relation_n_n>`

**Used in:**

- :ref:`SingleView Single <singleView.92691674.107716962.160476280.tx_savlibraryexample4_cds.rel_lending>` 
- :ref:`EditView Edit <editView.92691674.131916066.160476280.tx_savlibraryexample4_cds.rel_lending>`

**Field:** ``rel_friends``

**Label:** Friends

**Type:** :ref:`RelationManyToManyAsSubform <savlibrarykickstarter:relation_n_n>`

**Used in:**

- :ref:`EditView Edit <editView.92691674.131916066.64328801.tx_savlibraryexample4_cds.rel_friends>` 
- :ref:`SingleView Single <singleView.92691674.107716962.64328801.tx_savlibraryexample4_cds.rel_friends>`

Table: ``tx_savlibraryexample4_cat``
====================================

**Label:** ``CD Category (Improved)``

Fields
------

**Field:** ``title``

**Label:** Title of the category

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. warning::
	Field not used in views.

Table: ``tx_savlibraryexample4_lending``
========================================

**Label:** ``CD Lending (Improved)``

Fields
------

**Field:** ``friend_name``

**Label:** Name

**Type:** :ref:`RelationOneToManyAsSelectorbox <savlibrarykickstarter:relation_1_n>`

**Used in:**

- :ref:`SingleView Single <singleView.92691674.107716962.160476280.tx_savlibraryexample4_cds.rel_lending>` 
- :ref:`EditView Edit <editView.92691674.131916066.160476280.tx_savlibraryexample4_cds.rel_lending>`

**Field:** ``lending_date``

**Label:** Lending date

**Type:** :ref:`Date <savlibrarykickstarter:date>`

**Used in:**

- :ref:`SingleView Single <singleView.92691674.107716962.160476280.tx_savlibraryexample4_cds.rel_lending>` 
- :ref:`EditView Edit <editView.92691674.131916066.160476280.tx_savlibraryexample4_cds.rel_lending>`

**Field:** ``return_date``

**Label:** Return date

**Type:** :ref:`Date <savlibrarykickstarter:date>`

**Used in:**

- :ref:`SingleView Single <singleView.92691674.107716962.160476280.tx_savlibraryexample4_cds.rel_lending>` 
- :ref:`EditView Edit <editView.92691674.131916066.160476280.tx_savlibraryexample4_cds.rel_lending>`

Table: ``tx_savlibraryexample4_friends``
========================================

**Label:** ``CD Friends (Improved)``

Fields
------

**Field:** ``friend_name``

**Label:** Name

**Type:** :ref:`String <savlibrarykickstarter:string>`

**Used in:**

- :ref:`EditView Edit <editView.92691674.131916066.64328801.tx_savlibraryexample4_cds.rel_friends>` 
- :ref:`SingleView Single <singleView.92691674.107716962.64328801.tx_savlibraryexample4_cds.rel_friends>`

**Field:** ``friend_phone``

**Label:** Phone

**Type:** :ref:`String <savlibrarykickstarter:string>`

**Used in:**

- :ref:`EditView Edit <editView.92691674.131916066.64328801.tx_savlibraryexample4_cds.rel_friends>` 
- :ref:`SingleView Single <singleView.92691674.107716962.64328801.tx_savlibraryexample4_cds.rel_friends>`

**Field:** ``friend_email``

**Label:** Email

**Type:** :ref:`String <savlibrarykickstarter:string>`

**Used in:**

- :ref:`EditView Edit <editView.92691674.131916066.64328801.tx_savlibraryexample4_cds.rel_friends>` 
- :ref:`SingleView Single <singleView.92691674.107716962.64328801.tx_savlibraryexample4_cds.rel_friends>`

**Field:** ``friend_preferred_music``

**Label:** Preferred music

**Type:** :ref:`RelationManyToManyAsDoubleSelectorbox <savlibrarykickstarter:relation_n_n>`

**Used in:**

- :ref:`EditView Edit <editView.92691674.131916066.64328801.tx_savlibraryexample4_cds.rel_friends>` 
- :ref:`SingleView Single <singleView.92691674.107716962.64328801.tx_savlibraryexample4_cds.rel_friends>`


