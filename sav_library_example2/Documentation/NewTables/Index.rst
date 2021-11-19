.. include:: ../Includes.txt

.. _newTables:
.. role:: red

==========
New Tables
==========

This extension contains the following new tables.

Table: ``tx_savlibraryexample2_cds``
====================================

**Label:** ``CD Collection``

Fields
------

**Field:** ``artist``

**Label:** Artist

**Type:** :ref:`String <savlibrarykickstarter:string>`

**Used in:**

- :ref:`ListView List <listView.92691674.82717130.222419149.tx_savlibraryexample2_cds.artist>` 
- :ref:`SingleView Single <singleView.92691674.107716962.222419149.tx_savlibraryexample2_cds.artist>` 
- :ref:`EditView Edit <editView.92691674.131916066.222419149.tx_savlibraryexample2_cds.artist>`

**Field:** ``album_title``

**Label:** Title of CD

**Type:** :ref:`String <savlibrarykickstarter:string>`

**Used in:**

- :ref:`ListView List <listView.92691674.82717130.222419149.tx_savlibraryexample2_cds.album_title>` 
- :ref:`SingleView Single <singleView.92691674.107716962.222419149.tx_savlibraryexample2_cds.album_title>` 
- :ref:`EditView Edit <editView.92691674.131916066.222419149.tx_savlibraryexample2_cds.album_title>`

**Field:** ``date_of_purchase``

**Label:** When did I buy the CD ?

**Type:** :ref:`Date <savlibrarykickstarter:date>`

**Used in:**

- :ref:`ListView List <listView.92691674.82717130.222419149.tx_savlibraryexample2_cds.date_of_purchase>` 
- :ref:`SingleView Single <singleView.92691674.107716962.222419149.tx_savlibraryexample2_cds.date_of_purchase>` 
- :ref:`EditView Edit <editView.92691674.131916066.222419149.tx_savlibraryexample2_cds.date_of_purchase>`

**Field:** ``link_to_website``

**Label:** Does the band have a website ?

**Type:** :ref:`Link <savlibrarykickstarter:link>`

**Used in:**

- :ref:`SingleView Single <singleView.92691674.107716962.222419149.tx_savlibraryexample2_cds.link_to_website>` 
- :ref:`EditView Edit <editView.92691674.131916066.222419149.tx_savlibraryexample2_cds.link_to_website>`

**Field:** ``coverimage``

**Label:** Cover image (JPG)

**Type:** :ref:`Files <savlibrarykickstarter:filesAndImages>`

**Used in:**

- :ref:`ListView List <listView.92691674.82717130.222419149.tx_savlibraryexample2_cds.coverimage>` 
- :ref:`SingleView Single <singleView.92691674.107716962.222419149.tx_savlibraryexample2_cds.coverimage>` 
- :ref:`EditView Edit <editView.92691674.131916066.222419149.tx_savlibraryexample2_cds.coverimage>`

**Field:** ``category``

**Label:** CD Category

**Type:** :ref:`RelationOneToManyAsSelectorbox <savlibrarykickstarter:relation_1_n>`

**Used in:**

- :ref:`ListView List <listView.92691674.82717130.222419149.tx_savlibraryexample2_cds.category>` 
- :ref:`SingleView Single <singleView.92691674.107716962.222419149.tx_savlibraryexample2_cds.category>` 
- :ref:`EditView Edit <editView.92691674.131916066.222419149.tx_savlibraryexample2_cds.category>`

**Field:** ``description``

**Label:** Description / Band story

**Type:** :ref:`RichTextEditor <savlibrarykickstarter:richTextEditor>`

**Used in:**

- :ref:`SingleView Single <singleView.92691674.107716962.222419149.tx_savlibraryexample2_cds.description>` 
- :ref:`EditView Edit <editView.92691674.131916066.222419149.tx_savlibraryexample2_cds.description>`

Table: ``tx_savlibraryexample2_cat``
====================================

**Label:** ``CD Category``

Fields
------

**Field:** ``title``

**Label:** Title of the category

**Type:** :ref:`String <savlibrarykickstarter:string>`

.. warning::
	Field not used in views.


